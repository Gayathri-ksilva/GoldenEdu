<?php
	require_once "./adminconfig.php";
	echo"bjbjjnjn";
		if(isset($_POST['delete'])){ 
			echo"Deleted";
			$email=$_GET['email'];
			$sql="DELETE FROM student WHERE email=$email";
			$conn->query($sql);
		}
	
?>
