<?php

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
?>


<!DOCTYPE html>
<html>
<head>
</head>



<body>
			<div id = "page-wrap">
						<?php
							$sql = "Select * From Chiropractor.Schedule";
							if (!mysql_query($sql)){
								die('Error: ' . mysql_error());
							}
							$query = mysql_query($sql);
							
							echo "<table border-10>
							<tr>
							<th>First name</th>
							<th>Last name</th>
							<th>Start Time</th>
							<th>End TIme</th>
							<th>Date</th>
							</tr>";
							while ($row = mysql_fetch_assoc($query)) 
							{
							
							
							echo "<tr>";
							echo "<td>" . $row['firstname'] . "</td>";
							echo "<td>" . $row['lastname'] . "</td>";
							echo "<td>" . $row['stime'] . "</td>";							
							echo "<td>" . $row['etime'] . "</td>";
							echo "<td>" . $row['date'] . "</td>";
							echo"</tr>";
							
							} 
							echo "</table>";
							
							 ?>
			</div>
</body>

<form class="form-signin" role="form" action ="appointment.php" method="get"/>
 <div>
        <p>
        		<button class="btn btn-lg btn-primary btn-block" type="submit" name="appointment">Go Back</button>
        </p>
        
        </div> 


</html>


<?php
mysql_close();
?>