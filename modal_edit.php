<?php
include "connect.php";
$userId = $_GET['id'];
$modal = mysqli_query($connect, "SELECT * FROM user_item WHERE id='$userId'");
while ($r = mysqli_fetch_array($modal)) {
?>

	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Edit Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<form id="form-update" action="edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">

					<div class="form-group" style="padding-bottom: 20px;">
						<label for="Name">Name</label>
						<input type="hidden" name="id" id="edit-id" class="form-control" value="<?php echo $r['id']; ?>" />
						<input type="text" name="item_name" id="edit-name" class="form-control" value="<?php echo $r['item_name']; ?>" required />
					</div>

					<div class="row form-group" style="padding-bottom: 20px;">
						<div class="col-md-3">
							<label for="Type">Type</label>
							<br>
							<select class="form-select form-select-lg mb-3">
								<option value="Food">Food</option>
								<option value="Drink">Drink</option>
							</select>
						</div>
					</div>

					<div class="form-group" style="padding-bottom: 20px;">
						<label for="Description">Description</label>
						<textarea rows="4" cols="50" name="description" id="edit-description" class="form-control" value="<?php echo $r['description']; ?>" required /> </textarea>
					</div>

					<div class="form-group" style="padding-bottom: 20px;">
						<label for="Price">Price</label>
						<input type="text" name="item_price" id="item-price" class="form-control" value="<?php echo $r['item_price']; ?>" required />
					</div>

					<div class="form-group" style="padding-bottom: 20px;">
						<label for="Image">Image</label>
						<input type="file" name="myImage" accept="image/x-png,image/gif,image/jpeg" value="<?php echo $r['item_image']; ?>" />
					</div>

					<div class="modal-footer">
						<button class="btn btn-success" type="submit">
							Update
						</button>

						<button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">
							Cancel
						</button>
					</div>

				</form>

			<?php } ?>

			</div>

		</div>
	</div>