<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model {

    public function getUser($num, $offset = 0)
    {
        $query = $this -> db -> get('users', $num, $offset);
        return $query -> result_array();
    }

    function addUser($data){
        $this -> db -> insert('users', $data);
    }

    function editUser($data){
        $this -> db -> where('id', '2');
        $this -> db -> update('users', $data);
    }
    function deleteUser(){
        $this -> db -> where('id', '2');
        $this -> db -> delete('users');
    }
}