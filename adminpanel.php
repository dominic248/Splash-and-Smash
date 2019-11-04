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
    <title>Admin Panel | Splash And Smash</title>
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
        .search, .nosearch{
            display:table-row
        }
    </style>
</head>

<body>
<h2 style="display: inline-block">Welcome Administrator <?php echo $_SESSION["user_name"] ?></h2>
<a href="index.php" class='w3-button w3-blue' style="margin-top: 15px; margin-right: 15px;float:right">Visit site</a>
<a href="logout.php" class='w3-button w3-green' style="margin-top: 15px; margin-right: 15px;float:right">LOGOUT</a>
<div style="margin:10px">
<input class="input-text" type="text" id="search-input"  placeholder="Search" style="background: aliceblue;color:black;width:100%" name="search">
</div>
    <center>
        <table id="demo" class="w3-table-all w3-hoverable" style="display: table;background-color:white">
                <tr style="background-color: #3DB2E6; color:black;">
                    <th>NAME</th>
                    <th>PHONE NO.</th>
                    <th>DATE</th>
                    <th>TOTAL TICKETS</th>
                    <th>NO. OF ADULTS</th>
                    <th>NO. OF CHILDREN</th>
                    <th>DELETE REQUEST</th>
                    <th>DELETE</th>
                    <th></th>
                </tr>
                <tbody id="search">
                </tbody>
                    <?php
                        $sql = 'SELECT * FROM book';
                        $result = mysqli_query($link, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<tr id='' class='nosearch book".$row['id']."' >
                                <td>".$row['visitor_name']."</td>
                                <td>".$row['phoneno']."</td>
                                <td>".$row['Vdate']."</td>
                                <td>".$row['total_tickets']."</td>
                                <td>".$row['adult']."</td>
                                <td>".$row['child']."</td>";
                                if($row['delrequest']==0){
                                    echo "<td>NO</td>";
                                }else{
                                    echo "<td>YES</td>";
                                }
                                echo "<td><button type='submit' class='w3-button w3-red red' data-id='".$row['id']."'>Delete</button><td></tr>";
                            }
                        } 
                    ?>
                
        </table>
    </center>
    <script src="js/jquery.min.js"></script>
    <script>
        
        var $input = $('#search-input');
        $input.on('keyup', function () {
            $("#search").empty();
            $("#search").html("");
            $(".search").remove();
            $(".search").css("display", "none");
            search($input.val())
        });

            //on keydown, clear the countdown 
        $input.on('keydown', function () { 
            $("#search").html("");
            $(".search").css("display", "none");
            search($input.val())
        });
        function search(search) {
            console.log(search)
            
            if (search == " " || search == "") {
                $("#search").html("");
                $(".search").css("display", "none");
                $(".nosearch").css("display", "table-row");
                
            } else {
                $("#search").html("");
                $(".nosearch").css("display", "none");
                $.ajax({
                    type:'GET',
                    url:'searchBookings.php',
                    data:{
                        search:search,
                    },
                    success: function(data){
                        $("#search").html("");
                        $(".search").css("display", "none");
                        var data=JSON.parse(data)
                        html=""
                        console.log(data)
                        if(data.length==0){ 
                            $("#search").html("");
                            $(".search").css("display", "none");
                            html+="<tr class='search'><td colspan='9' style='text-align:center'>No Results Found!</td></tr>"
                        }else{
                            $("#search").html("");
                            $(".search").css("display", "none");
                            $.each(data,function(key,value){
                                console.log(data.length)
                                html+="<tr id='' class='search book"+data[key].id+"'>"+
                                "<td>"+data[key].visitor_name+"</td>"+
                                "<td>"+data[key].phoneno+"</td>"+
                                "<td>"+data[key].Vdate+"</td>"+
                                "<td>"+data[key].total_tickets+"</td>"+
                                "<td>"+data[key].adult+"</td>"+
                                "<td>"+data[key].child+"</td>";
                                if(data[key].delrequest==0){
                                    html+="<td>NO</td>";
                                }else{
                                    html+="<td>YES</td>";
                                }
                                html+="<td><button type='submit' class='w3-button w3-red red' data-id='"+data[key].id+"'>Delete</button><td></tr>";
                            
                            })
                            console.log(html)
                        }
                        console.log("this"+html)
                        $("#search").append(html)
                    }
                })
            }
        }

        $("#demo").on("click",".red", function(){
            console.log("gh")
            delid=$(this).attr("data-id")
            deltr=".book"+delid
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
    </script>
</body>
</html>