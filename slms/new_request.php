<?php include 'header.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">New Request</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">KUPTM</a></li>
              <li class="breadcrumb-item"><a href="#">Library</a></li>
              <li class="breadcrumb-item active">New Request</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">New Request</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="bookname">Book Name</label>
                    <select id="bookname" class="form-control">
                      <option value="">Search Book Name</option>
                      <?php
                      include 'config/normal.php';
                      $sql = "SELECT * FROM book WHERE statusbook = 'Published'";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              ?>
                              <option value="<?php echo $row['id']; ?>"><?php echo $row['bookname']; ?></option>
                              <?php
                          }
                      }
                      $conn->close();
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" placeholder="Author" readonly>
                  </div>
                  <div class="form-group">
                    <label for="serialnumber">Serial Number</label>
                    <input type="text" class="form-control" id="serialnumber" placeholder="Serial Number" readonly>
                  </div>
                  <div class="form-group">
                    <label for="dateofpublished">Date of Published</label>
                    <input type="text" class="form-control" id="dateofpublished" placeholder="Date of Published" readonly>
                  </div>
                  <div class="form-group">
                    <label for="racknumber">Rack Number</label>
                    <input type="text" class="form-control" id="racknumber" placeholder="Rack Number" readonly>
                  </div>
                  <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" id="quantity" placeholder="Quantity" readonly>
                  </div>
                  <div class="form-group">
                    <label for="quantityloan">Quantity Loan</label>
                    <input type="number" class="form-control" id="quantityloan" placeholder="Quantity Loan" readonly>
                  </div>
                  <div class="form-group">
                    <label for="statusbook">Status Book</label>
                    <input type="text" class="form-control" id="statusbook" placeholder="Status Book" readonly>
                  </div>
                  <div class="form-group">
                    <label for="dateloan">Date Loan</label>
                    <input type="text" class="form-control" id="dateloan" placeholder="Date Loan" value="<?php echo date("d-m-Y"); ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="author">Date Return</label>
                    <input type="text" class="form-control" id="datereturn" placeholder="Date Return" value="<?php  ?>" readonly>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Verify Id.</button>
                  <button type="submit" class="btn btn-primary">Request</button>
                </div>
            </div>
            <!-- /.card -->
          </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php include 'footer.php'; ?>

<script type="text/javascript" src="javascript/newrequest.js"></script>