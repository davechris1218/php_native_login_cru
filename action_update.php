<?php 
    include "connect.php";    
    $sql = "UPDATE user_item SET item_name='$_POST[item_name]', item_type='$_POST[item_type]', description='$_POST[description]', item_price='$_POST[item_price]', item_image='$_POST[item_image]'
            WHERE id='$_POST[id]'";    
    $query = mysqli_query($connect,$sql);
    header("tes_crud.php");
?>