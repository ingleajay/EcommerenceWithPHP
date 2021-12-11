<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
include "Db_conn.php";
if($conn){
$email=$_POST['email'];
$user_check_query1 = "SELECT * FROM signup WHERE  Email='$email' ";
$result1 = mysqli_query($conn, $user_check_query1);
$user1 = mysqli_fetch_assoc($result1);
    if ($user1['Email'] != $email) {
                echo "
                <script>
                    alert('email is not exist');
                    window.location.href='Forgot.php';
                    </script>
                    ";
}
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

if( mysqli_num_rows($result1)>0)
{
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'alphacoder987@gmail.com';                     // SMTP username
    $mail->Password   = 'alphacoder@123';                               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('alphacoder987@gmail.com', 'SHOESLLY');
    $mail->addAddress($email,$email); 
    // $mail->addReplyTo('no-reply@gmil.com',"No reply");    // Add a recipient
    
    

    // Content
     $resetPasslink='http://localhost:8090/ecommerce/components/php/Reset.php';
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Forgot Password';
    $mail->Body    = "TO RESET YOUR PASSWORD VISIT THE FOLLOWING LINK: $resetPasslink ";
    $mail->AltBody = "TO RESET YOUR PASSWORD VISIT THE FOLLOWING LINK: $resetPasslink";

    $mail->send();
    echo "
                <script>
                    alert('check your mail');
                    window.location.href='LoginSystem.php';
                    </script>
                    ";
} catch (Exception $e) {
    echo 'Mailer Error: ', $mail->ErrorInfo;
}
}
?>