<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subjects</title>
    <link rel="stylesheet" href="admintablestyle.css">
</head>

<body>
    <main class="table">
        <section class="table__header">
            <h1>Subjects</h1>
            
            <div class="export__file">
                <a href="adminPanel.php"><label for="export-file" class="export__file-btn" title="Home"></label></a>
            </div>
        </section>
        <section class="table__body">
        <table>
                <thead>
                    <tr>
					<th>subject</th>
					<th>Class Time</th>
					<th>image</th>
					<th colspan="2"></th>
                    </tr>
                </thead>
									
				<tbody>
				<?php
					require_once "./adminconfig.php";
					
					//read all row from database
					$sql="SELECT* FROM subject";
					$result=mysqli_query($conn,$sql);
					if(!$result){
						die("invalid query:".mysqli_connect_error());
					}
					while($row=mysqli_fetch_assoc($result)){?>
						
						<tr>
							<td><?php echo $row['subject']; ?></td>
							<td><?php echo $row['description']; ?></td>
							<td><img src="../upload_files/<?php echo $row['image']; ?>" alt=""></td>
							<td>
								
								<a href='subjectDelete.php?delete=<?php echo $row['sub_id'];?>'>
									<button  >Delete</button>
									
								</a>
							</td>
                            <td>
								
								<a href='subjectEdit.php?edit=<?php echo $row['sub_id'];?>'>
									<button  >Edit</button>
									
								</a>
							</td>
						</tr>
						<?php
					}
					
				?>
					
				</tbody>
			</table> 
        </section>
    </main> 
    <script src="admintablescript.js"></script>
</body>

</html>