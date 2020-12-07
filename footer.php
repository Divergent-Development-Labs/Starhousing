
		<script type='text/javascript' src='wp-content/themes/js/bootstrap.min.js'></script>
		<script type='text/javascript' src='wp-content/themes/js/swiper.min.js'></script>
		<script type='text/javascript' src='wp-content/themes/js/validator.min.js'></script>
		<script type='text/javascript' src='wp-content/themes/js/intlTelInput.min.js'></script>
		<script type='text/javascript' src='wp-content/themes/js/wow.min.js'></script>

		<script type='text/javascript' src='wp-content/themes/js/custom.js'></script>
		<script type='text/javascript' src='wp-includes/js/wp-embed.min.js'></script>

		<script type='text/javascript' src='wp-content/themes/js/custom-filter.js'></script>

		<script type='text/javascript' src='wp-content/themes/js/custom-jobfilter.js'></script>
	</footer>

	<section class="lower_footer p-3 clearfix">
		<div class="container">
			<div class="lf_left lf_menu_wrap float-left">
				<div class="menu-lower-footer-menu-container">
					<ul id="menu-lower-footer-menu" class="menu">
						Developed by <a href="https://kvncloud.com/" target="_blank" class="text-white">KVN Cloud</a>
					</ul>
				</div>
			</div>
			<div class="lf_right float-right">
				<div class="l_footer_social clearfix">
					<a href="https://www.facebook.com/profile.php?id=100055878013995" target="_blank"><img src="wp-content/themes/img/facebook-footer-icon.png" alt="facebook" /></a>
					<a href="https://twitter.com/" target="_blank"><img src="wp-content/themes/img/twitter-footer-icon.png" alt="twitter" /></a>
					<a href="https://www.instagram.com/" target="_blank"><img src="wp-content/themes/img/instagram-footer-icon.png" alt="instagram" /></a>
					<a href="https://www.linkedin.com/company" target="_blank"><img src="wp-content/themes/img/linkedin-footer-icon.png" alt="linkedin" /></a>
					<a href="https://www.youtube.com/channel/UCX7ZFk5Hqg12IR-SQSvqEkg" target="_blank"><img src="wp-content/themes/img/youtube-footer-icon.png" alt="youtube" /></a>
					<!-- <a href="" target="_blank"><img src="wp-content/themes/img/google-plus-footer-icon.png" alt="google-plus" /></a> -->
				</div>
			</div>
		</div>
	</section>

	<style>
		body #ls_theLayer {
			bottom: 0 !important
		}
	</style>
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script> -->
	<script type="text/javascript">
		// jQuery(document).ready(function($) {
		// 	setTimeout(function(){
		// 		$('.disclaimer-wrapper').show();
		// 	}, 3000);
		// });


		$('#hideDisclaimer').click(function(event) {
			/* Act on the event */
			event.preventDefault();
			$('.disclaimer-wrapper').hide();
		});
	</script>



	<script>
		function getCookie(cname) {
			var name = cname + "=";
			var decodedCookie = decodeURIComponent(document.cookie);
			var ca = decodedCookie.split(';');
			for (var i = 0; i < ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0) == ' ') {
					c = c.substring(1);
				}
				if (c.indexOf(name) == 0) {
					return c.substring(name.length, c.length);
				}
			}
			return "";
		}
	</script>

	<script src="wp-content/themes/js/slick.min.js"></script>
	<script>
		var $ = jQuery.noConflict();
		$(document).ready(function() {
			$('.lco-slider').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: false,
				// autoplay: true,
				// autoplaySpeed: 3000,
				dots: false,
				prevArrow: $("#prvarrow"),
				nextArrow: $("#nxtarrow"),
			});
			$('.lco-slider1').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: false,
				// autoplay: true,
				// autoplaySpeed: 3000,
				dots: false,
				prevArrow: $("#prvarrow2"),
				nextArrow: $("#nxtarrow2"),
			});
			$('.psa-cast-slider').slick({
				dots: false,
				infinite: false,
				speed: 300,
				slidesToShow: 3,
				slidesToScroll: 1,
				prevArrow: $("#prvarrow1"),
				nextArrow: $("#nxtarrow1"),
				responsive: [{
						breakpoint: 1024,
						settings: {
							slidesToShow: 2
						}
					},
					{
						breakpoint: 767,
						settings: {
							slidesToShow: 1
						}
					}
				]
			});

		});

	</script>

	<style type="text/css">
		img {
			outline: none;
			border: 0;
			vertical-align: middle;
		}

		.img-responsive {
			width: 100%;
			height: auto;
			display: block;
		}

		.card-img {
			height: 240px !important;
		}

		ul {
			list-style: none
		}

		html {
			-ms-text-size-adjust: 100%;
			-webkit-text-size-adjust: 100%;
			-ms-text-size-adjust: 100%;
		}

		.anim-container,
		.anim-container-fluid {
			margin-right: auto;
			margin-left: auto;
			padding-left: 14px;
			padding-right: 14px
		}

		.clearfix:after,
		.clearfix:before,
		.anim-container-fluid:after,
		.anim-container-fluid:before,
		.anim-container:after,
		.anim-container:before,
		.row:after,
		.row:before {
			content: " ";
			display: table
		}

		.clearfix:after,
		.anim-container-fluid:after,
		.anim-container:after,
		.row:after {
			clear: both
		}


		/*************  Style for Content  ***************/
		.chen-sec {
			position: fixed;
			overflow: hidden;
			width: 100%;
			height: 100%;
			font-family: 'Montserrat', sans-serif;
			font-weight: 400;
			background-color: rgba(0, 0, 0, 0.8);
			color: #ffffff;
			left: 0;
			top: 0;
			z-index: 999999999;
			display: none
		}

		.chen-wrap {
			position: relative;
			height: 100vh;
		}

		.chen-block {
			position: absolute;
			left: 0;
			right: 0;
			bottom: 53%;
			z-index: 5
		}

		.chen-box-1 {
			position: relative;
			max-width: 296px;
			height: 92px;
			width: 100%;
			margin: 0 auto 20px;
		}

		.chen-box-2 {
			position: relative;
			text-align: center;
			margin: 0 0 50px 0;
		}

		.chen-box-2 ul {
			font-size: 0;
		}

		.chen-box-2 .chen-title-1 {
			display: block
		}

		.chen-box-2 .chen-title-1,
		.chen-box-2 ul li {
			color: #ffffff;
			font-size: 16px;
			overflow: hidden;
			font-weight: 400;
			margin-bottom: 3px
		}

		.chen-box-2 ul li {
			position: relative;
			display: inline-block;
			width: auto;
			padding: 3px 0 0 28px;
			margin: 0 7px;
			line-height: 23px;
		}

		.chen-box-2 ul li:before {
			position: absolute;
			content: '';
			left: 0;
			top: 50%;
			transform: translateY(-50%);
			width: 20px;
			height: 24px;
			/* background: url(wp-content/themes/img/fc-icon.png) no-repeat; */
			background-size: 20px;
		}

		.chen-box-3 {
			max-width: 240px;
			height: 70px;
			margin: 0 auto;
			width: 100%;
		}

		.chen-box-4 {
			position: absolute;
			left: 0;
			right: 0;
			bottom: 0
		}

		.hidden {
			visibility: hidden;
		}

		.visible {
			visibility: visible;
		}

		@media (min-width:768px) {
			.anim-container {
				max-width: 1180px
			}
		}

		@media (orientation: portrait) {
			@media screen and (max-width: 1024px) {
				.chen-block {
					bottom: 40%;
				}
			}

			@media screen and (max-width: 767px) {
				.chen-block {
					bottom: 35%;
				}

				.chen-box-1 {
					max-width: 210px;
					height: 64px;
				}

				.chen-box-2 .chen-title-1,
				.chen-box-2 ul li {
					font-size: 16px;
				}

				.chen-box-2 ul li {
					padding: 0 0 0 20px;
				}

				.chen-box-2 ul li:before {
					width: 16px;
					height: 20px;
					background-size: 16px;
				}

				.chen-box-2 {
					margin: 0 0 20px 0;
				}

				.chen-box-3 {
					max-width: 135px;
					height: 39px;
				}
			}

			@media screen and (max-width: 599px) {

				.chen-box-2 .chen-title-1,
				.chen-box-2 ul li {
					font-size: 14px
				}

				.chen-block {
					bottom: 45%;
				}

				.chen-box-4 {
					bottom: 75px
				}
			}
		}

		@media screen and (max-height: 380px) {
			.chen-box-4 {
				left: 25%;
				right: auto;
				width: 50%;
			}

			.chen-box-1 {
				max-width: 184px;
				height: 56px;
			}

			.chen-box-2 .chen-title-1,
			.chen-box-2 ul li {
				font-size: 12px;
			}

			.chen-box-2 ul li {
				padding: 0 0 0 20px;
				line-height: 20px;
			}

			.chen-box-2 ul li:before {
				width: 15px;
				height: 18px;
				background-size: 15px;
			}

			.chen-box-2 {
				margin: 0 0 20px 0;
			}

			.chen-box-3 {
				max-width: 110px;
				height: 34px;
			}

			.chen-block {
				bottom: 45%;
			}
		}
	</style>

	<script type="text/javascript">
		$(window).on('load', function() {
			$('#firstcity_anim_wrap').fadeIn(200, function() {
				loadFirstcityAnimation();
			});
		});

		function loadFirstcityAnimation() {
			setTimeout(function() {
				$('.chen-box-4 .imgbox').addClass('visible animate__fadeInUp');
			}, 200);
			setTimeout(function() {
				$('.chen-box-1').addClass('visible animate__slideInDown');
			}, 2000);
			setTimeout(function() {
				$('.chen-box-2').addClass('visible animate__zoomIn');
			}, 3500);
			setTimeout(function() {
				$('.chen-box-3').addClass('visible animate__zoomIn');
			}, 5000);
			setTimeout(function() {
				$('#firstcity_anim_wrap').fadeOut(300);
			}, 2000);
		}
	</script>