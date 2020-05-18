$(document).ready(function(){

	if ((window.location.hash).includes('#dt')) {
		var updatedString = window.location.hash.replace("#", "");
		$load_page = "BrowsePageListing.php?" + updatedString;
		$('#poster-listings').load($load_page);
	}

	$('.redir').click(function(event){
		$redir_query = event.target.id;
		window.location.href = 'BrowsePage.php#' + event.target.id;
	});

	if((window.location.href).includes('Results.php?w=')) {
		$('#res-listings').load('MovieResults.php?w='+word);
	}

	$(window).scroll(function() {
		if($(window).scrollTop() > 20)
			$("#header").css({"background-color": "rgb(18,18,18)", "-webkit-transition": "background-color 400ms linear"});
		else
			$("#header").css({"background-color": "transparent", "-webkit-transition": "background-color 400ms linear"});
	});

	$('#open-search-bar').click(function(){
		$('.slider-menu, #logo-small, .user-icon, #open-search-bar').css('display','none');
		$('#hidden-search-bar').slideDown("slow");

		$('#page-content').click(function(){
			$('#hidden-search-bar').css('display','none');
			$('.slider-menu, #logo-small, .user-icon, #open-search-bar').css('display','block');
		});
	});
	

	//sliding menu functionality
	$('.slider-menu').click(function(){
		$('#sliding-menu').animate({"left":"0px"}, "slow").addClass('visible');
		$('#header, #page-content, #footer').css('overflow','hidden');

		$('#slider-menu-exit').click(function(){
			$('#sliding-menu').animate({"left":"-1000px"}, "slow").removeClass('visible');
			$('#header, #page-content, #footer').css('overflow','scroll');
		});

	});

	//open orclose submenus in slider menu
	$('#movie-menu i.fa').click(function(){
		$('#movie-menu li').slideToggle();
	});

	$('#tv-show-menu i.fa').click(function(){
		$('#tv-show-menu li').slideToggle();			
	});

	$('#film-tab').click(function(){
		$('#user-tab').removeClass('active-tab');
		$('#film-tab').addClass('active-tab');
		$('#res-listings').load('MovieResults.php?w='+word);
	});

	$('#user-tab').click(function(){
		$('#film-tab').removeClass('active-tab');
		$('#user-tab').addClass('active-tab');
		$('#res-listings').load('UserResults.php?w='+word);
	});

	//HOMEPAGE FUNCTIONALITY 
	//click events for home page posters (open when clicked)
	$('#sect1, #sect2, #sect3, #sect4').click(function(event){
		if(event.target.id == 'watchlist-btn' || event.target.id == 'watched-btn' || event.target.id == 'fav-btn')
			return;

		$('#sect1-e, #sect2-e, #sect3-e, #sect4-e, #sect1-e *, #sect2-e *, #sect3-e *, #sect4-e *').slideUp();
		var sectnum = '#' + $(this).attr('id') + '-e';
		var info = '#lpos-i' + event.target.id;
		var poster = '#lpos-c' + event.target.id;
		var pointer = sectnum + "," + sectnum + " *";

		var sliding = sectnum + "," + info + "," + poster + "," + info + " *," + poster + " *";
		$(sliding).slideDown();

	});

	//close when cross pressed 
	$('.l-pos-exit').click(function(){
		$('#sect1-e, #sect2-e, #sect3-e, #sect4-e, #sect1-e *, #sect2-e *, #sect3-e *, #sect4-e *').slideUp();
	});

	//BROWSE PAGE FUNCTIONALITY 
	$('#all-tab').click(function(){
		$('#tv-shows-tab, #movies-tab').removeClass('active-tab');
		$('#all-tab').addClass('active-tab');
		$('#poster-listings').load('BrowsePageListing.php?dt=2&g=null');
	});

	$('#movies-tab').click(function(){
		$('#all-tab, #tv-shows-tab').removeClass('active-tab');
		$('#movies-tab').addClass('active-tab');
		$('#poster-listings').load('BrowsePageListing.php?dt=0&g=null');
	});

	$('#tv-shows-tab').click(function(){
		$('#all-tab, #movies-tab').removeClass('active-tab');
		$('#tv-shows-tab').addClass('active-tab');
		$('#poster-listings').load('BrowsePageListing.php?dt=1&g=null');
	});
	
	//click events for home page posters (open when clicked)
	$('#left-menu-large, #left-menu-small *').click(function(event){
		var dt = 3;

		if($('#movies-tab').hasClass('active-tab')) 
			dt = 0;
		else if ($('#tv-shows-tab').hasClass('active-tab'))
			dt = 1;
		else
			dt = 2;

		var g = event.target.text;

		if (g == "MOST ADDED")
			g = 'ma';
		else if (g == "TOP RATED")
			g = 'tr';

		var params = "dt=" + dt + "&g=" + g;

		var load_page = "BrowsePageListing.php?" + params;

		if(!((window.location.href).includes('BrowsePage.php'))){
			window.location.href = 'BrowsePage.php#' + params;
		}
		else {
			$('#poster-listings').load(load_page);
		}
		
		$('#left-menu-box').slideUp();
	});

	$('#open-left-menu').click(function(){
		$('#left-menu-box').slideToggle();
	});
});