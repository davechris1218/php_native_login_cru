<?php
    $db_host = 'localhost';
    $db_user = 'nagax21';
    $db_pass = 'Fiorenasitalia1234';
    $db_name = 'native_login_crud';

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (!$conn) {
        die ('Failed to connect database ' . mysqli_connect_error());	
    }
    
    $sql = 'SELECT id, item_name, item_type, description, item_price, item_image
            FROM user_item';
            
    $query = mysqli_query($conn, $sql);
    
    if (!$query) {
        die ('SQL Error: ' . mysqli_error($conn));
    }
?>