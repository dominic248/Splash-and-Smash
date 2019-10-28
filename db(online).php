<?php
$db_host='localhost';
$db_user='id11382132_sayli';
$db_pass='sayli0810';
$db_name='id11382132_park';
$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if($link){
    // echo "<script>console.log('connect');</script>";
}else{
    // echo "<script>console.log('Database failed');</script>";
}
?>