<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KUPTM Library | Secure Library Management System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../index.php"><b>KUPTM</b>Library</a>
  </div>
  <!-- /.login-logo -->
  <div class="card" id="formlogin">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Secure Library Management System</p>
        <div class="input-group mb-3">
          <select class="form-control" id="privilege">
            <option value="">Select Your Privilege</option>
            <option value="Student">Student</option>
            <option value="Staff">Staff</option>
            <option value="Admin">Admin</option>
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-users-cog"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" id="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="far fa-address-card"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-6">
            <button class="btn btn-primary btn-block" id="BtnSignIn">Sign In</button>
          </div>
          <div class="col-6">
            <button class="btn btn-primary btn-block">Back</button>
          </div>
          <!-- /.col -->
        </div>
    </div>
    <!-- /.login-card-body -->
  </div>

  <!-- Verify FingerPrint ID -->
  <div class="card" id="formverify" hidden >
    <div class="card-body login-card-body">
      <p class="login-box-msg">Secure Library Management System</p>
        <div class="input-group mb-3">
          <span>Please Click Verify Your ID for Verification</span>
        </div>
        <div class="input-group mb-3" hidden>
          <input type="text" class="form-control" placeholder="Finger Print ID" id="fingerprintid" readonly>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="far fa-address-card"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-6">
            <button class="btn btn-primary btn-block" id="BtnVerify">Verify Your ID</button>
          </div>
          <div class="col-6">
            <button class="btn btn-primary btn-block" id="backtoLogin">Back</button>
          </div>
          <!-- /.col -->
        </div>
    </div>
    <!-- /.login-card-body -->
  </div>



</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../plugins/select2/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- SweetAlert2 -->
<script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../plugins/toastr/toastr.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){

  var privilege = $("#privilege");
  var Username = $("#Username");
  var password = $("#password");

  $("#BtnSignIn").on("click", function(){

    if (privilege.val() == "") {
      toastr.error('Please select your privilege');
      $("#privilege").focus();
    }
    else if (Username.val() == "") {
      toastr.error('Username is required');
      $("#Username").focus();
    }
    else if (password.val() == "") {
      toastr.error('Password is required');
      $("#password").focus();
    }
    else {

      $.ajax({
        url: "library/index_read.php",
        dataType: "json",
        type: "post",
        data: {
          "privilege": privilege.val(),
          "Username": Username.val(),
          "password": password.val(),
          "function": "UserLogin"
        },
        success: function(data_response)
        {
          console.log (data_response);
          if (data_response.Status == "Success"){
            if (data_response.FingerPrintID){
              toastr.success(data_response.Message)
              $("#fingerprintid").val(data_response.FingerPrintID);
              $("#formlogin").hide();
              $("#formverify").attr("hidden", false);
            } else {
              toastr.error('Your FingerPrint ID is null, please contact system admin')
              $("#privilege,#Username,#password,#fingerprintid").val("");
            }            
          }
          else if (data_response.Status == "Failed"){
            toastr.error(data_response.Message)
            $("#privilege,#Username,#password,#fingerprintid").val("");
          }
        }
      });

    }

  });

  $("#BtnVerify").on("click", function(){

    $("#BtnVerify").html("Please Wait").attr("disabled", true);

    $.get('http://localhost/library/slms/config/echo.php', function(data){

      if (data == $("#fingerprintid").val()){
        toastr.success('Verification Match, You Will Redirect To Home Page');
        $("#BtnVerify").html("Verify Your ID").attr("disabled", false);
        window.location.replace('http://localhost/library/slms/home.php');
      }
      else {
        toastr.error('Your FingerPrint ID not match in System, Please Retry Again');
        $("#BtnVerify").html("Verify Your ID").attr("disabled", false);
      }

    });

  });



});

</script>

</body>
</html>
