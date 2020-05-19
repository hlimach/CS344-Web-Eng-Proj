<?php 
    session_start();
    include 'CheckLogin.php';
?>

<DOCTYPE HTML>
<html>
<head>
	<title>Watched list/edit page</title>
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
                    url : "watchremove.php",
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
    <div class='col-12 col-m-12 login_container flexwrap' style="padding-top: 40px;padding-bottom: 40px">
    <div class='col-8 col-m-12 flexwrap desktopborder'>
                    <div class="col-3 col-t-3 remove-m sidebox" style="float: left">
    <?php
                    $dbhost = 'localhost';
                    $dbuser = 'root';
                     $dbpass = '';
                     $dbname='movieswebsite';
                     $link = mysqli_init();
   
                         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
                         echo ' 
                    <div class="col-12 col-t-12 textstyle" ><button class=" textstyle col-12 col-t-12 button" id="button1"><p>Edit Profile</p></button></div>
                    <div class="col-12 col-t-12 textstyle" ><button class=" textstyle col-12 button" id="button2"><p>Change password</p></button></div>
                   <div class="col-12 textstyle" ><button class=" textstyle col-12 button" id="button3"><p>User reviews</p></button></div>
                    <div class="col-12 textstyle"><button class=" textstyle col-12 button" id="button4"><p>Favorites</p></button></div>
                    <div class="col-12 textstyle" ><button class=" textstyle col-12 button" id="button5"><p><b>Watch history</b></p></button></div>
                    <div class="col-12 textstyle" ><button class=" textstyle col-12 button" id="button6"><p>Saved movies</p></button></div>'
                ?>
                </div>
                <div class="col-9 col-t-9 col-m-12 flexwrap  tabborder sideline" style="float: left;">  
                    <div class="col-12">
                        <h3 class="col-12" style="text-decoration: underline;">History</h3>
                         
                <?php
                        $num=0;
                        $id=$_SESSION["userid"];
                         $query="select * from watched_movies where user='$id'";
                         $result=mysqli_query($conn,$query);
                         while($row = mysqli_fetch_array($result))
                         {
                            $movieID=$row['movie'];
                             $fav=$row['favourite'];
                             $sql2='select * from movie where movieid='.$movieID;
                             $result2=mysqli_query($conn,$sql2);
                              if ($result2->num_rows > 0)
                                   {
                                    

                                    while($row= mysqli_fetch_array($result2)){
                                     $title=$row['title']; 
                                   $rating=$row['rating'];
                                   $season=$row['seasons'];
                                   $poster=$row['image_url'];
                                   
                                   echo "<a href='FilmPage.php?id=$movieID' style='text-decoration:none'>
                                         <div class='col-11 col-t-11 col-m-11 user-movie-info' id='".++$num."'>
                                         <button class='remove-movie' id='butt'> Remove </button>
                                         <img  class='col-3 col-t-3 col-m-3' style='float:left;height:100%' src=\"".$poster."\">
                                         <h4 class='ch'>".$title."</h4>
                                        <div class='ist-movie-desc'>
                                         <p>Seasons: ".$season."</p>
                                         <p>Rating: ".$rating." stars</p>
                                        </div>
                                             </div></a>";
                                            
                                    

                               }
                               }

                         }
                
                ?>
               

              </div></div></div></div>
    		 		<div class="col-m-12 remove remove-t sideboxt">
    				
    				<button class=" textstyle col-m-3 mobileend button" id="mbutton1"><p>Edit user</p></button>
                    <button class=" textstyle col-m-2 mobileend button" id="mbutton2"><p>Change password</p></button>
                    <button class=" textstyle col-m-3 mobileend button" id="mbutton3"><p>User reviews</p></button>
                    <button class=" textstyle col-m-2 mobileend button" id="mbutton4"><p>User favourites</p></button>
                    <button class=" textstyle col-m-2 mobileend button" id="mbutton6"><p>Saved movies</p></button>
    			</div>
                 <div class="col-12">
        <?php include 'footer.html' ?>
    </div>
     <script src="../Functionality/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="../Functionality/check1.js"></script>   
                    

</body>
</html>
