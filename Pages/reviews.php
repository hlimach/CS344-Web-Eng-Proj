<DOCTYPE HTML>
<html>
<head>
	<title>Reviews/edit page</title>
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
                    url : "reviewremove.php",
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
   <?php include 'header.html' ?>
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
                    <div class="col-12 col-t-12 textstyle" ><button class=" textstyle button col-12 col-t-12" id="button1"><p>Edit Profile</p></button></div>
                    <div class="col-12 col-t-12 textstyle" ><button class="button textstyle col-12" id="button2"><p>Change password</p></button></div>
                    <div class="col-12 textstyle" ><button class="button textstyle col-12" id="button3"><p><b>User reviews</b></p></button></div>
                    <div class="col-12 textstyle"><button class="button textstyle col-12" id="button4"><p>Favorites</p></button></div>
                    <div class="col-12 textstyle" ><button class="button textstyle col-12" id="button5"><p>Watch history</p></button></div>
                    <div class="col-12 textstyle" ><button class="button textstyle col-12" id="button6"><p>Saved movies</p></button></div>'
                ?>
                </div>
                <div class="col-9 col-t-9 col-m-12 flexwrap  tabborder sideline" style="float: left">  
                    <div class="col-12">
                        <h3 class="col-12"style="text-decoration: underline;">Reviews</h3>
                         
               <?php
                        $sql='select * from review where user=3;';
                        $result=mysqli_query($conn, $sql);
                        $num=0;

                        if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            
                            $movieID=$row["movie"];
                            $reviewtext=$row["review_text"];
                            $reviewrating=$row["review_rating"];

                        $sql2='select * from movie where movieID='.$movieID;
                        $result2=mysqli_query($conn,$sql2);
                        if ($result2->num_rows > 0)
                        {
                            while($row=$result2->fetch_assoc())
                            
                            {
                            $title=$row["title"];
                            $poster=$row["image_url"];

                        echo "<div class='col-11 col-t-11 col-m-12 user-movie-info' id='".++$num."'>
                                         <button class='remove-movie'> Remove </button>
                                         <img  class='col-3 col-t-3 col-m-3' style='float:left;height:100%' src=\"".$poster."\">
                                         <h4>".$title."</h4>
                                        <div class='ist-movie-desc'>
                                         <p class='ch'>".$reviewtext."</p>
                                         <p>".$reviewrating."</p>
                                        </div>
                                             </div>";
                            
                        } } }  }

                        else
                            echo '<h4>NO REVIEWS FOUND</h4>';

                        $conn -> close();
?>
              </div></div></div></div>
    		 		<div class="col-m-12 remove remove-t sideboxt">
    				
    				<button class="button textstyle col-m-3 mobileend" id="mbutton1"><p>Edit user</p></button>
                    <button class="button textstyle col-m-2 mobileend" id="mbutton2"><p>Change password</p></button>
                    <button class="button textstyle col-m-3 mobileend" id="mbutton4"><p>User favourites</p></button>
                    <button class="button textstyle col-m-2 mobileend" id="mbutton5"><p>Watch history</p></button>
                    <button class="button textstyle col-m-2 mobileend" id="mbutton6"><p>Saved movies</p></button>
    			</div>
                <div class="col-12">
        <?php include 'footer.html' ?>
    </div>
     <script src="../Functionality/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="../Functionality/check1.js"></script>   

</body>
</html>
