<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {
        $session = session();
        $user = \App\Models\Student::find(1);

        $data = [
            //"user" => $session->get('alias'),
            "user" => $user,
            "role" => $user->role()
        ];

        echo json_encode($data);
    }
}
