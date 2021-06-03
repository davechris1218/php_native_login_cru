<?php
if (isset($_POST['userid'])) {
     $output = '';
     $connect = mysqli_connect("localhost", "nagax21", "Fiorenasitalia1234", "native_login_crud");
     $query = "SELECT * FROM user_item WHERE id = '" . $_POST["userid"] . "'";
     $result = mysqli_query($connect, $query);
     $output .= '  
     <div class="table-responsive">  
          <table class="table table-bordered">';
     while ($row = mysqli_fetch_array($result)) {
          $output .= '

           <tr>  
           <td width="30%"><label>Name</label></td>  
           <td width="70%">' . $row["item_name"] . '</td>  
      </tr>  
      <tr>  
           <td width="30%"><label>Type</label></td>  
           <td width="70%">' . $row["item_type"] . '</td>  
      </tr>  
      <tr>  
           <td width="30%"><label>Description</label></td>  
           <td width="70%">' . $row["description"] . '</td>  
      </tr>  
      <tr>  
           <td width="30%"><label>Price</label></td>  
           <td width="70%">' . $row["item_price"] . '</td>  
      </tr>  
      <tr>  
           <td width="30%"><label>Image</label></td>  
           <td width="70%">' . $row["item_image"] . ' Year</td>  
      </tr>  
      ';
     }
     $output .= "</table></div>";
     echo $output;
}
