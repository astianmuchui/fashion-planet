<?php
    if(isset($_GET['id'])){
        require '../config.php';
        $id = $_GET['id'];
        $query = "DELETE FROM `receivers` where receivers.id = $id";
        $action = mysqli_query($conn,$query);
        if($action){
            header("Location: ./?deleted_succesfully");
        }
    }   
?>