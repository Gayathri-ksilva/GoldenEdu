<?php  
session_start();
            
                require_once "config.php";
               
                    $email=$_GET['email'];
					echo $email;
                  
             

                if(isset($_POST['update'])){
                    $stid=$_POST['stid'];
                    $newpass =md5( $_POST['newpassword']);
					echo $newpass;
                    $update_query = mysqli_query($conn, "UPDATE `student` SET `password`=' $newpass'   WHERE email  = '$email'");
                 
                    echo"
                    <script>
                      alert('Update successfully');
                      window.location.href='index.php';
                   </script>";
                     
                 
                 }
             
                ?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Password</title>
	<link rel="stylesheet" type="text/css" href="formStyle.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body> 
	<div class="container">
		<div class="contact-box">
			<div class="right">
				<h2>Update Password</h2> 
				<form action="" method="POST"> 
				<input type="hidden" name="stid" maxlength="100" required class="field" value="<?php echo $strow['st_id'] ?>">
				<input type="password" class="field" placeholder="New password" name="newpassword" required>
				
				<input type="password" class="field" placeholder="Re enter" name="repassword" required>
				
				<input type="submit" value="SEND" class="btn" name="update"> 
			</form> <br>
			<a href="index.php"><input type="submit" value="HOME" class="btn"> </a>
			</div>
			<div class="left">
				
			</div>
		</div>
	</div>
</body>
</html>