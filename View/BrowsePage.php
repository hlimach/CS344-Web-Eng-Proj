<?php
	session_start();
	require '../Controller/config.php';
	require '../Controller/Search.php';
	include '../Controller/CheckLogin.php';
?>

<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width">
	<title>Browse Page</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="Haleema.css" type="text/css">

</head>

<body>

	<div id='header'>
		<div id='large-header' class='col-12 remove-t remove-m'>
			<div id='logo-large' class='col-3'>
				<a href='HomePage.php'><img src='Images/Logo_Large_Final.png' height='80'></a>
			</div>
			<!-- check for logged in/ out user -->
			<div class='user-icon col-1'>
				<a href='UserHome.php?id=<?php echo $_SESSION["username"]?>' class='fa fa-user-circle  w3-large'></a>
			</div>
			<!-- add functionality to search bar -->
			<div id='fixed-search-bar' class="col-4">
		        <form id='search-form' action="../Controller/Search.php" method="post">
		            <input id='search-bar' type='text' name='query' placeholder='Search...'/>
					<button id='search-btn' name='submit' type='submit' class='fa fa-search'/>
		        </form>
		    </div>
		</div>

		<div id='small-header' class='remove col-t-12 col-m-12'>
			<div id='logo-small' class='col-t-1 col-m-1'>
				<a href='HomePage.php'><img src='Images/Logo_Small_Final.png' height='60'></a>
			</div>
			<!-- check for logged in/ out user -->
			<div class='user-icon col-t-1 col-m-1'>			
				<a href='UserHome.php?id=<?php echo $_SESSION["username"]?>' class='fa fa-user-circle w3-large'></a>
			</div>
			<div id='open-search-bar' class="col-t-1 col-m-1">
				<a href='#' class='fa fa-search  w3-large'></a>
			</div>
			<!-- add functionality to search bar -->
		    <div id='hidden-search-bar' class="col-t-12 col-m-12">
		        <form id='search-form' action="../Controller/Search.php" method="post">
		            <input id='search-bar-s' type='text' name='query' placeholder='Search...'/>
					<button id='search-btn-s' name='submit' type='submit' class='fa fa-arrow-right'/>
		        </form>
		    </div>
		</div>

		<?php include '../Controller/Search.php'; ?>
	</div>

	<div id='page-content'>
		<div id='left-menu-large' class='col-2 remove-m remove-t'>
			<a href='#' class='bold-tiny' id='most-added'>MOST ADDED</a>
			<a href='#' class='bold-tiny' id='top-rated'>TOP RATED</a>
			<p class='bold-tiny'>GENRE</p>
			<ul>
				<?php 
					$logos = array('fa-fire', 'fa-sign-language','fa-suitcase','fa-paint-brush', 'fa-smile-o', 'fa-moon-o', 'fa-eye', 'fa-question', 'fa-anchor', 'fa-child', 'fa-grav', 'fa-heart', 'fa-motorcycle', 'fa-futbol-o', 'fa-history', 'fa-bomb', 'fa-user-o', 'fa-map-o', 'fa-book', 'fa-music', 'fa-hourglass-half');

					$result = $conn->query("SELECT * FROM genre");
					$g_count = 0;
					while($row = $result->fetch_assoc()) {
						echo "<li><i class='fa fa-xs ".$logos[$g_count]."'></i><a href='#'>".$row['genre_name']."</a></li>";
						$g_count++;
					}
				?>
			</ul>
		</div>

		<div id='left-menu-small' class='remove col-m-12 col-t-12'>
			<h4 id='open-left-menu'>Categories<i class='fa fa-angle-down'></i></h4>
			
			<div id='left-menu-box' class='remove-t remove-m'>
				<a href='#' class='bold-tiny' id='most-added'>MOST ADDED</a>
				<a href='#' class='bold-tiny' id='top-rated'>TOP RATED</a>
				<p class='bold-tiny'>GENRE</p>
				<ul>
					<?php 
						$logos = array('fa-fire', 'fa-sign-language','fa-suitcase','fa-paint-brush', 'fa-smile-o', 'fa-moon-o', 'fa-eye', 'fa-question', 'fa-anchor', 'fa-child', 'fa-grav', 'fa-heart', 'fa-motorcycle', 'fa-futbol-o', 'fa-history', 'fa-bomb', 'fa-user-o', 'fa-map-o', 'fa-book', 'fa-music', 'fa-hourglass-half');

						$result = $conn->query("SELECT * FROM genre");
						$g_count = 0;
						while($row = $result->fetch_assoc()) {
							echo "<li><i class='fa fa-xs ".$logos[$g_count]."'></i><a href='#'>".$row['genre_name']."</a></li>";
							$g_count++;
						}
					?>
				</ul>
			</div>
		</div>

		<div id='poster-section' class='col-10 col-t-12 col-m-12'>
			<div class='top-info'>
				<div class='main-text'>Browse</div>
				<div class='main-tabs bold-tiny'>
					<a id='all-tab' href='#'>ALL</a>
					<a id='movies-tab' href='#'>MOVIES</a>
					<a id='tv-shows-tab' href='#'>TV SHOWS</a>
				</div>
			</div>
			<div id='poster-listings'></div>
		</div>
	</div>


	<div id='footer-box'>
		<div class='footer'>
			<div class='footer-heading'>Questions?</div>
			<div class='footer-content'><a href='Services.php'>Services</a></div>
			<div class='footer-content'><a href='Faqs.php'>FAQs</a></div>
			<div class='footer-content'><a href='ContactUs.php'>Contact Us</a></div>
			<div class='footer-content'><a href='Developers.php'>Developers</a></div>
		
			<div class='footer-heading'>Find Us</div>
			<div class='footer-heading' id='find-us-icons'>
				<a href='https://www.youtube.com' target='_blank' class='fa fa-youtube'></a>
				<a href='https://www.twitter.com' target='_blank' class='fa fa-twitter'></a>
				<a href='https://www.facebook.com' target='_blank' class='fa fa-facebook'></a>
				<a href='https://www.instagram.com' target='_blank' class='fa fa-instagram'></a>
			</div>

			<div id='footer-end' class='footer-heading'> CS-344 Web Engineering, Spring 2020: Semester Project.</div>
		</div>
	</div>
	
	<script src="../Controller/jquery-3.2.1.js"></script>
	<script src="../Controller/Haleema.js" type="text/javascript"></script>
</body>