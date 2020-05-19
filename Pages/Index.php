<!doctype html>
<?php
	require '../Model/DatabaseSetup.php';
?>

<html>

<head>
	<meta name="viewport" content="width=device-width">
	<title>Track.tv</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../Style/HomePage_Style.css" type="text/css">
</head>

<body>
	<div id='b0' class='m-reset'>
		<div id='entry-image'></div>
		<h1>Discover ulimited movies and TV shows</h1>
		<a href='login.php'><button class='get-started'>Get Started</button></a>
	</div>

	<div id='b1'>
		<div class='sections'>
			<div id='st1' class='section-text col-7 col-t-12 col-m-12 t-text m-text'>
				<h1>All your cinematic record. All in one place.</h1>
				<p>Save all movies and tv shows that you've watched, loved, or want to watch.</p>
			</div>
			<div id='st1-img' class='section-img col-5 col-t-12 col-m-12'><img src='../Style/Images/monitor.png'></div>
		</div>
	</div>

	<div id='b2'>
		<div class='sections'>
			<div id='st2-img' class='section-img col-5 col-t-12 col-m-12'><img src='../Style/Images/popular.png'></div>
			<div id='st2' class='section-text col-7 col-t-12 col-m-12 t-text m-text'>
				<h1>Find out whats popular.</h1>
				<p>Discover movies and TV shows trending among other users.</p>
			</div>
		</div>
	</div>

	<div id='b3'>
		<div class='sections'>
			<div id='st3' class='section-text col-7 col-t-12 col-m-12 t-text m-text'>
				<h1>Bookmark for future.</h1>
				<p>Build your own movies and TV shows bucketlist.</p>
			</div>
			<div id='st3-img' class='section-img col-5 col-t-12 col-m-12'></div>
		</div>
	</div>

	<div id='b4'>
		<div class='sections'>
			<div id='st4-img' class='section-img col-5 col-t-12 col-m-12'></div>
			<div id='st4' class='section-text col-7 col-t-12 col-m-12 t-text m-text'>
				<h1>Discover others users.</h1>
				<p>Follow people who share similar interests for more recommendations.</p>
			</div>
		</div>
	</div>

	<div id='footer-box'>
		<div class='footer'>
			<div class='footer-heading'>Questions?</div>
			<div class='footer-content'><a href='./services.php'>Services</a></div>
			<div class='footer-content'><a href='./faqs.php'>FAQs</a></div>
			<div class='footer-content'><a href='./contactus.php'>Contact Us</a></div>
			<div class='footer-content'><a href='./developers.php'>Developers</a></div>
		
			<div class='footer-heading'>Find Us</div>
			<div class='footer-heading' id='find-us-icons'>
				<a href='https://www.youtube.com' target='_blank' class='fa fa-youtube'></a>
				<a href='https://www.twitter.com' target='_blank' class='fa fa-twitter'></a>
				<a href='https://www.facebook.com' target='_blank' class='fa fa-facebook'></a>
				<a href='https://www.instagram.com' target='_blank' class='fa fa-instagram'></a>
			</div>

			<div id='footer-end' class='footer-heading'>CS-344 Web Engineering, Spring 2020: Semester Project.</div>	
		</div>
	</div>

	<script src="../Functionality/jquery-3.2.1.js"></script>
	<script src="../Functionality/HomePage_F.js" type="text/javascript"></script>

</body>