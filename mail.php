<?php
if(isset($_POST['submit'])){
    $to = "jemibalamkt2010@gmail.com"; // this is your Email address
    $from = $_POST['form_email']; // this is the sender's Email address

    $name = $_POST['form_name'];
    $subject = $_POST["form_subject"];

    $mobile_number = $_POST['form_mnumber'];

    $message = $name . " "  . " wrote the following:" . "\n\n" . $_POST['form_message'];
    $message .= '<br><br>Contact Number: '.$mobile_number;

    $name . "\n\n" . $_POST['form_message'];

    $headers = "From:" . $from;

    mail($to,$subject,$message,$headers);
    // sends a copy of the message to the sender
    echo '<script language="javascript">';
    echo 'alert("Mail Sent. Thank you ' . $name . ', we will contact you shortly.")';
    echo '</script>';
    header('Location: /index.php');
    }
?>
