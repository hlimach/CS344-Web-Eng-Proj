<?php 
    session_start();
?>
<!doctype html>
<html>
<head>
	<title>Header & Footer</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../Style/Header_Footer_Style.css" type="text/css">

</head>

<body>
	
	<div>
        <?php include 'header.php'?>
	</div>

	<div id='page-content'>
		<p>ERROR: ACCESS DENIED<br><br>This page is only for administrative purposes</p>
	</div>

    <div>  
        <?php include 'footer.html' ?>
    </div>
	<script src="../Functionality/jquery-3.2.1.js"></script>
	<script src="../Functionality/Header_Footer.js" type="text/javascript">
		//took it from here
	</script>
</body>