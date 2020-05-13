<?php 
//display user info and header
include 'userpage_top.php';
include 'dbconnect.php';


$sql='select user from followers where followerID=1 ';
$result=mysqli_query($conn, $sql);

echo  "<h3>Following (".mysqli_num_rows($result).")</h3>";
    if ($result->num_rows > 0) {
     echo "<ul id='user-list'>";
    

        while($row = $result->fetch_assoc()) 
        {
        $userID=$row["user"];

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
            <a id='list-link' href='userhome.php?id=$userID'>
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
    echo '<h6>0 FOLLOWING</h6>';

//close database connection    
$conn -> close();

//display footer
include 'userpage_bottom.php';

?>
