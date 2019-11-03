<?php
session_start();
?>
<html>

<head>
    <?php
    include("db.php");
      if ( isset( $_SESSION['user_id'] ) &&  $_SESSION['isadmin']==1) {
          // Grab user data from the database using the user_id
          // Let them access the "logged in only" pages
      } else if ( isset( $_SESSION['user_id'] ) &&  $_SESSION['isadmin']==0) {
        echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
        header("Location: index.php");
      }else{
          // Redirect them to the login page
          echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
          header("Location: login.php");
      }   
    // You'd put this code at the top of any "protected" page you create
    ?>
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
    <link rel="stylesheet" href="css/admin.css" type="text/css">
</head>

<body>
<h2 style="display: inline-block">Welcome Administrator <?php echo $_SESSION["user_id"] ?></h2>
<a href="index.php" class='w3-button w3-blue' style="margin-top: 15px; margin-right: 15px;float:right">Visit site</a>
<a href="logout.php" class='w3-button w3-green' style="margin-top: 15px; margin-right: 15px;float:right">LOGOUT</a>
    <center>
        <table id="demo" class="w3-table-all w3-hoverable" style="display: table;background-color:white">
                <tr style="background-color: #3DB2E6; color:black;">
                    <th>NAME</th>
                    <th>DATE</th>
                    <th>TOTAL TICKETS</th>
                    <th>NO. OF ADULTS</th>
                    <th>NO. OF CHILDREN</th>
                    <th>DELETE</th>
                </tr>

                <?php
                    $sql = 'SELECT * FROM book';
                    $result = mysqli_query($link, $sql);
                    if (mysqli_num_rows($result) > 0) {
                       while($row = mysqli_fetch_assoc($result)) {
                          echo "<tr id='book".$row['id']."'>
                          <td>".$row['visitor_name']."</td>
                          <td>".$row['Vdate']."</td>
                          <td>".$row['total_tickets']."</td>
                          <td>".$row['adult']."</td>
                          <td>".$row['child']."</td>
                          <td><button type='submit' class='w3-button w3-red red' data-id='".$row['id']."'>Delete</button><td>
                        </tr>";
                       }
                    } 
                ?>
        </table>
    </center>
    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".red").click(function(){
                delid=$(this).attr("data-id")
                deltr="#book"+delid
                console.log(delid)
                if (confirm("Confirm to delete booking?")) {
                    $.ajax({
                        type: 'POST',
                        url:'deletebook.php',
                        data:{del_id:delid},
                        success:function(data){
                            console.log(data)
                            if(data=="YES"){
                                console.log("deleted")
                                $(deltr).remove();
                            }else{
                                alert("Can't delete the booking!")
                            }
                        }
                    })         
                } 
               
            })
        })

    </script>
</body>
</html>