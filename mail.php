<?php
if(isset($_POST['submit'])){
    // $to = "jemibalamkt2010@gmail.com"; // this is your Email address
    $to = "ranjithjikumarji@gmail.com"; // this is your Email address
    $from = $_POST['form_email']; // this is the sender's Email address

    $name = $_POST['form_name'];
    $subject = $_POST["form_subject"];

    $mobile_number = $_POST['form_mnumber'];

    $message = $name . " "  . " wrote the following:" . "\n\n" . $_POST['form_message'];
    $message .= "\r\n \r\n". "Contact Number: ".$mobile_number;

    $headers = "From:" . $from;


    echo $name;
    echo $subject;
    echo $from;
    echo $to;
    echo $mobile_number;
    echo $_POST['form_message'];

    if(mail($to,$subject,$message,$headers)){
        // sends a copy of the message to the sender
        echo '<script language="javascript">';
        echo 'alert("Mail Sent. Thank you ' . $name . ', we will contact you shortly.")';
        echo '</script>';
        header('Location: ./contact-us.php');        
    }
    else{
        echo 'alert("Failed: Mail Cannot Sent. Try again!!.")';
    }
    }
?>
