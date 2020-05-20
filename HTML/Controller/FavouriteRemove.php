<?php
	session_start();
	 $dbhost = 'localhost';
      $dbuser = 'root';
       $dbpass = '';
       $dbname='movieswebsite';
      $link = mysqli_init();
      $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
      $title=$_POST['val1'];
      echo $title;
	 $sql2="select * from movie where title='$title';";
       $result2=mysqli_query($conn,$sql2);
                                 
        while($row= mysqli_fetch_array($result2)){
          echo 'checking';
        	$id=$row['movieID'];
          $sql2="select * from watched_movies where movie='$id';";
         $result2=mysqli_query($conn,$sql2);
         if ($result2->num_rows > 0){                            
        while($row= mysqli_fetch_array($result2)){
          echo 'sett';
          $movieid=$row['movie'];
		$id=$_SESSION["userid"];
        	 $sql = mysqli_query($conn,"update watched_movies set favourite='false' where user='$id' and movie='$movieid';");
        	  $result = mysqli_query($conn, $sql);         
                mysqli_close($conn);
              }}
            
        	 
        }
        echo 'success';

?>
