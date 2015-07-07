<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mike Mercer" >
    <link rel="icon" href="../../favicon.ico">

    <title>New Patient</title>

   
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    
    <link href="cover.css" rel="stylesheet">
    <link href="justified-nav.css" rel="stylesheet">

    
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
                <li class = "active"><a href="newpatient.html">New Patient</a></li>
                <li><a href="signin.php">Sign in</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="logout.php?logout=1">Logout</a></li>
              </ul>
            </div>
          </div>

    <div class="container">

      <form class="form-signin" role="form" action ="newpatient-script.php" method="post"/>
        <h2 class="form-signin-heading">Please enter new patient information</h2>

        

        <div class="row">
        <div class="col-lg-4">
          <input type="pText" name ="firstname" class="form-control" placeholder="Firstname" required autofocus>
          <input type="pText" name ="lastname" class="form-control" placeholder="Lastname" required>
        </div> 

        <div class="row">
        <div class="col-lg-4"> 
        <input type="pText" name ="address" class="form-control" placeholder="Address" required>
        <input type="pText" name ="city" class="form-control" placeholder="City" required>
        </div>

        
        <div class="row">
        <div class="col-lg-4">
        <input type="pText" name ="state" class="form-control" placeholder="State" required>
        <input type="pText" name ="zip" class="form-control" placeholder="Zip" required>
        </div>


        <div class="row">
        <div class="col-lg-4">
        <input type="pText" name ="username" class="form-control" placeholder="Username" required>
        <input type="password" name ="password" class="form-control" placeholder="Password" required>
        </div>

        <div>
 <p>
<button class="btn btn-lg btn-primary btn-block" type="submit" name="button">Create</button>
</p> 
        </div>      
      </form>

    </div> 



    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
