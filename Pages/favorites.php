<?php
    session_start();
?>
<DOCTYPE HTML>
<html>
<head>
    <title>Favourites/edit page</title>
    <link rel="stylesheet" href="../Style/Header_Footer_Style.css" type="text/css">
    <link rel="stylesheet" href="../Style/edituser.css">
    <link rel="stylesheet" href="../Style/maira.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
     $(document).ready(function() {
            $(".remove-movie").click(function(){
                $divid=$(this).parent().attr('id');
                $("#"+$divid).hide();
                
                var val= $(this).closest("div").find(".ch").text();
                $.ajax({
                    url : "favouriteremove.php",
                    type: "POST",
                    data : ({val1:val}),
                    success: function(data)
                    {
                        console.log(data);
                    }
                });  
                  
             
            });
 
    }); 
       
    </script>
  </head>
<body>
    <?php include 'header.php' ?>
   
    <div class='col-12 col-t-12 login_container flexwrap' style="padding-top: 40px;padding-bottom: 40px">
    <div class='col-8 col-t-12 flexwrap desktopborder'>
                    <div class="col-3 col-t-3 remove-m sidebox" style="float: left">
    <?php
                    $dbhost = 'localhost';
                    $dbuser = 'root';
                     $dbpass = '';
                     $dbname='movieswebsite';
                     $link = mysqli_init();
   
                         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
                         echo ' 
                    <div class="col-12 col-t-12 textstyle"><button class=" textstyle button col-12 col-t-12" id="button1"><p>Edit Profile</p></button></div>
                    <div class="col-12 col-m-12 textstyle" ><button class=" textstyle button col-12" id="button2"><p>Change password</p></button></div>
                    <div class="col-12 textstyle" ><button class=" textstyle button col-12" id="button3"><p>User reviews</p></button></div>
                    <div class="col-12 textstyle"><button class=" textstyle button col-12" id="button4"><p><b>Favorites</b></p></button></div>
                    <div class="col-12 textstyle" ><button class=" textstyle button col-12" id="button5"><p>Watch history</p></button></div>
                    <div class="col-12 textstyle" ><button class=" textstyle button col-12" id="button6"><p>Saved movies</p></button></div>'
                ?>
                </div>
                <div class="col-9 col-t-9 col-m-12 flexwrap  tabborder sideline" style="float: left">  
                    <div class="col-12">
                        <h3 class="col-12" style="text-decoration: underline;">Favorites</h3>
                         
               <?php
                        $id=$_SESSION["userid"];
                        $sql='select * from watched_movies where user="$id" and favourite=true';
                        $result=mysqli_query($conn, $sql);
                        $num=0;
                        if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            
                           $movieID=$row["movie"];
                            $sql3='select * from movie where movieID='.$movieID;
                             $result3=mysqli_query($conn,$sql3);
                             if ($result3->num_rows > 0){

                            while($row=$result3->fetch_assoc())
                            
                            {
                            $title=$row['title']; 
                                   $rating=$row['rating'];
                                   $season=$row['seasons'];
                                   $poster=$row['image_url'];
                                   
                                   echo "<a href='FilmPage.php?id=$movieID'>
                                         <div class='col-11 col-t-11 col-m-11 user-movie-info' id='".++$num."'>
                                         <button class='remove-movie' id='butt'> Remove </button>
                                         <img  class='col-3 col-t-3 col-m-3' style='float:left;height:100%' src=\"".$poster."\">
                                         <h4 class='ch'>".$title."</h4>
                                        <div class='ist-movie-desc'>
                                         <p>Seasons: ".$season."</p>
                                         <p>Rating: ".$rating." stars</p>
                                        </div>
                                             </div></a>";
                            
                       } } } }  

                        else
                            echo '<h4>NO FAVOURITE MOVIE FOUND</h4>';

                        $conn -> close();
?>
              </div></div></div></div>
                    <div class="col-m-12 remove remove-t sideboxt">
                    
                    <button class=" textstyle button col-m-3 mobileend" id="mbutton1"><p>Edit user</p></button>
                    <button class=" textstyle button col-m-2 mobileend" id="mbutton2"><p>Change password</p></button>
                    <button class=" textstyle button col-m-3 mobileend" id="mbutton3"><p>User reviews</p></button>
                    <button class=" textstyle button col-m-2 mobileend" id="mbutton5"><p>Watch history</p></button>
                    <button class=" textstyle button col-m-2 mobileend" id="mbutton6"><p>Saved movies</p></button>
                </div>
                <div class="col-12">
        <?php include 'footer.html' ?>
    </div>
     <script src="../Functionality/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="../Functionality/check1.js"></script> 
                    

</body>
</html>
