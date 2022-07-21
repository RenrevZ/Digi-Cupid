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

                function randomData($n){
                    $characters = '0123456789abcdefghijklmnopqrstuvwxyz
                    ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $str= '';
                    for($i = 0; $i < $n; $i++){
                        $index = rand(0,strlen($characters) -1);
                        $str .=$characters[$index];
                    }
    
                    return $str;
                }
                
                if(!is_dir('images')){
                    mkdir('images');
                }
    
                $image = $_FILES['image'] ?? null;
                $imagePath = '';
                if($image){
                    $imagePath = 'images/'.randomData(8).'/'.$image['name'];
                    mkdir(dirname($imagePath));
                    move_uploaded_file($image['tmp_name'],$imagePath);
                }
    
                $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
                $data = [
                    'description' => trim($_POST['post_name']),
                    'user_id' => $_SESSION['user_id'],
                    'images' => $imagePath
                ];

                

                if($this->postModel->Insertpost($data)){
                    
                    redirect('main/post');
                }else{
                    die('error submiting the file');
                }

                $this->view('main/post',$data);
            }

            $this->view('main/post',$data);
        }

    }