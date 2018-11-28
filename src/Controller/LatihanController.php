<?php

namespace App\Controller;

use Cake\Routing\Router;
use Cake\Datasource\ConnectionManager;

class LatihanController extends AppController
{

    public function session()
    {
        
        if ($this->request->is(['post'])) {
            $data = $this->request->getData();

            $nama = $data['nama'];
            $username = $data['username'];

            $session = $this->request->session();

            $session->write([
              'nama' => $nama,
              'username' => $username
            ]);

        }

        $this->set('title', 'Session Manager - MITLA Practice Cake PHP 3.6');

        $this->viewBuilder()->layout('custom'); // definisi custom layout di folder layout
        // $this->render('home');
    }

    public function sessionDestroy()
    {
        
        $session = $this->request->session();
                
        if ($session->check('nama') || $session->check('username')) {

            $session->destroy();
        }

        return $this->redirect(
            ['controller' => 'Latihan', 'action' => 'session']
        );
    }

}
