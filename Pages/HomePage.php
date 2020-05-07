<!doctype html>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "movieswebsite";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error)
	    die("Connection failed: " . $conn->connect_error);


	$sql = "SELECT * FROM genre";
	$result = $conn->query($sql);

?> 

<html>
<head>
	<title>Header & Footer</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../Style/HomePage_Style.css" type="text/css">

</head>

<body>
	<?php
		while($res = mysqli_fetch_array($result)) {
			echo $res['genreID']." ".$res['genre_name'] ;
		}
	?>
	
	<div id='sliding-menu' class='col-3 col-t-5 col-m-5'>
		<div id='slider-menu-exit' class="fa fa-times w3-large"></div>
		<div id='movie-menu'>
			<a href='#'>Movies</a><i class='fa fa-angle-down w3-large'></i>
			<ul>
				<li><a href='#'>TRENDING</a></li>
				<li><a href='#'>GENRE</a></li>
				<li><a href='#'>TOP RATED</a></li>
				<li><a href='#'>LATEST</a></li>
			</ul>

		</div>

		<div id='tv-show-menu'>
			<a href='#'>TV Shows</a><i class='fa fa-angle-down w3-large'></i>
			<ul>
				<li><a href='#'>TRENDING</a></li>
				<li><a href='#'>GENRE</a></li>
				<li><a href='#'>TOP RATED</a></li>
				<li><a href='#'>LATEST</a></li>
			</ul>
		</div>

		<div id='popular-menu'><a href='#'>Popular</a></div>
	</div>



	<div id='header'>

		<div id='large-header' class='col-12 remove-t remove-m'>

			<div class='slider-menu col-1 fa fa-bars w3-large'></div>

			<div id='logo-large' class='col-3'>
				<a href='#'><img src='../Style/Images/Logo_Large_Final.png' height='80'></a>
			</div>

			<!-- check for logged in/ out user -->
			<div class='user-icon col-1'><a href='#' class='fa fa-user-circle  w3-large'></a></div>
			
			<!-- add functionality to search bar -->
			<div id='fixed-search-bar' class="col-4">
		        <form action="#">
		            <input id='search-bar' type='text' placeholder='Search...'/>
					<button id='search-btn' class='fa fa-search'/>
		        </form>
		    </div>
		    
		</div>

		<div id='small-header' class='remove col-t-12 col-m-12'>

			<div class='slider-menu col-t-1 col-m-1 fa fa-bars w3-large'></div>

			<div id='logo-small' class='col-t-1 col-m-1'>
				<a href='#'><img src='../Style/Images/Logo_Small_Final.png' height='60'></a>
			</div>

			<!-- check for logged in/ out user -->
			<div class='user-icon col-t-1 col-m-1'>			
				<a href='#' class='fa fa-user-circle w3-large'></a>
			</div>

			<div id='open-search-bar' class="col-t-1 col-m-1">
				<a href='#' class='fa fa-search  w3-large'></a>
			</div>

			<!-- add functionality to search bar -->
		    <div id='hidden-search-bar' class="col-t-12 col-m-12">
		        <form action="#">
		            <input id='search-bar-s' type='text' placeholder='Search...'/>
					<button id='search-btn-s' class='fa fa-arrow-right'/>
		        </form>
		    </div>

		</div>
		
	</div>

	<div id='page-content'>
		
		<div id='sect1'>
			<div><a href='#'><img src='../Style/Images/gotg.jpg' id='img1'></a></div>
		</div>
		<div id='sect2'>
			<div><a href='#'><img src='../Style/Images/lotr.jpeg' id='img2'></a></div>
		</div>
		<div id='sect3'>
			<div><a href='#'><img src='../Style/Images/strangerthings.jpg' id='img3'></a></div>
		</div>
		<div id='sect4'>
			<div><a href='#'><img src='../Style/Images/narcos.jpg' id='img4'></a></div>
		</div>
		<div id='sect5'>
			<div><a href='#'><img src='../Style/Images/blackfish.jpeg' id='img5'></a></div>
		</div>
	</div>


	<!--footer final, dont touch below!! -->
	<div class='footer'>
		
		<div class='footer-heading'>Questions?</div>
		<div class='footer-content'><a href='#'>Services</a></div>
		<div class='footer-content'><a href='#'>FAQs</a></div>
		<div class='footer-content'><a href='#'>Contact Us</a></div>
		<div class='footer-content'><a href='#'>Developers</a></div>
	
		<div class='footer-heading'>Find Us</div>
		<div class='footer-heading' id='find-us-icons'>
			<a href='https://www.youtube.com' target='_blank' class='fa fa-youtube'></a>
			<a href='https://www.twitter.com' target='_blank' class='fa fa-twitter'></a>
			<a href='https://www.facebook.com' target='_blank' class='fa fa-facebook'></a>
			<a href='https://www.instagram.com' target='_blank' class='fa fa-instagram'></a>
		</div>

		<div id='footer-end' class='footer-heading'> CS-344 Web Engineering, Spring 2020: Semester Project.</div>
		
	</div>
	<!--footer final, dont touch above!! -->

	<script src="../Functionality/jquery-3.2.1.js"></script>
	<script src="../Functionality/Header_Footer.js" type="text/javascript"></script>

	

</body>