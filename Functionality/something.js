//this should be added to the final common JS file

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
