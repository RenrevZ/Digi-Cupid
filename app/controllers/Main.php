<?php
    class Main extends Controller{
        public function __construct()
        {
           if(!ifloggedIn()){
             redirect('forms/login');
           }

           $this->postModel = $this->model('Post');
        }


        public function post(){
            // getting post
            $posts = $this->postModel->getPosts();

            $data = [
                'post' => $posts
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
                $data = [
                    'description' => trim($_POST['post_name']),
                    'user_id' => $_SESSION['user_id']
                ];

                if($this->postModel->getpost($data)){
                    redirect('main/post');
                }else{
                    die('error submiting the file');
                }

                $this->view('main/post',$data);
            }

            $this->view('main/post',$data);
        }

    }