<?php 
	require 'config.php';
	$word = $_GET['w'];
	$searchm = $conn->query("SELECT * FROM movie WHERE title like '%".$word."%'");

	if($searchm->num_rows > 0) {
		while($sres = $searchm->fetch_assoc()) {
			echo "<div class='result'>
					<a href='FilmPage.php?id=".$sres['movieID']."'>
						<div class='res-img'><img src='".$sres['image_url']."'></div>
						<div class='res'>".$sres['title']."</div>
					</a>
				</div>";
		}
	}
	else {
		echo "No Results in Movies & TV Shows. Try Searching Again.";
	}
?>