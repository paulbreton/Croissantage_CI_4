<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Student;

class Register extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }

    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'alias'          => 'required|min_length[3]|max_length[20]',
            'login'          => 'required|min_length[3]|max_length[20]',
            'pwd'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[pwd]'
        ];

        if($this->validate($rules)){
            $model = new Student();
            $data = [
                'alias'     => $this->request->getVar('alias'),
                'login'     => $this->request->getVar('login'),
                'pwd' => password_hash($this->request->getVar('pwd'), PASSWORD_DEFAULT)
            ];

            $model->insert([
                'alias' => $data['alias'],
                'login' => $data['login'],
                'pwd' => $data['pwd']
            ]);

            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }

    }

}