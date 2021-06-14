<?php 
    include "connect.php";
    $id = $_GET['id'];
    $sql = "SELECT * from user_item WHERE id=".$id."";
    $query = mysqli_query($connect,$sql);
    $data = mysqli_fetch_array($query);
    echo json_encode($data);
?>