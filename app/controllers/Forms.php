<?php
    /*
     * Login and signup forms validation
     */

class Forms extends Controller{
    public function __construct()
    {
        
    }

    public function login(){
        $data=[
            'title' => 'Login'
        ];
            
        $this->view('forms/login',$data);
    }
}