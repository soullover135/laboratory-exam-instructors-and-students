 <?php

	if(isset($_POST['update'])){
		include_once 'includes/db.inc.php';
		$Department_id = $_POST['department_id'];
		$Department_name = $_POST['department_name'];

    
    $update = "UPDATE `department` SET `department_id`='$Department_id',`department_name`='$Department_name' WHERE department_id=".$Department_id;
    if (mysqli_query($conn, $update)) {

      header('location: department.php');
    }else {
      echo "Error: " . $update . "<br>" . mysqli_error($conn);
    }

      }
    