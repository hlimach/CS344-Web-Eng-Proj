<?php
	 $dbhost = 'localhost';
      $dbuser = 'root';
       $dbpass = '';
       $dbname='movieswebsite';
      $link = mysqli_init();
      $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
      $user=$_POST['val1'];
      echo $user;
	 $sql2="select userID from user where username='$user';";
       $result2=mysqli_query($conn,$sql2);
                                 
        while($row= mysqli_fetch_array($result2)){
          echo 'checking';
        	$id=$row['userID'];
           $sql = mysqli_query($conn,"delete from user where userID='$id'");
            $result = mysqli_query($conn, $sql);         
                mysqli_close($conn);
              }	 
        echo 'success';

?>
