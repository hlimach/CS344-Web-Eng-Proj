<?php 
include 'userpage_top.php';


include 'dbconnect.php';


$sql='select * from watched_movies where user=1 and favourite=true';
$result=mysqli_query($conn, $sql);
echo  "<h2>Favorite Movies</h2>";

if ($result->num_rows > 0) {
    echo "<ul id='user-movie-list'>";
    
// loop through all watched movie row
while($row = $result->fetch_assoc()) {
//$userid=$row["user"];
$movieID=$row["movie"];
$fav=$row["favourite"];
$sql2='select * from movie where movieid='.$movieID;
$result2=mysqli_query($conn,$sql2);
if ($result2->num_rows > 0)
{
    while($row=$result2->fetch_assoc())
    
    {
    $title=$row["title"];
    $description=$row["description"];
    $poster=$row["poster_url"];

echo "<li>
    <div id=\"user-movie-info\">
    <img id=\"list-movie-poster\" src=\"".$poster."\">
    <h3>".$title."</h3>
    <div id='list-movie-desc'>
    <p>".$description."</p>
    </div>
    </div>
    </li>";
    
}

}
    
}
echo "</ul>";
}
else
echo 'NO MOVIES FOUND';
$conn -> close();



 include 'userpage_bottom.php';
 ?>