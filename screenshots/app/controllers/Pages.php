<?php

class Pages extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {

        $data = [
            'title' => 'Digi Cupid',
            'subtitle' => 'A experience that is worth sharing, Meet others people,discover new friends and share your new experience
            through your stories'
        ];

        $this->view('pages/index',$data);
    }

    public function about(){
        $data = [
            'title' => 'About Digi Cupid',
            'subtitle' => ' Digi Cupid was a simple social networking site that was build to connect
            people and share their experience and journey, This helps other to inspire and motivate people
            to connect again with mother nature and make a new discoveries upon themselves and helps them
            set their new goal destination and see the beauty of the life and the world'
        ];
        $this->view('pages/about',$data);
    }
}