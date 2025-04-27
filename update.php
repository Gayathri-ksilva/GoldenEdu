<?php 
   @include 'config.php';  
     
   if(isset($_GET['update-password']) && isset($_GET['reset_token'])) {
	date_default_timezone_set('Asia/kolkata');
	$date=date("Y-m-d");
	$query="SELECT * FROM 'student' WHERE 'email'='$_GET[email]' AND 'resettoken'='$_GET[reset_token]' AND 'resettokenexpire'=$date";
	$result=mysqli_query($conn,$query); 

    echo $date;

	if($result){ 
		if(mysqli_num_rows($result==1)){
			echo"
            gggvgvg
			";
		} 
		else{
			echo"
			<script>
			alert('Invalid or Expired Link');
			</script>
			";
		}

	} 
	else{
		echo"
		<script>
		alert('Sever Down try again later');
		</script>
		";
	}
   }
?>