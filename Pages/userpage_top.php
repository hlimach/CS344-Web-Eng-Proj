<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Homepage</title>
    <link rel="stylesheet" href="../Style/UserPage_Style.css" type="text/css">

</head>

<body id='user-homepage'>

<?php include "../Pages/header.html" ?>

<div class='col-12 col-t-12 col-m-12'>
</div>

<div id='main-content' class='col-12 col-t-12 col-m-12 '>
    
   
    <h3 id='optionalstuff'>Maira's Homepage</h3>
    <div id='user-info' class='col-3 col-t-12 col-m-12'>
    
    <?php

     include '../Pages/display-userinfo.php'
      ?>
  

    </div>
    
    <div id='user-links' class='col-8 col-t-12 col-m-12'>
       <div id='user-links-nav' class='nav'>
           <div><a id='watched' href="userhome.php"> Watched Movies </a></div>
           <div><a id='fav' href="user-favs.php"> Favorites </a></div>
           <div><a id='later' href="user-later.php">Watch Later </a></div>
           <div><a id='reviews' href="user-reviews.php">Reviews </a></div>
       </div>
      
      <div id='user-movie-content'>


