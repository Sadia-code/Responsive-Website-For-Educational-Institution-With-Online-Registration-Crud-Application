


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <?php include 'link.php'  ?>
 
</head>
<body>

<div class="container">
        <form action="" method="POST">
        <?php

                include 'connection.php';

                $ids = $_GET['id'];

                $showQuery = " select * from registration where id=($ids)" ;
                $showData = mysqli_query($con,$showQuery);
                $arrdata = mysqli_fetch_array($showData);

                if(isset($_POST['submit'])){

                    $idUpdate = $_GET['id'];

                    $name = $_POST['name'];
                    $studentId = $_POST['studentid'];
                    $department = $_POST['department'];
                    $semester = $_POST['semester'];
                    $course = $_POST['courses'];
                    $mobile = $_POST['mobile'];
                    $email = $_POST['email'];

                   // $insertQuery = "insert into registration(name,student_id,department,semester,course,mobile,email) 
                   // values('$name','$studentId','$department','$semester','$course','$mobile','$email') ";

                    $updateQuery = "update registration set id=$idUpdate, name='$name', student_id='$studentId', department='$department', semester='$semester', course='$course', mobile='$mobile', email='$email' where id=$idUpdate ";

                $res = mysqli_query($con,$updateQuery);

                if($res){
                    ?>
                    <script> 
                    alert("Data Updateded Properly");
                    </script>
                    <?php
                }

                else{
                    ?>
                    <script> 
                    alert("Data Not Updated");
                </script>
                    <?php

                }

                }

?>
            <div class="form-group">
                <label for="usr">Name:</label>
                <input type="text" class="form-control" placeholder="Enter name" id="usr" name="name" value="<?php echo $arrdata['name'];  ?>" required>
              </div>

              
            <div class="form-group">
                <label for="usr">Student ID:</label>
                <input type="text" class="form-control" placeholder="Enter id" id="usr" name="studentid" value="<?php echo $arrdata['student_id'];  ?>" required>
              </div>

              <div class="form-group">
                <label for="usr">Department:</label>
                <input type="text" class="form-control" placeholder="Enter department" id="usr" name="department" value="<?php echo $arrdata['department'];  ?>" required>
              </div>
              <div class="form-group">
                <label for="usr">Semester:</label>
                <input type="text" class="form-control" placeholder="Enter semester" id="usr" name="semester" value="<?php echo $arrdata['semester'];  ?>" required>
              </div>
              <div class="form-group">
                <label for="usr">Courses:</label>
                <input type="text" class="form-control" placeholder="Enter course name" id="usr" name="courses" value="<?php echo $arrdata['course'];  ?>" required>
              </div>
              <div class="form-group">
                <label for="usr">Mobile:</label>
                <input type="text" class="form-control" placeholder="Enter mobile" id="usr" name="mobile" value="<?php echo $arrdata['mobile'];  ?>" required>
              </div>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" value="<?php echo $arrdata['email'];?>" required>
            </div>
           
            <div class="form-group form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
              </label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary" value="UPDATE">UPDATE</button>
            <a href="display.php" class="btn btn-primary">Check</a>
          </form>
          
      </div>


</body>
</html>

