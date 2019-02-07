<?php

  include_once 'includes/db.inc.php';
  $contact_id = $_GET['id'];
  
 	if(isset($_GET['id'])){

	$get_contact = mysqli_query($conn, "select * from Department where Department_id = '$contact_id'");

  $row = mysqli_fetch_array($get_contact);
   }

	
   if(isset($_POST['update'])){
		$Department_id = $_POST['department_id'];
		$Department_name = $_POST['department_name'];

    
    $update = "UPDATE `Department` SET `Department_id`='$Department_id',`Department_name`='$Department_name' WHERE Department_id=".$contact_id;
    if (mysqli_query($conn, $update)) {

      header('location: list.php');
    }else {
      echo "Error: " . $update . "<br>" . mysqli_error($con);
    }

      }
        
?>
<!DOCTYPE html>
<html>
  <title>Lab_Exam</title>
<body>
    <center><h1>Department</h1>
     <h3>Edit Department</h3>
      <form action="edit1.php?id=<?php echo $_GET['department_id']; ?>" method='POST'>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <input type="hidden"  name="contact_id" value="<?php echo $row[0]; ?>">
      <label for="validationCustom01">Department ID</label>
      <input name="Department_id" type="text" value="<?php  echo $row['department_id'];  ?>" class="form-control" id="validationCustom01" placeholder="Department ID"  autofocus required>
  </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Department Name</label>
      <input name="Department_name" type="text" value="<?php  echo $row['department_name'];  ?>" class="form-control"  id="validationCustom02" placeholder="Department Name" value="" required>
     </div>
          <form class="myform" method="post">
                    <input class="btn" type="submit" name ="update" id="save_btn" value="Update"/>
                   
          </form>
    </form>
  </center>
</body>
</html>
