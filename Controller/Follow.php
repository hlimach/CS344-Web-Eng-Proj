<?php
session_start();

$state=$_GET["state"];
$userID=$_GET["user"];
include 'config.php';

switch ($state) {
    case 'Follow':
        $sql='insert into followers(user,followerID) values ('.$userID.','.$_SESSION["userid"].')';
        $result=mysqli_query($conn,$sql);
        echo "Unfollow";
        break;
    
    case 'Unfollow':
        $sql="delete from followers where user=".$userID." and followerID=".$_SESSION['userid'];
        $result=mysqli_query($conn,$sql);
        echo "Follow";
        break;
    case ' ';
        $sql="select user, followerid from followers where user=".$userID." and followerID=".$_SESSION['userid'];
        $result=mysqli_query($conn,$sql);
      
        if(mysqli_num_rows($result) > 0)
        {
            printf('Unfollow');
        }
          else
        {
            echo "Follow";
        }
        break;
}


?>
