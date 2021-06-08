<?php
include "connect.php";
$x = 0;
$modal = mysqli_query($connect, "SELECT * FROM FROM user_item AS a INNER JOIN users AS i ON a.id = i.id");
while ($r = mysqli_fetch_array($modal)) {
  $x++;
?>
  <tr>
    <td><?php echo $x; ?></td>
    <td><?php echo $r['item_name']; ?></td>
    <td><?php echo $r['item_type']; ?></td>
    <td><?php echo $r['description']; ?></td>
    <td><?php echo $r['item_price']; ?></td>
    <td><?php echo $r['item_image']; ?></td>

    <td>
      <a href="javascript:void(0)" class='open_modal' id='<?php echo  $r['id']; ?>'>Edit</a>
      <a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $r['id']; ?>'>Delete</a>
    </td>
  </tr>
<?php } ?>