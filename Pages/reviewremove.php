<?php
  
  
   $dbhost = 'localhost';
      $dbuser = 'root';
       $dbpass = '';
       $dbname='movieswebsite';
      $link = mysqli_init();
      $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
      $text=$_POST['val1'];
      
   $sql2="select * from review where review_text='$text';";
       $result2=mysqli_query($conn,$sql2);
                                 
        while($row= mysqli_fetch_array($result2)){
          echo 'checking';
          $id=$row['reviewID'];
           $sql = mysqli_query($conn,"Delete from review where reviewID='$id' and user='3';");
            $result = mysqli_query($conn, $sql);         
                mysqli_close($conn);
            
           
        }
        echo 'success';

?>
