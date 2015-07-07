<?php
	session_start();
	
	if(isset($_GET['logout']))
        				{
        					session_unset();
        					session_destroy();
        				}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mike Mercer" >
    <link rel="icon" href="../../favicon.ico">

    <title>Signin</title>

   
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

   
    <link href="signin.css" rel="stylesheet">
    <link href="cover.css" rel="stylesheet">

   
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    
  
  
  </head>



  <body>

       <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          
<div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Honor Box Chiropractric</h3>
              <ul class="nav masthead-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="newpatient.php">New Patient</a></li>
                <li class="active"><a href="signin.php">Sign in</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="logout.php?logout=1">Logout</a></li>
              </ul>
            </div>
          </div>

    <div class="container">

      <form class="form-signin" role="form" action ="signin-script.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="pText" class="form-control" name ="username" placeholder="Username" required autofocus>
        <input type="password" class="form-control" name ="pw" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> 
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
