<?php  
session_start();
   @include 'adminconfig.php'; 

   if(isset($_POST['login'])){
	   $uname= $_POST['username'];
	   $pass=($_POST['password']);

	   $select="SELECT *FROM admin ";
	   $result=mysqli_query($conn, $select); 
	   $row = mysqli_fetch_assoc($result); 

		           if($row['username']===$uname && $row['password']===$pass){ 
					$_SESSION['email']=$email; 
			             echo"
			             <script>
				            alert('Successfully login');
				            window.location.href='adminPanel.php';
			            </script>";
		            }  

		           else{
			             echo"
			               <script>
				              alert('incorrect input');
			              </script>";
		               }
		
   } 
   
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="adminloginstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/knowledge.svg">
		</div>
		<div class="login-content">
			<form action="" method="POST">
				<img src="img/lg.png">
				<h2 class="title">Admin Login</h2>
				<h4 class="title">Username:admin</h4>
				<h4 class="title">Password:admin1234</h4>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>  
				
            	<input type="submit" class="btn-login" value="Login" name="login">  
            </form>
        </div>
    </div>  
	 

	

	
    <script type="text/javascript" src="adminmain.js"></script>
</body>
</html> 

