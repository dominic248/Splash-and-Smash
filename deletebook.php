<?php

include("db.php");
/* Get username */
$del_id = $_POST['del_id'];
$qry = "DELETE FROM book WHERE id ='$del_id'";
$result=mysqli_query($link,$qry);
if(isset($result)) {
   echo "YES";
} else {
   echo "NO";
}
?>