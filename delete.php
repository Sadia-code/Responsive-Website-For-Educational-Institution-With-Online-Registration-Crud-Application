<?php

include 'connection.php';

$id = $_GET['id'];

$deleteQuery = "delete from registration where id=$id";

$deleteData = mysqli_query($con,$deleteQuery);

if($deleteData){
    ?>
    <script> 
    alert("Data Deleted Properly");
    </script>
    <?php
}

else{
    ?>
    <script> 
    alert("Data Not Deleted");
</script>
    <?php

}

header('location:display.php');



?>