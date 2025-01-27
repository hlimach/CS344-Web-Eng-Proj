<!doctype html>
<html>
<head>
	<title>Header</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="HeaderFooter.css" type="text/css">

</head>

<body>

	<div id='sliding-menu' class='header_footer col-3 col-t-5 col-m-5'>
		<div id='slider-menu-exit' class="fa fa-times w3-large"></div>
		<div id='movie-menu'>
			<a href='#'>Movies</a><i class='fa fa-angle-down w3-large'></i>
			<ul>
				<li><a href='#' class='redir' id='dt=0&g=null'>ALL</a></li>
				<li><a href='#' class='redir' id='dt=0&g=ma'>TRENDING</a></li>
				<li><a href='#' class='redir' id='dt=0&g=tr'>TOP RATED</a></li>
			</ul>

		</div>

		<div id='tv-show-menu'>
			<a href='#'>TV Shows</a><i class='fa fa-angle-down w3-large'></i>
			<ul>
				<li><a href='#' class='redir' id='dt=1&g=null'>ALL</a></li>
				<li><a href='#' class='redir' id='dt=1&g=ma'>TRENDING</a></li>
				<li><a href='#' class='redir' id='dt=1&g=tr'>TOP RATED</a></li>
			</ul>
		</div>

		<div id='popular-menu'><a href='#' class='redir' id='dt=2&g=ma'>Popular</a></div>
		<div id='about-us-menu'><a href='AboutUs.php'>About Us</a></div>
	</div>


	<div id='header' class='header_footer'>
		<div id='large-header' class='col-12 remove-t remove-m'>
			<div class='slider-menu col-1 fa fa-bars w3-large'></div>
			<div id='logo-large' class='col-3'>
				<a href='HomePage.php'><img src='./Images/Logo_Large_Final.png' height='80'></a>
			</div>
			<!-- check for logged in/ out user -->
			<div class='user-icon col-1'><a href='UserHome.php?id=<?php echo $_SESSION["username"]?>' class='fa fa-user-circle  w3-large'></a></div>
			<!-- add functionality to search bar -->
			<div id='fixed-search-bar' class="col-4">
				<!--changes inside of this-->
		        <form id='search-form' action="../Controller/Search.php" method="post">
		            <input id='search-bar' type='text' name='query' placeholder='Search...'/>
					<button id='search-btn' name='submit' type='submit' class='fa fa-search'/>
		        </form>
		    </div>  
		</div>

		<div id='small-header' class='remove col-t-12 col-m-12'>
			<div class='slider-menu col-t-1 col-m-1 fa fa-bars w3-large'></div>
			<div id='logo-small' class='col-t-1 col-m-1'>
				<a href='HomePage.php'><img src='./Images/Logo_Small_Final.png' height='60'></a>
			</div>
			<!-- check for logged in/ out user -->
			<div class='user-icon col-t-1 col-m-1'>			
				<a href='#' class='fa fa-user-circle w3-large'></a>
			</div>
			<div id='open-search-bar' class="col-t-1 col-m-1">
				<a href='UserHome.php?id=<?php echo $_SESSION["username"]?>' class='fa fa-search  w3-large'></a>
			</div>
			<!-- add functionality to search bar -->
		    <div id='hidden-search-bar' class="col-t-12 col-m-12">
		        <form id='search-form' action="../Controller/Search.php" method="post">
		            <input id='search-bar-s' type='text' name='query' placeholder='Search...'/>
					<button id='search-btn-s' name='submit' type='submit' class='fa fa-arrow-right'/>
		        </form>
		    </div>
		</div>
	</div>

</body>
</html>
