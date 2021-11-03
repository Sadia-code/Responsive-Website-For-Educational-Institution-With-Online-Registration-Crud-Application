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

        <h1>REGISTER YOUR COURSE  HERE</h1>

    </section>
    <!--end header-->
        <!--part one end-->
        
    <!--part two start-->
          

    <!--part two end-->
     <!--part three start-->
    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                <i class="fas fa-home"></i>
                <span>
                    <h5>Shib Bari Circle, Sonadanga, Khulna-9100</h5>
                </span>
            </div>
            <div>
                <i class="fas fa-phone"></i>
                <span>
                    <h5>041-813844, Ext. 104</h5>
                </span>
            </div>
            <div>
                <i class="fas fa-mobile"></i>
                <span>
                    <h5>01755 514 662, 01755 514 663</h5>
                </span>
            </div>
            <div>
                <i class="fas fa-envelope"></i>
                <span>
                    <h5>info@nubtkhulna.ac.bd</h5>
                </span>
            </div>
            </div>
           
            <div class="contact-col">
                <h3>Fill the form</h3>
                <form action="" method="POST">
            <div class="form-group">
                <label for="usr"></label>
                <input type="text" class="form-control" placeholder="Enter name" id="usr" name="name" required>
              </div>

              
            <div class="form-group">
                <label for="usr"></label>
                <input type="text" class="form-control" placeholder="Enter id" id="usr" name="studentid" required>
              </div>

              <div class="form-group">
                <label for="usr"></label>
                <input type="text" class="form-control" placeholder="Enter department" id="usr" name="department" required>
              </div>
              <div class="form-group">
                <label for="usr"></label>
                <input type="text" class="form-control" placeholder="Enter semester" id="usr" name="semester" required>
              </div>
              <div class="form-group">
                <label for="usr"></label>
                <input type="text" class="form-control" placeholder="Enter course name" id="usr" name="courses" required>
              </div>
              <div class="form-group">
                <label for="usr"></label>
                <input type="text" class="form-control" placeholder="Enter mobile" id="usr" name="mobile"required >
              </div>
            <div class="form-group">
              <label for="email"></label>
              <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" required>
            </div>
           
            <div class="form-group form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
              </label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <a href="display.php" class="btn btn-primary">Check</a>
          </form>
            </div>
        </div>


    </section>
          <!--part three end-->
     <!--part five start-->

     <section class="action">
        <h1>Enroll For More Information</h1>
        <a href="#" class="for-text-btn">CONTACT US</a>

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
<?php

include 'connection.php';

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $studentId = $_POST['studentid'];
    $department = $_POST['department'];
    $semester = $_POST['semester'];
    $course = $_POST['courses'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    $insertQuery = "insert into registration(name,student_id,department,semester,course,mobile,email) 
    values('$name','$studentId','$department','$semester','$course','$mobile','$email') ";

   $res = mysqli_query($con,$insertQuery);

   if($res){
       ?>
    <script> 
    alert("Data Inserted Properly");
    </script>
       <?php
   }

   else{
    ?>
    <script> 
    alert("Data Not Inserted");
   </script>
       <?php

   }

}

?>