<?php include 'session-checking.php'; ?>
<!Doctype html>
<html>
    <head>
        <?php include 'head.php'; ?>
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

                        <div class="row">
                            <div class="col-xl-12 mx-auto">
                                <div class="card">
                                    <div class="card-body">

                                        <form class="custom-validation" id="addProjectForm" action="backend/insert-project-backend.php" method="post">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-sm-3 col-form-label">Project Name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="projectName" class="project form-control" required placeholder="Enter Project Name"/>
                                                            <span class="text-danger"></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-sm-3 col-form-label">Project Type</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control projectType" name="projectType" required>
                                                                <option disabled selected>Select</option>
                                                                <option value="1">Star Luxor Home</option>
                                                                <option value="2">Plot</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row d-none  bhkTypeDiv">
                                                        <label class="col-md-3 col-sm-3 col-form-label">BHK Type</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control bhkType" name="bhkType" >
                                                                <option disabled selected>Select</option>
                                                                <option value="1">1 BHK</option>
                                                                <option value="2">2 BHK</option>
                                                                <option value="3">3 BHK</option>
                                                                <option value="4">4 BHK</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row d-none sqftTypeDiv">
                                                        <label class="col-md-3 col-sm-3 col-form-label">Sqft Type</label>
                                                        <div class="col-md-9 row pr-0">
                                                            <div class="col-sm-6">
                                                                <input type="text" name="sqftValue" class="project form-control"  placeholder="Enter Sqrt Value"/>
                                                                <span class="text-danger"></span>                                                                
                                                            </div>
                                                            <div class="col-sm-6 pr-0">
                                                                <select class="form-control sqftType" name="sqftType" >
                                                                    <option disabled selected>Select</option>
                                                                    <option value="1">Sqft</option>
                                                                    <option value="2">Sqft onwards</option>
                                                                </select>                                                                
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-sm-3 col-form-label">Project Status</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" name="projectStatus" required>
                                                                <option disabled selected >Select Status</option>
                                                                <option value="1">On Going</option>
                                                                <option value="2">Completed</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-sm-3 col-form-label">Image Link</label>
                                                        <div class="col-md-9">                                            
                                                            <input type="text" name="imgLink" class="form-control" 
                                                                    placeholder="Enter Project Image Link"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-sm-3 col-form-label">PDF-Link</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="pdfLink" class="form-control" 
                                                                    placeholder="Enter Project pdf link"/>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-sm-3 col-form-label">Address Line 1</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="addressLine1"
                                                                    class="form-control" 
                                                                    placeholder="Enter Door No, Street Name"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-sm-3 col-form-label">Address Line 2</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="addressLine2"
                                                                    class="form-control" 
                                                                    placeholder="Enter Area Name / Land Mark"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-sm-3 col-form-label">District</label>
                                                        <div class="col-md-9">
                                                            <input type="text"  name="district"
                                                                    class="form-control" 
                                                                    placeholder="Enter Project District"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-sm-3 col-form-label">State</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="state"
                                                                    class="form-control" 
                                                                    placeholder="Enter Project State"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-sm-3 col-form-label">Pin Code</label>
                                                        <div class="col-md-9">
                                                        <input type="text" class="form-control"  name="pinCode"
                                                                    data-parsley-length="[6,6]"
                                                                    maxlength="6"
                                                                    placeholder="Enter Pin Code"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0 float-right">
                                                <button type="submit" class="btn btn-success waves-effect waves-light mr-1" name="saveBtn" id="submit">
                                                    Save
                                                </button>
                                                <a type="button" class="btn btn-outline-secondary waves-effect" href="project.php" >
                                                    Cancel
                                                </a>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    <?php include 'footer.php'; ?>
        <script src="custom/js/add-project.js"></script>
    </body>
</html>