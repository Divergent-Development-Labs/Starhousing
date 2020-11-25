<?php
    include '../session-checking.php';
    include '../db/connection.php';
 
    if(isset($_POST["updateBtn"])) {
        $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
        $password = filter_var(base64_encode($_POST['password']), FILTER_SANITIZE_STRING);
        echo $username, $password;

        $sql="UPDATE `user` SET `username`='$username', `password`='$password' WHERE `user`.`id` = '1'";
            
        if ($conn->query($sql) === TRUE) {

            echo $displayName = ucwords($username);
            $_SESSION["username"] = $displayName;
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
            echo $_SESSION["msg"] = "Updation Failed";  
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);

    }
    else{
        session_destroy();
        echo $_SESSION["msg"] = "Updation Failed";  
        header('Location: ../index.php');    
    } 
?>
