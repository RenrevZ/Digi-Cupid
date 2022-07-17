<?php
    /*
     * Login and signup forms validation
     */

class Forms extends Controller{
    public function __construct()
    {
        
    }

    public function login(){

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
        }else{
            $data=[
                'title' => 'Login'
            ];
                
            $this->view('forms/login',$data);
        }
       
    }
    public function signup(){

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
        }else{
            $data=[
                'title' => 'Sign Up'
            ];
                
            $this->view('forms/signup',$data);
        }
       
    }
}