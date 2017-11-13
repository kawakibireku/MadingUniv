<?php
session_start();
extract($_POST);
$conn = mysqli_connect('localhost','root','','madingdb');




if(isset($login)){

  $result = mysqli_query($conn,"select salt from tbuser,tbpegawai where tbpegawai.idpegawai='$username' and tbpegawai.idpegawai = tbuser.idpegawai ");
  $row = mysqli_fetch_assoc($result);
  $salt = $row['salt'];
  $saltedPW =  $password . $salt;
  $hashedPW = hash('sha256', $saltedPW);
  
  echo $hashedPW;
  
  $qu = mysqli_query($conn,"select iduser from tbuser,tbpegawai where tbpegawai.idpegawai='$username' and tbuser.password='$hashedPW' and tbpegawai.idpegawai = tbuser.idpegawai");
  
  if(mysqli_num_rows($qu)){
    $qa = mysqli_fetch_array($qu);
    $tipe=mysqli_fetch_array(mysqli_query($conn,"select * from tbuser where iduser = '".$qa[0]."'"));


    $_SESSION['iduser']=$tipe[0];
    $_SESSION['logged in'] = TRUE;
    
    header("Location: ./index.php");

	}else{
		$ps="<div class='alert alert-warning alert-dismissable' style='margin-top:20px'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
			<h4><i class='icon glyphicon glyphicon-remove'></i> Wrong Password or Username</h4>
			</div>";
	  echo $ps;
  }
}

$pegawai=mysqli_query($conn,"select tbpegawai.idpegawai from tbuser,tbpegawai where tbuser.idpegawai = tbpegawai.idpegawai");



?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../admin/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="../admin/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
          <a href="#"><b>Login</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Username" name="username" />
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
		  
          <div class="row">
            <div class="col-xs-12">
              <input type="submit" class="btn btn-primary btn-block btn-flat pull-right" value="Login" name="login"/>
            </div><!-- /.col -->
          </div>
          <br>
          <p align="center"><a href="../mading.php">Lihat Mading</a></p>
        </form>

        <br>

      </div><!-- /.login-box-body -->
     
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="../../admin_lagenda/admin/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../admin_lagenda/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>
