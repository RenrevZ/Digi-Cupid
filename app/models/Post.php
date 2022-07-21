<?php

class Post{
     private $db;

     public function __construct()
     {
        $this->db = new Database;
     }

     public function Insertpost($data){
         $this->db->query("INSERT INTO post(userid,description) 
                           VALUES(:userid,:description)");
         $this->db->bind(':userid',$data['user_id']);
         $this->db->bind(':description',$data['description']);
         if($this->db->execute()){
            return true;
         }else{
            return false;
         };
     }

     public function getPosts(){
        $this->db->query('SELECT *,
                           post.id as postID,
                           users.id as userId 
                           FROM post
                           INNER JOIN users
                           ON post.userid = users.id
                           ORDER BY post.created_at DESC');

        $results = $this->db->resultSet();

        return $results;
     }
}