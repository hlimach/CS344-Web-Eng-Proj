<?php 
include 'userpage_top.php';

include 'dbconnect.php';


$sql='select * from review where user=2;';
$result=mysqli_query($conn, $sql);

echo  "<h2>Reviews</h2>";

if ($result->num_rows > 0) {
    echo "<ul id='user-movie-list'>";
    
// loop through all watched movie row
while($row = $result->fetch_assoc()) {
    
    $movieID=$row["movie"];
    $review_title=$row["title"];
    $reviewtext=$row["review_text"];

$sql2='select * from movie where movieid='.$movieID;
$result2=mysqli_query($conn,$sql2);
if ($result2->num_rows > 0)
{
    while($row=$result2->fetch_assoc())
    
    {
    $title=$row["title"];
    $poster=$row["poster_url"];

echo "<li>
    <div id=\"user-movie-info\">
    <img id=\"list-movie-poster\" src=\"".$poster."\">
    <h3>".$title."</h3>
    <h4>".$review_title."</h4>
    <div id='list-movie-desc'>
    <p>"."\"".$reviewtext."\""."</p>
    </div>
    </div>
    </li>";
    
}

}
    
}
echo "</ul>";
}

else
    echo '<h4>NO REVIEWS FOUND</h4>';

$conn -> close();
 include 'userpage_bottom.php';
  ?>