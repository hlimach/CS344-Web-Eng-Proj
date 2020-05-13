userpage_rwd();
	$(window).on('resize',function(){
		userpage_rwd();
		
	});
			
	
	
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
