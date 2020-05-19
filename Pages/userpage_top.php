<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />

    <title>User Homepage</title>
    <link rel="stylesheet" href="../Style/UserPage_Style.css" type="text/css">


</head>

<body id='user-homepage'>

<?php include "../Pages/header.html" ?>

<div class='col-12 col-t-12 col-m-12'>
</div>

<div id='main-content' class='col-12 col-t-12 col-m-12 '>
    
   
  
    <div id='user-info' class='col-3 col-t-12 col-m-12'>
    
    <?php
    

      $username=$_GET["id"];
    
        include '../Pages/dbconnect.php';
        $sql='select userID from user where username="'.$username.'"';
        $result=mysqli_query($conn, $sql);
            if ($result->num_rows) {
                while($row = $result->fetch_assoc()) {
                   $userID=$row["userID"];
        
                }
             }

            //get number of followers and following
            $sql='select * from followers where user='.$userID;
            $result=mysqli_query($conn, $sql);
            $followers= mysqli_num_rows($result);


            $sql='select * from followers where followerID='.$userID;
            $result=mysqli_query($conn,$sql);
            $following= mysqli_num_rows($result);



                //to get user's info from database and display in left section of the page
                $sql='select * from user where userID='.$userID;
                $result=mysqli_query($conn,$sql);
                if ($result->num_rows > 0) {

                $row = $result->fetch_assoc();
                
                $fname=$row["f_name"];
                $lname=$row["l_name"];
                $handle=$row["username"];
                $picture=$row["pic_url"];
                $bio=$row["bio"];
                $age=$row["age"];

                    echo
                '<div id="user-picture" class="col-12 col-t-5" ><img id="profilepicture" src="'.$picture.'" alt="No profile picture"></div>
                
                    <div id="user-name"  >'.$fname." ".$lname.", ".$age.'</div>
                    <div id="user-handle"  >'.'@'.$handle.'</div>
                    <div id="user-follow-div" class="col-12 col-t-7">
                        <div id="user-following"><a href=\'user-followers.php?id='.$handle.'\'>'.$followers.' Followers</a></div>
                        <div id="user-following"><a href=\'user-following.php?id='.$handle.'\'>'.$following.' Following </a></div>
                    </div>';

                    if ($userID!=$_SESSION["userid"]) {
                
                        echo ' <div id="user-follow">
                        <button class="follow-btn" data="'.$userID.'"> </button>
                        </div>';
                    }
                       
                    echo '<div id="user-bio" class="col-12 col-t-12">
                        <h4>About Me</h4>
                        <p>'.$bio.'</p>
                        </div>';
                        
                    if ($userID==$_SESSION["userid"]) {
                       echo ' <div id="user-edit">
                            <button id="user-edit-btn">Edit Profile</button>
                        </div>
                        <div> <a href="../Functionality/logout.php">LOGOUT</a>
                        </div>';
                       
                        
                    }
                    
                }

                       
            
                //create navigation bar for movies
    
                        echo  "</div>
                            
                            <div id='user-links' class='col-8 col-t-12 col-m-12'>
                            <div id='user-links-nav' class='nav'>
                                <div><a id='watched' href=\"userhome.php?id=".$handle."\"> Watched Movies </a></div>
                                <div><a id='fav' href=\"user-favs.php?id=".$handle."\"> Favorites </a></div>
                                <div><a id='later' href=\"user-later.php?id=".$handle."\">Watch Later </a></div>
                                <div><a id='reviews' href=\"user-reviews.php?id=".$handle."\">Reviews </a></div>
                            </div>
                            
                            <div id='user-movie-content'>";

?>
