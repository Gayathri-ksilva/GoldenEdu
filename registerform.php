<?php 
   @include 'config.php'; 

   if(isset($_POST['register'])){
	   $first_name= $_POST['firstName'];
	   $last_name= $_POST['lastName'];
	   $grade= $_POST['grade'];
	   $phone= $_POST['phone'];
	   $email= $_POST['email'];
	   $pass=md5($_POST['password']);
	   $cpass=md5($_POST['comfirm-password']); 

	   $select="SELECT *FROM student WHERE email='$email' && password='$pass'";
	   $result=mysqli_query($conn, $select);

	   if(mysqli_num_rows($result)>0){
		echo"
		<script>
			alert('student already exists');
			window.location.href='registerform.php';
		</script>";
	   } 

	   else{
		$insert = "INSERT INTO student (first_name,last_name,grade,phone,email,password) VALUES ('$first_name','$last_name','$grade','$phone','$email','$pass' )";
		mysqli_query($conn, $insert);
		echo"
		<script>
			alert('student successfully added');
			window.location.href='login.php';
		</script>";
	   }

   }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
	<link rel="stylesheet" type="text/css" href="css/registerstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/add.svg">
		</div>
		<div class="login-content">
			<form action="" method="post">
				
				<h3 class="title">Create Account</h3>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i> 
           		   </div>
           		   <div class="div">
           		   		<h5>First Name</h5>
           		   		<input type="text" class="input" id="first-name" onkeyup="validateFirstName()" name="firstName" > 
							  <span id="first-name-error"></span>
           		   </div>
           		</div>  

				   <div class="input-div one">
					<div class="i">
							<i class="fas fa-user"></i> 
					</div>
					<div class="div">
							<h5>Last Name</h5>
							<input type="text" class="input" id="last-name" onkeyup="validateLastName()" name="lastName"  > 
							<span id="last-name-error"> </span>
					</div>
				 </div> 

				 <div class="input-div one">
					<div class="i">
							<i class="fas fa-user-graduate"></i> 
					</div>
					<div class="div">
							<h5>Grade</h5>
							<input type="text" class="input" id="grade" onkeyup="validateGrade()" name="grade" > 
					        <span id="grade-error"> </span>
					</div>
				 </div> 
	            <div class="input-div one">
		           <div class="i"> 
			             <i class="fas fa-phone"></i>
		            </div>
		            <div class="div">
			              <h5>Phone</h5>
			              <input type="text" class="input" id="phone" onkeyup="validatePhone()" name="phone">
			              <span id="phone-error">  </span>
	                </div>
                 </div>    
                <div class="input-div one">
	                <div class="i"> 
		                 <i class="fas fa-envelope-open"></i>
	                </div>
             	<div class="div">
		             <h5>Email</h5>
		             <input type="text" class="input" id="email" onkeyup="validateEmail()" name="email">
		             <span id="email-error">  </span>
                </div>
              </div>  
              <div class="input-div pass">
	             <div class="i"> 
		                 <i class="fas fa-lock"></i>
	              </div>
	              <div class="div">
		                <h5>Password</h5>
		                 <input type="password" class="input" id="password" onkeyup="validatePassword()" name="password"> 
		                 <span id="password-error">  </span>
                  </div> 
            </div> 
            <div class="input-div pass">
	            <div class="i"> 
		             <i class="fas fa-lock"></i>
	            </div>
	            <div class="div">
		        <h5>Confirm Password</h5>
		        <input type="password" class="input" id="comfirm-password" onkeyup="validateComfirmPassword()" name="comfirm-password" > 
		        <span id="com-password-error">  </span>
                </div>
             </div>  

			 
         <div class="div-btn">  
            	<button type="submit" class="btn-login" onclick="return validateForm()" name="register"> Register </button>
				<span id="submit-error">  </span> 
				<p class="stat">Already Have an Account</p>
				<center>
				<a href="login.php">Login</a> 
				</center>
            </form> 
        </div>
    </div>  
	
    <script type="text/javascript" src="main.js"></script>
</body>
</html> 
