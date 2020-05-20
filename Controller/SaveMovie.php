<?php
	require 'config.php';

	$userid = $_GET['u'];
	$addid = $_GET['id'];
	$listid = $_GET['l'];

	if ($listid == 'bkmrk')
		$result = $conn->query('INSERT INTO wishlist VALUES ('.$userid.', '.$addid.')');
	else if ($listid == 'fav')
		$result = $conn->query('INSERT INTO watched_movies VALUES ('.$userid.', '.$addid.', 1)');
	else
		$result = $conn->query('INSERT INTO watched_movies VALUES ('.$userid.', '.$addid.', 0)');

	if (!$result)
	    echo "error:" .$conn->error;
	else {
		echo "<script type='text/javascript'>alert('added successfully')</script>";
		header("Location: ../View/UserHome.php?id=$userid");
	}


?>