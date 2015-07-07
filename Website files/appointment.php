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

    <title>Make Appointment</title>

   
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
                <li class = "active"><a href="appointment.php">Appointments</a></li>
                <li><a href="procedure.php">Procedures</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="logout.php?logout=1">Logout</a></li>
              </ul>
            </div>
          </div>

    <div class="container">
    
    
        <?php
        				if(isset($_GET['logout']))
        				{
        					session_unset();
        					session_destroy();
        				}
        
        
						$now = getdate(time());
						$time = mktime(0,0,0, $now['mon'], 1, $now['year']);
						$date = getdate($time);
						$dayTotal = cal_days_in_month(0, $date['mon'], $date['year']);
						//Print the calendar header with the month name.
						print '<table><tr><td colspan="7"><strong>' . $date['month'] . '</strong></td></tr>';
						for ($i = 0; $i < 6; $i++) {
						print '<tr>';
		
						for ($j = 1; $j <= 7; $j++) {
								$dayNum = $j + $i*7 - $date['wday'];
								//Print a cell with the day number in it.  If it is today, highlight it.
								print '<td';
								if ($dayNum > 0 && $dayNum <= $dayTotal) {
								print ($dayNum == $now['mday']) ? ' style="background: #ccc;">' : '>';
								print $dayNum;
								}
								else {
								//Print a blank cell if no date falls on that day, but the row is unfinished.
								print '>';
								}
								print '</td>';
						}
						
						
						print '</tr>';

						if ($dayNum >= $dayTotal && $i != 6)
						break;
						}
							
						print '</table>';
		?>
		
		 <h4>Office is closed on Thursdays and Sundays</h4>
       <form class="form-signin" role="form" action ="appointment-script.php" method="post"/>
        <h2 class="form-signin-heading">Please enter desired date and time</h2>

        
			
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
        <input type="pText" name ="date" class="form-control" placeholder="date" required>

        </div>
        
        <div class="row">
        <div class="col-lg-4">
        from
         <select name = "stime" id = "stime">
         <option value ="9:00">9:00</option>
         <option value ="9:15">9:15</option>
         <option value ="9:30">9:30</option>
         <option value ="9:45">9:45</option>
         <option value ="10:00">10:00</option>
         <option value ="10:15">10:15</option>
         <option value ="10:30">10:30</option>
         <option value ="10:45">10:45</option>
         <option value ="11:00">11:00</option>
         <option value ="11:15">11:15</option>
         <option value ="11:30">11:30</option>
         <option value ="11:45">11:45</option>
         <option value ="12:00">12:00</option>
         <option value ="12:15">12:15</option>
			<option value ="3:30">3:30</option>
			<option value ="3:45">3:45</option>
			<option value ="4:00">4:00</option>
			<option value ="4:15">4:15</option>
			<option value ="4:30">4:30</option>
			<option value ="4:45">4:45</option>
			<option value ="5:00">5:00</option>
			<option value ="5:15">5:15</option>
			<option value ="5:30">5:30</option>
			<option value ="5:45">5:45</option>
			<option value ="6:00">6:00</option>
			<option value ="6:15">6:15</option>
			<option value ="3:30">6:30</option>
			<option value ="6:45">6:45</option>
         </select>	
         </select>	
         
         
         to
        <select name = "etime" id = "etime">
         <option value ="9:15">9:15</option>
         <option value ="9:30">9:30</option>
         <option value ="9:45">9:45</option>
         <option value ="10:00">10:00</option>
         <option value ="10:15">10:15</option>
         <option value ="10:30">10:30</option>
         <option value ="10:45">10:45</option>
         <option value ="11:00">11:00</option>
         <option value ="11:15">11:15</option>
         <option value ="11:30">11:30</option>
         <option value ="11:45">11:45</option>
         <option value ="12:00">12:00</option>
         <option value ="12:15">12:15</option>
			<option value ="3:45">3:45</option>
			<option value ="4:00">4:00</option>
			<option value ="4:15">4:15</option>
			<option value ="4:30">4:30</option>
			<option value ="4:45">4:45</option>
			<option value ="5:00">5:00</option>
			<option value ="5:15">5:15</option>
			<option value ="5:30">5:30</option>
			<option value ="5:45">5:45</option>
			<option value ="6:00">6:00</option>
			<option value ="6:15">6:15</option>
			<option value ="6:30">6:30</option>
			<option value ="6:45">6:45</option>
			<option value ="7:00">7:00</option>
         </select>	
        </div>

        <div>
        <p>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="button">Submit</button>
			</p>        
        </div> 
        
           
      </form>

<form class="form-signin" role="form" action ="current_appointments-script.php" method="get"/>
 <div>
        <p>
        		Click here to see current schedules
        		<button class="btn btn-lg btn-primary btn-block" type="submit" name="schedule">Schedule</button>
        </p>
        
        </div> 
</form>

<form class="form-signin" role="form" action ="cancel_appointments-script.php" method="post"/>
 <div>
        <p>
        		To cancel an appointment Please enter in the following information
        		 <div class="row">
        <div class="col-lg-4">
		<script language="javascript" type= "text/javascript">
						var fName = '<?php echo $_SESSION['CurrentFName']; ?>';
						var lName ='<?php echo $_SESSION['CurrentLName']; ?>';
						var fNameStatement = "<input type=\"Text\" name =\"firstname\" class=\"form-control\" value=\"" +fName+ "\" autofocus>";
						var lNameStatement = "<input type=\"Text\" name =\"lastname\" class=\"form-control\" value=\"" +lName+ "\" autofocus>";
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
        <input type="pText" name ="date" class="form-control" placeholder="date" required>
        </div>
        
        <div class="row">
        <div class="col-lg-4">
        from
         <select name = "stime" id = "stime">
         <option value ="9:00">9:00</option>
         <option value ="9:15">9:15</option>
         <option value ="9:30">9:30</option>
         <option value ="9:45">9:45</option>
         <option value ="10:00">10:00</option>
         <option value ="10:15">10:15</option>
         <option value ="10:30">10:30</option>
         <option value ="10:45">10:45</option>
         <option value ="11:00">11:00</option>
         <option value ="11:15">11:15</option>
         <option value ="11:30">11:30</option>
         <option value ="11:45">11:45</option>
         <option value ="12:00">12:00</option>
         <option value ="12:15">12:15</option>
			<option value ="3:30">3:30</option>
			<option value ="3:45">3:45</option>
			<option value ="4:00">4:00</option>
			<option value ="4:15">4:15</option>
			<option value ="4:30">4:30</option>
			<option value ="4:45">4:45</option>
			<option value ="5:00">5:00</option>
			<option value ="5:15">5:15</option>
			<option value ="5:30">5:30</option>
			<option value ="5:45">5:45</option>
			<option value ="6:00">6:00</option>
			<option value ="6:15">6:15</option>
			<option value ="3:30">6:30</option>
			<option value ="6:45">6:45</option>
         </select>	
         
         
         to
          <select name = "etime" id = "etime">
         <option value ="9:15">9:15</option>
         <option value ="9:30">9:30</option>
         <option value ="9:45">9:45</option>
         <option value ="10:00">10:00</option>
         <option value ="10:15">10:15</option>
         <option value ="10:30">10:30</option>
         <option value ="10:45">10:45</option>
         <option value ="11:00">11:00</option>
         <option value ="11:15">11:15</option>
         <option value ="11:30">11:30</option>
         <option value ="11:45">11:45</option>
         <option value ="12:00">12:00</option>
         <option value ="12:15">12:15</option>
			<option value ="3:45">3:45</option>
			<option value ="4:00">4:00</option>
			<option value ="4:15">4:15</option>
			<option value ="4:30">4:30</option>
			<option value ="4:45">4:45</option>
			<option value ="5:00">5:00</option>
			<option value ="5:15">5:15</option>
			<option value ="5:30">5:30</option>
			<option value ="5:45">5:45</option>
			<option value ="6:00">6:00</option>
			<option value ="6:15">6:15</option>
			<option value ="6:30">6:30</option>
			<option value ="6:45">6:45</option>
			<option value ="7:00">7:00</option>
         </select>	
        </div>

        <div>
        <p>
        		<button class="btn btn-lg btn-primary btn-block" type="submit" name="cancel">Cancel</button>
        </p>
        
        </div> 
</form>

    </div> 
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

