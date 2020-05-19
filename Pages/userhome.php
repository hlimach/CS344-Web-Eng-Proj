<?php 
session_start();
include '../Pages/CheckLogin.php';
$username=$_GET['id'];

include '../Pages/userpage_top.php'; 


$sql='select userID from user where username="'.$username.'"';
$result=mysqli_query($conn, $sql);
if ($result->num_rows) {
        while($row = $result->fetch_assoc()) {
            $userID=$row["userID"];
        
        }
    }
//display user info




$sql='select * from watched_movies where user='.$userID.' and favourite=false';
$result=mysqli_query($conn, $sql);
echo  "<h3>Watched Movies and TV Shows (".mysqli_num_rows($result).")</h3>";

    if ($result->num_rows > 0) {
         echo "<ul id='user-list'>";
 
            while($row = $result->fetch_assoc()) {

            $movieID=$row["movie"];
            $sql2='select * from movie where movieid='.$movieID;
            $result2=mysqli_query($conn,$sql2);
                if ($result2->num_rows > 0)
                {
                    while($row=$result2->fetch_assoc())
                    {
                
                    $title=$row["title"];
                    $rating=$row["rating"];
                    $poster=$row["image_url"];
                    $seasons=$row["seasons"];

                    //show number of seasons for tv shows, show nothing for movies
                    if ($seasons>0) {
                        $seasons="(".$seasons." Seasons)";
                    }
                    else {
                        $seasons="";
                    }

                echo "<li>
                    <a id='list-link' href='search-result.php?id=$movieID'>
                    <div id=\"user-movie-info\">
                    <img id=\"list-movie-poster\" src=\"".$poster."\">
                    <h3>$title $seasons</h3>
                    <p>Rating: ".$rating."/10</p>
                    </div>
                    </a>
                    </li>";
                    
                }

            }
            
        }

    echo "</ul>";

    }
else
echo '<h6>NO MOVIES FOUND</h6>';
$conn -> close();
include '../Pages/userpage_bottom.php';

        
  ?>
