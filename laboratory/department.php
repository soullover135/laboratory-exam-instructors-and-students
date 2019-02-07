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
		<a href="addDepartment.php"><button type="button" style="height:50px; width:100px">Add Department</button></a>
		<br><br>
		<table  style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%;">
		  <tr style="background-color: #dddddd;">
			<th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Department ID</th>
			<th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Department Name</th>
			<th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Operation</th>
		  </tr>
		  <?php
				include_once 'includes/db.inc.php';
				
				$sql = "SELECT * FROM department;";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
				?>
		  <tr style="background-color: #dddddd;">
			<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;"><?php echo $row["department_id"]; ?></td>
			<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;"><?php echo $row["department_name"]; ?></td>
			<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;"><a href="includes/deleteDepartment.inc.php?id=<?php echo $row["department_id"]; ?>">Delete</a> <a href="edit.php?id=<?php echo $row["department_id"]; ?>">Edit</a></td>
		  </tr>
		  <?php		}
				
				}
				?>
		</table>
	</center>
		


</body>

</html>