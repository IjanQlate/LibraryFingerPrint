<?php include 'header.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Return</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">KUPTM</a></li>
              <li class="breadcrumb-item"><a href="#">Library</a></li>
              <li class="breadcrumb-item active">Return</li>
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
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Return</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="bookname">Book Name</label>
                    <input type="text" class="form-control" id="bookname" placeholder="Find Book Name">
                  </div>
                  <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" placeholder="Author" readonly>
                  </div>
                  <div class="form-group">
                    <label for="author">Serial Number</label>
                    <input type="text" class="form-control" id="author" placeholder="Serial Number" readonly>
                  </div>
                  <div class="form-group">
                    <label for="author">Date of Published</label>
                    <input type="date" class="form-control" id="author" placeholder="Date of Published" readonly>
                  </div>
                  <div class="form-group">
                    <label for="author">Rack Number</label>
                    <input type="text" class="form-control" id="author" placeholder="Rack Number" readonly>
                  </div>
                  <div class="form-group">
                    <label for="author">Date Return</label>
                    <input type="date" class="form-control" id="author" placeholder="Date Loan" readonly>
                  </div>
                  <div class="form-group">
                    <label for="author">Aging</label>
                    <input type="number" class="form-control" id="author" placeholder="Aging" readonly>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Verify Id.</button>
                  <button type="submit" class="btn btn-primary">Extend</button>
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

<script type="text/javascript">
$(function () {
    //Initialize Select2 Elements
    $('#bookname').select2({
      theme: 'bootstrap4'
    });
}); 
</script>