<?php
    /*
     * Redirect function helper 
     * e.g location: views/pages/index.php
     */

     function redirect($url){
        header('location:'.URLROOT.'/'.$url);
     }