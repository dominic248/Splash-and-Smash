<?php
include("db.php");
 if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $vName=$_POST["vName"];
    $datapicker=$_POST["datepicker"];
    $tickets=$_POST["tickets"];
    $adult=$_POST["adult"];
    $child=$_POST["child"];
    $tick=number_format($tickets);
    $child1=number_format($child);
    $adult1=number_format($adult);
    $sum=$child1+$adult;
    if($tick == $sum){
        $sql = "SELECT * FROM book where visitor_name='$vName' and Vdate='$datapicker';";
        $result = mysqli_query($link,$sql);
        if (mysqli_num_rows($result) > 0) {
            if($tickets==0 || $adult==0 || $child==0){
                $sql = "DELETE FROM book WHERE visitor_name='$vName' and Vdate='$datapicker';";
                if (mysqli_query($link, $sql)) {
                    echo "deleted";
                } else {
                    echo "Error deleting record: " . mysqli_error($link);
                }
            } else {
                $sql = "UPDATE book SET total_tickets=$tickets,adult=$adult,child=$child WHERE visitor_name='$vName' and Vdate='$datapicker';";
                if (mysqli_query($link, $sql)) {
                echo "updated";
                } else {
                    "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }
            }
        }else{
            $sql="insert into book(visitor_name,Vdate,total_tickets,adult,child) values ('$vName','$datapicker',$tickets,$adult,$child);";
            if(mysqli_query($link, $sql)){
                echo "inserted";
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
        }
    }
    else{
        echo "incorrect";
    }
    // close connection
    mysqli_close($link);
?>