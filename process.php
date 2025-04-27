<?php
     require_once "config.php"; 
     session_start();    
?> 

<?php  
   if(isset($_POST['next'])) {
    $q=$_POST['q']; 
    $selectet_answer=$_POST['choice'];
   
   }   

   if(isset($_SESSION['email'])) {
    $email=$_SESSION['email']; 
   }

   
   $query="SELECT * FROM q WHERE qid = '$q'";
    $total_questions=mysqli_num_rows(mysqli_query($conn,$query));

   $number=$_POST['number'];
   $r=$_POST['result'];
   $next=$number+1;  

   $query="SELECT * FROM a WHERE qid = '$q'";
    $total_result=mysqli_num_rows(mysqli_query($conn,$query));
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($result)){
         $m+=$row['mark'];
    }

   

   $query="SELECT * FROM a WHERE  qid = '$q'  && qeid='$number'";
   $result=mysqli_query($conn,$query);
   $row=mysqli_fetch_assoc($result); 

   $correct_choice=$row['answer']; 
   $mark=$row['mark']; 

   $query="SELECT * FROM quizz WHERE  qid = '$q' ";
   $result=mysqli_query($conn,$query);
   $row=mysqli_fetch_assoc($result); 

   $quiz_name=$row['qname']; 
  $subject=$row['subject']; 

  /*if(isset($_POST['next'])){
    $fullmark+=$mark;
  }*/
   
  
   if($selectet_answer==$correct_choice){
    $total=$r+$mark;
   // $fullmark=$r+$mark;
   } 
   else{
    $total=$r+0;
   // $fullmark=$r+$mark;
   } 
   

   if($number==$total_questions){ 
    
    header("Location:score.php?id=$q&score=$total&fullmark=$m"); 
    $insertquery =
        "INSERT INTO `result`(`st_email`, `q_id`, `q_name`, `subject`, `score`) VALUES ('$email','$q','$quiz_name','$subject','$total')";
        $iquery = mysqli_query($conn, $insertquery);
} 
else{
    header("Location:test.php?n=$next&id=$q&score=$total");
}

   
   

 


   
 
?>