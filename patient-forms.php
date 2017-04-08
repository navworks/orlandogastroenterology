<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="keywords" content="Orlando Gastroenterology, P.A."/>
	<meta name="description" content="Providing Adult and Pediatric Gastroenterology Services for Orlando, Kissimmee, and Clermont"/>
	<meta name="subject" content="ISNSCCON 2017">
	<title>Orlando Gastroenterology, P.A.</title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,200,500,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link rel="stylesheet" type="text/css" href="styles/inner.css">
	<link rel="stylesheet" type="text/css" href="styles/animate.css">
	<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css">
	
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/custom.js"></script>
	
</head>

<body>

<!-- Header starts here -->
	<?php include 'includes/header.php'; ?>	

<!-- Innerpage baner starts here -->
<section class="inner-banner" style="background-image: url('images/innerbanner/bg.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="font-28">Patient Forms</h3>
				</div>
			</div>
		</div>
</section>

<!-- Innerpage conent starts here -->


<section class="inner-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">

				<h2 class="inner-content__mainhead"> <span>Looking for</span>  downloadable forms? </h2>


				<div class="row">
					<div class="col-sm-5">
						<img src="images/nurse-inner.jpg" class="img-responsive"></img>
					</div>
					<div class="col-sm-7">
						<p>New Patient Packet for Office Visit </p>
						<a class="btn" href=""> Downoad file</a>
						<hr/>
						<p>Millenia Surgery Center Forms</p>
						<a class="btn" href=""> Downoad file</a>
					</div>

					
				</div>

				
			</div>
			<div class="col-sm-4">
				<?php include 'includes/form.php'; ?>		
			</div>
</section >

<?php include 'includes/services.php'; ?>


<!-- Footer starts here -->		
	<?php include 'includes/footer.php'; ?>	

<!-- Fancybox items starts here starts here -->	
<div style="display:none">
	<div id="makeAppointment" class="make-appointment">
		<div class="make-appointment__form-wrap">
			<h2>Appointment Form</h2>
			<p>Our scheduling will contact you within 1 Business Day</p>
			<div class="row">
			<form action="#" id="popUpContact" name="ap-form">
				<div class="col-md-12 col-sm-12">
					<label for="name">Your Name <span class="text-danger">*</span></label>
					<input minlength="2" type="text" required name="name" id="name" placeholder="Your Name*" >
				</div>
				<div class="col-md-6 col-sm-6">
					<label for="email">Your Email Address <span class="text-danger">*</span></label>
					<input type="email" name="email" id="email" placeholder="Your Email*" required>
				</div>
				<div class="col-md-6 col-sm-6">
					<label for="phno">Your Phone number <span class="text-danger">*</span></label>
					<input type="text" name="phno" id="phno" placeholder="Your Phone Number*" required>
				</div>
				<div class="col-md-12 col-sm-12">
					<label for="name">Alternate Phone Number and any additional Information</label>
					<textarea></textarea>
				</div>
				<div class="col-md-12 col-sm-12">
					<input type="submit" name="submit" value="Get Me My Fast Appointment">
					<p class="text-danger">Fields marked * are mandatory</p>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>


</body>
</html>
