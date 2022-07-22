<?php
    session_start();

    if(isset($_SESSION['success'])){
        $success = $_SESSION['success'];
           ?>
           <?php
            echo "<script>
                    Swal.fire(
                   'Success!',
                   '$success',
                    'success'
                    )
                   </script>";
                   unset($_SESSION['success']);
               ?>
               <?php 
       }

    function ifloggedIn(){
        if(isset($_SESSION['user_id'])){
            return true;
        }else{
            return false;
        }
    }