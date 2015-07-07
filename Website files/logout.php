<?php
session_start();
	
	if(isset($_GET['logout']))
        				{
        					session_unset();
        					session_destroy();
        				}
header('Refresh:5; url=signin.php');
echo 'You have been logged out!';
?>