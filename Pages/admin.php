<?php
    session_start();

    //check for admin
    if($_SESSION['username'] != "admin"){
        header('location:error.php');
        
    }
?>
<DOCTYPE HTML>
<html>
<head>
	<title>Admin Homepage</title>
	<link rel="stylesheet" type="text/css" href="../Style/edituser.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   
</head>
<body class="adminfix">
	<div class="col-12">
	    <?php include 'header.php' ?>
    </div>
    <div class="col-12 col-t-12 col-m-12" style="display: inline-block;">
	    <div><h2 id="h2" style="float: left;clear: left">Users</h2></div>
	    <div style="clear: right"><h6 id="h3"><a href="./admin_delete_user.php"><input id="inputtext-admin" type="button" name="edit" value="Delete User by User Name"></h6></a></div>
		</div>
	    <div class="col-12 col-t-12 col-m-12 scrolladd">
		    <?php
		        $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = '';
                $dbname='movieswebsite';
                $link = mysqli_init();
                $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
				$query="select * from user";
                $result=mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($result))
                {
                    $image=$row['pic_url'];
                    $username=$row['username'];
                    $bio=$row['bio'];
                    $age=$row['age'];
                    $mail=$row['email'];
                    echo '
                    <div id="scrollinner" class="user-movie-info-admin scrollinner-t scrollinner-m">
                    <div class="col-12 col-t-12 col-m-12 ch1" style="background-color:black"><img src='.$image.' class="col-10 col-t-10 col-m-10" style="height:70%;border-radius:50%"></div>
                    <div class="col-12 ch1 othertextd"><h5 style="margin-bottom:0px" class="ch">'.$username.'</h5><h5 style="margin-bottom:0px">'.$age.'</h5><p style="margin-top:0px;margin-bottom:0px" class="remove-t remove-m othertextd"> Email: '.$mail.'</p>
                    <p style="margin-top:0px" class="remove-t remove-m othertextd">Description: '.$bio.'</p>

                    </div>
                    <div class="sp"><input type="button" value="remove" id="removebutton" class="removebutton2"></div>
                    </div>';
                }
		    ?>
	    </div>

    <div class="col-12 col-t-12 col-m-12" style="display: inline-block;padding-top: 50px">
	    <div class="remove-m"><h2 id="h2" style="float: left;clear: left">Movies/Tv Shows</h2></div>
	    <div class="remove-t remove"><h4 id="h2" style="float: left;clear: left">Movies/Tv Shows</h4></div>
	    <div style="clear: right;"><h6 id="h3"><a href="./admin_delete_movie.php"><input id="inputtext-admin" type="button" name="edit" value="Delete by id"></a>
	    <a href="./admin_new_movie.php"><input id="inputtext-admin" type="button" name="Delete" value="Add Movie"></a>
	    <a href="./admin_edit_movie.php"><input id="inputtext-admin" type="button" name="Delete" value="Edit Movie"></a></h6></div>
    </div>

	<div class="col-12 col-t-12 col-m-12 scrolladd" id="moviediv">
		<?php
            $query="select * from movie";
            $result=mysqli_query($conn,$query);
            while($row = mysqli_fetch_array($result))
            {
                $image=$row['image_url'];
                $title=$row['title'];
                $season=$row['seasons'];
                echo '
                <div id="scrollinner" class="user-movie-info-admin scrollinner-t scrollinner-m" style="margin-left:30px">
                <div class="col-12 col-t-12 col-m-12 ch1"><img src='.$image.' class="col-12 col-t-12 col-m-12" style="height:70%">
                </div>
                <div class="col-12 ch1" style="background-color:#303030"><h5 style="margin-bottom:0px;" class="remove-t remove-m othertextd ch2">'.$title.'</h5><p class="othertextd" style="margin-top:0px"> Seasons: '.$season.'</p></div>
                <div class="sp"><input type="button" value="remove" id="removebutton" class="removebutton1"></div>
                </div>';
            }
		?> 
	</div>
    <div style="display:inline-block;width:100%">
        <?php include 'footer.html'; ?>
    </div>
	 <script src="../Functionality/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="../Functionality/admin.js"></script>   
</body>
</html>
