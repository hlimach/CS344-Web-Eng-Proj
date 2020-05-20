<?php
//to get user's info from database and display in left section of the page
include 'config.php';
         
                //get number of followers and following
                $sql='select * from followers where user=1';
                $result=mysqli_query($conn, $sql);
                $followers= mysqli_num_rows($result);
            
               
                $sql='select * from followers where followerID=1';
                $result=mysqli_query($conn,$sql);
                $following= mysqli_num_rows($result);
                

                //get user's info
                $sql='select * from user where userID=1';
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
                   '<div id="user-picture" class="col-12 col-t-5"><img id="profilepicture" src="'.$picture.'" alt=""></div>
                    <div id="user-name"  >'.$fname." ".$lname.", ".$age.'</div>
                    <div id="user-handle"  >'.'@'.$handle.'</div>
                    <div id="user-follow-div" class="col-12 col-t-7">
                        <div id="user-following"><a href="UserFollowers.php">'.$followers.' Followers</a></div>
                        <div id="user-following"><a href="UserFollowing.php">'.$following.' Following </a></div>
                    </div>
                    <div id="user-follow"><button class="follow-btn">Follow </button></div>
                    <div id="user-bio" class="col-12 col-t-12">
                        <h4>About Me</h4>
                        <p>'.$bio.'</p>
                    </div>
                    <div id="user-edit">
                        <button id="user-edit-btn">Edit Profile</button>
                    </div>';
                }
                
        ?>
