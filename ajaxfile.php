<?php
include "table_join.php";

$userid = 0;
if(isset($_GET['userid'])){
   $userid = mysqli_real_escape_string($conn,$_GET['userid']);
}
$sql = "select * from user_item where id=".$userid;
$result = mysqli_query($conn,$sql);

$response = "<table border='0' width='100%'>";
while( $row = mysqli_fetch_array($result) ){
   $response .= '  
   <tr>  
        <td width="30%"><label>Name</label></td>  
        <td width="70%">'.$row["item_name"].'</td>  
   </tr>  
   <tr>  
        <td width="30%"><label>Type</label></td>  
        <td width="70%">'.$row["item_type"].'</td>  
   </tr>  
   <tr>  
        <td width="30%"><label>Description</label></td>  
        <td width="70%">'.$row["description"].'</td>  
   </tr>  
   <tr>  
        <td width="30%"><label>Price</label></td>  
        <td width="70%">'.$row["item_price"].'</td>  
   </tr>  
   <tr>  
        <td width="30%"><label>Image</label></td>  
        <td width="70%">'.$row["item_image"].' Year</td>  
   </tr>  
   ';
$response .= "</table>";  
      echo $response;  
 }
