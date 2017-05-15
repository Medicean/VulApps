<html>
<head>
    <title>Vulnerable Mail Form</title>
</head>
<body> 
    <h1> Vulnerable mail form (CVE-2016-10033) </h1>

    <form  action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="action" value="submit">
        Your name:<br>
        <input name="name" type="text" value="" size="50"/><br>
        Your email:<br>
        <input name="email" type="text" value="" size="50"/><br>
        Your message:<br>
        <textarea name="message" rows="7" cols="30"></textarea><br>
        <input type="submit" value="Send email"/>
    </form>
    <pre>

<?php

if (isset($_REQUEST['action'])){
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message=="")){
        echo "There are missing fields.";
    }else{      

        require 'phpmailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->Host = "localhost";

        $mail->setFrom($email, 'Vulnerable Server');
        $mail->addAddress('admin@vulnerable.com', 'Hacker');
        $mail->Subject  = "Message from $name";
        $mail->Body     = $message;
        if(!$mail->send()) {
            echo 'Message was not sent.';
            echo 'Mailer error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent.';
        }

    }
}  
?>
    </pre>

    </body> 
</html>
