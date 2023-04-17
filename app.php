<?php 
    //with the help of the .htaccess file, i can do what is called routing
    //routing is a term given to how to redirect a url to something else
    //in here, i call my routes file app, and it would serve as the application body
    //of the system

    //receive the url of the client and begin to break it into pieces
    $url_requested = $_SERVER['REQUEST_URI'];
    $url_len = strlen($url_requested);
    
    //get the actual path the user wants to go to (thus the path in the browser)
    $actual_path = substr($url_requested,strpos($url_requested,'/'),$url_len);

    switch($actual_path){
        case "/": 
            include_once "./paysystem/index.html"; break;
        default:
            echo "requested page not found";
    }
?>