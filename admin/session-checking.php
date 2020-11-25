<?php 
    session_start();
    if(isset($_SESSION["username"])){

        include 'db/connection.php';
        $sql = "SELECT * FROM `user` WHERE `id`='1'";    
        $project = $conn->prepare($sql);                                                
        $project->execute();                                                
        $result = $project->get_result();

        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) { 
                // echo ucwords($row['username']);
                // echo $_SESSION['username'];
                if($_SESSION["username"] != ucwords($row['username'])){
                    header('Location: index.php');
                }
            }
        }
    }
    else{
        header('Location: index.php');    
    }
?>