<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head> 

<body>
    
    <!--header section start -->
    
    <header class="header">
        <section class="flex">
            <a href="#first" class="logo">Golden Edu</a>
            <nav class="navbar">
                <a href="#first">Home</a>
                <a href="#home">About</a>
                <a href="#subject">Subject</a> 
                <a href="lessons.php">Lesson</a>
                <a href="quizz.php">Quizz</a>
                
                <a href="">
                <div class="dropdown">
	           <button class="btn"><i class="fas fa-user"></i></button>
	           <div class="dropdown-menu">
               <?php 
            
                require_once "config.php";
                if(isset($_SESSION['email'])){ 
                    $email=$_SESSION['email'];
                  $query="SELECT * FROM student WHERE  email='$email'";
                  $stresult=mysqli_query($conn,$query);
                 $strow=mysqli_fetch_assoc($stresult); 
                 $id=$strow['st_id'];
                ?> 
                <a href="logout.php">Logout</a>
                <a href='profile.php'>Profile</a>
                <?php }
                else{ 
                ?> 
                
		        <a href="registerform.php">Register</a>
		        <a href="login.php">login</a> 
                <?php }?>
	  </div> 
	</div>  
    </a>
                <?php 
                if(isset($_SESSION['email'])){
                ?> 
                <a href="result.php">Result</a>
                <?php }?>
               
                
            </nav> 

            <div id="menu-btn" class="fas fa-bars"></div>
        </section>
    </header>   

    <!--header section end--> 

    <section class="first" id="first">
	
		<div class="content-box" id="first">
			
		
			<div class="content">
		
				<!--<h3>Life Is A Journey </h3>-->
			
				<h1>GOLDEN EDU</h1>
				<br>
				<h3>~Your success journey start with us!~</h3> 
                <a href="#home" class="logbtn">get start</a>
		
			</div>
			
		</div>
		
		<div class = "video-container">
	
			<video autoplay loop muted plays-inline class="back-video">
		
				<source src="letters.mp4" type="video/mp4">
		
			</video>
		
		</div>
	
	</section>  

     <!--home section start-->

     <section class="home" id="home">
         
         <div class="row">
 
             <div class="content">
                 <h3>Better <span>education</span></h3>
                 <p>Golden Edu Education can fulfilt your international education dream as per your best fit with lessons and quizzes.</p>
             </div> 
 
             <div class="image">
                 <img src="img/learning.svg" alt="">
             </div>
         </div>
     </section>

    
    

     <!--subject section end-->   

     <section class="subject" id="subject">

     <div class="subject-container"> 
     <?php 
              require_once "config.php";
            $select= mysqli_query($conn, "SELECT * FROM `subject`");
            if(mysqli_num_rows($select) > 0){
                while($row= mysqli_fetch_assoc( $select)){
        ?>
        <div class="card">
            <div class="imgbx">
               <img src="upload_files/<?php echo $row['image']; ?>" alt="">
            </div> 
            <div class="content">
                <h2><?php echo $row['subject']; ?></h2>
                <br>
                <p><?php echo $row['description']; ?></p>
                   
            </div>
        </div>  
        <?php }
    }?>
     </div>  

   
  
     </section> 

     
     

  

     <!--about section start-->  

     <section class="about" id="about"> 
        
        <div class="row">

            <div class="image">
              <img src="img/about.svg" alt="">
            </div> 

            <div class="content">
                <h3>Why choose us?</h3> 
                <p>Golden Edu consists of resources developed in conjunction with the 6th to 11th grade  curriculum such as creative lessons, quizzes, etc.</p>
                
            </div>
        </div>
     </section>
     <!--about section end-->  

     <!--lesson section start-->  
     <section class="lesson" id="lesson"> 

        <div class="lesson-container">
            <div class="lessonbox-container">
                  <h3>Opening Hours</h3>
                  <p>8.00 AM - 6.00 PM</p> 
                   
            </div> 

            <div class="lessonbox-container">
                 
                  <h3>Address</h3> 
                  <p>No.300/5, Modara, Moratuwa</p>
                 
            </div>  
            <div class="lessonbox-container">
                
                  <h3>Phone</h3>
                  <p>0712316136</p> 
                
            </div>
        </div>
</section>
    

       <!--lesson section end-->

      <!--footer section start-->  
             
      <footer class="footer"> 

        <section>
            

            <div class="credit">&copy; copyright @2023 by <span>Golden Edu </span>| all Rights resered!</div>
        </section>
      </footer>

      <!--footer section end--> 

      
      



      <script src="script.js"></script>

</body> 
</html>