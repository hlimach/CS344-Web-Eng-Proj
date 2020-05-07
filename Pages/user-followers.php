<?php 

include 'userpage_top.php';
include 'dbconnect.php';


$sql='select followerID from followers where user=2 ';
$result=mysqli_query($conn, $sql);

echo  "<h2>Followers</h2>";

if ($result->num_rows > 0) {
    echo "<ul id='user-movie-list'>";
    
// loop through all watched movie row
while($row = $result->fetch_assoc()) {
//$userid=$row["user"];
$userID=$row["followerID"];

$sql2='select * from user where userID='.$userID;
$result2=mysqli_query($conn,$sql2);
if ($result2->num_rows > 0)
{
    while($row=$result2->fetch_assoc())
    
    {
    $fname=$row["f_name"];
    $lname=$row["l_name"];
    $pic=$row["pic_url"];

echo "<li>
    <div id=\"user-follow-list\">
    <img id=\"list-movie-poster\" class='follower-pic' src=\"".$pic."\">
    <h3>".$fname.' '.$lname."</h3>
    </div>

    </li>";
    
}

}
    
}
echo "</ul>";
}
else
echo '<h4>NO MOVIES FOUND</h4>';
$conn -> close();


include 'userpage_bottom.php';

?>