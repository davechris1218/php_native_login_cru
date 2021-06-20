<?php
require_once("connect.php");

if($_POST['id']){
	$id = $_POST['id'];
	$view = $connect->query("SELECT * FROM user_item WHERE id='$id'");
	if($view->num_rows){
		$row_view = $view->fetch_assoc();
		echo '
		<table class="table table-bordered">
			<tr>
				<th>Item Name</th>
				<td>'.$row_view['item_name'].'</td>
			</tr>
			<tr>
				<th>Type</th>
				<td>'.$row_view['item_type'].'</td>
			</tr>
			<tr>
				<th>Description</th>
				<td>'.$row_view['description'].'</td>
			</tr>
               <tr>
				<th>Price</th>
				<td>'.$row_view['item_price'].'</td>
			</tr>
            <tr>
				<th>Image</th>
				<td><img src='.$row_view['item_image'].'></td>
			</tr>
		</table>
		';
	}
}
?>