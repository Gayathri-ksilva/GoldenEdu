<?php  
session_start();
            
                require_once "config.php";
                if(isset($_SESSION['email'])){ 
                    $email=$_SESSION['email'];
                  $query="SELECT * FROM student WHERE  email='$email'";
                  $stresult=mysqli_query($conn,$query);
                 $strow=mysqli_fetch_assoc($stresult); 
                 $id=$strow['st_id']; 
                 $fname=$strow['first_name'];
                } 

                if(isset($_POST['update'])){
                    $stid=$_POST['stid'];
                    $newfirstname = $_POST['newfirstname'];
                    $newfirstname = filter_var($newfirstname, FILTER_SANITIZE_STRING);
                    $newlastname = $_POST['newlastname'];
                    $newlastname = filter_var($newlastname, FILTER_SANITIZE_STRING);
                    $newemail = $_POST['newemail'];
                    $newemail = filter_var($newemail, FILTER_SANITIZE_STRING);
                    $newphone = $_POST['newphone'];
                    $newphone = filter_var($newphone, FILTER_SANITIZE_STRING);
                    $newgrade = $_POST['newgrade'];
                    $newgrade = filter_var($newgrade, FILTER_SANITIZE_STRING);
                    
                 
                 
                    $update_query = mysqli_query($conn, "UPDATE `student` 
                           SET `first_name`=' $newfirstname',`last_name`='$newlastname',`email`='$newemail',`phone`='$newphone',`grade`='$newgrade'
                           WHERE st_id  = '$stid'");
                 
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
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="profile.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body> 
	<div class="container">
		<div class="contact-box">
			<div class="right">
				<h2>Welcome to GOLDEN EDU</h2> 
				<form action="" method="POST">
                <input type="hidden" name="stid" maxlength="100" required class="field" value="<?php echo $strow['st_id'] ?>"> 

                <p>First Name <span>*</span></p>
                 <input type="text" name="newfirstname" maxlength="100" required class="field" value="<?php echo $strow['first_name'] ?>"> 

                 <p>Last Name <span>*</span></p>
                 <input type="text" name="newlastname" maxlength="100" required  class="field" value="<?php echo $strow['last_name'] ?>"> 

                 <p>Email <span>*</span></p>
                <input type="email" name="newemail" maxlength="100" required  class="field" value="<?php echo $strow['email'] ?>"> 

                 <p>Phone  <span>*</span></p>
                 <input type="text" name="newphone" maxlength="100" required  class="field" value="<?php echo $strow['phone'] ?>">

                 <p>Grade  <span>*</span></p>
                 <input type="text" name="newgrade" maxlength="100" required  class="field" value="<?php echo $strow['grade'] ?>">        
				<input type="submit" value="UPDATE" class="btn" name="update"> 
			</form> <br>
            <a href="index.php"><input type="submit" value="HOME" class="btn"> </a>
			</div>
			<div class="left">
            
               
                
			</div> 
		</div>
	</div> 
    

    <script type="text/javascript" src="adminmain.js"></script>
</body>
</html>