<?php

include 'dbconnect.php';
        //get and display data of the user from mysql database  
       
                $sql='select count(*) from followers where user=2';
                $result=mysqli_query($conn, $sql);
                $followers= mysqli_num_rows($result);
               
                $sql='select count(*) from followers where followerID=2';
                $result=mysqli_query($conn,$sql);
                $following= mysqli_num_rows($result);
                
                $sql='select * from user where userID=2';
                $result=mysqli_query($conn,$sql);

                if ($result->num_rows > 0) {

                $row = $result->fetch_assoc();
                $fname=$row["f_name"];
                $lname=$row["l_name"];
                $handle=$row["username"];
                $picture=$row["pic_url"];
                $bio=$row["bio"];
                $age=$row["age"];
               
                    echo '<div id="user-picture"><img id="profilepicture" src="'.$picture.'" alt=""></div>
                    <div id="user-name">'.$fname." ".$lname.", ".$age.'</div>
                    <div id="user-handle">'.'@'.$handle.'</div>
                    <div id="user-following"><a href="">'.$followers.' Followers</a></div>
                    <div id="user-following"><a href="">'.$followers.' Following </a></div>
                    <div id="user-follow"><button class="follow-btn">Follow </button></div>
                    <div id="user-bio">
                        <h4>About Me</h4>
                        <p>'.$bio.'</p>
                    </div>
                    <div id="user-edit">
                    <button id="user-edit-btn">Edit Profile</button>
                    </div>';

                }
                

        ?>