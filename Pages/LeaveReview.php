<?php
	require 'config.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(!isset($_POST['review-title']) || !isset($_POST['review-content']))
			$result = $conn->query("");
		else
	    //autoincrement review id set so remove the first val, and add session to get the second val of userid
	    	$result = $conn->query("INSERT INTO review values ('7','2','".$movie_id."','".$_POST['review-title']."', '".$_POST['review-content']."', '".$_POST['rating']."')");

	    if ($result)
	        echo "<script type='text/javascript'>alert('inserted!');</script>";
	    else
	    	echo "error:" .$conn->error;
	}
?>

<!DOCTYPE html>
<html>
<body>
    <form name="leave-review" method="post" action="<?php echo $_SERVER['PHP_SELF'].'?'.http_build_query($_GET) ?>" >
        <label for="review">Leave a Review</label>
        <input type="text" id='review-title' name='review-title' placeholder="Your title here...">
    	<input type="text" id="review" name="review-content" placeholder="Your text here...">
    	
    	<label for="rating">Rating</label>
	    <select id="rating" name="rating">
	      	<option value="1">1</option>
	      	<option value="2">2</option>
	      	<option value="3">3</option>
	      	<option value="4">4</option>
	      	<option value="5">5</option>
	    </select>

        <input type="submit" value="Add">
    </form>
</body>
</html>