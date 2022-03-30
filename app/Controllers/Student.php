<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Student extends Controller
{
    public function index() {
        $student = \App\Models\Student::all();
        echo $student;
    }
}