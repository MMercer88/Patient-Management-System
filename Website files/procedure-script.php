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


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$therapy = $_POST['therapy'];
$pain = $_POST['pain'];
$time = $_POST['time'];



$sql = "INSERT INTO Chiropractor.Therapy (firstname,lastname,therapy,pain,time) VALUES  ('$firstname','$lastname','$therapy','$pain','$time')";
if (!mysql_query($sql)){
	die('Error: ' . mysql_error());
}

header('Refresh:5; url=procedure.php');
echo 'procedure logged';


mysql_close();
?>