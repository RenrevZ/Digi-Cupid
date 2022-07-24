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
        $this->db->query("INSERT INTO users(first_name,last_name,gender,birthdate,username,password)
                         VALUES(:first_name,:last_name,:gender,:birthdate,:username,:password)");
        $this->db->bind(':first_name',$data['firstname']);
        $this->db->bind(':last_name',$data['Lastname']);
        $this->db->bind(':gender',$data['gender']);
        $this->db->bind(':birthdate',$data['birthday']);
        $this->db->bind(':username',$data['username']);
        $this->db->bind(':password',$data['password']);
        
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function login($username,$password){
        $this->db->query('SELECT * FROM users WHERE username = :username');
        $this->db->bind(':username',$username);
        
        $row = $this->db->single();
        
        $hashed_pass = $row->password; 
        if(password_verify($password, $hashed_pass)){
            return $row;
        }else{
            return false;
        }


    }

    public function viewUserByid($id){
        $this->db->query('SELECT * FROM users WHERE id = :id');
        $this->db->bind(':id',$id);

        $row = $this->db->single();
        
        return $row;
    }
    
}