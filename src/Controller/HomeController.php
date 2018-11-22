<?php

namespace App\Controller;

use Cake\Routing\Router;

class HomeController extends AppController
{

    public function index()
    {
        $this->set('title', 'MITLA Practice Cake PHP 3.6');
        // $this->render('home');
    }
}
