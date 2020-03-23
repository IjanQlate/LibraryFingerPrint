<!-- The Modal -->
<div class="modal fade" id="ModalBook">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Book Management</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form role="form" id="usermanagementform">
                <div class="row">
                    <div class="col-6">
                          <div class="form-group">
                            <label for="BookName">Book Name</label>
                            <input type="text" name="BookName" class="form-control" id="BookName" placeholder="Book Name">
                          </div>
                          <div class="form-group">
                            <label for="Author">Author</label>
                            <input type="text" name="Author" class="form-control" id="Author" placeholder="Author">
                          </div>
                          <div class="form-group">
                            <label for="serialnumber">Serial Number</label>
                            <input type="text" name="serialnumber" class="form-control" id="serialnumber" placeholder="Serial Number">
                          </div>
                          <div class="form-group">
                            <label for="Published">Published</label>
                            <input type="text" name="Published" class="form-control" id="Published" placeholder="Published">
                          </div>
                          <div class="form-group">
                            <label for="racknumber">Rack Number</label>
                            <input type="text" name="racknumber" class="form-control" id="racknumber" placeholder="Rack Number">
                          </div>
                    </div>
                    <div class="col-6">
                          <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="quantity" class="form-control" id="quantity" value="1" placeholder="Quantity">
                          </div>
                          <div class="form-group">
                            <label for="quantityloan">Quantity Loan</label>
                            <input type="number" name="quantityloan" class="form-control" id="quantityloan" value="0" readonly placeholder="Quantity Loan">
                          </div>
                          <div class="form-group">
                            <label for="statusbook">Status Book</label>
                            <select class="form-control" name="statusbook" id="statusbook">
                              <option value="">Select Status Book</option>
                              <option value="Published">Published</option>
                              <option value="Out Of Stock">Out Of Stock</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="updateby">Update By</label>
                            <input type="text" name="updateby" class="form-control" id="updateby" value="<?php error_reporting(0); session_start(); echo $_SESSION['fullname']; ?>" placeholder="Update By" readonly>
                          </div>
                          <div class="form-group">
                            <label for="lastupdate">Last Update</label>
                            <input type="text" name="lastupdate" value="<?php echo date('Y-m-d H:m:s'); ?>" class="form-control" id="lastupdate" placeholder="Last Update" readonly>
                          </div>
                          <div class="form-group" hidden>
                            <label for="function">Function</label>
                            <input type="text" name="function" class="form-control" id="function" placeholder="Function" readonly>
                          </div>
                    </div>
                </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" id="BtnBook"></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>