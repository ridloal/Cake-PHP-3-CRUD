<?php

namespace App\Controller;

class HomeController extends AppController
{

    public function index()
    {
        $this->set('title', 'MITLA Practice Cake PHP 3.6');
        // $this->render('home');
    }
}
