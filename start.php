<?php  
session_start();

	require_once "config.php"; 
            $q=$_GET['id'];
            $email=$_SESSION['email'];
		
            if(!isset($_SESSION['email'])){
                echo"
                <script>
                   alert('Login First');
                   window.location.href='login.php';
               </script>";
        } 
        else{  
            $select="SELECT *FROM result WHERE st_email='$email' && q_id='$q'";
	        $r=mysqli_query($conn, $select);

	   if(mysqli_num_rows($r)>0){
		echo"
		<script>
			alert('already done');
			window.location.href='quizz.php';
		</script>";
	   }   
       else{
            $sql="SELECT* FROM q WHERE qid = '$q'";
            $result=mysqli_query($conn,$sql);
            $total_questions=mysqli_num_rows($result);
            
            while($row=mysqli_fetch_assoc($result)){
                 $id=$row['qid'];	
                 
            }  
        }
            
        }
        
	
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start page</title>
    <link rel="stylesheet" href="css/questionstyle.css" type="text/css">
</head>
<body> 
     

    <main>
    <div class="quiz-container">
        <div class="quiz-header"> 
           <h2>Some Rules of this Quizz</h2>
           <ul>
           
            <li><strong>Number of Quetions:</strong><?php echo $total_questions;?></li>
            <li><strong>Type:</strong>Multiple Choice</li>
            <li><strong>You can't exit from Quizz while you're playing</strong></li>
            <li><strong>You'll get points on the basis of your correct answers.</strong></li>
           </ul>  
        </div>
               <?php
                    echo"  <a href='test.php?n=1&id=$q&score=0'>
									<button   name='start'>start</button>
									
								</a>"
                 ?>           
        </div>
    </main>
    
</body>
</html>