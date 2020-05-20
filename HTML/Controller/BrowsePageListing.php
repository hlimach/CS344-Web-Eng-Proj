<?php
	require 'config.php';

	$query = '';
	$display_type = $_GET['dt'];
	$selection = $_GET['g'];

	if ($display_type == "2") {
		if ($selection == "null")
			$query = "SELECT * FROM movie";
		else if ($selection == "ma")
			$query = "SELECT * FROM movie WHERE movieID in (SELECT movie FROM watched_movies GROUP BY movie ORDER BY COUNT(*) DESC)";
		else if ($selection == "tr")
			$query = "SELECT * FROM movie ORDER BY rating DESC";
		else
			$query = "SELECT * FROM movie WHERE movieID in (SELECT movieID FROM movie_genre WHERE genreID = (SELECT genreID FROM genre WHERE genre_name = '".$selection."'))";
	}

	else if($display_type == "1") {
		if ($selection == "null")
			$query = "SELECT * FROM movie WHERE seasons!=0";
		else if ($selection == "ma")
			$query = "SELECT * FROM movie WHERE movieID in (SELECT movie FROM watched_movies GROUP BY movie ORDER BY COUNT(*) DESC) AND seasons!=0";
		else if ($selection == "tr")
			$query = "SELECT * FROM movie WHERE seasons!=0 ORDER BY rating DESC";
		else
			$query = "SELECT * FROM movie WHERE seasons!=0 AND movieID in (SELECT movieID FROM movie_genre WHERE genreID = (SELECT genreID FROM genre WHERE genre_name = '".$selection."'))";
	}

	else {
		if ($selection == "null")
			$query = "SELECT * FROM movie WHERE seasons=0";
		else if ($selection == "ma")
			$query = "SELECT * FROM movie WHERE movieID in (SELECT movie FROM watched_movies GROUP BY movie ORDER BY COUNT(*) DESC) AND seasons=0";
		else if ($selection == "tr")
			$query = "SELECT * FROM movie WHERE seasons=0 ORDER BY rating DESC";
		else
			$query = "SELECT * FROM movie WHERE seasons=0 AND movieID in (SELECT movieID FROM movie_genre WHERE genreID = (SELECT genreID FROM genre WHERE genre_name = '".$selection."'))";
	}

	$result = $conn->query($query);

	if ($result->num_rows > 0) {
		$x = 1;
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	$genres = $conn->query("SELECT genre_name FROM genre where genreID in (select genreID from movie_genre where movieID=".$row["movieID"].")");
	    	echo
	    	"<div class='item'>
				<a href='FilmPage.php?id=".$row["movieID"]."'>
					<img id='$x' src='" .$row["image_url"]. "'>
					<div class='item-info'>
						<p class='title'>" .$row["title"]. "</p>
						<p class='genres-list'>";
						
							while($list = $genres->fetch_assoc()) 
								echo $list["genre_name"]. " ";
			echo
						"</p>
					</div>
				</a>
			</div>";
			$x++;
	    }
	} else {
	    echo "No results to display.";
	}

?>