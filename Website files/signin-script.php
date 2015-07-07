<?php
session_start();

define ('DB_Name', 'Chiropractor');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');

  $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
  
  if (!$link){
  		die('couldnot connect: ' .mysqlerror());
}

$db_selected=mysql_select_db(DB_NAME, $link);

  if (!$link){
  		die('can\'t use ' .DB_NAME .': ' .mysqlerror());
}



$username = $_POST['username'];
$pw = $_POST['pw'];


$sql = "Select * From Chiropractor.Patient WHERE username = '$username' AND password = '$pw'";
$query = mysql_query($sql);
$row = mysql_fetch_assoc($query);


$fName = $row['firstname'];
$lName = $row['lastname'];
						
							if (mysql_num_rows($query) >0) {
									$_SESSION['CurrentUser'] = $username;
									$_SESSION['CurrentFName'] = $fName;
									$_SESSION['CurrentLName'] = $lName;


								header('Refresh:5; url=appointment.php');
								echo "Welcome back, " . $fName ."!";
							}
							else{
									header('Refresh:5; url=signin.php');
									echo "Error: Wrong Username/Password combination";					
							}	
							
							
							
						
			
										
							

mysql_close();
?>