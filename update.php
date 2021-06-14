<div class="modal modal-update" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_update" method="POST" action="action_update.php">
                    <div class="form-group">
                        <label for="item_name">Item Name</label>
                        <input type="text" class="form-control" name="item_name" id="item_name">
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label for="item_type">Type</label>
                            <br>
                            <select class="form-select form-select-lg mb-3" name="item_type">
                                <option value="Food">Food</option>
                                <option value="Drink">Drink</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">Description</label>
                        <textarea class="form-control" name="description" id="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="item_price">Price</label>
                        <input type="text" class="form-control" name="item_price" id="item_price">
                    </div>
                    <div class="form-group" style="padding-bottom: 20px;">
                        <label for="Image">Image</label>
                        <input type="file" name="item_image" id="item_image" accept="image/x-png,image/gif,image/jpeg" />
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id" id="id">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>