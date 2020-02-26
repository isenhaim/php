<?php
session_start();
    function db_connect(){
        $db_host = "localhost"; 
        $db_user = "mysql"; 
        $db_password = "mysql";
        $db_base = 'project_php';
        $mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);
        
        return $mysqli;
    }
?>