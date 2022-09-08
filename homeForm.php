<?php

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  if (isset($_POST['submit'])) {
    $fName = $_POST['fName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $project = $_POST['project'];
    $message = $_POST['message'];

    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function

    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    require 'PHPMailer/src/Exception.php';

    $mail = new PHPMailer();                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = false;                                 // Enable verbose debug output
        $mail->isSMTP();                                   // Set mailer to use SMTP
        $mail->Host = 'mail.pluggresources.com';  // Specify main and backup SMTP servers // pld108.truehost.cloud
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'admin@pluggresources.com';       // SMTP username
        $mail->Password = '247admin@plugg';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('admin@pluggresources.com', 'Plugg Resources');
        $mail->addAddress('admin@pluggresources.com');

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Client Email from Plugg Resources';
        $mail->Body    = "<div style='padding-top:10px;padding-bottom:10px;border-radius:5px;'>
            <center><img src='https://pluggresources.com/assets/images/logo-dark.svg' width='150px'></center>
            <div style='padding-left:30px;padding-right:30px;background-color:#fff;margin-top:20px;margin-bottom:20px;'>
            Hello, <br><br> My name is $fName, <br><br> I am interested in your $project service. <br><br> $message. <br><br> You can reach me via email at $email, and call or chat with me at $phone. <br><br> Thanks.
            </div>
            </div>";

        $mail->send();
        // Mesage after updation
        echo "<script>alert('We have received your message, and we will get back to you shortly.');</script>";
        // Code for redirection
        echo "<script>window.location.href='index.php'</script>";

    } catch (Exception $e) {
        // Mesage after updation
        echo "<script>alert('Error encountered!');</script>";
        // Code for redirection
        echo "<script>window.location.href='index.php'</script>", $mail->ErrorInfo;
    }
  }


?>