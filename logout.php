<?php
session_start();// initialize session
session_unset(); #removes all the variables in session
session_destroy(); #destroys the session
unset($_SESSION['user_id']);

if (!isset($_SESSION['user_id'])){
   	// echo "Successfully logged out!<br />";
}else 
   	// echo "Error Occured!!<br />";


header("location:index.php"); 
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
?>