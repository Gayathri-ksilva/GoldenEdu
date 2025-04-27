<?php 
session_start(); 

include 'adminconfig.php';

if(isset($_POST['submit'])){

	$subject = $_POST['name'];
	$subject = filter_var($subject, FILTER_SANITIZE_STRING);
	$description = $_POST['description'];
	$description = filter_var($description, FILTER_SANITIZE_STRING);
	
 
	$image = $_FILES['image']['name'];
	$image = filter_var($image, FILTER_SANITIZE_STRING);
	$ext = pathinfo($image, PATHINFO_EXTENSION);
	$rename = $image.'.'.$ext;
	$image_size = $_FILES['image']['size'];
	$image_tmp_name = $_FILES['image']['tmp_name'];
	$image_folder = '../upload_files/'.$rename;
 
	$insertquery =
        "INSERT INTO `subject`(`subject`, `description`, `image`) VALUES ('$subject','$description','$rename')";
        $iquery = mysqli_query($conn, $insertquery);
 
	move_uploaded_file($image_tmp_name, $image_folder);
 
	echo"
	<script>
	  alert('Subject added successfully');
	  window.location.href='adminPanel.php';
   </script>";
	 
 
 }
				 
     
         
    
 


?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Subject</title>
	<link rel="stylesheet" type="text/css" href="formStyle.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body> 
	<div class="container">
		<div class="contact-box">
			<div class="right">
				<h2>Add Subject</h2> 
				<form action="" method="POST" enctype="multipart/form-data"> 
                      
					    
                       <p>Subject <span>*</span></p>
						 <input type="text" name="name" maxlength="100" required placeholder="enter subject" class="field">
						 <p>Class Time<span>*</span></p>
						 <textarea placeholder="grade day[time]" class="field"required name="description" required></textarea>
		                 <p>Image<span>*</span></p>
                         <input type="file" name="image" accept="image/png, image/jpg, image/jpeg" placeholder="upload image" class="field" required>
				
				<input type="submit" value="NEXT" class="btn" name="submit"> 
			</form> <br>
			<a href="adminPanel.php"><input type="submit" value="HOME" class="btn"> </a>
			</div> 
			
			<div class="left">
				
			</div>
		</div>
	</div>
</body>
</html>