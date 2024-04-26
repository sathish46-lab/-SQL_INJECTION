<?php


class database{
    public static $conn = null;
    public static function databaseconnect(){
        if(database::$conn == null){
            // Database Details
            $servername = "mysql.selfmade.ninja";
            $username = "sqltest";
            $password = "gighet-koxheG-vimmo1";
            $dbname = "sqltest_products";

        // Create connection
        $connection = new mysqli($servername, $username, $password, $dbname);
        // Check connection
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }
            else{
                database::$conn = $connection;
                return database::$conn;
            }
        }
        else{
            // echo "Already existing connection";
            return database::$conn;
        }
    }
}