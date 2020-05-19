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
	
	
	//functions for userpage

	follow_unfollow();
	$('.follow-btn').click(function(){
	 	follow_unfollow();
 		location.reload();

	});

	userpage_rwd();
	$(window).on('resize',function(){
		userpage_rwd();
		
	});
			
		
	function follow_unfollow(){
			var userid=$('.follow-btn').attr("data");
			
			var followstate=($('.follow-btn').text());
			$.get('../Pages/follow.php', {state:followstate, user:userid },function (data) { 
				data = $.trim(data);
				
				if (data==='Unfollow') {
					$('.follow-btn').css("background-color","red");
					$('.follow-btn').css("color","white");
					$('.follow-btn').text("Unfollow");
				}
				else{
					
					$('.follow-btn').css("background-color","#23ac45");
					$('.follow-btn').text("Follow");
				}
			
				
		  });
			

		}
	
	
	function userpage_rwd(){
	if($(window).width()<580){
			
				$('#user-info').css('text-align','center');
				$("#user-movie-info").css('font-size','smaller');
				$("#profilepicture").css('width','50%');
				$('#user-info').css('display','grid');
				$('#user-follow-div').css('display','grid');
			}
			else if ($(window).width()>580 && $(window).width()<759 )
			{
				
				$("#user-info").css('display','inline');
				$("#user-info").css('text-align','left');
				$("#profilepicture").css('width','80%');
				$('#user-follow-div').css('display','flex');
			}
			else{
		
				$('#user-follow-div').css('display','grid');
				$("#user-info").css('display','grid');
				$("#profilepicture").css('width','70%');
				$("#user-info").css('text-align','center');
			}
		}
});
