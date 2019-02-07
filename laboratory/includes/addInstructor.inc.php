<?php

if (isset($_POST['submit'])){
	
	include_once 'db.inc.php';
	
	$id = mysqli_real_escape_string($conn, $_POST['instructor_id']);
	$first = mysqli_real_escape_string($conn, $_POST['first_name']);
	$last= mysqli_real_escape_string($conn, $_POST['last_name']);
	$middle = mysqli_real_escape_string($conn, $_POST['middle_name']);
	$status = mysqli_real_escape_string($conn, $_POST['status']);
	$department = mysqli_real_escape_string($conn, $_POST['department_name']);

	$sql = "INSERT INTO `instructor`(`instructor_id`, `first_name`, `last_name`, `middle_name`, `department`, `status`) VALUES ('$id', '$first', '$last', '$middle', '$department', '$status');";
	mysqli_query($conn, $sql);
		
	header("Location: ../instructor.php?save=success");
}