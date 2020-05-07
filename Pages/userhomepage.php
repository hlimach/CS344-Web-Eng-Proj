<?php
include 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Homepage</title>
    <link rel="stylesheet" href="maira.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            

            var url = 'display-userinfo.php';
            $.get(url,function (data) {
            $('#user-info').html(data);
             });   

             var url = 'display-movies.php';
            $.get(url, {ID:'watched'},function(data) {
                $('#user-links-nav a').addClass("active").not('#watched').removeClass("active");
            $('#user-movie-content').html(data);
             }); 


            $('#user-links-nav a').click(function(event) { 
                $('#user-links-nav a').addClass("active").not(this).removeClass("active");
             event.preventDefault(); 
             var id=event.target.id;
            var url = $(this).attr('href');
            $.get(url,{ ID:id} ,function(data) {
            $('#user-movie-content').html(data);
             });
});

        });
    </script>


</head>

<body id='user-homepage'>
<div class='header' class='col-12 col-m-12'></div>
<div id='breadcrumb-menu' class='col-12 col-m-12'></div>
<div id='main-content' class='col-12 col-m-12'>
    <div id='user-info' class='col-3 col-m-3 '>

     <!--content added dynamically from display-userinfo php file-->

    </div>
    <div class="vl" id='optionalstuff'></div>
    <div id='user-links' class='col-8 col-m-8 col-mo-12'>
       <div id='user-links-nav' class='nav'>
           <div><a id='watched' href="display-movies.php"> Watched Movies</a></div>
           <div><a id='fav' href="display-movies.php"> Favorites</a></div>
           <div><a id='later' href="display-movies.php">Watch Later</a></div>
           <div><a id='reviews' href="display-reviews.php">Reviews</a></div>
       </div>
      
      <div id='user-movie-content'>

       <!--Content added dynamically from dispay-movies and display-review php files-->

       </div>

    </div>
</div>

<div class='footer'></div> 



</body>
</html>