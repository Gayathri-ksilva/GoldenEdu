<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quizz</title>
    <link rel="stylesheet" href="admintablestyle.css">
</head>

<body>
    <main class="table">
        <section class="table__header">
            <h1>All Quizz</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="images/search.png" alt="">
            </div>
            <div class="export__file">
                <a href="adminPanel.php"><label for="export-file" class="export__file-btn" title="Export File"></label></a>
            </div>
        </section>
        <section class="table__body">
        <table>
                <thead>
                    <tr>
                        <th> Subject </th>
                        <th> Grade</th>
                        <th> Lesson </th> 
                        <th>Action</th>
                       
                    </tr>
                </thead>
                <tbody>
                <?php
					require_once "adminconfig.php";
					
					//read all row from database
					$sql="SELECT* FROM quizz";
					$result=mysqli_query($conn,$sql);
					if(!$result){
						die("invalid query:".mysqli_connect_error());
					}
                    while($row=mysqli_fetch_assoc($result)){?>
						
						<tr>
							<td><?php echo $row['subject'];?></td>
							<td><?php echo $row['grade'];?></td>
							<td><?php echo $row['lesson'];?></td> 
                            <td>
								
								<a href='quizzDelete.php?deleteid=<?php echo $row['qid'];?>'>
									<button  >Delete</button>
									
								</a>
							</td> 
                            
						</tr>
					
					<?php }?>

         
					
				
                </tbody>
            </table>
        </section>
    </main> 
    <script src="admintablescript.js"></script>
</body>

</html>