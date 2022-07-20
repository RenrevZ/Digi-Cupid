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
           
            //check if field is empty
          
            if(empty($data['password'])){
                $data['password_err'] = 'please enter a password first';
            }

            if($this->formsModel->ValidateUsername($data['username'])){
                
            }
            else{
                $data['username_err'] = 'user not found';
            }

            if(empty($data['username'])){
                $data['username_err'] = 'please enter username first';
            }
            
            if(empty($data['username_err']) && empty($data['password_err'])){
                // validate the input
                // check the login details
                $loginuser = $this->formsModel->login($data['username'],$data['password']);

                if($loginuser){
                    // create a session
                    $this->userSession($loginuser);
                }else{
                    // throw an error
                    $data['password_err'] = 'incorrect password';
                    $this->view('forms/login',$data);
                }
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

            //check if both password is the same
            if($data['password'] != $data['confirm_pass']){
                $data['confirm_pass_err'] = 'password and current password is not the same';
            }

            if(empty($data['firstname_err']) && empty($data['Lastname_err'])  && empty($data['gender_err']) && empty($data['birthday_err'])
            && empty($data['username_err'])  && empty($data['password_err'])  && empty($data['confirm_pass_err'])){
                
                // hashing the password
                $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);
                header('location:'.URLROOT);
                //REGISTER THE DATA ARRAY
                if($this->formsModel->Register($data)){
                    redirect('forms/login');
                }else{
                    die('error inserting data');
                }
            }

            $this->view('forms/signup',$data);
        }else{
            $data=[
                'title' => 'Sign up'
            ];
                
            $this->view('forms/signup',$data);
        }
       
    }


    public function userSession($user){
        $_SESSION['user_id'] = $user->id;
        $_SESSION['firstname'] = $user->first_name;
        $_SESSION['Lastname'] = $user->last_name;
        $_SESSION['gender'] = $user->gender;
        $_SESSION['birthdate'] = $user->birthdate;
        redirect('main/post');
    }

    public function logout(){
        unset( $_SESSION['user_id']);
        unset( $_SESSION['firstname']);
        unset( $_SESSION['Lastname']);
        unset( $_SESSION['gender']);
        unset( $_SESSION['birthdate']);
        session_destroy();
        redirect('pages/index');
    }

}