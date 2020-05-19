<?php
	require 'config.php';
	require "Search.php";
	
	session_start();
	
	$movie_id = $_GET['id'];
	$movie = $conn->query("SELECT * FROM movie WHERE movieID =".$movie_id)->fetch_assoc();
	$genres = $conn->query("SELECT genre_name FROM genre where genreID in (select genreID from movie_genre where movieID=".$movie_id.")");

?>

<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width">
	<title><?php echo $movie['title'] ?></title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../Style/HomePage_Style.css" type="text/css">

</head>

<body>
	<div id='header'>
		<div id='large-header' class='col-12 remove-t remove-m'>
			<div id='logo-large' class='col-3'>
				<a href='#'><img src='../Style/Images/Logo_Large_Final.png' height='80'></a>
			</div>
			
			<div class='user-icon col-1'>
				<a href='userhome.php?id=<?php echo $_SESSION["username"]?>' class='fa fa-user-circle  w3-large'></a>
			</div>
			
			<div id='fixed-search-bar' class="col-4">
		        <form id='search-form' action="Search.php" method="post">
		            <input id='search-bar' type='text' name='query' placeholder='Search...'/>
					<button id='search-btn' name='submit' type='submit' class='fa fa-search'/>
		        </form>
		    </div>
		</div>

		<div id='small-header' class='remove col-t-12 col-m-12'>
			<div id='logo-small' class='col-t-1 col-m-1'>
				<a href='#'><img src='../Style/Images/Logo_Small_Final.png' height='60'></a>
			</div>
			
			<div class='user-icon col-t-1 col-m-1'>			
				<a href='userhome.php?id=<?php echo $_SESSION["username"]?>' class='fa fa-user-circle w3-large'></a>
			</div>
			<div id='open-search-bar' class="col-t-1 col-m-1">
				<a href='#' class='fa fa-search  w3-large'></a>
			</div>
			
		    <div id='hidden-search-bar' class="col-t-12 col-m-12">
		        <form id='search-form' action="Search.php" method="post">
		            <input id='search-bar-s' type='text' name='query' placeholder='Search...'/>
					<button id='search-btn-s' name='submit' type='submit' class='fa fa-arrow-right'/>
		        </form>
		    </div>
		</div>

		<?php include 'Search.php'; ?>
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
			<div id='main-info'>
				<div id='film-pos' class='col-5 col-t-12 col-m-12'>
					<img src="<?php echo $movie['image_url'] ?>">
				</div>

				<div id='film-info' class='col-7 col-t-12 col-m-12'>
					<?php 
						echo "<div class='main-text'>".$movie['title']."</div>
							<div class='genres'>";
								while($list = $genres->fetch_assoc()) 
									echo "<p>".$list["genre_name"]. "  </p>";
							echo "</div>";
					?>
					<div id='film-actions'>
						<a href="<?php echo "SaveMovie.php?u=".$_SESSION['userid']."&id=".$movie_id."&l=bkmrk"?>"><i class='fa fa-bookmark-o'></i>Bookmark</a>
						<a href="<?php echo "SaveMovie.php?u=".$_SESSION['userid']."&id=".$movie_id."&l=save"?>"><i class='fa fa-plus-square-o'></i>Watched</a>
						<a href="<?php echo "SaveMovie.php?u=".$_SESSION['userid']."&id=".$movie_id."&l=fav"?>"><i class='fa fa-heart-o'></i>Favorite</a>
					</div>
					<div id='film-rating'><?php echo $movie['rating']."/10 IMDb"?></div>
					<div id='film-stats'>
						<?php 
							$count = $conn->query("SELECT COUNT(*) as c FROM watched_movies WHERE movie =".$movie_id)->fetch_assoc();
							echo "<p><i class='fa fa-eye'></i>Watched by ".$count['c']." users</p>";

							$count = $conn->query("SELECT COUNT(*) as c FROM watched_movies WHERE movie =".$movie_id." AND favourite!=0")->fetch_assoc();
							echo "<p><i class='fa fa-heart'></i>Favorited by ".$count['c']." users</p>";

							$count = $conn->query("SELECT COUNT(*) as c FROM wishlist WHERE movie=".$movie_id)->fetch_assoc();
							echo "<p><i class='fa fa-bookmark'></i>Saved by ".$count['c']." users</p>";
						?>
					</div>
				</div>
			</div>

			<div id='film-reviews'>
				<div id='leave-review'>
					<?php require 'LeaveReview.php' ?>
				</div>
				
				<div id='reviews-list'>
					<div id='review-head'>Reviews</div>
					<?php 
						$revs = $conn->query("SELECT * FROM review WHERE movie =" .$movie['movieID']);
						while($rev = $revs->fetch_assoc()){
							$user = $conn->query("SELECT username, pic_url FROM user WHERE userID=" .$rev['user'])->fetch_assoc();
							echo 
							"<div class='review-box'>
								<div class='rev-img'><img src='".$user['pic_url']."'></div>
								<div class='rev'>
									<div class='rev-title'>".$rev['title']."</div>
									<div class='rev-user'>Review by <a href='userhome.php?id=".$user['username']."'><b>".$user['username']." </b></a>";
										for($x = 0; $x < $rev['review_rating']; $x++)
											echo "<i class='fa fa-star fa-xs'></i>";
							echo	"</div>
									<div class='rev-text'>".$rev['review_text']."</div>
								</div>
							</div>";
						}
					?>
				</div>
			</div>
			
		</div>
	</div>

	<!--footer final-->
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

		<div id='footer-end' class='footer-heading'> CS-344 Web Engineering, Spring 2020: Semester Project.</div>
	</div>

	<script src="../Functionality/jquery-3.2.1.js"></script>
	<script src="../Functionality/HomePage_F.js" type="text/javascript"></script>
</body>