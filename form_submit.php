<?php
if (isset($_POST['submit'])) {

	// EDIT THE 2 LINES BELOW AS REQUIRED
	$email_to = "sndadmin_group@truemoneymyanmar.com, thukha.aung@ascendcrop.com, tinthtoo.naung@ascendcorp.com, htethtet.aung@ascendcorp.com";
	$email_subject = "TrueMoney Myanmar Agent Form";

	function died($error) {
		// your error code can go here
		echo "We are very sorry, but there were error(s) found with the form you submitted. ";
		echo "These errors appear below.<br /><br />";
		echo $error . "<br /><br />";
		echo "Please go back and fix these errors.<br /><br />";
		die();
	}

	// validation expected data exists
	if (!isset($_POST['name']) ||
		!isset($_POST['phone1']) ||
		!isset($_POST['province']) ||
		!isset($_POST['township']) ||
		!isset($_POST['address'])) {
		died('We are sorry, but there appears to be a problem with the form you submitted.');
	}

	$name = $_POST['name']; // required
	$email = $_POST['email']; // not required
	$phone1 = $_POST['phone1']; // required
	$phone2 = $_POST['phone2']; // not required
	$province = $_POST['province']; // required
	$township = $_POST['township']; // required
	$address = $_POST['address']; // required
	$direction = $_POST['direction']; // not required

	$email_message = "Agent Form details below: \n\n";

	function clean_string($string) {
		$bad = array("content-type", "bcc:", "to:", "cc:", "href");
		return str_replace($bad, "", $string);
	}

	$email_message .= "Agent Name: " . clean_string($name) . "\n";
	$email_message .= "Email: " . clean_string($email) . "\n";
	$email_message .= "Phone Number: " . clean_string($phone1) . "\n";
	$email_message .= "Other Phone Number: " . clean_string($phone2) . "\n";
	$email_message .= "Province: " . clean_string($province) . "\n";
	$email_message .= "Township: " . clean_string($township) . "\n";
	$email_message .= "Address: " . clean_string($address) . "\n";
	$email_message .= "Direction: " . clean_string($direction) . "\n";

	// create email headers
	$headers = 'From Agent: ' . $email . "\r\n" .
	'Reply-To: ' . $email . "\r\n" .
	@mail($email_to, $email_subject, $email_message, $headers);
	?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Our Contacts | True Money Myanmar</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="Money Transfer Myanmar Bill Payment Myanmar TopUp Myanmar AEON Myanmar Water Electricity Bill Payment in Myanmar http://truemoney.com.mm/" content="Money Transfer Myanmar Bill Payment Myanmar TopUp Myanmar AEON Myanmar Water Electricity Bill Payment in Myanmar http://truemoney.com.mm/">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/img/favicon(1).ico">

	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="assets/css/headers/header-default-eng.css">
	<link rel="stylesheet" href="assets/css/footers/footer-v1.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="assets/plugins/animate.css">
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
	<!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css"><![endif]-->

	<!-- CSS Page Style -->
	<link rel="stylesheet" href="assets/css/pages/page_contact.css">
	<link rel="stylesheet" href="assets/css/pages/page_404_error.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
	<link rel="stylesheet" href="assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="assets/css/custom.css">
	<style type="text/css">
		.popup-flag{
			position: absolute;
			left: 0;
		}
	</style>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

	})(window,document,'script','dataLayer','GTM-PZNXLZ');</script>

</head>

<body>
	<!-- Google Tag Manager (noscript) -->

	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZNXLZ"

	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	<!-- End Google Tag Manager (noscript) -->
	<div class="wrapper">
		<!--=== Header ===-->
		<div class="header">
			<div class="container">
				<!-- Logo -->
				<a class="logo" href="index.php">
					<img src="assets/img/truemoney.png" alt="Logo">
				</a>
				<!-- End Logo -->

				<!-- Topbar -->
				<div class="topbar">
					<ul class="loginbar pull-right">
						<li class="hoverSelector">
							<i class="fa fa-globe"></i>
							<a>Languages</a>
							<ul class="languages hoverSelectorBlock">
								<li class="active">
									<a href="form.php">English <i class="fa fa-check"></i></a>
								</li>
								<li><a href="form_mm.php">Myanmar</a></li>
							</ul>
						</li>
						<li class="topbar-devider"></li>
						<li><a href="faq.php">Help</a></li>
						<!-- <li class="topbar-devider"></li>
						<li><a href="page_login.html">Login</a></li> -->
					</ul>
				</div>
				<!-- End Topbar -->

				<!-- Toggle get grouped for better mobile display -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="fa fa-bars"></span>
				</button>
				<!-- End Toggle -->
			</div><!--/end container-->

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
				<div class="container">
					<ul class="nav navbar-nav">
						<!-- Home -->
						<li class="dropdown">
							<a href="index_eng.php">
								HOME
							</a>

						</li>
						<!-- End Home -->

						<!-- Pages -->
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								ABOUT US
							</a>
							<ul class="dropdown-menu">
								<li class="active"><a href="aboutus.php">True Money</a></li>
								<li><a href="contactus.php">Contact Us</a></li>
							</ul>
						</li>
						<!-- End Pages -->

						<!-- Blog -->
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								OUR SERVICES
							</a>
							<ul class="dropdown-menu">
								<li><a href="phone_refill.php">Phone Topup</a></li>
								<li><a href="money_transfer.php">Money Transfer</a></li>
								<li><a href="bill_payment.php">Bill Payment</a></li>
							</ul>
						</li>
						<!-- End Blog -->

						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								NEWS AND ACTIVITIES
							</a>
							<ul class="dropdown-menu">
								<li><a href="news.php">News</a></li>
								<li><a href="activities.php">Activities</a></li>
								<!-- <li><a href="promotions.php">Promotions</a></li> -->
							</ul>
						</li>

						<!-- Features -->
						<li class="dropdown active">
							<a href="stg.truemoney.com.mm/agentlist_eng">
								AGENT
							</a>

						</li>
						<!-- End Features -->

						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								CUSTOMER
							</a>
							<ul class="dropdown-menu">
								<li><a href="benefit.php">Customer Benefits</a></li>
								<li><a href="Cterms&conditions.php">Terms and Conditions</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="job.php">
							CAREER
							</a>
						</li>

						<li class="dropdown">
							<a href="faq.php">
								FAQ
							</a>
						</li>
					</ul>
				</div><!--/end container-->
			</div><!--/navbar-collapse-->
		</div>
		<!--=== End Header ===-->

		<!--=== Breadcrumbs ===-->
		<div class="breadcrumbs">
			<div class="container">
				<h1 class="pull-left">Agreement Form</h1>
				<ul class="pull-right breadcrumb">
					<li><a href="index_eng.php">Home</a></li>
					<li><a href="">Agents</a></li>
					<li class="active">How To Register</li>
				</ul>
			</div>
		</div><!--/breadcrumbs-->
		<!--=== End Breadcrumbs ===-->

		<!--=== Content Part ===-->
		<div class="container content">
			<!--Error Block-->
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="error-v1">
						<h3><span class="error-v1-title">Thank You </span>
						<span>Our sales person will contact to  you soon</span>
						<!-- <p>Our sales person will contact to  you soon</p> -->
						<br>
						<a class="btn-u btn-bordered" href="form.php">Back Home</a>
					</div>
				</div>
			</div>
			<!--End Error Block-->
		</div>
		<!--=== End Content Part ===-->

		<!--=== Footer Version 1 ===-->
		<div class="footer-v1">
			<div class="footer">
				<div class="container">
					<div class="row">


						<!-- Latest -->
						<div class="col-md-3 col-lg-3 md-margin-bottom-40">
							<div class="posts">
								<div class="headline"><h2>Company </h2></div>
								<ul class="list-unstyled latest-list">
									<li>
										<a href="aboutus.php">TrueMoney </a>
										<!-- <small>May 8, 2014</small> -->
									</li>
									<li>
										<a href="contactus.php">Contact Us </a>
										<!-- <small>June 23, 2014</small> -->
									</li>
									<li>
										<a href="activities.php">News and Activities </a>
										<!-- <small>September 15, 2014</small> -->
									</li>
								</ul>
							</div>
						</div><!--/col-md-3-->
						<!-- End Latest -->

						<!-- Link List -->
						<div class="col-md-3 col-lg-3 md-margin-bottom-40">
							<div class="headline"><h2>Opportunity </h2></div>
							<ul class="list-unstyled latest-list">
									<li>
										<a href="job.php">Career  </a>
										<!-- <small>May 8, 2014</small> -->
									</li>
									<li>
										<a href="phone_refill.php">Our Services  </a>
										<!-- <small>June 23, 2014</small> -->
									</li>
									<li>
										<!-- <a href="promotions.php">Promotions </a> -->
										<!-- <small>September 15, 2014</small> -->
									</li>
								</ul>
						</div><!--/col-md-3-->
						<!-- End Link List -->
						<div class="col-md-3 col-lg-3 md-margin-bottom-40">
							<div class="headline"><h2>Help and Support  </h2></div>
							<ul class="list-unstyled latest-list">
									<li>
										<a href="index.php">Home   </a>
										<!-- <small>May 8, 2014</small> -->
									</li>
									<li>
										<a href="faq.php">FAQ  </a>
										<!-- <small>June 23, 2014</small> -->
									</li>
									<li>
										<a href="tmncard.php">TMM Account </a>
										<!-- <small>September 15, 2014</small> -->
									</li>
								</ul>
						</div>

					<div class="col-md-3 col-lg-3 md-margin-bottom-40">
							<div class="headline"><h2>Regional Offices </h2></div>
							<ul class="list-unstyled latest-list">
									<li>
										<a href="https://www.truemoney.com/" style="padding-left:20px;">Thailand
										<span class="popup-flag">
											<img src="assets/img/thaiFlag.png" style="height:20px;width:auto;">
										</span>
										</a>
										<!-- <small>May 8, 2014</small> -->
									</li>
									<li>
										<a href="https://truemoney.com.vn/" style="padding-left:20px;">Vietnam
										<span class="popup-flag">
											<img src="assets/img/vietnamFlag.png" style="height:20px;width:auto;">
										</span>
										</a>
										<!-- <small>June 23, 2014</small> -->
									</li>
									<li>
										<a href="http://www.truemoney.com.kh/en/" style="padding-left:20px;">Cambodia
											<span class="popup-flag">
											<img src="assets/img/cambodiaFlag.png" style="height:20px;width:auto;">
										</span>
										</a>
										<!-- <small>September 15, 2014</small> -->
									</li>
									<li>
									<a href="https://www.truemoney.com.ph/" style="padding-left:20px;">Philippines
									<span class="popup-flag">
										<img src="assets/img/philippinesFlag.png" style="height:20px;width:30px;">
									</span>
									</a>
									</li>
									<li>
									<a href="https://www.truemoney.co.id/" style="padding-left:20px;">Indonesia
									<span class="popup-flag">
										<img src="assets/img/indoFlag_opt.jpg" style="height:20px;width:auto;">
									</span>
									</a>
									</li>
								</ul>
						</div>

						<!-- Link List -->
						<!-- <div class="col-md-3 md-margin-bottom-40">
							<div class="headline"><h2>Regional Offices</h2></div>
							<ul class="list-unstyled link-list">
								<li><a href="https://www.truemoney.co.th">Thailand</a></li>
								<li><a href="https://truemoney.com.vn/">Vietnam</a></li>
								<li><a href="http://www.truemoney.com.kh/en/">Cambodia </a></li>
								<li><a href="http://www.truemoneymyanmar.com/">Myanmar</a></li>
								<li><a href="https://www.truemoney.co.id/">Indonesia</a></li>
							</ul>
						</div> --><!--/col-md-3-->
						<!-- End Link List -->
					</div>
				</div>
			</div><!--/footer-->

			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-lg-4">
							<p>
								2018 &copy;  TrueMoney Myanmar Co., Ltd.

							</p>
						</div>
						<div class="col-md-4 col-lg-4" >
							 <table align="center" width=125 border=0 cellspacing=0 cellpadding=0 title="CLICK TO VERIFY: This site uses a GlobalSign SSL Certificate to secure your personal information." ><tr><td><span id="ss_img_wrapper_gmogs_image_110-45_en_blue"><a href="https://www.globalsign.com/" target=_blank title="GlobalSign Site Seal" rel="nofollow"><img alt="SSL" border=0 id="ss_img" src="//seal.globalsign.com/SiteSeal/images/gs_noscript_110-45_en.gif"></a></span><script type="text/javascript" src="//seal.globalsign.com/SiteSeal/gmogs_image_110-45_en_blue.js"></script></td></tr></table>
							<!-- <p style="text-align:center;"> hi</p> -->
						</div>
						<!-- Social Links -->
						<div class="col-md-4 col-lg-4">
							<ul class="footer-socials list-inline">
								<li>
									<a href="https://www.facebook.com/truemoneymyanmar/" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
										<!-- <i class="fa fa-facebook" style="padding:5px 5px 5px 5px;color:blue;background-color:#DCDCDC;"></i> -->
										<img src="assets/img/Facebook - Copy.png" style="width:20px;height:20px;">
									</a>
								</li>

							</ul>
						</div>
						<!-- End Social Links -->
					</div>
				</div>
			</div><!--/copyright-->
		</div>
		<!--=== End Footer Version 1 ===-->
	</div><!--/wrapepr-->

	<!-- JS Global Compulsory -->
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script type="text/javascript" src="assets/plugins/gmap/gmap.js"></script>
	<script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
	<script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="assets/js/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/page_contacts.js"></script>
	<script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>
	<script type="text/javascript" src="assets/js/pages/page_contact_advanced.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			ContactPage.initMap();
			StyleSwitcher.initStyleSwitcher();
			PageContactForm.initPageContactForm();
		});
	</script>
<!--[if lt IE 9]>
	<script src="assets/plugins/respond.js"></script>
	<script src="assets/plugins/html5shiv.js"></script>
	<script src="assets/plugins/placeholder-IE-fixes.js"></script>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
	<![endif]-->
<!--[if lt IE 10]>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
	<![endif]-->

</body>
</html>

<?php

} else {
	echo "Message can't send";
}
?>
