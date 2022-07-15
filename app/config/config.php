<?php
    /*
     * Defining all constant in the database
     * Data that has been loaded by Database controller-
     * was fetch and coming through here
     */
    // DB Params
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','pims');
    // app root
    define('APPROOT',dirname(dirname(__FILE__)));
    // url root
    define('URLROOT','http://localhost/TravelShare');// insert your localhost url here
    // appname
    define('APPNAME','Travel Share'); // change the root to make other includes work