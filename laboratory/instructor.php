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
		<a href="addInstructor.php"><button type="button" style="height:50px; width:100px">Add Instructor</button></a>
		
		<br><br>
		<table  style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%;">
		  <tr style="background-color: #dddddd;">
			<th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Instructor ID</th>
			<th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">First Name</th>
			<th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Last Name</th>
			<th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Middle Name</th>
			<th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Status</th>
			<th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Department</th>
			<th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Operation</th>
		  </tr>
		   <?php
				include_once 'includes/db.inc.php';
				
				$sql = "SELECT * FROM instructor;";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
				?>
		  <tr style="background-color: #dddddd;">
			<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;"><?php echo $row["instructor_id"]; ?></td>
			<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;"><?php echo $row["first_name"]; ?></td>
			<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;"><?php echo $row["last_name"]; ?></td>
			<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;"><?php echo $row["middle_name"]; ?></td>
			<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;"><?php echo $row["department"]; ?></td>
			<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;"><?php echo $row["status"]; ?></td>
			<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;"><a href="includes/deleteInstructor.inc.php?id=<?php echo $row["instructor_id"]; ?>">Delete</a> <a href="">Edit</a></td>
		  </tr>
		  <?php		}
				
				}
				?>
		</table>

	</center>
		


</body>

</html>