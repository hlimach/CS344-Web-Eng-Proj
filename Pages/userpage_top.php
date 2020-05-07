<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Homepage</title>
    <link rel="stylesheet" href="maira.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body id='user-homepage'>
<div class='header' class='col-12 col-m-12'></div>
<div id='breadcrumb-menu' class='col-12 col-m-12'></div>
<div id='main-content' class='col-12 col-m-12'>
    <div id='user-info' class='col-3 col-m-3 '>
    
    <?php include 'display-userinfo.php' ?>
  

    </div>
    <div class="vl" id='optionalstuff'></div>
    <div id='user-links' class='col-8 col-m-8 col-mo-12'>
       <div id='user-links-nav' class='nav'>
           <div><a id='watched' href="userhome.php"> Watched Movies</a></div>
           <div><a id='fav' href="user-favs.php"> Favorites</a></div>
           <div><a id='later' href="user-later.php">Watch Later</a></div>
           <div><a id='reviews' href="user-reviews.php">Reviews</a></div>
       </div>
      
      <div id='user-movie-content'>


