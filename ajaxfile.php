<?php
$connect = mysqli_connect("localhost", "nagax21", "Fiorenasitalia1234", "native_login_crud");

if ($connect->connect_error) {
     die("Connection failed" . $connect->connect_error);
}

if ($_POST['id']) {
     $id = $_POST['id'];
     $sql = "SELECT * FROM user_item WHERE id = $id";
     $result = $connect->query($sql);
     foreach ($result as $row) { ?>
          <table class="table">
               <tr>
                    <td>Item Name/td>
                    <td>:</td>
                    <td><?php echo $row['item_name']; ?></td>
               </tr>
               <tr>
                    <td>Type</td>
                    <td>:</td>
                    <td><?php echo $row['item_type']; ?></td>
               </tr>
               <tr>
                    <td>Description</td>
                    <td>:</td>
                    <td><?php echo $row['description']; ?></td>
               </tr>
               <tr>
                    <td>Price</td>
                    <td>:</td>
                    <td><?php echo $row['item_price']; ?></td>
               </tr>
               <tr>
                    <td>Image</td>
                    <td>:</td>
                    <td><img src="<?php echo $row['item_image']; ?>" width='50%' height='50%'></td>
               </tr>
          </table>
<?php

     }
}
$connect->close();
?>