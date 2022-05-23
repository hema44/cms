<?php

class dbConnection{

    public function conn(){

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbName="cms";

        // Create connection
        $conn = new mysqli($servername, $username, $password,$dbName);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}

