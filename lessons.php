<?php
    require 'config.php';
    /* delete lesson */
    if(isset($_GET['sub'])){
        $sub_id = $_GET['sub'];
        $query ="SELECT * FROM `subject` WHERE sub_id = $sub_id ";
        $result=mysqli_query($conn,$query);
       $row=mysqli_fetch_assoc($result); 
       $subject=$row['subject'];

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lessons</title>
    <link rel="stylesheet" href="tablestyle.css">
</head>

<body>
    <main class="table">
        <section class="table__header">
            <h1>LESSONS</h1>
            <div class="input-group">
                <input type="search" placeholder="Search subject...">
                <img src="images/search.png" alt="">
            </div>
            <div class="export__file">
                <a href="index.php"><label for="export-file" class="export__file-btn" title="Home"></label></a>
            </div>
        </section>
        <section class="table__body">
        <table>
                <thead>
                    <tr>
                        <th> Subject </th>
                        <th> Grade</th>
                        <th> Lesson </th> 
                        <th> Download</th>
                    </tr>
                </thead>
                <tbody> 
                    <?php 
                        session_start(); 
                        require 'config.php';
                       if(isset($_SESSION['email'])){
                        $email=$_SESSION['email'];
                        $query="SELECT * FROM student WHERE  email='$email'";
                        $stresult=mysqli_query($conn,$query);
                       $strow=mysqli_fetch_assoc($stresult); 
                       $grade=$strow['grade']; 
                     
                    


                       $sql="SELECT* FROM lessons where  grade='$grade'";
					$result=mysqli_query($conn,$sql);
					if(!$result){
						die("invalid query:".mysqli_connect_error());
					}
					while($row=mysqli_fetch_assoc($result)){  
                        $file_path ="upload_files/".$row['pdf']; ?>
                           <tr> 
							<td><?php echo $row['subject'];?></td>
							<td><?php echo $row['grade'];?></td>
							<td><?php echo $row['lesson'];?></td> 
                            <td> <a href="<?php 
                             echo $file_path;?>">
									<button   name='delete'>Download</button>
									
								</a></td>
						
						</tr>
                   <?php     
                       } 
                    } 
                    else{ 
                        $sql="SELECT* FROM lessons";
					$result=mysqli_query($conn,$sql);
					if(!$result){
						die("invalid query:".mysqli_connect_error());
					}
					while($row=mysqli_fetch_assoc($result)){  
                        $file_path ="upload_files/".$row['pdf']; ?>
                         
                         <tr> 
							<td><?php echo $row['subject'];?></td>
							<td><?php echo $row['grade'];?></td>
							<td><?php echo $row['lesson'];?></td> 
                            <td> <a href="<?php 
                             echo $file_path;?>">
									<button   name='delete'>Download</button>
									
								</a></td>
						
						</tr>
                  <?php      
                    }
                    }
                    ?>
                
				
                </tbody>
            </table>
    </main> 
    <script src="tablescript.js"></script>
</body>

</html>