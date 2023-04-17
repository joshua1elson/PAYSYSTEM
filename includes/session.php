<?php 
    //created a functions file. am adding it to this file so it becomes usable
    //in any file which the session.php is called or included
    include_once "functions.php";

    //this file will be used to handle database connection and general variables
    //which would be used throughout the program
    $host = "localhost";    //the name of the server
    $hostname = "root";     //the name of the server username
    $hostpassword = "";     //the password for the server username'
    $db = "paysystem";      //the database for the system

    try {
        //creating an sql connection
        $connection = new mysqli($host, $hostname, $hostpassword, $db);

        //creating a default root path for finding php documents
        //this will help in getting local files directly, and from any location
        $rootPath = $_SERVER["DOCUMENT_ROOT"];

        //creating a default url for folder files
        //grabbing protocol (whether the server is https or http)
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== "off" || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        //the code above is making use of the inline if-else statement
        //its useful for very simple if-else statments in any programming language

        //adding the domain name
        $domain_name = $_SERVER['HTTP_HOST'];

        //this variable will provide a full link-like preamble for us
        $url = $protocol.$domain_name;
        
        //since the admin and user sides are not in the same directory, would be creating
        //variables to hold directory paths to them
        $adminRoot = "$rootPath/pay-admin";
        $adminUrl = "$url/pay-admin";
        $sysRoot = "$rootPath/paysystem";
        $sysUrl = "$url/paysystem";

        //start a session
        if(!session_start())
            session_start();

        date_default_timezone_set("Africa/Accra");
    } catch (\Throwable $th) {
        //catch the error and show only the error message
        echo $th->getMessage();

        //in this block, i can manipulate how an error message is displayed in my
        //own way. I will be adding an error code to the end of the error message
        echo "<br><br>Error code returned: ".$th->getCode();
    }
    
?>