<?php
	include "connect.php";
	$userId=$_POST['id'];
	$query=mysqli_query($connect,"DELETE FROM user_item WHERE id='$userId'");
	
	
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