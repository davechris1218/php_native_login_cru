<?php
    include "connect.php";
    $sql = "SELECT * FROM user_item ORDER BY id ASC";
    $query = mysqli_query($connect, $sql);
    $x = 1;
    while ($row = mysqli_fetch_assoc($query)){
        echo'<tr>
                <td>'.$x++.'</td>
                <td>'.$row['item_name'].'</td>
                <td>'.$row['item_type'].'</td>
                <td>'.$row['description'].'</td>
                <td>'.$row['item_price'].'</td>
                <td>'.$row['item_image'].'</td>
                <td>
                    <button type="button" class="btn btn-sm btn-info edit" data-id="'.$row['id'].'">Edit</button>
                    <button type="button" class="btn btn-sm btn-danger delete" data-id="'.$row['id'].'">Delete</button>
                </td>
            </tr>';
    }
?>