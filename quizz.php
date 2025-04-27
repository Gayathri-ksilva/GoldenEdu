
<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>Quizz</title>
    <link rel="stylesheet" href="tablestyle.css">
</head>

<body> 


    <main class="table">
        <section class="table__header">
            <h1>Quizzes</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data....">
                <img src="img/search.png" alt="">
            </div> 
            <div class="export__file">
                <a href="index.php"><label for="export-file" class="export__file-btn" title="Home"></label></a>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Quiz Name</th>
                        <th> Subject </th>
                        <th> Grade</th>
                        <th> Lesson </th>
                        <th> Start </th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                session_start();
                require_once "config.php";
                if(isset($_SESSION['email'])){
                  $email=$_SESSION['email'];
                  $query="SELECT * FROM student WHERE  email='$email'";
                  $stresult=mysqli_query($conn,$query);
                 $strow=mysqli_fetch_assoc($stresult); 
                 $grade=$strow['grade'];
					
					
					//read all row from database
					$sql="SELECT* FROM quizz WHERE grade='$grade'";
					$result=mysqli_query($conn,$sql);
					if(!$result){
						die("invalid query:".mysqli_connect_error());
					}
                    while($row=mysqli_fetch_assoc($result)){
						echo"
						<tr>
                            <td>$row[qname]</td>
							<td>$row[subject]</td>
							<td>$row[grade]</td>
							<td>$row[lesson]</td>
							<td>
								
								<a href='start.php? id=$row[qid]'>
									<button   name='delete'>start</button>
									
								</a>
							</td>
						</tr>
						";	
					} 
                } 
                else{
                    echo"
                    <script>
                        alert('Please login first!');
                        window.location.href='login.php';
                    </script>
                ";
                }
					
				?>

         
					
				
                </tbody>
            </table>
        </section>
    </main> 
    <script src="script.js"></script>
</body>

</html>