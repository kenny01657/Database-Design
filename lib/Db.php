<?php 

class Db {

    private $conn;

    function getConnection() {
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "FlowerPower";
        try {
            $this->conn = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            // echo "Connection succesful";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $this->conn;
    }
}