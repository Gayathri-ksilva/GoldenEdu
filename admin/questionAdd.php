<?php 
session_start();

include 'adminconfig.php';  
   
	$quizz_id=$_SESSION['sessionQid'];
   

    if(isset($_POST['add'])){  
		
    $qeid=$_POST['qNo'];   
    $question = $_POST['question'];
    $question = filter_var($question, FILTER_SANITIZE_STRING);
    $option1 =$_POST['A'];
    $option1=filter_var($option1, FILTER_SANITIZE_STRING);
    $option2 =$_POST['B'];
    $option2=filter_var($option2, FILTER_SANITIZE_STRING);
    $option3 =$_POST['C'];
    $option3=filter_var($option3, FILTER_SANITIZE_STRING);
    $option4 =$_POST['D'];
    $option4=filter_var($option4, FILTER_SANITIZE_STRING); 
    $answer = $_POST['answer'];
    $answer = filter_var($answer, FILTER_SANITIZE_STRING);  
    $mark = $_POST['mark'];
    $mark = filter_var($mark, FILTER_SANITIZE_STRING); 

    $insertquery="INSERT INTO `q`(`qid`, `qeid`, `question`, `optionA`, `optionB`, `optionC`, `optionD`) VALUES ('$quizz_id','$qeid','$question','$option1','$option2','$option3','$option4')";
    $iquery = mysqli_query($conn, $insertquery);  
   
    if ($iquery){
                    
                $insertquery= "INSERT INTO `a`(`qid`, `qeid`, `answer`, `mark`) VALUES ('$quizz_id','$qeid','$answer','$mark')";
                $iquery=mysqli_query($conn,$insertquery);	
    }	

        else{
            die("second error");
        }
      
    }  

    $query="SELECT * FROM q WHERE qid = '$quizz_id'";
    $qn=mysqli_num_rows(mysqli_query($conn,$query)); 
    $qnumber=$qn+1; 
    
    ?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Question</title>
	<link rel="stylesheet" type="text/css" href="question.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body> 
	<div class="container">
		<div class="contact-box">
			<div class="right">
				<h2>Add Question</h2> 
				<form action="" method="POST">
				<p>Question No : <?php echo $qnumber;?></p>
                 <input type="hidden" name="qNo" maxlength="100" required  class="field" value="<?php echo $qnumber;?>"> 
                 
                <p>Question <span>*</span></p>
                 <input type="text" name="question" maxlength="100" required placeholder="enter question" class="field"> 

                 <p>Option A <span>*</span></p>
                 <input type="text" name="A" maxlength="100" required placeholder="enter option1" class="field"> 

                 <p>Option B <span>*</span></p>
                <input type="text" name="B" maxlength="100" required placeholder="enter option2" class="field"> 

                 <p>Option C  <span>*</span></p>
                 <input type="text" name="C" maxlength="100" required placeholder="enter option3" class="field">

                 <p>Option D  <span>*</span></p>
                 <input type="text" name="D" maxlength="100" required placeholder="enter option4" class="field">

                <p>Answer <span>*</span></p>
                <select name="answer" class="field" required>
                        <option value="" selected disabled>-- select answer</option>
                         <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>
                         </select>  

                 <p>Marks <span>*</span></p>
                 <input type="text" name="mark" maxlength="100" required placeholder="enter marks" class="field">         
				<input type="submit" value="ADD" class="btn" name="add"> 
			</form> <br>
            <a href="adminPanel.php"><input type="submit" value="HOME" class="btn"> </a>
			</div>
			<div class="left">
            <h2>Questions</h2> 
              
              <?php
                 if(isset($_POST['add'])){  

                    require_once "adminconfig.php";
					
					//read all row from database
					$sql="SELECT* FROM q WHERE qid='$quizz_id' ";
					$result=mysqli_query($conn,$sql);
					if(!$result){
						die("invalid query:".mysqli_connect_error());
					}
                    while($row=mysqli_fetch_assoc($result)){?>
						
						<p class="answer"><?php echo $row['qeid']?>.<?php echo $row['question'];?></p> 
                        <p class="answer">A.<?php echo $row['optionA'];?></p> 
                        <p class="answer">B.<?php echo $row['optionB'];?></p> 
                        <p class="answer">C.<?php echo $row['optionC'];?></p> 
                        <p class="answer">D.<?php echo $row['optionD'];?></p> <br>
				<?php
                 } 
                }
              ?> 
               
                
			</div> 
		</div>
	</div> 
    

    <script type="text/javascript" src="adminmain.js"></script>
</body>
</html>

