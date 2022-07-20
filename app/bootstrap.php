<?php 

    // load config
    require_once 'config/config.php';
    require_once 'helpers/routes_helper.php';
    require_once 'helpers/popmsghelper.php';
    
    // autoload core libraries
    spl_autoload_register(function ($className){
        require_once 'libraries/'.$className.'.php';
    });