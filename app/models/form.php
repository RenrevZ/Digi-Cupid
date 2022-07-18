<?php

class form{
    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Validate the already registered email
    public function ValidateUsername($username){
        $this->db->query('SELECT * FROM users WHERE username = :username');
        $this->db->bind(':username',$username);

        $this->db->single();
        if($this->db->rowCount() > 0){
            return true;
            echo 'success';
        }else{
            return false;
        }
    }

    // register the post array
    public function Register($data){

    }
}