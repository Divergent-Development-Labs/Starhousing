<?php
    include '../session-checking.php';
    include '../db/connection.php';
    if(isset($_POST["updateBtn"])) {

        $id = $q = intval($_GET['id']);
        
        if(!$id || $id == '' || $id == null){
            $_SESSION["msg"] = 'Something went wrong. Project ID required';
        }

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
        
        echo $id, $project_name;

        $sql = "UPDATE `project` SET `project_name` = '$project_name', `project_type` = '$project_type', `project_status` = '$project_status', `img_link` = '$img_link', `pdf_link` = '$pdf_link', `address_line_1` = '$address_line_1', `address_line_2` = '$address_line_2', `district` = '$district', `state` = '$state', `pin_code` = '$pin_code' WHERE `project`.`id` = $id";
        if ($conn->query($sql) === TRUE) {
            $_SESSION["msg"] = 'Project "' . $project_name . '" Details updated Successfully';
            header('Location: ../edit-project.php?id='.$id);
            // header('Location: ' . $_SERVER['HTTP_REFERER']);
            echo "Record Updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }    
    }
    else{
        session_destroy();
        header('Location: ../index.php');    
    } 
?>
