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
            <h4 class="mb-0 font-size-18">Add Project</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="project.php">Projects</a></li>
                    <li class="breadcrumb-item active">Add Project</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">
                        <span class="d-block">Profile</span> 
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#links" role="tab">
                        <span class="d-block">Links</span> 
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#gallery" role="tab">
                        <span class="d-block">Gallery</span>   
                    </a>
                </li>
            </ul>

            <form class="custom-validation" id="addProjectForm" action="backend/insert-project-backend.php" method="post">
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="profile" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group row">
                                    <label class="col-md-3 col-sm-3 col-form-label">Project Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="projectName" class="project form-control" required placeholder="Enter Project Name" />
                                        <span class="text-danger"></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-sm-3 col-form-label">Project Type</label>
                                    <div class="col-md-9">
                                        <select class="form-control projectType" name="projectType" required>
                                            <option disabled selected>Select</option>
                                            <option value="1">Villa</option>
                                            <option value="2">Plot</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row d-none bhkOrSqftTypeDiv">
                                    <label class="col-md-3 col-sm-3 col-form-label bhkOrSqftTypeLabel">BHK Type</label>
                                    <div class="col-md-9">
                                        <input type="text" name="bhkOrSqftType" class="project form-control bhkOrSqftTypeValue" placeholder="Enter BHK Value" required/>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>

                                <div class="form-group row CentRateDiv <?php echo $row['project_type'] == '1' ? 'd-none' : '';?>">
                                    <label class="col-md-3 col-sm-3 col-form-label CentRateLabel"> Cent Rate</label>
                                    <div class="col-md-9">
                                        <input type="text" name="centRate" class="project form-control CentRateValue" placeholder="Enter Cent Rate " value="<?php echo $row['rate']; ?>"  required/>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-sm-3 col-form-label">Project Status</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="projectStatus" required>
                                            <option disabled selected>Select Status</option>
                                            <option value="1">On Going</option>
                                            <option value="2">Completed</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="col-lg-6 col-12">
                                <div class="form-group row">
                                    <label class="col-md-3 col-sm-3 col-form-label">Address Line 1</label>
                                    <div class="col-md-9">
                                        <input type="text" name="addressLine1" class="form-control" placeholder="Enter Door No, Street Name" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-sm-3 col-form-label">Address Line 2</label>
                                    <div class="col-md-9">
                                        <input type="text" name="addressLine2" class="form-control" placeholder="Enter Area Name / Land Mark" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-sm-3 col-form-label">District</label>
                                    <div class="col-md-9">
                                        <input type="text" name="district" class="form-control" placeholder="Enter Project District" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-sm-3 col-form-label">State</label>
                                    <div class="col-md-9">
                                        <input type="text" name="state" class="form-control" placeholder="Enter Project State" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-sm-3 col-form-label">Pin Code</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="pinCode" data-parsley-length="[6,6]" maxlength="6" placeholder="Enter Pin Code" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Amenities</h4>        
                                        <textarea id="elm1" name="anamatics"></textarea>                                        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Salient Features</h4>        
                                        <textarea id="elm2" name="sirena_features"></textarea>                                        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                    <div class="tab-pane" id="links" role="tabpanel">
                        <div>                                
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-form-label">Location Link</label>
                                <div class="col-md-9">
                                    <input type="text" name="locationLink" class="form-control" placeholder="Enter Project Location Link" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-form-label">Image Link</label>
                                <div class="col-md-9">
                                    <input type="text" name="imgLink" class="form-control" placeholder="Enter Project Image Link" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-form-label">PDF-Link</label>
                                <div class="col-md-9">
                                    <input type="text" name="pdfLink" class="form-control" placeholder="Enter Project pdf link" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-form-label">Sitemap Link</label>
                                <div class="col-md-9">
                                    <input type="text" name="sitemapLink" class="form-control" placeholder="Enter Sitemap Link" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-form-label">Youtube Link</label>
                                <div class="col-md-9">
                                    <input type="text" name="youtubeLink" class="form-control" placeholder="Enter Youtube link" />
                                </div>
                            </div>                                 
                        </div>
                    </div>
                    <div class="tab-pane" id="gallery" role="tabpanel">
                        <?php
                        for ($i=0; $i < 10; $i++) { 
                        ?>
                        <div class="form-group row">
                            <label class="col-md-3 col-sm-3 col-form-label">Image <?php echo $i+1;?> Link</label>
                            <div class="col-md-9">
                                <input type="text" name="galleryImgLink<?php echo $i+1; ?>" class="form-control galleryImageLink" placeholder="Enter Project Gallery Image Link" />
                            </div>
                        </div>
                        <?php } ?>                        
                    </div>
                </div>

                <div class="form-group mb-0 float-right">
                    <input type="text" hidden id="galleryLinkArray" name="galleryLinkArray">
                    <button type="submit" class="btn btn-success waves-effect waves-light mr-1" name="saveBtn" id="submit">
                        Save
                    </button>
                    <a type="button" class="btn btn-outline-secondary waves-effect" href="project.php">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

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