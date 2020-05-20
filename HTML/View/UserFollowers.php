<?php 
session_start();
include '../Controller/CheckLogin.php';
//display user info and header
include 'UserPageTop.php';


$username=$_GET["id"];
$sql='select userID from user where username="'.$username.'"';
$result=mysqli_query($conn, $sql);
    if ($result->num_rows) {
        while($row = $result->fetch_assoc()) {
           $userID=$row["userID"];

        }
     }

$sql='select followerID from followers where user='.$userID;
$result=mysqli_query($conn, $sql);

echo  "<h3>Followers (".mysqli_num_rows($result).")</h3>";
    if ($result->num_rows > 0) {
     echo "<ul id='user-list'>";
    

        while($row = $result->fetch_assoc()) 
        {
        $userID=$row["followerID"];

            $sql2='select * from user where userID='.$userID;
            $result2=mysqli_query($conn,$sql2);
            if ($result2->num_rows > 0)
            {
                while($row=$result2->fetch_assoc())
                
                {
                $fname=$row["f_name"];
                $handle=$row["username"];
                $lname=$row["l_name"];
                $pic=$row["pic_url"];

            echo "<li>
            <a id='list-link' href='UserHome.php?id=$handle'>
                <div id=\"user-follow-list\">
                <img id=\"list-movie-poster\" class='follower-pic' src=\"".$pic."\">
                <h3>".$fname.' '.$lname."</h3>
                </div>
                </li>
                </a>";
                
                }//end of inner while

            }//end of inner if
    
        }//end of outer while

    echo "</ul>";

    }//end if outer if

    else
    echo '<h6>0 FOLLOWERS</h6>';

//close database connection    
$conn -> close();

//display footer
include 'UserPageBottom.php';

?>
