<?php
	include "connect.php";
	$userId = $_POST['id'];
	$itemName = $_POST['item_name'];
    $itemType = $_POST['item_type'];
    $description = $_POST['description'];
    $itemPrice = $_POST['item_price'];
    $itemImage = $_POST['item_image'];
	$query=mysqli_query($connect,"UPDATE user_item SET item_name = '$itemName', item_type = '$itemType', description = '$description', item_price = '$itemPrice', item_image = '$itemImage' WHERE id = '$userId'");
	
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