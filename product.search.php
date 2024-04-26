<?php 

//Including the file get the database connection.
include 'database.class.php';

class product{
    public static function productsearch($product){
        $conn = database::databaseconnect();
        $sql = "SELECT * FROM `products` WHERE `product_type` = '$product'";
        $result = $conn->query($sql);
        if($result->num_rows >= 1){
            $row = $result->fetch_assoc();
                return $row;
            }else{
                return false;
            }
        }
    }