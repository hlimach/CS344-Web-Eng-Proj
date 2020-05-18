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
});