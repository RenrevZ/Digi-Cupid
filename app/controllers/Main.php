<?php
    class Main extends Controller{
        public function __construct()
        {
            
        }


        public function post(){
            $this->view('main/post');
        }
    }