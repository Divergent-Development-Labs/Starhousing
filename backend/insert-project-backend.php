<?php
    include '../session-checking.php';
    include '../db/connection.php';
    if(isset($_POST["saveBtn"])) {
        $project_name = mysqli_real_escape_string($conn, $_POST["projectName"]);
        $project_type = mysqli_real_escape_string($conn, $_POST["projectType"]);
        $project_status = mysqli_real_escape_string($conn, $_POST["projectStatus"]);
        $img_link = mysqli_real_escape_string($conn, $_POST['imgLink']);
        $pdf_link = mysqli_real_escape_string($conn, $_POST["pdfLink"]);
        $address_line_1 = mysqli_real_escape_string($conn, $_POST["addressLine1"]);
        $address_line_2 = mysqli_real_escape_string($conn, $_POST["addressLine2"]);
        $district = mysqli_real_escape_string($conn, $_POST["district"]);
        $state = mysqli_real_escape_string($conn, $_POST["state"]);
        $pin_code = mysqli_real_escape_string($conn, $_POST["pinCode"]);
        
        // echo $username, $password;
        $sql = "INSERT INTO `project` (`project_name`, `project_type`, `project_status`, `img_link`, `pdf_link`, `address_line_1`, `address_line_2`, `district`, `state`, `pin_code`) VALUES ('$project_name', '$project_type', '$project_status', '$img_link', '$pdf_link', '$address_line_1', '$address_line_2', '$district', '$state', '$pin_code')";
        if ($conn->query($sql) === TRUE) {
            $last_id = $conn->insert_id;
            $_SESSION["msg"] = 'Project added Successfull. Project id : ' . $last_id;
            header('Location: ../project.php');
            // echo 'last id : ' . $last_id;
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }    
    }
    else{
        session_destroy();
        header('Location: ../index.php');    
    } 
?>
