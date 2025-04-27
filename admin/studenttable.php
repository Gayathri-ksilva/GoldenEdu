<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student </title>
    <link rel="stylesheet" href="admintablestyle.css">
</head>

<body>
    <main class="table">
        <section class="table__header">
            <h1>Student Details</h1>
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
					<th>Name</th>
					<th>Grade</th>
					<th>Phone</th>
                    <th>Email</th>
					<th>Action</th>
                    </tr>
                </thead>
									
				<tbody>
				<?php
					require_once "./adminconfig.php";
					
					//read all row from database
					$sql="SELECT* FROM student";
					$result=mysqli_query($conn,$sql);
					if(!$result){
						die("invalid query:".mysqli_connect_error());
					}
					while($row=mysqli_fetch_assoc($result)){?>
						
						<tr>
							<td><?php echo $row['first_name'] ." ". $row['last_name']; ?></td>
							<td><?php echo $row['grade']; ?></td>
							<td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['email']; ?></td>
							<td>
								
								<a href='studentDelete.php?delete=<?php echo $row['st_id'];?>'>
									<button  >Delete</button>
									
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