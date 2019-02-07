<!DOCTYPE html>
<html>

<head>
<title>Laboratory Exam</title>
</head>

<body>	

	<br>
	<a href="home.php">HOME</a>	
	<center>
		<h1><b>Instructor</b></h1><br>	
		<form action="includes/addInstructor.inc.php" method="POST">
			  Instructor ID :<br>
			  <input type="text" name="instructor_id" placeholder="instructor id"><br><br>
			  First Name :<br>
			  <input type="text" name="first_name" placeholder="first name"><br><br>
			  Last Name :<br>
			  <input type="text" name="last_name" placeholder="last name"><br><br>
			  Middle Name :<br>
			  <input type="text" name="middle_name" placeholder="middle name"><br><br>
			  Status :<br>
			  <select name="status" >
					<option value="Single">Single</option>
					<option value="Married">Married</option>
					<option value="Divorced">Divorced</option>
					<option value="Widowed">Widowed</option>
			  </select><br><br>
			  Department :<br>
			  
			  <select name="department_name">
			  <?php
				include_once 'includes/db.inc.php';
				
				$sql = "SELECT * FROM department;";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
				?>
					<option value="<?php $row["department_id"]; ?>"><?php echo $row["department_name"]; ?></option>
				<?php		}
				
				}
				?>
			  </select>
			  <br><br>
			  
			  
			  <input type="submit" name="submit">
			  <a href="instructor.php">Cancel</a>	
		</form>
		
		

	</center>
		


</body>

</html>