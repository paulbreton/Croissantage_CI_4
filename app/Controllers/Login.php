<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Student;

class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('login');
    }

    public function auth()
    {
        $session = session();
        $model = new Student();

        $alias = $this->request->getVar('alias');
        $pwd = $this->request->getVar('pwd');
        $data = $model->where('alias', $alias)->first();

        if ($data) {
            $pass = $data['pwd'];
            $verify_pass = password_verify($pwd, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'alias' => $data['alias'],
                    'login' => $data['loggin'],
                    'logged_in' => TRUE,
                ];
                $session->set($ses_data);
                return redirect()->to('/');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('login');
            }
        } else {
            $session->setFlashdata('msg', 'Alias not Found');
            return redirect()->to('login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}