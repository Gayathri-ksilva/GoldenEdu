<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require('config.php');
function sendMail($email,$reset_token){ 
    require('PHPMailer/PHPMailer.php');
    require('PHPMailer/SMTP.php');
    require('PHPMailer/Exception.php');

    $mail = new PHPMailer(true);

    try {
        //Server settings
    
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'goldeneduc@gmail.com';                     //SMTP username
        $mail->Password   = 'uoxrsxfrbmkyygdb';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('goldeneduc@gmail.com', 'Golden Edu');
        $mail->addAddress($email);     //Add a recipient
        
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject ='Password reset link from GoldenEdu Educational Center';
        $mail->Body    = "We got a request from you to reset your password! <br>Click the link below: <br>
        <a href='http://localhost/individualProject/password.php?email=$email&resetToken=$reset_token'> Reset Password </a>";
    
        
    
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
            if(mysqli_query($conn,$query) && sendMail($email,$reset_token)){
                echo"
                <script>
                alert('password reset link sent to mail');
                </script>
                ";
            }
			else{
                echo"
                <script>
                alert('Sever Down try again later');
                </script>
                ";
            }
        }
		else{
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