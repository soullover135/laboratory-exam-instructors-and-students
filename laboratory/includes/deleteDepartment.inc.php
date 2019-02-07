<?php
require('db.inc.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM department WHERE department_id=$id"; 
$result = mysqli_query($conn,$query) ;

header("Location: ../department.php?delete=success");

