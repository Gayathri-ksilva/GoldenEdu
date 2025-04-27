<?php 
session_start(); 

include 'adminconfig.php';

if(isset($_POST['submit'])){ 
	$quid = $_POST['qid'];
    $quid = filter_var($quid, FILTER_SANITIZE_STRING);
    $qname = $_POST['name'];
    $qname = filter_var($qname, FILTER_SANITIZE_STRING);
    $subject = $_POST['subject'];
    $subject = filter_var($subject, FILTER_SANITIZE_STRING);
    $lesson = $_POST['lesson'];
    $lesson = filter_var($lesson, FILTER_SANITIZE_STRING);
    $grade = $_POST['grade'];
    $grade = filter_var($grade, FILTER_SANITIZE_STRING); 
   
   
        $insertquery =
          "INSERT INTO `quizz`( qid, qname, subject, grade, lesson) VALUES('$quid','$qname', '$subject', '$grade', '$lesson')";
          $iquery = mysqli_query($conn, $insertquery);  
         
     
                      echo  "
			             <script>
				            alert('New Quizz added successfully'); 
				            window.location.href='questionAdd.php';
			            </script>"; 

						
     
         
    }
 


?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Quiz</title>
	<link rel="stylesheet" type="text/css" href="formStyle.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body> 
	<div class="container">
		<div class="contact-box">
			<div class="right">
				<h2>Add Quiz</h2> 
				<form action="" method="POST"> 
                       <input type="hidden" name="qid" maxlength="100" required placeholder="paste quiz number" class="field" value="<?php echo unique_id(); ?>"> 
					    
                       <p>Quiz Name <span>*</span></p>
						 <input type="text" name="name" maxlength="100" required placeholder="enter quiz name" class="field">

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
		 
				
				<input type="submit" value="NEXT" class="btn" name="submit"> 
			</form> <br>
			<a href="adminPanel.php"><input type="submit" value="HOME" class="btn"> </a>
			</div> 
			<?php 
            if(isset($_REQUEST['submit'])) {
		  $_SESSION['sessionQid'] =$_POST['qid']; 
	  }
   ?>
			<div class="left">
				
			</div>
		</div>
	</div>
</body>
</html>