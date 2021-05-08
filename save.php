<?php
    include "connect.php";
    $itemName = $_POST['item_name'];
    $itemType = $_POST['item_type'];
    $description = $_POST['description'];
    $itemPrice = $_POST['item_price'];
    $itemImage = $_POST['item_image'];
    
    $query = mysqli_query($connect,"INSERT INTO user_item (item_name, item_type, description, item_price, item_image) VALUES ('$itemName', '$itemType', '$description', '$itemPrice', '$itemImage')");

    if($query)
    {
        header('Content-Type: application/json');
        $content = file_get_contents('http://localhost/php_native_login_crud/ajax_data.php', true);
        $data = array('status'=>'success', 'data'=> $content);
        echo json_encode($data);
    }
    else
    {
        $data = array('status'=>'failed', 'data'=> null);
        echo json_encode($data);
    }
