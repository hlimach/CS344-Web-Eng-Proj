<?php
	if(isset($_POST['submit'])){
	// Fetching variables of the form which travels in URL
		$qry = $_POST['query'];
	if($qry != "") 
		header("Location: ../View/Results.php?w=".$qry);
	}
?>