$(document).ready(function(){

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

	$('#search-btn-s, #search-btn').click(function(){
			alert('next page lmao');
	});

	//sliding menu functionality
	$('.slider-menu').click(function(){
		$('#sliding-menu').animate({"left":"0px"}, "slow").addClass('visible');
		$('#header, #page-content, #footer').css('overflow','hidden');

		$('#slider-menu-exit').click(function(){
			$('#sliding-menu').animate({"left":"-1000px"}, "slow").removeClass('visible');
			$('#header, #page-content, #footer').css('overflow','hide');
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
		$(document).ready(function() {
            $("#button1").click(function(){
             document.location.href = '../Pages/Edit User.php';
            });

 
    });  
       $(document).ready(function() {
            $("#button2").click(function(){
             document.location.href = '../Pages/password.php';
            });

 
    });  
       $(document).ready(function() {
            $("#button3").click(function(){
             document.location.href = '../Pages/reviews.php';
            });

 
    }); 
    $(document).ready(function() {
            $("#button4").click(function(){
             document.location.href = '../Pages/favorites.php';
            });

 
    });   
     $(document).ready(function() {
            $("#button5").click(function(){
             document.location.href = '../Pages/watched.php';
            });

 
    });   
      $(document).ready(function() {
            $("#button6").click(function(){
             document.location.href = '../Pages/saved.php';
            });

 
    }); 
     $(document).ready(function() {
            $("#mbutton1").click(function(){
             document.location.href = '../Pages/edit user.php';
            });

 
    });  
       $(document).ready(function() {
            $("#mbutton2").click(function(){
             document.location.href = '../Pages/password.php';
            });

 
    }); 
        $(document).ready(function() {
            $("#mbutton3").click(function(){
             document.location.href = '../Pages/reviews.php';
            });

 
    }); 
    $(document).ready(function() {
            $("#mbutton4").click(function(){
             document.location.href = '../Pages/favorites.php';
            });

 
    });   
     $(document).ready(function() {
            $("#mbutton5").click(function(){
             document.location.href = '../Pages/watched.php';
            });

 
    });   
      $(document).ready(function() {
            $("#mbutton6").click(function(){
             document.location.href = '../Pages/saved.php';
            });

 
    });   
  
      
