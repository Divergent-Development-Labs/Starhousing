<?php include 'session-checking.php'; ?>
<!Doctype html>
<html>

<head>
    <?php include 'head.php'; ?>

    <!-- Summernote css -->
    <link href="assets/libs/summernote/summernote-bs4.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" id="u0" href="assets/libs/tinymce/skins/ui/oxide/skin.min.css">

</head>
<?php include 'body.php'; ?>
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18"></h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-12 mx-auto">
        <div class="card card col-8 mx-auto">
            <div class="card-header bg-white mx-auto">
                <h4 class="mb-0 font-size-18">Admin Profile</h4>
            </div>
            <div class="card-body">

                <form class="custom-validation" id="updateProfileForm" action="backend/update-profile-backend.php" method="post">
                    <div class="row">
                        <?php 
                            include 'db/connection.php';
                            $sql = "SELECT * FROM `user`";    
                            $project = $conn->prepare($sql);                                                
                            $project->execute();                                                
                            $result = $project->get_result();
                    
                            if($result->num_rows > 0){
                                while ($row = $result->fetch_assoc()) { ?>

                        <div class="col-lg-12">
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-form-label">Username</label>
                                <div class="col-md-9">
                                    <input value="<?php echo $row['username'];?>" type="text" name="username" class="project form-control" required placeholder="Enter Username" />
                                    <span class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-form-label">Password</label>
                                <div class="col-md-9">
                                    <input value="<?php echo base64_decode($row['password']);?>" type="text" name="password" class="project form-control" required placeholder="Enter Password" />
                                    <span class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                                <?php } } ?>
                    </div>

                    <div class="form-group mb-0 float-right">
                        <button type="submit" class="btn btn-success waves-effect waves-light mr-1" name="updateBtn" id="submit">
                            Save
                        </button>
                        <a type="button" class="btn btn-outline-secondary waves-effect" href="project.php">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
            <div class="card-footer bg-white pt-0">
                <?php 
                    if(isset($_SESSION["msg"])) {
                        ?>
                        <div class="alert alert-danger mt-2"><i class="bx bx-block mr-2 font-weight-bold"></i><?php  echo $_SESSION["msg"]; unset($_SESSION["msg"]); ?></div>
                        <?php 
                        
                        } 
                ?>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
<?php include 'footer.php'; ?>
<script src="custom/js/add-project.js"></script>

<!--tinymce js-->
<script src="assets/libs/tinymce/tinymce.min.js"></script>

<!-- Summernote js -->
<script src="assets/libs/summernote/summernote-bs4.min.js"></script>

<!-- init js -->
<script src="assets/js/pages/form-editor.init.js"></script>

</body>

</html>