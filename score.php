<?php
session_start(); 
$final=(int)$_GET['score'];
$totalMark=(int)$_GET['fullmark'];
$quiz=$_GET['id'];
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
         <h2>Your Result</h2>
         <h3>Coungratulation You have completed this test succesfully.</h3>
         <h3>Total Score is <?php echo $totalMark?></h3> 
         <h3>Your Score is <strong><?php echo $final?></strong></h3> 
     </div>
     
      <a href="index.php">  <input type="submit" value="HOME" class="btn" name="home"> </a> 
     
        </div>
    </main>

</body>
 </html>