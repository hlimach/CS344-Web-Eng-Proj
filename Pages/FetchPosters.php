<?php
	require 'config.php';

	$pos = $conn->query("SELECT image_url FROM movie WHERE movieID in (SELECT movieID from large_posters)");

	$lpos = $conn->query("SELECT * FROM large_posters");

	$lpos1 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='1'"));
	$lpos2 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='2'"));
	$lpos3 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='3'"));
	$lpos4 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='4'"));
	$lpos5 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='5'"));
	$lpos6 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='6'"));
	$lpos7 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='7'"));
	$lpos8 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='8'"));
	$lpos9 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='9'"));
	$lpos10 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='10'"));
	$lpos11 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='11'"));
	$lpos12 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='12'"));
	$lpos13 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='13'"));
	$lpos14 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='14'"));
	$lpos15 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='15'"));
	$lpos16 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='16'"));

	$lpos17 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='17'"));
	$lpos18 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='18'"));
	$lpos19 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='19'"));
	$lpos20 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='20'"));
	$lpos21 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='21'"));
	$lpos22 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='22'"));
	$lpos23 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='23'"));
	$lpos24 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='24'"));
	$lpos25 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='25'"));
	$lpos26 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='26'"));
	$lpos27 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='27'"));
	$lpos28 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='28'"));
	$lpos29 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='29'"));
	$lpos30 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='30'"));
	$lpos31 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='31'"));
	$lpos32 = mysqli_fetch_array($conn->query("select * from large_posters where posterID='32'"));

	$pos1 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos1['movieID']."'"));
	$pos2 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos2['movieID']."'"));
	$pos3 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos3['movieID']."'"));
	$pos4 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos4['movieID']."'"));
	$pos5 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos5['movieID']."'"));
	$pos6 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos6['movieID']."'"));
	$pos7 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos7['movieID']."'"));
	$pos8 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos8['movieID']."'"));
	$pos9 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos9['movieID']."'"));
	$pos10 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos10['movieID']."'"));
	$pos11 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos11['movieID']."'"));
	$pos12 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos12['movieID']."'"));
	$pos13 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos13['movieID']."'"));
	$pos14 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos14['movieID']."'"));
	$pos15 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos15['movieID']."'"));
	$pos16 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos16['movieID']."'"));

	$pos17 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos17['movieID']."'"));
	$pos18 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos18['movieID']."'"));
	$pos19 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos19['movieID']."'"));
	$pos20 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos20['movieID']."'"));
	$pos21 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos21['movieID']."'"));
	$pos22 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos22['movieID']."'"));
	$pos23 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos23['movieID']."'"));
	$pos24 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos24['movieID']."'"));
	$pos25 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos25['movieID']."'"));
	$pos26 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos26['movieID']."'"));
	$pos27 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos27['movieID']."'"));
	$pos28 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos28['movieID']."'"));
	$pos29 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos29['movieID']."'"));
	$pos30 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos30['movieID']."'"));
	$pos31 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos31['movieID']."'"));
	$pos32 = mysqli_fetch_array($conn->query("select * from movie where movieID='".$lpos32['movieID']."'"));
?> 