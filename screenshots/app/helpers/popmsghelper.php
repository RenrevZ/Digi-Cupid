<?php
    session_start();

    function setData(){
        echo '<div class="flex md:ml-60 mt-5 w-96  p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert" id="loginalert">
        <svg aria-hidden="true" class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Info</span>
        <div>
            <span class="font-medium">Success!</span> you can now login
        </div>
        </div>';
    }

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