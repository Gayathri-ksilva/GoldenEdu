<?php 
session_start(); 

include 'admin.php';

if(isset($_POST['update'])){
    $updateid=$_POST['updateid'];
	$updatesubject = $_POST['updatename'];
	$updatesubject = filter_var($updatesubject, FILTER_SANITIZE_STRING);
	$updatedescription = $_POST['updatedescription'];
	$updatedescription = filter_var($updatedescription, FILTER_SANITIZE_STRING);
	
 
	$image = $_FILES['updateimage']['name'];
	$image = filter_var($image, FILTER_SANITIZE_STRING);
	$ext = pathinfo($image, PATHINFO_EXTENSION);
	$rename = $image.'.'.$ext;
	$image_size = $_FILES['updateimage']['size'];
	$image_tmp_name = $_FILES['updateimage']['tmp_name'];
	$image_folder = '../upload_files/'.$rename;
 
	$update_query = mysqli_query($conn, "UPDATE `subject` 
		   SET `subject`=' $updatesubject',`description`='$updatedescription',`image`='$rename'
		   WHERE sub_id  = '$updateid'");
 
	move_uploaded_file($image_tmp_name, $image_folder);
 
	echo"
	<script>
	  alert('Update successfully');
	  window.location.href='editSubject.php';
   </script>";
	 
 
 }
				 
     
         
    
 


?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Subject</title>
	<link rel="stylesheet" type="text/css" href="formStyle.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body> 
	<div class="container"> 
    <?php
    require 'admin.php';
    /* delete lesson */
    if(isset($_GET['edit'])){
        $edit_id = $_GET['edit'];
        $edit_query = mysqli_query($conn, "SELECT * FROM `subject` WHERE sub_id = '$edit_id' ") or die('query failed');
        if(!$edit_query){
            die("invalid query:".mysqli_connect_error());
        }
        while($row=mysqli_fetch_assoc($edit_query)){?> 
		<div class="contact-box">
			<div class="right">
				<h2>Update Subject</h2> 
				<form action="" method="POST" enctype="multipart/form-data"> 
                      
                <img src="../upload_files/<?php echo $row['image']; ?>" height="200" alt=""> <br><br> 
                <input type="hidden" name="updateid" maxlength="100" required value="<?php echo $row['sub_id']?>" class="field">
                       <p>Subject <span>*</span></p>
						 <input type="text" name="updatename" maxlength="100" required value="<?php echo $row['subject']?>" class="field">
						 <p>Class Time<span>*</span></p> 
						 <textarea class="field"required name="updatedescription"><?php echo $row['description']?></textarea>
		                 <p>Image<span>*</span></p>
                         <input type="file" name="updateimage" accept="image/png, image/jpg, image/jpeg" placeholder="upload image" class="field" required>
				<?php      } }
                   ?>
				<input type="submit" value="UPDATE" class="btn" name="update"> 
			</form> <br>
			<a href="editSubject.php"><input type="submit" value="CLOSE" class="btn"> </a>
			</div> 
			
			<div class="left">
				
			</div>
		</div>
	</div>
</body>
</html>


