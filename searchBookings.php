<?php

include("db.php");
/* Get username */
$search = $_GET["search"];

/* Query */
$query = "select * from book where visitor_name like '%".$search."%' OR phoneno like '%".$search."%' OR Vdate like '%".$search."%';";
$result = mysqli_query($link,$query);
$result1=array();
while($book=mysqli_fetch_assoc($result)){
    $result1[] = $book;
}

echo json_encode($result1);
?>