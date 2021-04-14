<?php
    include "connect.php";
    $itemName = $_POST['item_name'];
    $description = $_POST['description'];
    $query = mysqli_query($connect,"INSERT INTO user_item (modal_name,description) VALUES ('$itemName','$description')");

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
