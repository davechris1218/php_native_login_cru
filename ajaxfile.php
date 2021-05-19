<?php
include "table_join.php";

$userid = 0;
if(isset($_POST['userid'])){
   $userid = mysqli_real_escape_string($con,$_POST['userid']);
}
$sql = "select * from user_item where id=".$userid;
$result = mysqli_query($con,$sql);

$response = "<table border='0' width='100%'>";
while( $row = mysqli_fetch_array($result) ){
 $id = $row['id'];
 $itemName = $row['item_name'];
 $itemType = $row['item_type'];
 $description = $row['description'];
 $itemPrice = $row['item_price'];
 $itemImage = $row['item_image'];
 
 $response .= "<tr>";
 $response .= "<td>Name : </td><td>".$itemName."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Type : </td><td>".$itemType."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Description : </td><td>".$description."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Price : </td><td>".$itemPrice."</td>";
 $response .= "</tr>";

 $response .= "<tr>"; 
 $response .= "<td>Image : </td><td>".$itemImage."</td>"; 
 $response .= "</tr>";

}
$response .= "</table>";

echo $response;
exit;
