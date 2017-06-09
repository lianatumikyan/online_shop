<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $this -> load -> view('login_view');
    }

    function loginFunc(){
        $config['base_url'] = base_url().'index.php/login/loginFunc/';
        $config['total_rows'] = $this->db->count_all('users');
        $config['per_page'] = '1';
        $this -> pagination -> initialize($config);

        $this -> load -> model('login_model');
        $data['users'] = $this->login_model->getUser($config['per_page'], $this -> uri -> segment(3));
        $this -> load -> view ('users', $data);
    }

    function addUser(){
        $data['firstname'] = 'Lian';
        $data['lastname'] = 'T';
        $data['email'] = 'lthhkjh.mail.ru';
        $data['password'] = '654';
        $data['age'] = '18';
        $this -> load -> model('login_model');
        $this -> login_model -> addUser($data);
    }
    function editUser(){
        $data['firstname'] = 'AA';
        $data['lastname'] = 'M';
        $data['email'] = 'lt.mail.ru';
        $data['password'] = '654';
        $data['age'] = '28';
        $this -> load -> model('login_model');
        $this -> login_model -> editUser($data);
    }

    function deleteUser(){
        $this -> load -> model('login_model');
        $this -> login_model -> deleteUser();
    }
}
