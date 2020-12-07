<?php include 'admin/db/connection.php'; ?>

<!DOCTYPE html>
<html>

<head>
	<?php include 'head.php'; ?>
</head>

<body data-rsssl=1 class="home page-template page-template-front-page page-template-front-page-php page page-id-15">
	
	<?php include 'top_bar.php'; ?>

	<section class="banner-holder">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 p-0">
					<div class="swiper-container" id="home-main-slider">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img class="d-none d-sm-none d-md-block d-lg-block" style="height: 600px !important;" src="admin/assets/images/Desk-Banner-starhousing.jpg" />
								<img class="d-block d-sm-block d-md-none d-lg-none" src="admin/assets/images/Mob-Banner-starhousing.jpg" />
							</div>
						</div>
					</div>
					<!-- <a class="scroll explore-now" href="#homeSearch">
						<i class="fa fa-angle-down"></i>
					</a> -->
				</div>
			</div>
		</div>
	</section>


	<!-- <section class="disclaimer-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-1 disclaimer-title rotate">
					<h1 style="font-size: 20px;font-weight: 700;">
						DISCLAIMER
					</h1>
				</div>
				<div class="col-md-11">
					<h5>Thank you for visiting The Star Housing website.</h5>
					<p>By using or accessing the website, you agree to the Disclaimer without any qualification or limitation. Design, specifications, floor plans, brochures etc., are subject to change without prior notice. Computer generated images; walkthroughs and render images are the artist's impression and are an indicative of the actual designs. In no event will the Company, its management, its associated companies and /or its employees be liable for the claim made by the users including seeking any cancellation for any of the inaccuracies in the information provided on this website, though all efforts have to be made to ensure accuracy. Please note that by sharing any of your contact details on the website, you are authorizing the STARHOUSING team to provide information on our projects over Calls, SMS & Emails. To find out more about projects/developments, please call
					<a href="tel:+9197877 00111" class="ybtn color-010101 text-nowrap">+91-97877 00111</a>
					<span> | </span>
                    <a href="tel:+919787773834" class="ybtn color-010101 text-nowrap">+91-97877 73834</a>
 					 or visit our sales office during working hours and get in touch with authorized STARHOUSING sales representative.</p>
				</div>
			</div>
		</div>
		<div class="col-md-12 text-center">
			<a href="javascript:void(0);" id="hideDisclaimer" class="btn btn-primary">I AGREE</a>
		</div>
	</section> -->

	<!-- Homepage search section starts here -->
	<!-- Homepage search section ends here -->
	<!-- Lifestyle at STARHOUSING starts here -->

	<section class="home_search_section">
		<div class="container">
			<div class="home_form_links_row clearfix">
				<span style="font-weight: bold; font-size: 16px;"> 
					Home | Land | Shelter – A dream for all people which can be fulfilled by Star Housing at Temple City. Who wants to miss a chance when you get a modern Villas at an affordable cost at the prime locations and easily accessible to all essentials. This is what we do at Star Housing. 
				</span>
				<p style="font-weight: bold; font-size: 18px;" class="animate__heartBeat text-danger text-uppercase">* (Bank Loans can be arranged) *</p>
				<h5 class="opensanssemibold">Ready to move in :</h5>
				<!-- <h5 class="opensanssemibold">Most Searched Areas :</h5> -->
				<?php
				$sql2 = "SELECT * FROM `project` WHERE `project_status`='1'";
				$projectArray = $conn->query($sql2);

				if ($projectArray->num_rows > 0) {
					$c = 1;
					while ($project = $projectArray->fetch_assoc()) {
						if ($project['address_line_2'] != '') {
							echo '<a href="ongoing-projects.php?a='.$project['address_line_2'].'" class="separator"> '.$project['address_line_2'].' </a>';
						}
					}
				}
				?>
			</div>
		</div>		
	</section>


	<section class="life-cast-sec bg-grey-color desktop ">
		<h3 class="bg-white font-weight-bold mb-0 p-2  text-center text-uppercase">HOW IT IS INSIDE STARHOUSING VILLA</h3>

		<div class="lco-slider">
			<div class="loc-cast-block" style="background-image: url('admin/assets/images/Crockery.jpg');">
				<div class="life-cast-overlay" hidden>
					<h3></h3>
					<p></p>
				</div>
			</div>
			<div class="loc-cast-block" style="background-image: url('admin/assets/images/Dining_01.jpg');">
			</div>
			<div class="loc-cast-block" style="background-image: url('admin/assets/images/Foyer.jpg');">
			</div>
			<div class="loc-cast-block" style="background-image: url('admin/assets/images/Kitchen_01.jpg');">
			</div>
			<div class="loc-cast-block" style="background-image: url('admin/assets/images/Kitchen_02.jpg');">
			</div>
			<div class="loc-cast-block" style="background-image: url('admin/assets/images/Living_01.jpg');">
			</div>
			<div class="loc-cast-block" style="background-image: url('admin/assets/images/Living_02.jpg');">
			</div>
			<div class="loc-cast-block" style="background-image: url('admin/assets/images/Living_03.jpg');">
			</div>
			<div class="loc-cast-block" style="background-image: url('admin/assets/images/Lobby.jpg');">
			</div>
			<div class="loc-cast-block" style="background-image: url('admin/assets/images/Toilet_01.jpg');">
			</div>
			<div class="loc-cast-block" style="background-image: url('admin/assets/images/Toilet_02.jpg');">
			</div>
			<div class="loc-cast-block" style="background-image: url('admin/assets/images/Toilet_GF.jpg');">
			</div>
		</div>
		<div class="lco-arrow text-center">
			<button type="button" data-role="none" id="prvarrow" aria-label="Previous" role="button" style="display: block;"></button>
			<button type="button" data-role="none" id="nxtarrow" aria-label="Next" role="button" style="display: block;"></button>
		</div>
	</section>
	<!-- Lifestyle at Starhousing ends here -->

	<section class="pb-20 pt-50 bg-fbfbfb bg-building bg-grey-color" id="new_home_projects">

		<h2 class="text-uppercase text-center fs-36 fs-xs-26 AvenirLTStdHeavy">PROJECTS ACROSS Tamil Nadu</h2>
		<!-- <p class="fs-16 color-666 text-center pb-40 AvenirLTStdLight">Over 20 million Sq.ft of Living Spaces</p> -->
		<div class="row">
			<div class="col-12">
				<ul class="nav nav-tabs location" role="tablist" id="home_location_list">
					<li class="nav-item"><a class="nav-link active fs-20" href="#madurai" role="tab" data-toggle="tab">Madurai</a></li>
				</ul>
				<div class="tab-content">
					<!-- main Tab content -->
					<div role="tabpanel" class="tab-pane in active AvenirLTStd55Roman_5173 house-type-tab" id="madurai">
						<!-- madurai main -->
						<ul class="nav nav-tabs border-none justify-content-center" role="tablist">
							<li class="nav-item">
								<a class="nav-link fs-18 active" href="#villas_madurai" role="tab" data-toggle="tab">Villa </a>
							</li>
							<li class="nav-item">
								<a class="nav-link fs-18" href="#plots_madurai" role="tab" data-toggle="tab">Plots </a>
							</li>
						</ul>
						<div class="tab-content">
							<!-- madurai-tab-main -->
							<div role="tabpanel" class="tab-pane in active" id="villas_madurai">
								<div class="row">
									<?php
            							$sql = "SELECT * FROM `project` WHERE `project_status`='1' AND `project_type`='1'";
										$onGoingArray = $conn->query($sql);
								
										if ($onGoingArray->num_rows > 0) {                                
											while($onGoing = $onGoingArray->fetch_assoc()) { ?>

												<div class="col-md-4 col-sm-6 project_item all apartment">
													<div class="prj-phase-box">
														<div class="project_box_in">
															<div class="imgbox">
																<span>
																	<img src="https://drive.google.com/thumbnail?id=<?php echo $onGoing['img_link']; ?>" alt="Star Housing Ongoing Project" class="img-responsive  card-img">
																</span>
																<!-- <a href="<!?php echo $onGoing['pdf_link']; ?>" class="prj-phase-label" title="Download Brochure" target="_blank"></a> -->
															</div>
															<div class="txt-content clearfix">
																<h4><?php echo $onGoing['project_name']; ?></h4>
																<a href="<?php echo $onGoing['location_link']; ?>" target="_blank" ><span class="ft-lk"><?php echo ($onGoing['address_line_2']) ? $onGoing['address_line_2'] : '--'; ?></span></a>
																<span class="ft-bhk"><?php echo $onGoing['bhk_or_sqft']; ?> BHK</span>
																<!-- <span class="ft-amt">-</span> -->
																<div class="clearfix"></div>
																<a href="villa.php?id=<?php echo $onGoing['id']; ?>" class="view_more_arr">View More</a>
																<a href="<?php echo $onGoing['pdf_link']; ?>" target="_blank" class="download_btn_arr">Brochure</a>
															</div>
														</div>
													</div>
												</div>
												<?php 
											}
												?>
											</div>
											<div class="row mb-5 view_all_proj_wrap">
												<div class="col-12 text-center">
													<a href="ongoing-projects.php" class="d-block m-auto AvenirLTStdHeavy btn-transparent">View all projects</a>
												</div>
											</div>
											<?php 											
										} 
										else{ ?>
												<div class="col-md-6 col-sm-6 project_item all apartment mx-auto">
													<div class="prj-phase-box">
														<div class="project_box_in p-5">
															<h4>No Projects Available</h4>
														</div>
													</div>
												</div>
											</div>			
											<?php
										} ?>
							</div><!-- madurai - Villas -->


							<div role="tabpanel" class="tab-pane fade" id="plots_madurai">
								<div class="row">
									<?php
            							$sql = "SELECT * FROM `project` WHERE `project_status`='1' AND `project_type`='2'";
										$onGoingArray = $conn->query($sql);
								
										if ($onGoingArray->num_rows > 0) {                                
											while($onGoing = $onGoingArray->fetch_assoc()) { ?>
												<div class="col-md-4 col-sm-6 project_item all apartment">
													<div class="prj-phase-box">
														<div class="project_box_in">
															<div class="imgbox">
																<span>
																	<img src="https://drive.google.com/thumbnail?id=<?php echo $onGoing['img_link']; ?>" alt="Star Housing Ongoing Project" class="img-responsive  card-img">
																</span>
																<!-- <a href="<!?php echo $onGoing['pdf_link']; ?>" class="prj-phase-label" title="Download Brochure" target="_blank"></a> -->
															</div>
															<div class="txt-content clearfix">
																<h4><?php echo $onGoing['project_name']; ?></h4>
																<a href="<?php echo $onGoing['location_link']; ?>" target="_blank" ><span class="ft-lk"><?php echo ($onGoing['address_line_2']) ? $onGoing['address_line_2'] : '--'; ?></span></a>
																<span class="ft-plot"><?php echo $onGoing['bhk_or_sqft']; ?> Cent</span>
																<span class="ft-amt"><?php echo $onGoing['rate']; ?></span>
																<div class="clearfix"></div>
																<a href="plot.php?id=<?php echo $onGoing['id']; ?>"  class="view_more_arr">View More</a>
																<a href="<?php echo $onGoing['pdf_link']; ?>" target="_blank" class="download_btn_arr">Brochure</a>
															</div>
														</div>
													</div>
												</div>
												<?php
											}
											?>
											</div>
											<div class="row mb-5 view_all_proj_wrap">
												<div class="col-12 text-center">
													<a href="ongoing-projects.php" class="d-block m-auto AvenirLTStdHeavy btn-transparent">View all projects</a>
												</div>
											</div>

												<?php 
											
										}
										else{ ?>
												<div class="col-md-6 col-sm-6 project_item all apartment mx-auto">
													<div class="prj-phase-box">
														<div class="project_box_in p-5">
															<h4>No Projects Available</h4>
														</div>
													</div>
												</div>
											</div>			
											<?php
										} ?>
							</div><!-- chennai - Villas -->

						</div><!-- Chennai-tab-main -->
					</div><!-- Chennai main -->
				</div><!-- main Tab content -->
			</div>
		</div>

	</section>

	<!-- Testimonial section starts here -->
	<!-- Testimonial section ends here -->

	<!-- About US section starts here -->
	<section class="pb-20 pt-50 home_about_section clearfix">
		<div class="container text-center">
			<h3 style="text-align:center!important;">About Starhousing</h3>
			<span class="ha_sub_heading">South India's Leading Real Estate Company</span>
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-12">
					<div class="list-inline-item ha_items_list ha_items_list_1 clearfix">
						<div class="ha_item">
							<div class="clearfix"></div>
							<span>TRUST</span>
						</div>
						<div class="ha_item">
							<div class="clearfix"></div>
							<span>TIMELY DELIVERY</span>
						</div>
						<div class="ha_item">
							<div class="clearfix"></div>
							<span>QUALITY</span>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="home_about_floats_wrap clearfix">
			<div class="home_about_left">
				<p>Star Housing started at 2010 and growing gradually along with People’s trust. In real estate field Trust is more important, which has been provided by viewers such You to us. One of the leading Plot promoters | Villas | Constructor at Madurai. We have successfully completed many projects at VNCT Nagar | JP Nagar | Sathuragiri | Iswarya Lakshmi nagar and so on. We work according to Customers need. Services provided by Star housing - Plots | Villas | only Construction work | construct a gated community. Kindly visit Gallery for Ongoing and Completed projects of Star housing. Projects which we handle are more than 150 cents to 400 cents. Prior and post registration, all documents will be handed over with filing system. Processing of Documents related to Land registration and construction work will be executed at the earliest by our Team.</p>
				<div class="clearfix"></div>
				<!-- <div class="ha_items_list ha_items_list_2 clearfix">
					<div class="ha_item">
						<img src="#" alt="" />
						<span>100+ <br />Landmarks</span>
					</div>
					<div class="ha_item">
						<img src="#" alt="" />
						<span>17000+ <br />Happy Customers</span>
					</div>
					<div class="ha_item">
						<img src="#" alt="" />
						<span>20 Million+ <br />sq.feet developed</span>
					</div>
				</div> -->
				<div class="clearfix"></div>
				<!-- <a href="#" download="Starhousing Corporate Brochure" target="_blank" class="view_more_arr">View brochure</a> -->
			</div>
			<div class="home_about_video_wrap">
				<iframe width="100%" height="398" src="https://www.youtube.com/embed/VpQP-H7SERg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>                
			</div>
		</div>
	</section>
	<!-- About US section ends here -->

	<?php include 'home_popping_image.php'; ?>
	<footer class="fs-10 fw-bold">
		<div class="container">
			<label class="primary-color fs-30 AvenirLTStdHeavy">Our Projects</label>
			<div class="border-bttom-8b8b8b row">
				<div class="col-12">
					<label class="primary-color fs-17 AvenirLTStdHeavy">Ongoing Projects</label>
					<div class="row mb-2">
						<?php
							$sql2 = "SELECT * FROM `project` WHERE `project_status`='1' AND `project_type`='2'";
							$sql3 = "SELECT * FROM `project` WHERE `project_status`='1' AND `project_type`='1'";
							$projectArray = $conn->query($sql2);
							$project2Array = $conn->query($sql3);

							if ($projectArray->num_rows > 0) {
								$c = 1;
								while ($project = $projectArray->fetch_assoc()) {
									if($project['project_type'] == '2'){
										if ($c == 1) {
											echo '	<div class="col-12 col-md-4">
														<ul class="link_row_1">';
										}
	
										if (($c % 5) == 0) {
												echo '		</ul>
														</div>
														<div class="col-12 col-md-4">
															<ul class="link_row_1">';
										}
	
										echo '<li><span>';
										echo 'PLot ';
										echo $project['project_name'];
										echo '</span></li>';
										$c++;	
									}
								}
								echo '</ul></div>';
							}
							if ($project2Array->num_rows > 0) {
								$c = 1;
								while ($project = $project2Array->fetch_assoc()) {
									if($project['project_type'] == '1'){
										if ($c == 1) {
											echo '	<div class="col-12 col-md-4">
														<ul class="link_row_1">';
										}

										if (($c % 5) == 0) {
												echo '		</ul>
														</div>
														<div class="col-12 col-md-4">
															<ul class="link_row_1">';
										}

										echo '<li><span>';
										echo 'Villa ';
										echo $project['project_name'];
										echo '</span></li>';
										$c++;
									}
								}
								echo '</ul></div>';
							}
						?>
					</div>
				</div>
				<div class="col-12">
					<label class="primary-color fs-17 AvenirLTStdHeavy">Completed Projects</label>
					<div class="row mb-2">
						<?php
							$sql2 = "SELECT * FROM `project` WHERE `project_status`='2' AND `project_type`='2'";
							$sql3 = "SELECT * FROM `project` WHERE `project_status`='2' AND `project_type`='1'";
							$projectArray = $conn->query($sql2);
							$project2Array = $conn->query($sql3);

							if ($projectArray->num_rows > 0) {
								$c = 1;
								while ($project = $projectArray->fetch_assoc()) {
									if($project['project_type'] == '2'){
										if ($c == 1) {
											echo '	<div class="col-12 col-md-4">
														<ul class="link_row_1">';
										}
	
										if (($c % 5) == 0) {
												echo '		</ul>
														</div>
														<div class="col-12 col-md-4">
															<ul class="link_row_1">';
										}
	
										echo '<li><a href="plot.php?id='.$project['id'].'"><span>';
										echo 'PLot ';
										echo $project['project_name'];
										echo '</span></a></li>';
										$c++;	
									}
								}
								echo '</ul></div>';
							}
							if ($project2Array->num_rows > 0) {
								$c = 1;
								while ($project = $project2Array->fetch_assoc()) {
									if($project['project_type'] == '1'){
										if ($c == 1) {
											echo '	<div class="col-12 col-md-4">
														<ul class="link_row_1">';
										}

										if (($c % 5) == 0) {
												echo '		</ul>
														</div>
														<div class="col-12 col-md-4">
															<ul class="link_row_1">';
										}

										echo '<li><a href="villa.php?id='.$project['id'].'"><span>';
										echo 'Villa ';
										echo $project['project_name'];
										echo '</span></a></li>';
										$c++;
									}
								}
								echo '</ul></div>';
							}
						?>
					</div>
				</div>
			</div>
			<!-- <br> -->
			
			<label class="primary-color fs-30 AvenirLTStdHeavy">Get in touch</label>
			<div class="row ">
				<div class="col-12 pb-3">
					<div class="office_address">
						<!-- <div class="off_location AvenirLTStdHeavy text-bold">
							MADURAI
						</div> -->
						<div class="off_add">
							<p class="mb-0">22,<br>Lake Area Main Road,<br>Uthangudi<br>Madurai - 625 107<br> Tamil Nadu, India
								<div class="chennais"><span class="mob-link d-block">Phone : <span class="ybtn"><a href="tel:0452-4391555" class="ybtn">0452-4391555</a></span></span></div>
								<div class="chennais"><span class="mob-link d-block">Mobile : <span class="ybtn"><a href="tel:+9197877 00111" class="ybtn">+91-97877 00111</a><span> | </span><a href="tel:+919787773834" class="ybtn">+91-97877 73834</a></span></span></div>
								<div class="chennais"><span class="mob-link d-block">Email Id : 
									<span class="ybtn"><a href="mailto:jemibalamkt2010@gmail.com" class="ybtn">jemibalamkt2010@gmail.com</a></span>
									<span> | </span>
									<span class="ybtn"><a href="mailto:starhousingmadurai2012@gmail.com" class="ybtn">starhousingmadurai2012@gmail.com</a></span>
								</div>								
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row ">
				<div class="col-12">
					<p>
						<div class="foo_row4">
							<!-- <div class="getintouch_seo">
								<div>
									<span style="font-weight:bold; font-size:15px;">About Starhousing</span><br>
										Star Housing started at 2010 and growing gradually along with People’s trust. In real estate field Trust is more important, which has been provided by viewers such You to us. One of the leading Plot promoters | Villas | Constructor at Madurai. We have successfully completed many projects at VNCT Nagar | JP Nagar | Sathuragiri | Iswarya Lakshmi nagar and so on. We work according to Customers need. Services provided by Star housing - Plots | Villas | only Construction work | construct a gated community. Kindly visit Gallery for Ongoing and Completed projects of Star housing. Projects which we handle are more than 150 cents to 400 cents. Prior and post registration, all documents will be handed over with filing system. Processing of Documents related to Land registration and construction work will be executed at the earliest by our Team.
									<br>
									<br>
									<span style="font-weight: bold; font-size:15px;">Our Team</span>
									<br>
										Our MD – Mr. BalaSankar have great experience in real estate business for more than 15 years. His dedication towards fulfilling customer requirements makes him unique in the field. Fast delivery of documents and keys to clients makes them happier.
										MD’s wife Mrs. B. Logeswari Vice President of Star Housing is a special boost to our Team.
										We have a team of 10 Marketing staff | 5 support staff | Legal team | Administration | Engineers for construction | surveyors for exact land measurements | labour team for construction work 
										Our new office constructed at Lake Area near Meenakshi Mission Hospital has luxury rooms for guests and clients with few amenities | food | conference hall for private meeting.
								</div>
							</div> -->
						</div>
					</p>
					<p></p>

				</div>
				<!-- <div class="col-md-12 text-center">
					<a href="terms-and-condition/" class="float-left text-left primary-color AvenirLTStdHeavy">TERMS AND CONDITIONS</a> <span class="float-left" style="color:#818282">&nbsp;&nbsp;&nbsp; &copy; 2020 Starhousing </div> -->
			</div>

		</div>
	<?php include 'footer.php'; ?>

		<script src="https://apps.elfsight.com/p/platform.js" defer></script>
		<div class="elfsight-app-8a2777c4-a848-403a-ab11-e5b165f78952"></div>
</body>

</html>
