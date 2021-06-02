<?php
include "table_join.php";

if ($_POST['userid']) {
     $id = $_POST['userid'];
     $sql = mysqli_query($conn, "SELECT * from user_item where id='$id'");
     while ($row = mysqli_fetch_array($sql)) {
?>

          <form method="post">
               <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Item Name</label>
                    <div class="col-sm-8">
                         <input type="text" class="form-control" value="<?php echo $row['item_name']; ?>" name="item_name">
                    </div>
               </div>
               <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Type</label>
                    <div class="col-sm-8">
                         <input type="text" class="form-control" value="<?php echo $row['item_type']; ?>" name="item_type">
                    </div>
               </div>
               <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Description</label>
                    <div class="col-sm-8">
                         <input type="text" class="form-control" value="<?php echo $row['description']; ?>" name="description">
                    </div>
               </div>
               <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Price</label>
                    <div class="col-sm-8">
                         <input type="text" class="form-control" value="<?php echo $row['item_price']; ?>" name="item_price">
                    </div>
               </div>
               <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Image</label>
                    <div class="col-sm-8">
                         <input type="text" class="form-control" value="<?php echo $row['item_image']; ?>" name="item_image">
                    </div>
               </div>
               <div class="modal-footer">
                    <button class="btn btn-danger pull-left" data-dismiss="modal">Close</a></button>
               </div>
          </form>
<?php }
}
?>