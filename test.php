<?php 

	require_once "config.php";
		
            $q=$_GET['id'];
            $num=(int)$_GET['n'];
            $score=(int)$_GET['score'];

            //query for the quetion 
            $query="SELECT * FROM q WHERE qid = '$q'  && qeid='$num'";

            //get question
            $result=mysqli_query($conn,$query);
            $question=mysqli_fetch_assoc($result);
          
            //get choice
            $query="SELECT * FROM q WHERE  qid = '$q'  && qeid='$num'";
            $choice=mysqli_query($conn,$query);
            

            //get total question
            $query="SELECT * FROM q WHERE qid = '$q'";
            $total_questions=mysqli_num_rows(mysqli_query($conn,$query));

                
        
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
        <h2>Question No <?php echo $num;?></h2>
          <h3><?php echo $question['question'];?></h3>
          <form action="process.php" method="POST">
            <ul>
                <?php while($row=mysqli_fetch_assoc($choice)){?> 
                    
                    <li><input type="radio" name="choice" value="A" class="answer" required><?php echo $row['optionA'];?></li>
                    <li><input type="radio" name="choice" value="B" class="answer" required><?php echo $row['optionB'];?></li>
                    <li><input type="radio" name="choice" value="C" class="answer" required><?php echo $row['optionC'];?></li>
                    <li><input type="radio" name="choice" value="D" class="answer" required><?php echo $row['optionD'];?></li>
                    <?php } ?>
            </ul>  
                </div>  
            <input type="hidden" name="number" value="<?php echo $num;?>">
            <input type="hidden" name="result" value="<?php echo $score;?>">
            <input type="hidden" name="q" value="<?php echo $q;?>">
            <input type="submit" name="next" value="Next" class="btn">
          </form>
        </div>
    </main>

</body>
 </html>