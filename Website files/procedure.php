<?php
		session_start();
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

    <title>Procedures</title>
   

   
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
                <li><a href="newpatient.php">New Patient</a></li>
                <li><a href="appointment.php">Appointments</a></li>
                <li class = "active"><a href="procedure.php">Procedures</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="logout.php?logout=1">Logout</a></li>
              </ul>
            </div>
          </div>

    <div class="container">

      <form class="form-signin" role="form" action ="procedure-script.php" method="post"/>
        <h2 class="form-signin-heading">Please enter procedure perfomed</h2>

        

        <div class="row">
        <div class="col-lg-4">
          <script language="javascript" type= "text/javascript">
						var fName = '<?php echo $_SESSION['CurrentFName']; ?>';
						var lName ='<?php echo $_SESSION['CurrentLName']; ?>';
						var fNameStatement = "<input type=\"pText\" name =\"firstname\" class=\"form-control\" value=\"" +fName+ "\" required autofocus>";
						var lNameStatement = "<input type=\"pText\" name =\"lastname\" class=\"form-control\" value=\"" +lName+ "\" required autofocus>";
						document.write(fNameStatement);
						document.write(lNameStatement);
						
		</script>
			<noscript>
          <input type="pText" name ="firstname" class="form-control" placeholder= "F" required autofocus>
          <input type="pText" name ="lastname" class="form-control" placeholder="Lastname" required>
			</noscript>    
        </div> 
        
          <div class="row">
        <div class="col-lg-4">
         Procedure Performed
           <select name = "therapy" id = "procedure">
          <option value ="none">none</option>
          <option value ="heat">heat</option>
          <option value ="ice">ice</option>
          <option value ="DD">DD</option>
          <option value ="ID">ID</option>
          <option value ="DI">DI</option>
          <option value ="TRAX">TRAX</option>
          <option value ="Chi">Chi</option>
          <option value ="PP">PP</option>
          <option value ="BP">BP</option>
          <option value ="Frankenstein">Frankenstein</option>
          <option value ="Other">Other</option>
           </select>		
        </div> 
        

        <div class="row">
        <div class="col-lg-4"> 
        Pain Level
        <select name = "pain" id = "pain">
          <option value ="1">1</option>
          <option value ="2">2</option>
          <option value ="3">3</option>
          <option value ="4">4</option>
          <option value ="5">5</option>
          <option value ="6">6</option>
          <option value ="7">7</option>
          <option value ="8">8</option>
          <option value ="9">9</option>
          <option value ="10">10</option>
           </select>		
        </div>
			
			 <div class="row">
        <div class="col-lg-4"> 
        <input type="pText" name ="time" class="form-control" placeholder="Date" required>
        </div>
	


        <div>
 <p>
<button class="btn btn-lg btn-primary btn-block" type="submit" name="button">Submit</button>
</p>
        </div>      
      </form>

    </div> 
   
   <form class="form-signin" role="form" action ="view_procedure-script.php" method="post"/>    
  	<div>
	<h2>To view all procedures done for a specific person, Please enter their name below</h2>  	
  	<div class="row">
        <div class="col-lg-4">
           <script language="javascript" type= "text/javascript">
						var fName = '<?php echo $_SESSION['CurrentFName']; ?>';
						var lName ='<?php echo $_SESSION['CurrentLName']; ?>';
						var fNameStatement = "<input type=\"pText\" name =\"firstname\" class=\"form-control\" value=\"" +fName+ "\" required autofocus>";
						var lNameStatement = "<input type=\"pText\" name =\"lastname\" class=\"form-control\" value=\"" +lName+ "\" required autofocus>";
						document.write(fNameStatement);
						document.write(lNameStatement);
						
		</script>
			<noscript>
          <input type="pText" name ="firstname" class="form-control" placeholder= "F" required autofocus>
          <input type="pText" name ="lastname" class="form-control" placeholder="Lastname" required>
			</noscript> 
        </div> 
    </div>
    <p>
	<button class="btn btn-lg btn-primary btn-block" type="submit" name="button">View Results</button>
	</p>
  	</div>
</form>


    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
