<?php
    include "connect.php";
    $itemName = $_POST['item_name'];
    $itemType = $_POST['item_type'];
    $description = $_POST['description'];
    $itemPrice = $_POST['item_price'];
    
    $query = mysqli_query($connect,"INSERT INTO user_item (item_name, item_type, description, item_price, item_image) VALUES ('$itemName', '$itemType', '$description', '$itemPrice', '$image')");

    if(isset($_POST['upload'])){
        $image = $_FILES['item_image']['item_image'];
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES['item_name'] ['item_name']);

        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $extensions_arr = array("jpg","jpeg","png","gif");

        if( in_array($imageFileType,$extensions_arr) ){
            
            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$image)){
               
                $query = mysqli_query($connect,"INSERT INTO user_item (item_name, item_type, description, item_price, item_image) VALUES ('$itemName', '$itemType', '$description', '$itemPrice', '$image')");
            }
       
        }
        
    }

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
?>