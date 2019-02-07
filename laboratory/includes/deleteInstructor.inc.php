<?php
require('db.inc.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM instructor WHERE instructor_id=$id"; 
$result = mysqli_query($conn,$query) ;

header("Location: ../instructor.php?delete=success");

