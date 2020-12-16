<?php include 'admin/db/connection.php'; ?>
<?php

if (isset($_GET['id'])) {
    if (!($_GET['id']) || ($_GET['id'] == '')) {
        header('Location: index.php');
    } else {
        $q = intval($_GET['id']);
        $sql = "SELECT * FROM `project` WHERE `id`='$q'";
    }
} else {
    header('Location: index.php');
}

$project = $conn->prepare($sql);
// $project->bind_param('s', $name); // 's' specifies the variable type => 'string'

$project->execute();

$result = $project->get_result();
// print $result;    

?>
<!DOCTYPE html>
<html>

<head>
    <?php include 'head.php'; ?>    
</head>

<body data-rsssl=1 class="home page-template page-template-front-page page-template-front-page-php page page-id-15">

    <?php include 'top_bar.php'; ?>
    <?php
    while ($row = $result->fetch_assoc()) { ?>

        <section class="pt-40 pb-30 bg-37393e">
            <div class="container AvenirLTStdHeavy">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="swiper-container">
                            <img src="https://drive.google.com/uc?export=view&id=<?php echo $row['img_link']; ?>"  alt="Plot" class="w-100" style="height: 330px;" />
                            <!-- <img src="https://drive.google.com/uc?export=view&id=<?php echo $row['img_link']; ?>" class="w-100" alt="" style="position:relative" /> -->
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="text-center fs-13 ">
                            <div class="bg-fff text-center p-3 mb-20 fs-13">
                                <div class="row">
                                    <div class="col-12 text-center pb-10 text-uppercase GeorgiaRegularfont fw-bold">
                                        <img src="admin/assets/images/Star_luxor_logo.jpg" alt="" class="float-md-left" style=" max-width: 173px;">
                                    </div>
                                </div>
                                <ul class="text-left ul-project-quick-description color-666">
                                    <li><?php echo $row['bhk_or_sqft']; ?> Cent </li>
                                    <li class="<?php echo ($row['rate'] == '') ? 'd-none' :'';?>" ><?php echo $row['rate']; ?> </li>
                                    <li>Located in <?php echo $row['address_line_2']; ?> </li>
                                </ul>
                            </div>
                            <div class="row bg-37393e project-btns mb-10">
                                <div class="col-12 mb-md-20 mb-10 d-sm-flex justify-content-center">
                                    <a class="d-block text-center AvenirLTStdHeavy color-444 fs-13 proj-details-more mr-sm-2 my-sm-0 my-1 px-2 py-1  " target="_blank" href="<?php echo $row['pdf_link']; ?>" >Brochure</a>
                                    <a class="d-block text-center AvenirLTStdHeavy color-444 fs-13 proj-details-more mr-sm-2 my-sm-0 my-1 px-2 py-1  " target="_blank" href="https://drive.google.com/file/d/<?php echo $row['sitemap_link'];?>/view" >SiteMap</a>
                                    <a class="d-block text-center AvenirLTStdHeavy color-444 fs-13 proj-details-more px-2 py-1 " target="_blank" href="<?php echo $row['location_link']; ?>" >Show in Map</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="project-highlights pb-0 pt-10 border" id="overview" style="background: whitesmoke !important;">
            <h1 class="text-uppercase text-center fs-30 fs-xs-26 AvenirLTStdHeavy">PLOT HIGHLIGHTS</h1>
            <div class="container-fluid">
                <div role="tabpanel" class="tab-pane in active AvenirLTStd55Roman_5173 " >
                    <div class="tab-content proj-highlights-section-tab pt-xs-30">
                        <div role="tabpanel" class="tab-pane in active" >
                            <div class="d-sm-flex justify-content-around">
                                <div class="col-lg-6 col-12 <?php echo ($row['anamatics'] == '') ? 'd-none': 'd-block' ; ?>">
                                    <h4 class="color-444 AvenirLTStdHeavy text-uppercase fs-25 pb-20 text-center">Amenities</h4>
                                    <?php echo $row['anamatics']; ?>
                                </div>
                                <div class="col-lg-6 col-12 <?php echo ($row['sirena_features'] == '') ? 'd-none': 'd-block' ; ?>">
                                    <h4 class="color-444 AvenirLTStdHeavy text-uppercase fs-25 pb-20 text-center">Salient Features</h4>
                                    <?php echo $row['sirena_features']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="mb-0 <?php echo ($row['gallery_link'] == '') ? 'd-none' : 'd-block'; ?>">        
            <div class="col-md-8 col-12 mx-auto" style="max-width: 650px !important;">
                <div class="card">
                    <div class="card-body" style="background-color: #37393e;">

                        <h4 class="card-title fs-25 text-bold text-center text-uppercase text-white">Gallery</h4>

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                            <?php 
                                foreach (json_decode($row['gallery_link']) as $key => $value) { ?>
                                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $key; ?>" class="<?php echo ($key == 0) ? 'active': '';?>"></li>
                                <?php } ?>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <?php 
                                foreach (json_decode($row['gallery_link']) as $key => $value) { ?>
                                <div class="carousel-item <?php echo ($key == 0) ? 'active': '';?>">
                                    <img class="d-block img-fluid" src="https://drive.google.com/uc?export=view&id=<?php echo $value; ?>" width="100%" style="height: 359px !important;max-width: 630px !important;" alt="Image <?php echo $key+1;?>">
                                </div>
                                <?php } ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->         
        </div>
        
        <section class="bg-yellow border d-block mb-0 project-highlights pt-10 <?php echo ($row['youtube_link'] == '') ? 'd-none' : 'd-block'; ?>" id="overview2">
            <div class="container-fluid">
                <div role="tabpanel" class="tab-pane in active AvenirLTStd55Roman_5173 ">
                    <div class="tab-content proj-highlights-section-tab pt-xs-30">
                        <div role="tabpanel" class="tab-pane in active">
                            <div class="justify-content-around">
                                <div class="<?php echo ($row['youtube_link'] == '') ? 'd-none' : 'd-block'; ?> col-11 pt-20 pb-15 pt-sm-0 mx-auto" >
                                    <h4 class="AvenirLTStdHeavy fs-25 text-bold text-center text-uppercase text-white">Project Video</h4>
                                    <div class="w-100 h-100">
                                        <iframe width="100%" height="500px" src="https://youtube.com/embed/<?php echo $row['youtube_link']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php } ?>
    <?php include 'footer.php'; ?>

    <!-- Magnific Popup-->
    <!-- <script src="custom/js/jquery.magnific-popup.min.js"></script> -->

    <!-- lightbox init js-->
    <!-- <script src="custom/js/lightbox.init.js"></script> -->
</body>
</html>