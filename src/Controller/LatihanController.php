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

    public function crudView()
    {
        
        $connection = ConnectionManager::get('default');
        $results = $connection->execute("SELECT f.film_id, f.nama AS nama_film, group_concat(l.nama SEPARATOR ', ') AS nama_label FROM label_film RIGHT JOIN film f using(film_id) LEFT JOIN label l using(label_id) WHERE film_id IN(SELECT f.film_id FROM label_film RIGHT JOIN film f using(film_id) LEFT JOIN label l using(label_id) GROUP BY film_id) GROUP BY film_id")->fetchAll('assoc');

        $this->set('film_all', $results);

        $this->set('title', 'Create, Read, Update, Delete - MITLA Practice Cake PHP 3.6');

        $this->viewBuilder()->layout('custom'); // definisi custom layout di folder layout
        // $this->render('home');
    }

    public function crudCreate()
    {
        
        $connection = ConnectionManager::get('default');
        $results = $connection->execute("SELECT * FROM label")->fetchAll('assoc');

        $this->set('genre', $results);

        $this->set('title', 'Tambah Data - MITLA Practice Cake PHP 3.6');

        $this->viewBuilder()->layout('custom'); // definisi custom layout di folder layout
        // $this->render('home');
    }

    public function crudAdd()
    {
        
        $connection = ConnectionManager::get('default');

        if ($this->request->is(['post'])) {
            $data = $this->request->getData();

            $judul = $data['judul'];

            $connection->insert('film', [
                'nama' => $judul
            ]);

            $lastid = $connection->execute("SELECT * FROM film order by film_id desc limit 1")->fetchAll('assoc');
            foreach ($lastid as $film) {
            }

            // print_r(count($data['labelid']));exit;

            for ($i=0; $i < count($data['labelid']) ; $i++) { 

                $dt = $data['labelid'][$i];

                $connection->insert('label_film', [
                    'label_id' => $dt,
                    'film_id' => $film['film_id'],
                ]);
            }
        }else{
            return $this->redirect(
                ['controller' => 'Latihan', 'action' => 'crudCreate']
            );
        }

        return $this->redirect(
            ['controller' => 'Latihan', 'action' => 'crudView']
        );

    }

    public function crudEdit($film_id)
    {
        
        $connection = ConnectionManager::get('default');
        $film = $connection->execute("SELECT * FROM film WHERE film_id = $film_id")->fetch('assoc');
        $genre = $connection->execute("SELECT * FROM label_film JOIN label USING(label_id) WHERE film_id = $film_id")->fetchAll('assoc');
        $results = $connection->execute("SELECT * FROM label")->fetchAll('assoc');

        $this->set('genre', $results);
        // print_r($film);exit;

        $this->set('film', $film);
        $this->set('genre_aktif', $genre);

        $this->set('title', 'Edit Data - MITLA Practice Cake PHP 3.6');

        $this->viewBuilder()->layout('custom'); // definisi custom layout di folder layout
        // $this->render('home');
    }



    public function crudDelete($id)
    {
        
        $connection = ConnectionManager::get('default');

        $connection->delete('film', ['film_id' => $id]);
        $connection->delete('label_film', ['film_id' => $id]);

        return $this->redirect(
            ['controller' => 'Latihan', 'action' => 'crudView']
        );

    }

    public function crudUpdate($id)
    {
        
        $connection = ConnectionManager::get('default');

        if ($this->request->is(['post'])) {
            $data = $this->request->getData();

            $judul = $data['judul'];
            
            // print_r(count($data['labelid']));exit;

            $connection->update('film', ['nama' => $judul], ['film_id' => $id]);

            $connection->delete('label_film', ['film_id' => $id]);

            for ($i=0; $i < count($data['labelid']) ; $i++) { 

                $dt = $data['labelid'][$i];

                $connection->insert('label_film', [
                    'label_id' => $dt,
                    'film_id' => $id,
                ]);
            }
        }else{
            return $this->redirect(
                ['controller' => 'Latihan', 'action' => 'crudCreate']
            );
        }

        return $this->redirect(
            ['controller' => 'Latihan', 'action' => 'crudView']
        );

    }

}
