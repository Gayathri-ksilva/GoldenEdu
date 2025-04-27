<?php

include 'adminconfig.php';

//if(isset($_COOKIE['tutor_id'])){
   //$tutor_id = $_COOKIE['tutor_id'];
//}else{
   //$tutor_id = '';
   //header('location:login.php');
//}

if(isset($_POST['upload'])){ 
    $subject = $_POST['subject'];
    $subject = filter_var($subject, FILTER_SANITIZE_STRING);
    $lesson = $_POST['lesson'];
    $lesson = filter_var($lesson, FILTER_SANITIZE_STRING);
    $grade = $_POST['grade'];
    $grade = filter_var($grade, FILTER_SANITIZE_STRING); 
   

   
    if (isset($_FILES['pdf']['name'])){ 
      $pdf = $_FILES['pdf']['name'];
      $pdf = filter_var($pdf, FILTER_SANITIZE_STRING);
      $ext = pathinfo($pdf, PATHINFO_EXTENSION);
      $rename = $pdf.'.'.$ext;
      $pdf_size = $_FILES['pdf']['size'];
      $pdf_tmp_name = $_FILES['pdf']['tmp_name'];
      $pdf_folder = '../upload_files/'.$rename;  
    

      $insertquery =
        "INSERT INTO `lessons`( subject, grade, lesson, pdf) VALUES('$subject', '$grade', '$lesson', '$rename')";
        $iquery = mysqli_query($conn, $insertquery);
   
      move_uploaded_file($pdf_tmp_name, $pdf_folder); 

                    echo"
                    <script>
                      alert('New lesson added successfully');
                      window.location.href='adminPanel.php';
                   </script>";
   
       
         
    }
 
 }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Lesson</title>
	<link rel="stylesheet" type="text/css" href="formStyle.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body> 
	<div class="container">
		<div class="contact-box">
			<div class="right">
				<h2>Upload Lesson</h2> 
				<form action="" method="POST" enctype="multipart/form-data"> 
					<p>Subject <span>*</span></p> 
               
                       <select name="subject" class="field" required>
                        <option value="" selected disabled>-- select subject</option>
                        <?php
					            require_once "./adminconfig.php";
					
					          //read all row from database
					          $sql="SELECT* FROM subject";
					          $result=mysqli_query($conn,$sql);
					           if(!$result){
					          	die("invalid query:".mysqli_connect_error());
				          	}
					      while($row=mysqli_fetch_assoc($result)){?>
                         <option value="<?php echo $row['subject'];?>"><?php echo $row['subject'];?></option>
                         <?php } ?>
                         </select>  

						 <p>Grade <span>*</span></p>
                        <select name="grade" class="field" required>
                        <option value="" selected disabled>-- select grade</option>
                         <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option> 
                         </select>  

						 <p>Lesson <span>*</span></p>
						 <input type="text" name="lesson" maxlength="100" required placeholder="enter lesson" class="field">
		 
						 <p>Upload PDF <span>*</span></p>
						 <input type="file" name="pdf" accept=".pdf" required class="field">		 
				
				<input type="submit" value="Upload Lesson" class="btn" name="upload"> 
			</form> <br>
			<a href="adminPanel.php"><input type="submit" value="HOME" class="btn"> </a>
			</div>
			<div class="left">
				
			</div>
		</div>
	</div>
</body>
</html>