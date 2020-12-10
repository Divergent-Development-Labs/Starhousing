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

        <section class="pt-40 bg-37393e">
            <div class="container AvenirLTStdHeavy">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="swiper-container">
                            <img src="https://drive.google.com/thumbnail?id=<?php echo $row['img_link']; ?>"  alt="Plot" class="w-100" style="height: 240px;" />
                            <!-- <img src="https://drive.google.com/thumbnail?id=<?php echo $row['img_link']; ?>" class="w-100" alt="" style="position:relative" /> -->
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
                                <div class="col-12 mb-md-20 mb-10 d-sm-flex justify-content-start">
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

        <section class="project-highlights pb-0 pt-50" id="overview">
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

        <div class=" <?php echo ($row['gallery_link'] == '') ? 'd-none' : 'd-block'; ?>">
            <h4 class="AvenirLTStdHeavy color-444 fs-25 pt-0 text-center text-uppercase">Gallery</h4>            
            <iframe id="plotGallery" src="https://drive.google.com/embeddedfolderview?id=<?php echo $row['gallery_link']; ?>#grid" style="height:44vh;" width="100%" class="mx-auto <?php echo ($row['gallery_link'] == '') ? 'd-none' : 'd-block'; ?>" title="Project Gallery"></iframe>
        </div>
        
        <section class="project-highlights pb-40 pt-10" id="overview2">
            <div class="container-fluid">
                <div role="tabpanel" class="tab-pane in active AvenirLTStd55Roman_5173 ">
                    <div class="tab-content proj-highlights-section-tab pt-xs-30">
                        <div role="tabpanel" class="tab-pane in active">
                            <div class="justify-content-around">
                                <div class="<?php echo ($row['youtube_link'] == '') ? 'd-none' : 'd-block'; ?> col-11 pt-20 pb-15 pt-sm-0 mx-auto" >
                                    <h4 class="AvenirLTStdHeavy color-444 fs-25 text-center text-uppercase">Project Video</h4>
                                    <div class="w-100 h-100">
                                        <iframe width="100%" height="500px" src="https://youtube.com/embed/<?php echo $row['youtube_link']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                    </div>
                                </div>

                                <!-- <div class="<!?php echo ($row['sitemap_link'] == '') ? 'd-none' : 'd-block'; ?> col-sm-8 pt-20 pb-15 mx-auto" style="max-width: 793.7px; height: auto;">
                                    <h4 class="AvenirLTStdHeavy color-444 fs-25 pt-0 text-center text-uppercase">Sitemap</h4>
                                    <img class="h-100 pb-15 w-100" src="https://drive.google.com/thumbnail?id=<?php echo $row['sitemap_link']; ?>" alt="Villa Site Map">
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php } ?>
    <?php include 'footer.php'; ?>

    <script type="text/javascript">
        console.log(getElementsByClassName('flip-entry-info')[0].getElementsByTagName('a'));    
    </script>

</body>
</html>