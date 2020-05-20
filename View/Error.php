<?php 
    session_start();
?>
<!doctype html>
<html>
<head>
	<title>Header & Footer</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="HeaderFooter.css" type="text/css">

</head>

<body>
	
	<div>
        <?php include 'Header.php'?>
	</div>

	<div id='page-content'>
		<p>ERROR: ACCESS DENIED<br><br>This page is only for administrative purposes</p>
	</div>

    <div>  
        <?php include 'Footer.html' ?>
    </div>
	<script src="../Controller/jquery-3.2.1.js"></script>
	<script src="../Controller/HeaderFooter.js" type="text/javascript">
	</script>
</body>