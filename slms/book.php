<?php 
include 'config/database.php'; 
include 'header.php'; 

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Book Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Administrator</a></li>
              <li class="breadcrumb-item">Book Management</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List Book of KUTPM Library</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover display nowrap">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>No</th>
                  <th>Book Name</th>
                  <th>Author</th>
                  <th>Quantity</th>
                  <th>Quantity Loan</th>
                  <th>Status</th>
                  <th>Update By</th>
                </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>




  </div>
  <!-- /.content-wrapper -->


<?php include 'footer.php'; ?>
<script type="text/javascript" src="javascript/book.js"></script>

</body>
</html>