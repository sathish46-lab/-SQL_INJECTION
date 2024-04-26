<?php


class database{
    public static $conn = null;
    public static function databaseconnect(){
        if(database::$conn == null){
            // Database Details
            // Fill your Database Details
            $servername = "";
            $username = "";
            $password = "";
            $dbname = "";

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