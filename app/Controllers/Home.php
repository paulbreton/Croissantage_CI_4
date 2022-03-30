<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {
        $session = session();
        $data = [
            "user" => $session->get('alias')
        ];

        echo view('home', $data);
    }
}
