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
								<img class="w-100 d-none d-sm-none d-md-block d-lg-block" src="https://www.casagrand.co.in/wp-content/uploads/2020/04/Desk-Banner-casagrand.jpg" />
								<img class="w-100  d-block d-sm-block d-md-none d-lg-none" src="https://www.casagrand.co.in/wp-content/uploads/2020/04/Mob-Banner-casagrand.jpg" />
							</div>
						</div>
					</div>
					<a class="scroll explore-now" href="#homeSearch">
						<i class="fa fa-angle-down"></i>
					</a>
				</div>
			</div>
		</div>
	</section>


	<section class="disclaimer-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-1 disclaimer-title rotate">
					<h1 style="font-size: 20px;font-weight: 700;">
						DISCLAIMER
					</h1>
				</div>
				<div class="col-md-11">
					<h5>Thank you for visiting The CASAGRAND website.</h5>
					<p>By using or accessing the website, you agree to the Disclaimer without any qualification or limitation. Design, specifications, floor plans, brochures etc., are subject to change without prior notice. Computer generated images; walkthroughs and render images are the artist's impression and are an indicative of the actual designs. In no event will the Company, its management, its associated companies and /or its employees be liable for the claim made by the users including seeking any cancellation for any of the inaccuracies in the information provided on this website, though all efforts have to be made to ensure accuracy. Please note that by sharing any of your contact details on the website, you are authorizing the CASAGRAND team to provide information on our projects over Calls, SMS & Emails. To find out more about projects/developments, please call 9962944444 or visit our sales office during working hours and get in touch with authorized CASAGRAND sales representative.</p>
				</div>
			</div>
		</div>
		<div class="col-md-12 text-center">
			<a href="javascript:void(0);" id="hideDisclaimer" class="btn btn-primary">I AGREE</a>
		</div>
	</section>

	<section class="home_search_section" id="homeSearch">
		<div class="container">
			<h3>A place that you call home</h3>
			<div class="clearfix"></div>
			<div class="row home_search_form">
				<div class="col-md-3 col-sm-6 loc_select_wrap sel_wrap_icon">
					<select id="location" name="location" class="filter-select w-100">
						<option value="0">Location</option>
						<optgroup label="Ongoing projects">
						<optgroup label="Coimbatore">
							<option value="ongoing-projects-coimbatore"><b style="font-weight:bold">Coimbatore</b></option>
							<option value="ongoing-projects-coimbatore-kalapatti">Kalapatti</option>
							<option value="ongoing-projects-coimbatore-kuniyamuthur">Kuniyamuthur</option>
							<option value="ongoing-projects-coimbatore-offmtproad">Off MTP Road</option>
							<option value="ongoing-projects-coimbatore-race-course">Race Course</option>
							<option value="ongoing-projects-coimbatore-vedapatti">Vedapatti</option>
							<option value="ongoing-projects-coimbatore-vilankurichi">Vilankurichi</option>
						</optgroup>
						<optgroup label="Chennai">
							<option value="ongoing-projects-chennai"><b style="font-weight:bold">Chennai</b></option>
							<option value="ongoing-projects-chennai-ecr">ECR</option>
							<option value="ongoing-projects-chennai-kanathur">Kanathur</option>
							<option value="ongoing-projects-chennai-karapakkam">Karapakkam</option>
							<option value="ongoing-projects-chennai-korattur">Korattur</option>
							<option value="ongoing-projects-chennai-madhavaram">Madhavaram</option>
							<option value="ongoing-projects-chennai-manapakkam">Manapakkam</option>
							<option value="ongoing-projects-chennai-mandaveli">Mandaveli</option>
							<option value="ongoing-projects-chennai-mannivakkam">Mannivakkam</option>
							<option value="ongoing-projects-chennai-medavakkam">Medavakkam</option>
							<option value="ongoing-projects-chennai-mogappair">Mogappair</option>
							<option value="ongoing-projects-chennai-mount-road">Mount road</option>
							<option value="ongoing-projects-chennai-nolambur">Nolambur</option>
							<option value="ongoing-projects-chennai-omr">OMR</option>
							<option value="ongoing-projects-chennai-oragadam">Oragadam</option>
							<option value="ongoing-projects-chennai-perungudi">Perungudi</option>
							<option value="ongoing-projects-chennai-poonamallee">Poonamallee</option>
							<option value="ongoing-projects-chennai-sholinganallur">Sholinganallur</option>
							<option value="ongoing-projects-chennai-tambaram">Tambaram</option>
							<option value="ongoing-projects-chennai-thalambur">Thalambur</option>
							<option value="ongoing-projects-chennai-thirumudivakkam">Thirumudivakkam</option>
							<option value="ongoing-projects-chennai-thoraipakkam">Thoraipakkam</option>
						</optgroup>
						<optgroup label="Bengaluru">
							<option value="ongoing-projects-bangalore"><b style="font-weight:bold">Bengaluru</b></option>
							<option value="ongoing-projects-bangalore-hennur-main-road">Hennur Main Road</option>
							<option value="ongoing-projects-bangalore-kogilu">Kogilu</option>
							<option value="ongoing-projects-bangalore-sarjapur">Sarjapur</option>
						</optgroup>
						<optgroup label="Kodaikanal">
							<option value="ongoing-projects-kodaikanal"><b style="font-weight:bold">Kodaikanal</b></option>
							<option value="ongoing-projects-kodaikanal-vilpatti">Vilpatti</option>
						</optgroup>
						</optgroup>
						<optgroup label="Ready to occupy Projects">
						<optgroup label="Chennai">
							<option value="ready-to-move-projects-chennai"><b style="font-weight:bold">Chennai</b></option>
							<option value="ready-to-move-projects-chennai-mount-road">Mount Road</option>
							<option value="ready-to-move-projects-chennai-oragadam">Oragadam</option>
							<option value="ready-to-move-projects-chennai-perungudi">Perungudi</option>
							<option value="ready-to-move-projects-chennai-tambaram">Tambaram</option>
							<option value="ready-to-move-projects-chennai-thirumudivakkam">Thirumudivakkam</option>
							<option value="ready-to-move-projects-chennai-thoraipakkam">Thoraipakkam</option>
							<option value="ready-to-occupy-projects-chennai-omr">OMR</option>
						</optgroup>
						</optgroup>
					</select>
				</div>

				<div class="col-md-3 col-sm-6 home_select_wrap sel_wrap_icon">
					<select id="type" name="type" class="filter-select w-100">
						<option value="0">Type of Home</option>
						<option value="plots">Plots</option>
						<option value="villas">Star Luxor Home</option>
					</select>
				</div>

				<div class="col-md-3 col-sm-6 bed_select_wrap sel_wrap_icon">
					<select id="bedroomconf" name="bedroomconf" class="filter-select w-100">
						<option value="0">Bedroom Configuration</option>
						<option value="1-bhk">1 BHK</option>
						<option value="2-bhk">2 BHK</option>
						<option value="3-bhk">3 BHK</option>
						<option value="4-bhk">4 BHK</option>
					</select>
				</div>

				<div class="col-md-3 col-sm-6">
					<!-- <button class="text-left color-2323 search-btn w-100 AvenirLTStdHeavy fs-16" id="search-filter">Search <img src="https://casagrand.co.in/wp-content/themes/casagrand2018/img/next-arrow-cricle.png" style="width:23px; height:23px;"/></button><label class="color-fff fs-14 search-error m-0">Please select any of the category!</label> -->
					<button class="arrow-btn" id="search-filter">Search</button>
					<label class="fs-14 search-error m-0">Please select any of the category!</label>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="home_form_links">
				<div class="home_form_links_row clearfix">
					<span class="opensanssemibold">Most Searched Areas :</span>
					<a href="https://www.casagrand.co.in/apartments-villas-plots/ongoing-projects-chennai-omr/" class="separator"> OMR </a>
					<a href="https://www.casagrand.co.in/apartments-villas-plots/ongoing-projects-chennai-ecr/" class="separator"> ECR </a>
					<a href="https://www.casagrand.co.in/residential-projects/apartments-in-tambaram/" class="separator"> Tambaram </a>
					<a href="https://www.casagrand.co.in/residential-projects/plots-in-poonamallee/" class="separator"> Poonamallee </a>
				</div>
				<div class="home_form_links_row clearfix">
					<span class="opensanssemibold">Closer to IT corridors in Shollinganallur :</span>
					<a href="https://www.casagrand.co.in/residential/ongoing-projects-chennai-sholinganallur/casagrand-royale/" class="separator"> Royale </a>
					<a href="https://www.casagrand.co.in/residential/ongoing-projects-chennai-sholinganallur/casagrand-amethyst/" class="separator"> Amethyst </a>
					<a href="https://www.casagrand.co.in/residential/ongoing-projects-chennai-thalambur/casagrand-supremus-apartments/" class="separator"> Supremus </a>
					<a href="https://www.casagrand.co.in/residential/ongoing-projects-chennai-thalambur/casagrand-smart-town-apartments/" class="separator"> Smart Town </a>
					<a href="https://www.casagrand.co.in/residential/ongoing-projects-chennai-thalambur/casagrand-sereno/" class="separator"> Sereno </a>
					<a href="https://www.casagrand.co.in/residential/ongoing-projects-chennai-omr/casagrand-savoye/" class="separator"> Savoye </a>
				</div>
				<div class="home_form_links_row clearfix">
					<span class="opensanssemibold">Ready to move in :</span>
					<a href="https://www.casagrand.co.in/residential/ongoing-projects-chennai-korattur/casagrand-asta-apartments/" class="separator"> Asta </a>
					<a href="https://www.casagrand.co.in/residential/ready-to-move-projects-chennai-oragadam/casagrand-ferns-apartments/" class="separator"> Ferns </a>
					<a href="https://www.casagrand.co.in/residential/ready-to-move-projects-chennai-oragadam/casagrand-monte-carlo-apartments/" class="separator"> Monte Carlo </a>
					<a href="https://www.casagrand.co.in/residential/ongoing-projects-chennai-mannivakkam/casagrand-miro-apartments/" class="separator"> Miro </a>
				</div>
			</div>
		</div>
	</section>

	<!-- Homepage search section starts here -->
	<!-- Homepage search section ends here -->
	<!-- Lifestyle at Casagrand starts here -->
	<section class="life-cast-sec bg-grey-color desktop">
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
	<!-- Lifestyle at Casagrand ends here -->


	<div class="modal" id="modal_enq_project">
		<div class="modal-dialog">
			<div class="modal-content text-center enquiry pb-30">
				<span class="text-right close colorfff cur-pointer p-2" data-dismiss="modal">X</span>
				<p class="primary-color modal-title AvenirLTStdHeavy fs-18">Enquire Now </p>
				<form class="project-enquiry" id="form" action="https://www.casagrand.co.in/sendtogravity.php" method="post" data-toggle="validator">
					<div class="form-group">
						<input type="text" name="f_name" class="mt-10 mb-10" data-error="Valid Name please" placeholder="Name*" required pattern="^[a-zA-Z\s\.]+$" /><br>
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group">
						<input type="tel" id="tel" name="phone" class="mt-10 mb-10" data-error="Valid Phone please" placeholder="Phone*" pattern="^[+]*\d{10,15}$" required /><br>
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group">
						<input type="email" name="email_id" class="mt-10 mb-10" data-error="Valid Email please" placeholder="Email*" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" /><br>
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group">
						<input type="text" name="query" class="mt-10 mb-10" placeholder="Query" />
						<div class="help-block with-errors"></div>
					</div>
					<input type="hidden" name="project_name" value="" />
					<input type="hidden" name="CountryCode" id="CountryCode" value="+91" />
					<input type="hidden" name="proj_id" value="" />
					<input type="hidden" name="project_id" value="" />
					<input type="hidden" name="source-url" value="www.casagrand.co.in/" />
					<input type="hidden" name="site-url" value="www.casagrand.co.in" />
					<input type="hidden" name="srd" value="" />
					<input type="hidden" name="mobile_d" class="mobile_d" value="Desktop Enquiry" />
					<input type="submit" class="btn-brochure AvenirLTStdHeavy color-fff fs-16 enq-now" value="Submit" />
				</form>
			</div>
		</div>
	</div>

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
								<a class="nav-link fs-18 active" href="#villas_madurai" role="tab" data-toggle="tab"> Star Luxor Home </a>
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
																<a href="<?php echo $onGoing['img_link']; ?>">
																	<img src="https://drive.google.com/thumbnail?id=<?php echo $onGoing['img_link']; ?>" alt="Star Housing Ongoing Project" class="img-responsive">
																</a>
																<a href="<?php echo $onGoing['pdf_link']; ?>" class="prj-phase-label" title="Download Brochure" target="_blank"></a>
															</div>
															<div class="txt-content clearfix">
																<h4><?php echo $onGoing['project_name']; ?></h4>
																<span class="ft-lk"><?php echo $onGoing['address_line_2']; ?></span>
																<span class="ft-bhk">-</span>
																<span class="ft-amt">-</span>
																<div class="clearfix"></div>
																<a href="#" class="view_more_arr">View More</a>
																<a href="<?php echo $onGoing['pdf_link']; ?>" target="_blank" class="download_btn_arr">Brochure</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row mb-5 view_all_proj_wrap">
												<div class="col-12 text-center">
													<a href="ongoing-projects.php" class="d-block m-auto AvenirLTStdHeavy btn-transparent">View all projects</a>
												</div>
											</div>

												<?php 
											} 
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
																<a href="<?php echo $onGoing['img_link']; ?>">
																	<img src="https://drive.google.com/thumbnail?id=<?php echo $onGoing['img_link']; ?>" alt="Star Housing Ongoing Project" class="img-responsive">
																</a>
																<a href="<?php echo $onGoing['pdf_link']; ?>" class="prj-phase-label" title="Download Brochure" target="_blank"></a>
															</div>
															<div class="txt-content clearfix">
																<h4><?php echo $onGoing['project_name']; ?></h4>
																<span class="ft-lk"><?php echo $onGoing['address_line_2']; ?></span>
																<span class="ft-bhk">-</span>
																<span class="ft-amt">-</span>
																<div class="clearfix"></div>
																<a href="#" class="view_more_arr">View More</a>
																<a href="<?php echo $onGoing['pdf_link']; ?>" target="_blank" class="download_btn_arr">Brochure</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row mb-5 view_all_proj_wrap">
												<div class="col-12 text-center">
													<a href="ongoing-projects.php" class="d-block m-auto AvenirLTStdHeavy btn-transparent">View all projects</a>
												</div>
											</div>

												<?php 
											} 
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
	<section class="psa-cast-sec bg-grey-color">
		<h2 class="text-uppercase text-center fs-36 fs-xs-26 AvenirLTStdHeavy">Testimonials</h2>
		<div class="clearfix"></div>
		<div class="psa-slider-main">
			<div class="psa-cast-slider">

				<div class="psa-cast-block">
					<a href="https://www.youtube.com/watch?v=rbFBHy8nu8g" rel="lightbox['testimonial']">
						<div class="imgbox">
							<img src="https://www.casagrand.co.in/wp-content/uploads/2020/09/Mrs-Roselin-Gopi.jpg" alt="Mrs Roselin Gopi & Family">
							<div class="playicon"></div>
						</div>
						<div class="txt-content">
							<div class="psa-top-bx clearfix">
								<div class="psa-rht-lable">
									<h3>Mrs Roselin Gopi & Family</h3>
									<span>Casagrand Royale</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="psa-cast-block">
					<a href="https://www.youtube.com/watch?v=4uqpMD_rsok" rel="lightbox['testimonial']">
						<div class="imgbox">
							<img src="https://www.casagrand.co.in/wp-content/uploads/2020/09/Mrs-Govindarajan-Family.jpg" alt="Mrs Govindarajan & Family">
							<div class="playicon"></div>
						</div>
						<div class="txt-content">
							<div class="psa-top-bx clearfix">
								<div class="psa-rht-lable">
									<h3>Mrs Govindarajan & Family</h3>
									<span>Casagrand Castle</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="psa-cast-block">
					<a href="https://www.youtube.com/watch?v=JHUVk8mCzTM" rel="lightbox['testimonial']">
						<div class="imgbox">
							<img src="https://www.casagrand.co.in/wp-content/uploads/2020/09/Mr-Kiruthiga-Vasan.jpg" alt="Mr Kiruthiga Vasan">
							<div class="playicon"></div>
						</div>
						<div class="txt-content">
							<div class="psa-top-bx clearfix">
								<div class="psa-rht-lable">
									<h3>Mr Kiruthiga Vasan</h3>
									<span>Casagrand Crescendo</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="psa-cast-block">
					<a href="https://www.youtube.com/watch?v=bFIS2_SWhJY" rel="lightbox['testimonial']">
						<div class="imgbox">
							<img src="https://www.casagrand.co.in/wp-content/uploads/2020/09/Mr-Marimuthu-Family.jpg" alt="Mr Marimuthu & Family">
							<div class="playicon"></div>
						</div>
						<div class="txt-content">
							<div class="psa-top-bx clearfix">
								<div class="psa-rht-lable">
									<h3>Mr Marimuthu & Family</h3>
									<span>Casagrand Utopia</span>
								</div>
							</div>
						</div>
					</a>
				</div>

			</div>
			<!-- <div class="psa-arrow text-center"> -->
			<button type="button" data-role="none" id="prvarrow1" aria-label="Previous" role="button" style="display: block;"></button>
			<button type="button" data-role="none" id="nxtarrow1" aria-label="Next" role="button" style="display: block;"></button>
			<!-- </div> -->
		</div>
		<div class="clearfix"></div>
		<div class="clearfix text-center">
			<a href="https://www.casagrand.co.in/testimonials/" class="view_all_proj_btn">View all</a>
		</div>
	</section>
	<!-- Testimonial section ends here -->

	<!-- About US section starts here -->
	<section class="pb-20 pt-50 home_about_section clearfix">
		<div class="container text-center">
			<h3 style="text-align:center!important;">About Starhousing</h3>
			<span class="ha_sub_heading">South India's Leading Real Estate Company</span>
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12"></div>
				<div class="col-lg-9 col-md-9 col-sm-12">
					<div class="ha_items_list ha_items_list_1 clearfix">
						<div class="ha_item">
							<img src="https://www.casagrand.co.in/wp-content/themes/casagrand2018/img/home-icon-black.png" alt="" />
							<div class="clearfix"></div>
							<span>Designing and innovating <br />great homes</span>
						</div>
						<div class="ha_item">
							<img src="https://www.casagrand.co.in/wp-content/themes/casagrand2018/img/group-icon-black.png" alt="" />
							<div class="clearfix"></div>
							<span>Building aspirations <br />with our homes</span>
						</div>
						<div class="ha_item">
							<img src="https://www.casagrand.co.in/wp-content/themes/casagrand2018/img/certificate-icon-black.png" alt="" />
							<div class="clearfix"></div>
							<span>Delivering on time, <br />every time</span>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="home_about_floats_wrap clearfix">
			<div class="home_about_left">
				<p>Casagrand Builder Private Limited is a real estate enterprise committed to building aspirations and delivering value. In the last fifteen years, we have developed over 20 million sqft of prime residential real estate across Chennai, Bengaluru, and Coimbatore. Over 17,000 happy families across 100+ landmark properties stand testimony to our commitment.</p>
				<p>In the sixteenth year of our journey, we at Casagrand are all set to progress further forward with projects worth over ₹6500 crores in the pipeline.</p>
				<div class="clearfix"></div>
				<div class="ha_items_list ha_items_list_2 clearfix">
					<div class="ha_item">
						<img src="https://www.casagrand.co.in/wp-content/themes/casagrand2018/img/landmarks-icon-black.png" alt="" />
						<span>100+ <br />Landmarks</span>
					</div>
					<div class="ha_item">
						<img src="https://www.casagrand.co.in/wp-content/themes/casagrand2018/img/smile-icon-black.png" alt="" />
						<span>17000+ <br />Happy Customers</span>
					</div>
					<div class="ha_item">
						<img src="https://www.casagrand.co.in/wp-content/themes/casagrand2018/img/sq-feet-icon-black.png" alt="" />
						<span>20 Million+ <br />sq.feet developed</span>
					</div>
				</div>
				<div class="clearfix"></div>
				<a href="https://www.casagrand.co.in/wp-content/themes/casagrand2018/images/Casagrand-Corporate-Brochure_jul.pdf" download="Casagrand Corporate Brochure" target="_blank" class="view_more_arr">View brochure</a>
			</div>
			<div class="home_about_video_wrap">
				<iframe width="100%" height="398" src="https://www.youtube.com/embed/nrHtreIIo04" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</section>
	<!-- About US section ends here -->

	<div class="modal" id="m_enq_now">
		<div class="modal-dialog">
			<div class="modal-content text-center enquiry pb-30">
				<span class="text-right close colorfff cur-pointer p-2" data-dismiss="modal">X</span>
				<p class="primary-color AvenirLTStdHeavy fs-18">Enquire Now</p>
				<form class="project_main_enq" action="https://www.casagrand.co.in/project_gravity.php" method="post" data-toggle="validator">
					<div class="row">
						<div class="col-12 form-group">
							<input type="text" class="input mt-md-10" name="proj_page_name" pattern="^[a-zA-Z\s\.]+$" placeholder="Name" required data-error="Required field" />
							<div class="help-block with-errors"></div>
						</div>
						<div class="col-12 form-group">
							<input type="tel" id="sticky-tel" class="input mt-md-10" pattern="^[+]*\d{10,15}$" name="proj_page_mobile" placeholder="Mobile Number" required data-error="Valid number please" />
							<div class="help-block with-errors"></div>
						</div>
						<div class="col-12 form-group">
							<input type="email" class="input mt-md-10" name="proj_page_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" data-error="Valid email please" placeholder="Email" required />
							<div class="help-block with-errors"></div>
							<input type="hidden" class="input w-100" name="project_id" value=" " />
							<input type="hidden" class="input w-100" name="CountryCode" id="sticky-CountryCode" value="+91" />
							<input type="hidden" class="input w-100" name="source-url" value="https://www.casagrand.co.in/" />
							<input type="hidden" class="input w-100" name="srd" value=" " />
							<input type="hidden" class="input w-100 mobile_d" id="mobile_d1" name="mobile_d" value="Mobile Enquiry" />
						</div>
						<div class="col-12">
							<input type="submit" class="show-location fs-16 color-444 AvenirLTStdHeavy text-center text-uppercase w-50 m-auto mt-md-10" value="submit">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php include 'home_popping_image.php'; ?>
	<?php include 'footer.php'; ?>

</body>

</html>