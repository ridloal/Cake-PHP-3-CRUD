<?php

namespace App\Controller;

use Cake\Routing\Router;
use Cake\Datasource\ConnectionManager;

class MitlaController extends AppController
{

    public function login()
    {
        $this->set('base_url', Router::url('/', true)); //Define Base URL in controller
        // echo Router::url('/', true);exit;

        if ($this->request->is(['post'])) {
            $formData = $this->request->getData(); 
            
            $id = $formData['id'];
            $password = $formData['password'];

            $this->request->session()->write([
              'check' => '1',
              'id' => $id,
              'password' => $password
            ]);

            if ($id == "username" && $password == "password") {
                return $this->redirect(
                    ['controller' => 'Mitla', 'action' => 'userSettings']
                );
            }

            $this->set('id', $id);   
            $this->set('password', $password);
        }else{
            $this->set('id', '');   
            $this->set('password', '');
        }

        $this->set('title', 'Login - MITLA Practice Cake PHP 3.6');
        // $this->render('home');
    }

    public function userSettings()
    {
        $timestamp = date('Y-m-d H:i:s');
        $data = $this->request->getData();

        if ($this->request->is(['post'])) {
            if ($data['first_name'] == "xxx") {
                $this->set('check', '1');
                $this->set('status', '1');
                $this->set('message', 'Penyimpanan Gagal');
                $this->set('timestamp', $timestamp);
            }else{
                $this->set('check', '1');
                $this->set('status', '0');
                $this->set('message', 'Penyimpanan Berhasil');
                $this->set('timestamp', $timestamp);
            }
        }

        $this->set('title', 'User Settings - MITLA Practice Cake PHP 3.6');
        // $this->render('home');
    }
    public function searchFilm()
    {
        $connection = ConnectionManager::get('default');
        $results = $connection->execute('SELECT * FROM label')->fetchAll('assoc');

        $this->set('genre', $results);

        if ($this->request->is(['post'])) {
            $data = $this->request->getData();

            $searchkey = $data['searchkey'];
            if (!array_key_exists('labelid', $data)) {
                $check_total = 0;
            }else{
                $check_total = count($data['labelid']);
            }

            if ($check_total > 0) {
                $labelid = ($data > 0) ? implode(',', $data['labelid']) : "";
                $hasil_film = $connection->execute("SELECT f.film_id, f.nama AS nama_film, group_concat(l.nama SEPARATOR ', ') AS nama_label FROM label_film RIGHT JOIN film f using(film_id) LEFT JOIN label l using(label_id) WHERE film_id IN(SELECT f.film_id FROM label_film RIGHT JOIN film f using(film_id) LEFT JOIN label l using(label_id) WHERE label_id IN($labelid) GROUP BY film_id HAVING(count(f.film_id) >= $check_total)) AND f.nama LIKE '%$searchkey%' GROUP BY film_id")->fetchAll('assoc');
            }else{
                $hasil_film = $connection->execute("SELECT f.film_id, f.nama AS nama_film, group_concat(l.nama SEPARATOR ', ') AS nama_label FROM label_film RIGHT JOIN film f using(film_id) LEFT JOIN label l using(label_id) WHERE film_id IN(SELECT f.film_id FROM label_film RIGHT JOIN film f using(film_id) LEFT JOIN label l using(label_id) GROUP BY film_id HAVING(count(f.film_id) >= $check_total)) AND f.nama LIKE '%$searchkey%' GROUP BY film_id")->fetchAll('assoc');
            }
            
            $this->set('hasil', $hasil_film);
        }else{
            $this->set('hasil', "");
        }

        $this->set('title', 'Search Film - MITLA Practice Cake PHP 3.6');
        // $this->render('home');
    }

}
