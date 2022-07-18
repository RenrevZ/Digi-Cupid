<?php
    /*
     * Login and signup forms validation
     */

class Forms extends Controller{
    public function __construct()
    {
        $this->formsModel = $this->model('form');
    }

    public function login(){

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $data =[
                'username' => trim($_POST['username']),
                'password' => trim($_POST['login_password']),
                'password_err' => '',
                'username_err' => ''
                ];
            filter_input_array(INPUT_POST, $data);
           
            //chech if field is empty
            if(empty($data['username'])){
                $data['username_err'] = 'please enter username first';
            }else{
                if($this->formsModel->ValidateUsername($data['username'])){
                    $data['username_err'] = 'username already taken';
                }
            }


            if(empty($data['password'])){
                $data['password_err'] = 'please enter a password first';
            }

            $this->view('forms/login',$data);
        }else{
            $data=[
                'title' => 'Login'
            ];
                
            $this->view('forms/login',$data);
        }
       
    }


    public function signup(){

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $data =[
                'firstname' => trim($_POST['firstname']),
                'Lastname' => trim($_POST['Last_Name']),
                'gender' => trim($_POST['gender']),
                'birthday' => trim($_POST['birthday']),
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'confirm_pass' => trim($_POST['repeat_password']),
                'firstname_err' => '',
                'Lastname_err' => '',
                'gender_err' => '',
                'birthday_err' => '',
                'password_err' => '',
                'confirm_pass_err' => '',
                'username_err' => ''
                ];
            filter_input_array(INPUT_POST, $data);
           
            //check if field is empty
            if(empty($data['firstname'])){
                $data['firstname_err'] = 'please enter firstname first';
            }
            if(empty($data['Lastname'])){
                $data['Lastname_err'] = 'please enter Last Name first';
            }
            if(empty($data['gender'])){
                $data['gender_err'] = 'please enter gender first';
            }

            if(empty($data['birthday'])){
                $data['birthday_err'] = 'please enter Birthday first';
            }

            if(empty($data['username'])){
                $data['username_err'] = 'please enter username first';
            }else{
                if($this->formsModel->ValidateUsername($data['username'])){
                    $data['username_err'] = 'username already taken';
                }
            }


            if(empty($data['password'])){
                $data['password_err'] = 'please enter a password first';
            }


            if(empty($data['confirm_pass'])){
                $data['confirm_pass_err'] = 'please enter a Confirm password first';
            }

            $this->view('forms/signup',$data);
        }else{
            $data=[
                'title' => 'Sign up'
            ];
                
            $this->view('forms/signup',$data);
        }
       
    }
}