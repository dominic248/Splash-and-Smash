<?php
session_start();
include("db.php");
// echo $_SESSION["admin_id"] . ".<br>";
if ( isset( $_POST['signinbtn'] ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['passwd'] ) ) {
        
    // Getting submitted user data from database   
        $username=$_POST['username'];
        $stmt = $link->prepare("SELECT * FROM users WHERE username = '".$username."';");     
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_object();
        // Verify user password and set $_SESSION
        if ( md5($_POST['passwd']) == $user->passwd ) {
            $_SESSION['admin_id'] = $user->username;
            echo "<script>console.log('".$_SESSION['admin_id']."');</script>";
            echo "<script type='text/javascript'> document.location = 'adminpanel.php'; </script>";
            header("location:adminpanel.php"); 
        }else{
            echo "<script>alert('Invalid Login Details!');</script>";
        }
    }
    mysqli_close($link);
}
?>

<html>

<head>
	<title>Admin - Splash and Smash</title>
    <link rel="icon" href="images/logo1.png" type="image/png" sizes="25x25">
    <link rel="stylesheet" href="css/w3.css">
	<style>
        body {
            background: url(images/timing-img.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
        }
    </style>
    <link rel="stylesheet" href="css/admin.css" type="text/css" >
</head>

<body >
<a href="index.php" class='w3-button w3-blue' style="margin-top: 15px; margin-right: 15px;float:right">Visit site</a>
<div class="login-page">
  <div class="form">
    <form class="login-form" method="post">
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name="passwd" placeholder="password"/>
      <button name="signinbtn"  type="submit" >login</button>
      <!-- <p class="message">Not registered? <a href="#">Create an account</a></p> -->
    </form>
  </div>
</div>

</body>

</html>