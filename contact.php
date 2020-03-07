<?php

$msg = '';
//Don't run this unless we're handling a form submission
if (isset($_POST['myName']) AND empty($_POST['honeypot'])) {
    /* Since the form has been submitted, let's capture the submission values so we can display them to the user on the success page */
    $myEmail = $_POST['myEmail'];
    $myName = $_POST['myName'];
    $myQuestion = $_POST['myQuestion'];
    $role = $_POST['role'];
    date_default_timezone_set('Etc/UTC');

    require 'PHPMailer/PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    $mail->Host = 'mail.aaronbeals.webhostingforstudents.com ';
    $mail->Port = 587;
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;
    //Provide Username and password
    $mail->Username = "phpmailer@aaronbeals.webhostingforstudents.com";
    $mail->Password = "ilovephp12345";
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('phpmailer@aaronbeals.webhostingforstudents.com', 'Aaron Beals');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('phpmailer@aaronbeals.webhostingforstudents.com', 'Aaron Beals');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
        $mail->addReplyTo($myEmail, $myName);
        $mail->Subject = 'Ace in The Hole Contact Form';
        //Keep it simple - don't use HTML
        $mail->isHTML(true);
        //Build a simple message body
        $mail->Body = <<<EOT
Email: $myEmail <br>
Name: $myName <br>
Message: $myQuestion<br>
Role: $role
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = "Mailer Error:" .  $mail->ErrorInfo;
            echo $msg;
        } else {
            include 'success.php';
        }

} else {
    include 'form.php';
}
?>