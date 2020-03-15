<!-- The Modal -->
<div class="modal fade" id="ModalUserManagement">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">User Management</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form role="form" id="usermanagementform">
                <div class="row">
                    <div class="col-6">
                          <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                          </div>
                          <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                          </div>
                          <div class="form-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Full Name">
                          </div>
                          <div class="form-group">
                            <label for="identitycard">Identity Card</label>
                            <input type="number" name="identitycard" class="form-control" id="identitycard" placeholder="Identity Card">
                          </div>
                    </div>
                    <div class="col-6">
                          <div class="form-group">
                            <label>Gender</label>
                            <select class="form-control" name="gender" id="gender">
                              <option value="">Select Gender</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Title</label>
                            <select class="form-control" name="title" id="title">
                              <option value="">Select Title</option>
                              <option value="Admin">Admin</option>
                              <option value="Staff">Staff</option>
                              <option value="Student">Student</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Privilege</label>
                            <select class="form-control" name="privilege" id="privilege">
                              <option value="">Select Privilege</option>
                              <option value="Admin">Admin</option>
                              <option value="Staff">Staff</option>
                              <option value="Student">Student</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status" id="status">
                              <option value="">Select Status</option>
                              <option value="Active">Active</option>
                              <option value="Non-Active">Non-Active</option>
                            </select>
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                       <div class="form-group">
                          <label for="fingerprintid">Fingerprint Id.</label>
                          <input type="text" name="fingerprintid" class="form-control" id="fingerprintid" placeholder="Fingerprint ID">
                       </div>
                    </div>
                </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Verify Fingerprint Id.</button>
                <button type="submit" class="btn btn-success">Create</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>