<?php  
session_start();
   @include 'config.php'; 

   if(isset($_POST['login'])){
	   $email= $_POST['email'];
	   $pass=md5($_POST['password']);

	   $select="SELECT *FROM student WHERE email='$email' && password='$pass'";
	   $result=mysqli_query($conn, $select); 

	   if(mysqli_num_rows($result)===1){ 
		   $row = mysqli_fetch_assoc($result); 

		           if($row['email']===$email && $row['password']===$pass){ 
					$_SESSION['email']=$email;
			             echo"
			             <script>
				            alert('Successfully login');
				            window.location.href='index.php';
			            </script>";
		            }  

		           else{
			             echo"
			               <script>
				              alert('incorrect input');
			              </script>";
		               }
		 
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
	<link rel="stylesheet" type="text/css" href="css/loginstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/edu.svg">
		</div>
		<div class="login-content">
			<form action="" method="POST">
				<img src="img/lg.png">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="text" class="input" name="email">
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
				<!--<input type="submit" class="btn" value="Forget password" name="forget-password">-->
				<p class="stat">Do not have an account</p> 
				<a href="registerform.php">Create Account</a>
            </form>
        </div>
    </div>  
	
	<!--create popup message-->
<!--	<div class="popup" id="popup">
            <h2> Forget Password</h2>
            <p> Enter your Email address.</p>
			<div class="login-content">
			<form action="restpassword.php" method="POST">
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="text" class="input" name="email">
           		   </div>
           		</div> 
				<input type="submit" class="btn" value="Send" name="send">  
            </form>
        </div>
            <a href="login.php"> 
                <button  onclick="closePopup()">CLOSE</button>
            </a>
        </div>
    </div>  -->

	

	
    <script type="text/javascript" src="main.js"></script>
</body>
</html> 


 


