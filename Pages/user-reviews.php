<?php 

//display user info
include 'userpage_top.php';

include 'dbconnect.php';


$sql='select * from review where user=1;';
$result=mysqli_query($conn, $sql);

echo  "<h3>Reviews (".mysqli_num_rows($result).")</h3>";

    if ($result->num_rows > 0) {
        echo "<ul id='user-list'>";
        
    
        while($row = $result->fetch_assoc()) {
            
            $movieID=$row["movie"];
            $review_title=$row["title"];
            $reviewtext=$row["review_text"];
            $reviewtext= substr($reviewtext,0,120);
            $reviewrate=$row["review_rating"];

            $sql2='select * from movie where movieid='.$movieID;
            $result2=mysqli_query($conn,$sql2);

                if ($result2->num_rows > 0)
                {
                    while($row=$result2->fetch_assoc())
                    
                        {
                        $id=$row["movieID"];
                        $title=$row["title"];
                        $poster=$row["image_url"];

                    echo 
                        "<li>
                        <a id='list-link' href='search-result.php?$id'>
                        <div id=\"user-movie-info\">
                        <img id=\"list-movie-poster\" src=\"$poster\">
                        <h3>$title</h3>
                        <h6>\"$review_title\" (Rating:  $reviewrate/10)</h6>
                        <div id='list-movie-desc'>
                        <p>\"$reviewtext...\"</p>
                        </div>
                        </div>
                        </a>
                        </li>";
                        
                    }

                }
            
        }

    echo "</ul>";

    }

else
    echo '<h6>NO REVIEWS FOUND</h6>';

    //close database connection
$conn -> close();

//display footer
 include 'userpage_bottom.php';
  ?>
