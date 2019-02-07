<?php

if (isset($_POST['submit'])){
	
	include_once 'db.inc.php';
	
	$id = mysqli_real_escape_string($conn, $_POST['department_id']);
	$name = mysqli_real_escape_string($conn, $_POST['department_name']);
	$sql = "INSERT INTO department (department_id, department_name) VALUES ('$id', '$name');";
	mysqli_query($conn, $sql);
		
	header("Location: ../department.php?save=success");
}