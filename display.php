<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONLINE REGISTRATION</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
     <?php include 'link.php'  ?>
</head>
<body>
    

    <!--part one start-->
    <!--for header-->
    <section class="sub-header">
        <nav>
            
            <div class="nav-links" id="navLinks">
                <i class="fas fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="department.html">DEPARTMENTS</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
					<li><a href="reg.php">ONLINE REGISTRATION</a></li>
                </ul>


            </div>
            <i class="fas fa-bars" onclick="showMenu()"></i>
        </nav>

        <h1>LIST OF REGISTRATION</h1>

    </section>
    <!--end header-->
        <!--part one end-->
        
    <!--part two start-->
          <section class="contact">
           <div class="main-div">
        
      
        <table id="example" class="table table-striped table-bordered" style="width:100%; text-align:center;">
        <thead>
            <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Student ID</th>
                        <th>Department</th>
                        <th>Semester</th>
                        <th>Course Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th colspan="2">operation</th>
                       
            </tr>
        </thead>
        <tbody>

                        <?php


                include 'connection.php';

                $selectQuery = " select * from registration" ;

                $query = mysqli_query($con,$selectQuery);

                $nums = mysqli_num_rows($query);


                while($res = mysqli_fetch_array($query)){

                    ?>

            <tr>
            
            
                        <td><?php echo $res['id'];  ?></td>
                        <td><?php echo $res['name'];  ?></td>
                        <td><?php echo $res['student_id'];  ?></td>
                        <td><?php echo $res['department'];  ?></td>
                        <td><?php echo $res['semester'];  ?></td>
                        <td><?php echo $res['course'];  ?></td>
                        <td><?php echo $res['mobile'];  ?></td>
                        <td><span class="email-style"><?php echo $res['email'];?></span></td>
                        <td><a href="update.php?id=<?php echo $res['id'];  ?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE"> <i class="fa fa-edit"></i></a></td>
                        <td><a href="delete.php?id=<?php echo $res['id'];  ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash"></i></a></td>
            </tr>
                <?php
                }

                ?>
            
            
            
           
           
           
            
    </table>
   

    </div>




    <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>


          </section>

    <!--part two end-->
    

    </section>
    <!--part five end-->
           <!--part six start-->
           <section class="footer"> 
               <h4>About Us</h4>
               <p>Nonumy tempor sanctus diam amet tempor magna, dolor gubergren nonumy consetetur est clita no. Sit ut dolores <br>dolor sadipscing. Justo tempor eos sadipscing sanctus amet justo dolore dolore, ipsum sea.</p>
            <div class="icons">
                <i class="fab fa-2x fa-facebook-square"></i>
                <i class="fab fa-2x fa-instagram-square"></i>
                <i class="fab fa-2x fa-twitter-square"></i>
                <i class="fab fa-2x fa-linkedin"></i>
            </div>
            <p>Made by <i style="color: #c213c2;" class="far fa-lg fa-registered"></i> SADIA</p>
           </section>
           <!--part six end-->

    <!--Js For Menu-->
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-250px";
        }

    </script>
</body>
</html>