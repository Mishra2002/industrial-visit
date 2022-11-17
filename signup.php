<?php
include('./connection.php');

if(isset($_POST['saveUser'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phno = $_POST['phonenumber'];
  $role = $_POST['role'];

  $sql = "select * from users where username = '$username' OR email = '$email'";

  $query=mysqli_query($conn,$sql);
  $check_user= mysqli_num_rows($query);

  if($check_user==0){
    $sql = "insert into users(username,email,password,phonenumber,role) values ('$username','$email','$password','$phno','$role')";
    $run = mysqli_query($conn,$sql);
    if($run){
      echo "<script> alert('User Added') </script>";
      echo "<script> window.open('index.php','_self') </script>";
    }else{
      echo "<script> alert('Something Went Wrong!!') </script>";
      echo "<script> window.open('signup.php','_self') </script>";
    }
  }else{
    echo "<script>alert('User Already Exists!!')</script>";
  }

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Agent & Student Registration</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/admin_reg.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/try.js"></script>
    <script src="js/adminreg.js"></script>
  </head>

  <body>
    <div class="container"> 
      <div class="row">
        <div class="col-lg-8 col-lg-offset-4 col-xs-12 heading">
          <h1 class="admin_heading" style="color:rgb(0,0,0); font-size: 50px; font-weight: 800;">Register Here</h1>
        </div>
      </div>
      <br>

      <form action="#" method="post">

        <div class="row" style="margin-top: 88px;">
          <div class="col-lg-3 col-lg-push-3">
            <pre style="font-size:22px;">User Name</pre>
          </div>
          <div class="col-lg-6 col-lg-push-3">    
            <input type="text" name="username" required="required" placeholder="" class="form-control" style="width:43%;">
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-lg-push-3">
            <pre style="font-size:22px;">Password</pre>
          </div>
          <div class="col-lg-6 col-lg-push-3">    
            <input type="password" name="password" required="required" placeholder="" class="form-control" style="width:43%;">
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-lg-push-3">
            <pre style="font-size:22px;">Role</pre>
          </div>
          <div class="col-lg-6 col-lg-push-3">    
            <input type="radio" name="role" value="student">Student 
            <input type="radio" name="role" value="agent">Agent
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-lg-3 col-lg-push-3">
            <pre style="font-size:22px;">Phone Number</pre>
          </div>
          <div class="col-lg-6 col-lg-push-3">    
            <input type="text" name="phonenumber" required="required" placeholder="" class="form-control" style="width:43%;">
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-lg-push-3">
            <pre style="font-size:22px;">Email-id</pre>
          </div>
          <div class="col-lg-6 col-lg-push-3">    
            <input type="text" name="email" required="required" placeholder="" class="form-control" style="width:43%;">
          </div>
        </div>

        <div class="row" style="margin-top: 36px;">
          <div class="col-md-6 col-md-push-5">
            <button type="submit" name="saveUser" class="btn btn-info">SAVE</button>
          </div>
          <div class="col-md-6">
            <a href="index.php" ><button type="button" class="btn btn-info">CANCEL</button></a>
          </div>
        </div>

      </form>
    </div>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
