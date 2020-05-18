<?php
	require 'config.php';
	$qry = 'select * from review';
	$result = $conn->query($qry);

	echo $result->num_rows;

	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc())
			echo "<p>".$row['title']."</p>
					<p>".$row['review_text']."</p>";
	}
	else {
		echo "cant do it" .$conn->error;
	}
?>