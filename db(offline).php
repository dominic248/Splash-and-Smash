<?php
$db_host='localhost';
$db_user='root';
$db_pass='';
$db_name='park';
$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if($link){
    // echo "<script>console.log('connect');</script>";
}else{
    // echo "<script>console.log('Database failed');</script>";
}
?>