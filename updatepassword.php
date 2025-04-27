<!DOCTYPE html>
<html>
<head>
	<title>Reset Form</title>
	<link rel="stylesheet" type="text/css" href="css/loginstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>  

<?php 
   @include 'config.php'; 

   $rt=$_GET['resetToken'];
   echo $rt; 
   $mail=$_GET['email'];
   echo $mail;
     
  
	date_default_timezone_set('Asia/kolkata');
	$date=date("Y-m-d");
	$query="SELECT * FROM 'student' WHERE email='$mail'";
	$result=mysqli_query($conn,$query);

	if($result){ 
		if(mysqli_num_rows($result==1)){
			echo"
			hhhhhhhhhh
			";
		} 
		else{
			echo"
			<script>
			alert('Invalid or Expired Link');
			</script>
			";
		}

	} 
	
   
?>


	
    <script type="text/javascript" src="main.js"></script>
</body>
</html> 

