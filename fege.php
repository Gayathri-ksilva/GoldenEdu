<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require('config.php');
function sendMail($email,$reset_token){
    require('PHPMailer-master/PHPMailer.php');
    require('PHPMailer-master/SMTP.php');
    require('PHPMailer-master/Exception.php');

    $mail = new PHPMailer(true);

    try {
        //Server settings
    
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'goldeneduc@gmail.com';                     //SMTP username
        $mail->Password   = 'Golden@123';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('goldeneduc@gmail.com', 'Golden Edu');
        $mail->addAddress($email);     //Add a recipient
        $body="<a href='http://localhost:8080/php/individual/reset-password.php?email=$email&resetToken=$reset_token'> awa </a>" ;
        //$body="<a href='https://localhost:8080/php/reset-password.php'>awa awa </a>";
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject ='Password reset link from FLoaty Wear';
        $mail->Body    = $body;
        //<a herf="http://localhost:8080/reset-password.php?email=$email&resetToken=$reset_token"> link </a>
        
    
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
    
}
if(isset($_POST['send'])){
    $email = $_POST['email'];
    
    $sql= "SELECT * FROM student WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
    
    if ($result) {
        if(mysqli_num_rows($result)==1){
            #email found
            $reset_token=bin2hex(random_bytes(16));
            date_default_timezone_set('Asia/Colombo');
            $date=date("y-m-d");
            $query="UPDATE `student` SET `resetToken`='$reset_token',`tokenExpire`=' $date' WHERE email='$email'";
            if(mysqli_query($conn,$query) && sendMail($_POST['email'],$reset_token)){
                echo"
                <script>
                alert('password reset link sent to mail');
                </script>
                ";
            }else{
                echo"
                <script>
                alert('Sever Down try again later');
                </script>
                ";
            }
        }else{
            echo"
        <script>
        alert('email not found');
        </script>
        ";
        }
       
    }else{
        echo"
        <script>
        alert('cannot run the query');
        </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forget password</title>
    <link rel="stylesheet" href="formstyle.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<body>
    
    <!--create registration form-->
    <div class="container">
        <div class="forget-box">
            <form action="" name="formfill" method="POST" enctype="multipart/form-data" >
                <h2> fdgdg</h2>
                <!--<p id="result"> </p>-->
                
               
                <div class="input-box">
                    <i class='bx bxs-envelope'></i>
                    <input type="text" name="email"placeholder="Email" >
                    <div class="error">
                        <p id="result2"> </p>
                    </div>
               </div> 
                
                <div class="button">
                    <input type="submit" class="btn" value="Send Email" name="submit">
                </div>
            </form>
        </div>
    </div>   
</body>
</html>