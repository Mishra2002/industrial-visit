<?php

include("./connection.php");
if(isset($_POST['signin'])){
  $uname = $_POST['username'];
  $pwd = $_POST['password'];

  $sql = "select * from users where username = '$uname' OR email = '$uname' AND password = '$pwd'";

  $query=mysqli_query($conn,$sql);
  $check_user= mysqli_num_rows($query);

  if($check_user==1){
    $user = mysqli_fetch_array($query);
    // print_r($user);
    session_start();
    $_SESSION['user_name']=$user['username'];
    $_SESSION['user_email']=$user['email'];
    $_SESSION['role'] = $user['role'];
    echo "<script> alert('Welcome to IV Project!!') </script>";	
    echo " <script>window.open('home.php','_self')</script> ";	
    
  }
  else{
    echo "<script> alert('Your Email or password is incorrect') </script>";
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

    <title>Plan Your Tour</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
      <link href="css/font-awesome.min.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/try.js"></script>
  </head>

  <body>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-lg-push-5">
          <h1 id="tra_head" style="color:whitesmoke;">Plan Your Tour</h1>
        </div>
      </div>

      <div class="row" style="margin-top:141px">
        <div class="col-md-12">
          <form class="form-signin" action="#" method="post">
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

            <!-- <div class="checkbox">
              <label style="color:whitesmoke;">
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div> -->

            <div class="row">
              <div class="col-md-6">
                <button class="btn btn-lg btn-primary btn-block" name="signin" type="submit" style="background-color: #1abc9c; border-color:#9099A2;">Sign in</button>
              </div> 

              <div class="col-md-6">
                <a href="signup.php" class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: #1abc9c; border-color:#9099A2;">Sign up</a>
              </div>
            </div>  
          </form>
        </div>
      </div>
    </div> <!-- /container -->
    
    <script>
      $(window).load(function() {
      $("#tra_head").effect("slide",1200);
      $("#logo").effect("bounce",800); 
      });  
    </script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
