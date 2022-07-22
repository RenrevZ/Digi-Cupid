<?php

class Post{
     private $db;

     public function __construct()
     {
        $this->db = new Database;
     }

     public function Insertpost($data){
         $this->db->query("INSERT INTO post(userid,description,image) 
                           VALUES(:userid,:description,:image)");
         $this->db->bind(':userid',$data['user_id']);
         $this->db->bind(':description',$data['description']);
         $this->db->bind(':image',$data['images']);
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

     public function viewPostsByid($id){
         $this->db->query('SELECT * FROM post WHERE id = :id');
         $this->db->bind(':id',$id);

         $row = $this->db->single();
         return $row;
     }

     public function updatepost($data){
       $this->db->query('UPDATE post SET description = :description WHERE
       id = :id');
        $this->db->bind(':id',$data['id']);
        $this->db->bind(':description',$data['description']);
        
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
     }
     
     public function deletepost($id){
       $this->db->query('DELETE FROM post WHERE id = :id');
        $this->db->bind(':id',$id);
        
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
     }
}