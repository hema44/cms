<?php
include "dbConnection.php";
class usersDb extends dbConnection {

public function getUser($id){
    $connection = $this->conn();
    $sql = "SELECT * FROM users where id = ".$id;
    $result = $connection->query($sql);
    return  $result->fetch_assoc();
}

//public function addUser($data){
//    $connection = $this->conn();
//    $sql = "";
//    $result = $connection->query($sql);
//    return  $result->fetch_assoc();
//}
//public function editUser($data,$id){
//    $connection = $this->conn();
//    $sql = "";
//    $result = $connection->query($sql);
//    return  $result->fetch_assoc();
//}
}



