<?php 
    include "connect.php";
    $id = $_GET['id'];
    $sql = "DELETE from user_item WHERE id='$id'";    
    $query = mysqli_query($connect, $sql);
    header("location: crud.php");
?>
