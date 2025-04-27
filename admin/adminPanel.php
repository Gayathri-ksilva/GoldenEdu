<html>

<head>

	<meta name="viewpoint" content="width=device-width,initial-scale=1, maximum-scale=1">

	<title>Admin Panel</title>
	
	<link rel ="stylesheet" href="panelStyle.css">
	<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

</head>


<body>

	<input type="checkbox" id="nav-toggle">
		<div class="sidebar">
		
			<div class="sidebar-brand">
			
				<h2>GOLDEN EDU</h2>
			
			</div>
			
			<div class="sidebar-menu">
			
				<ul>
				
					<li>
					
						<a href="" class="active"><span class="las la-igloo"></span>
						
						<span>Dashboard</span></a>
					
					</li> 
					
					<li>
					
						<a href="studenttable.php"><span class="las la-users"></span>
						
						<span>Student</span></a>
					
					</li> 

					<li>
					
						<a href="addsubject.php"><span class="	las la-chalkboard"></span>
						
						<span>Add Subject</span></a>
					
					</li> 

					<li>
					
						<a href="editSubject.php"><span class="	las la-chalkboard"></span>
						
						<span>Edit Subject</span></a>
					
					</li>
					
					<li>
					
						<a href="addlessons.php"><span class="las la-book"></span>
						
						<span>Upload Lessons</span></a>
					
					</li> 

					<li>
					
						<a href="lessonView.php"><span class="las la-book"></span>
						
						<span>View Lessons</span></a>
					
					</li>
					
					<li>
					
					<a href="quizzAdd.php"><span class="	fa fa-edit"></span>
						
						<span>Add Quizz</span></a>
					
					</li>

					<li>
					
					<a href="quizz.php"><span class="	fa fa-edit"></span>
						
						<span>View Quizz</span></a>
					
					</li>
					
					
					
					
				
				</ul>
			
			</div>
			
		</div>

		<div class="main-content">
		
			<header>
			
				<h3>
				
					<label for ="nav-toggle">
					
						<span class="las la-bars"></span>
						
					</label>
						
						Dashboard
				
				</h3> 

				<a href="logout.php"><button>Logout</button></a>
			
				
			</header>
			
			<main>
			
				<div class="cards">
				
					<div class="card-single">
					
						<div>
						
						
							<h1><?php  
							  
                             include 'adminconfig.php';
							 $querystudent="SELECT * FROM student";
							 $total_student=mysqli_num_rows(mysqli_query($conn,$querystudent)); 
							 echo $total_student;
							?></h1>
							<span>Student</span>
						
						</div>
						
						<div>
						
							<span class="las la-users">
						
						</div>
					
					</div> 

					<div class="card-single">
					
						<div>
						
						
							<h1><?php  
							  
                             include 'admin.php';
							 $querystudent="SELECT * FROM subject";
							 $total_subject=mysqli_num_rows(mysqli_query($conn,$querystudent)); 
							 echo $total_subject;
							?></h1>
							<span>Subject</span>
						
						</div>
						
						<div>
						
							<span class="las la-chalkboard">
						
						</div>
					
					</div> 

					<div class="card-single">
					
						<div>
						
						
							<h1><?php  
							  
                             include 'admin.php';
							 $querylesson="SELECT * FROM lessons";
							 $total_lesson=mysqli_num_rows(mysqli_query($conn,$querylesson)); 
							 echo $total_lesson;
							?></h1>
							<span>Lesson</span>
						
						</div>
						
						<div>
						
							<span class="las la-book">
						
						</div>
					
					</div> 

					<div class="card-single">
					
						<div>
						
						
							<h1><?php  
							  
                             include 'admin.php';
							 $querylesson="SELECT * FROM quizz";
							 $total_quiz=mysqli_num_rows(mysqli_query($conn,$querylesson)); 
							 echo $total_quiz;
							?></h1>
							<span>Quiz</span>
						
						</div>
						
						<div>
						
							<span class="las la-edit">
						
						</div>
					
					</div> 

					<div class="card-single">
					
						<div>
						
						
							<h1><?php  
							  
                             include 'admin.php';
							 $querylesson="SELECT * FROM admin";
							 $total_admin=mysqli_num_rows(mysqli_query($conn,$querylesson)); 
							 echo $total_admin;
							?></h1>
							<span>Admin</span>
						
						</div>
						
						<div>
						
							<span class="las la-user">
						
						</div>
					
					</div>
					
					
					
					
					
					
				</div>
				
			</main>
		
		</div>

</body>



</html>