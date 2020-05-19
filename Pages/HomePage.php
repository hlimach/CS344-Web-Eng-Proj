<?php
	require "config.php";
	require 'Search.php';
	
	session_start();
?>

<!doctype html>
<html>

<head>
	<meta name="viewport" content="width=device-width">
	<title>Home Page</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../Style/HomePage_Style.css" type="text/css">
</head>

<body>
	<div id='sliding-menu' class='col-3 col-t-5 col-m-5'>
		<div id='slider-menu-exit' class="fa fa-times w3-large"></div>
		<div id='movie-menu'>
			<a href='#'>Movies</a><i class='fa fa-angle-down w3-large'></i>
			<ul>
				<li><a href='#' class='redir' id='dt=0&g=null'>ALL</a></li>
				<li><a href='#' class='redir' id='dt=0&g=ma'>TRENDING</a></li>
				<li><a href='#' class='redir' id='dt=0&g=tr'>TOP RATED</a></li>
			</ul>

		</div>

		<div id='tv-show-menu'>
			<a href='#'>TV Shows</a><i class='fa fa-angle-down w3-large'></i>
			<ul>
				<li><a href='#' class='redir' id='dt=1&g=null'>ALL</a></li>
				<li><a href='#' class='redir' id='dt=1&g=ma'>TRENDING</a></li>
				<li><a href='#' class='redir' id='dt=1&g=tr'>TOP RATED</a></li>
			</ul>
		</div>

		<div id='popular-menu'><a href='#' class='redir' id='dt=2&g=ma'>Popular</a></div>
	</div>


	<div id='header'>
		<div id='large-header' class='col-12 remove-t remove-m'>
			<div class='slider-menu col-1 fa fa-bars w3-large'></div>
			<div id='logo-large' class='col-3'>
				<a href='#'><img src='../Style/Images/Logo_Large_Final.png' height='80'></a>
			</div>
			<!-- check for logged in/ out user -->
			<div class='user-icon col-1'><a href='userhome.php?id=<?php echo $_SESSION["username"]?>' class='fa fa-user-circle  w3-large'></a></div>
			<!-- add functionality to search bar -->
			<div id='fixed-search-bar' class="col-4">
				<!--changes inside of this-->
		        <form id='search-form' action="Search.php" method="post">
		            <input id='search-bar' type='text' name='query' placeholder='Search...'/>
					<button id='search-btn' name='submit' type='submit' class='fa fa-search'/>
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
				<a href='userhome.php?id=<?php echo $_SESSION["username"]?>' class='fa fa-user-circle w3-large'></a>
			</div>
			<div id='open-search-bar' class="col-t-1 col-m-1">
				<a href='#' class='fa fa-search  w3-large'></a>
			</div>
			<!-- add functionality to search bar -->
		    <div id='hidden-search-bar' class="col-t-12 col-m-12">
		        <form id='search-form' action="Search.php" method="post">
		            <input id='search-bar-s' type='text' name='query' placeholder='Search...'/>
					<button id='search-btn-s' name='submit' type='submit' class='fa fa-arrow-right'/>
		        </form>
		    </div>
		</div>

	</div>

	<div id='page-content'>
		<div id='main-image'>
			<div class='fully-faded'>
				<img src='../Style/Images/main-img.jpg'>
				<div id='main-img-text'>
					<h1>Discover currently trending</h1>
					<button class='main-btn redir' id='dt=2&g=ma'>Explore All</button>
				</div>
			</div>
		</div>

		<div id='trending-listing'>
			<div id='top-text'>
				<h2><i class='fa fa-line-chart'></i>Trending</h2>
			</div> 

			<?php 
				$sectnames = array('sect1','sect2','sect3','sect4');
				$imgid = 1;
				$sliderid = 1;
				for($sect = 0; $sect < 4; $sect++) {
					$pos = $conn->query("SELECT image_url FROM movie WHERE movieID in (SELECT movieID from large_posters) LIMIT 8 OFFSET ".$sect*8);
					$largeimg = $conn->query("SELECT * from large_posters LIMIT 8 OFFSET ".$sect*8);

					echo 
					"<div id='".$sectnames[$sect]."'>
						<div id='".$sectnames[$sect]."-l'>";
							while($posters = $pos->fetch_assoc()) {
								echo "<div class='poster-container'><img id='$imgid' src='".$posters['image_url']."'></div>";
								$imgid++;
							}
					echo "</div>
						<div id='".$sectnames[$sect]."-e'>";
							while($largeposters = $largeimg->fetch_assoc()){
								echo 
								"<div class='lpos-i' id='lpos-i".$sliderid."'>"
									.$largeposters['title'].
									"<p class='tiny'><i id='watchlist-btn' class='fa fa-bookmark-o w3-large'></i>Add to Watchlist</p>
									<p class='tiny'><i id='watched-btn' class='fa fa-plus-square-o w3-large'></i> Add to Watched</p>
									<p class='tiny'><i id='fav-btn' class='fa fa-heart-o w3-large'></i>Add to Favorites</p>
								</div>
								<div class='faded' id='lpos-c".$sliderid."'><div class='fa fa-times w3-large l-pos-exit'></div><img src='".$largeposters['image_url']."'></div>";
								$sliderid++;
							}
					echo "</div>
					</div>";
				}
			?>
		</div>

	</div>

	<!--footer final, dont touch below!! -->
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
	<!--footer final, dont touch above!! -->

	<script src="../Functionality/jquery-3.2.1.js"></script>
	<script src="../Functionality/HomePage_F.js" type="text/javascript"></script>

</body>