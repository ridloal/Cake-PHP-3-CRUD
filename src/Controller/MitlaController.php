<?php

namespace App\Controller;

class MitlaController extends AppController
{

    public function login()
    {
        $this->set('title', 'Login - MITLA Practice Cake PHP 3.6');
        // $this->render('home');
    }
    public function userSettings()
    {
        $this->set('title', 'User Settings - MITLA Practice Cake PHP 3.6');
        // $this->render('home');
    }
    public function searchFilm()
    {
        $this->set('title', 'Search Film - MITLA Practice Cake PHP 3.6');
        // $this->render('home');
    }
}
