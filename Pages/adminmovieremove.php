<?php
	
	
	 $dbhost = 'localhost';
      $dbuser = 'root';
       $dbpass = '';
       $dbname='movieswebsite';
      $link = mysqli_init();
      $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
      $title=$_POST['val1'];
      echo $title;
	 $sql2="select movieID from movie where title='$title';";
       $result2=mysqli_query($conn,$sql2);
                                 
        while($row= mysqli_fetch_array($result2)){
          echo 'checking';
        	$id=$row['movieID'];
           $sql = mysqli_query($conn,"delete from movie where movieID='$id'");
            $result = mysqli_query($conn, $sql);         
                mysqli_close($conn);
              }	 
        echo 'success';

?>
