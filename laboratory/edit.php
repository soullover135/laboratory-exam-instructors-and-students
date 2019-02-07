<?php

  include_once 'includes/db.inc.php';
  $department_id = $_GET['id'];
  
 	if(isset($_GET['id'])){

	$get_department = mysqli_query($conn, "SELECT * FROM department where department_id = '$department_id'");

    $row = mysqli_fetch_array($get_department);
    }

	if(isset($_POST['update'])){
		
		$department_id = $_POST['department_id'];
		$department_name = $_POST['department_name'];

    
    $update = "UPDATE `department` SET `department_id`=[$department_id],`department_name`=[$department_name] WHERE department_id=department_id;";
    if (mysqli_query($conn, $update)) {

      header('location: department.php');
    }else {
      echo "Error: " . $update . "<br>" . mysqli_error($conn);
    }

      }
    
?>







<!DOCTYPE html>
<html>

<head>
<title>Laboratory Exam</title>
</head>

<body>

	<br>
	<a href="home.php">HOME</a>	
	<center>
		<h1><b>Department</b></h1><br>	
		<form action="edit.php?id=<?php echo $_GET['department_id']; ?>" method='POST'>

		  Department ID :<br>
		  <input type="text" name="department_id" value="<?php  echo $row['department_id'];  ?>"><br><br><br>
		  Department Name :<br>
		  <input type="text" name="department_name" value="<?php  echo $row['department_name'];  ?>"><br><br>
			  <input type="submit" name="update">
			  <a href="department.php">Cancel</a>
		</form>

	</center>
		


</body>

</html>