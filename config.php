<?php
    function db() {
        $connexion = null;
        $host = 'localhost';
        $db_name = 'ecommerce';
        $username = 'root';
        $password = 'root';
        try{
            $connexion = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
            $connexion->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $connexion;
    }
?>