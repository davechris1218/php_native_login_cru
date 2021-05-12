<?php
    $db_host = 'localhost';
    $db_user = 'nagax21';
    $db_pass = 'Fiorenasitalia1234';
    $db_name = 'native_login_crud';

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (!$conn) {
        die ('Failed to connect database ' . mysqli_connect_error());	
    }
    
    $sql = 'SELECT * FROM user_item JOIN users ON users.id = user_item.user_id';
            
    $query = mysqli_query($conn, $sql);
    
    if (!$query) {
        die ('SQL Error: ' . mysqli_error($conn));
    }
?>