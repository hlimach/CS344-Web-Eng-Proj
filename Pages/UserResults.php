<?php 
	require 'config.php';
	$word = $_GET['w'];
	
	$searchu = $conn->query("SELECT * FROM user WHERE username LIKE '%".$word."%' OR f_name LIKE '%".$word."%' OR l_name LIKE '%".$word."%'");

	if($searchu->num_rows > 0) {
		while($ures = $searchu->fetch_assoc()) {
			echo "<div class='user-list'>
					<a href='Userhome.php?id=".$ures['userID']."'>
						<div class='ures-img'><img src='".$ures['pic_url']."'></div>
						<div class='ures'>
							<div class='handle'>".$ures['username']."</div>
							<div class='fullname'>".$ures['f_name']." ".$ures['l_name']."</div>
						</div>
					</a>
				</div>";
		}
	}
	else {
		echo "No Matching Users Found. Try a Different Search.";
	}
?>