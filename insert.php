<?php 
    include "connect.php";    
    $sql = "INSERT INTO user_item(item_name, item_type, description, item_price, item_image)
            VALUES ('$_POST[item_name]', '$_POST[item_type]', '$_POST[description]', '$_POST[item_price]','$_POST[item_image]'),";
    $query = mysqli_query($connect,$sql);
    header("location: crud.php");
?>