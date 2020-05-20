<?php
    session_start();

    //check for admin
    if($_SESSION['username'] != "admin"){
        header('location:Error.php');
        
    }
?>
<DOCTYPE HTML>
<html>
<head>
	<title>Admin Homepage</title>
    <meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="EditUser.css">
	<script src="../Controller/jquery-3.2.1.js"></script>
    <script src="../Controller/HeaderFooter.js" type="text/javascript"></script>
   
</head>
<body class="adminfix">
	<div class="col-12">
	    <?php include 'Header.php' ?>
    </div>
   <div class="col-12 col-t-12 col-m-12" style="display: inline-block;">
            <div><h2 id="h2" style="float: left;clear: left">Users</h2></div>
            <div style="clear: right"><h6 id="h3">
            <a href="AdminDeleteUser.php"><input id="inputtext" type="button" name="edit" value="Delete User by ID"></h6></a></div>
        </div>
    <div class="col-12 col-t-12 col-m-12 scrolladd">
        <div class="col-12 col-t-12 col-m-12" style="text-align: center;">
            <div class="col-1 col-t-1 col-m-1" style="float: left"><p>UserID</p></div>
            <div class="col-2 col-t-2 col-m-2" style="float: left"><p>UserName</p></div>
            <div class="col-2 col-t-2 col-m-2" style="float: left"><p>fname</p></div>
            <div class="col-2 col-t-2 col-m-2" style="float: left;"><p>lname</p></div>
            <div class="col-1 col-t-1 col-m-1" style="float: left;"><p>Age</p></div>
            <div class="col-2 col-t-2 col-m-2" style="float: left;"><p>Gender</p></div>
            <div class="col-2 col-t-2 col-m-2" style="float: left;"><p>Email</p></div>
        </div>
       
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
                            $userid=$row['userID'];
                            $username=$row['username'];
                            $fname=$row['f_name'];
                            $lname=$row['l_name'];
                            $gender=$row['gender'];
                            $age=$row['age'];
                            $mail=$row['email'];
                            echo '
                             <div class="col-12 col-t-12 col-m-12 ch1" style="background-color:black;text-align:center">
                            <div class="col-1 col-t-1 col-m-1 ch1 othertextd" style="float:left"><p class="ch">'.$userid.'</p></div>
                            <div class="col-2 col-t-2 col-m-2 ch1 othertextd" style="float:left"><p class="ch">'.$username.'</p></div>
                            <div class="col-2 col-t-2 col-m-2 ch1 othertextd" style="float:left"><p class="ch">'.$fname.'</p></div>
                            <div class="col-2 col-t-2 col-m-2 ch1 othertextd" style="float:left"><p class="ch">'.$lname.'</p></div>
                            <div class="col-1 col-t-1 col-m-1 ch1 othertextd" style="float:left"><p class="ch">'.$age.'</p></div>
                            <div class="col-2 col-t-2 col-m-2 ch1 othertextd" style="float:left"><p class="ch">'.$gender.'</p></div>
                            <div class="col-2 col-t-2 col-m-2 ch1 othertextd" style="float:left"><p class="ch">'.$mail.'</p></div>
                            </div>';
                         }

        ?>

    </div>
<div class="col-12 col-t-12 col-m-12" style="display: inline-block;padding-top: 50px">
    <div class="remove-m"><h2 id="h2" style="float: left;clear: left">Movies/Tv Shows</h2></div>
    <div class="remove-t remove"><h4 id="h2" style="float: left;clear: left">Movies/Tv Shows</h4></div>
    <div style="clear: right;"><h6 id="h3">
    <a href="AdminDeleteMovie.php"><input id="inputtext" type="button" name="edit" value="Delete by id"></a>
    <a href="AdminNewMovie.php"><input id="inputtext" type="button" name="Delete" value="Add Movie"></a>
    <a href="AdminEditMovie.php"><input id="inputtext" type="button" name="Delete" value="Edit Movie"></h6></a>
    </div>
</div>
    <div class="col-12 col-t-12 col-m-12 scrolladd" id="moviediv">
        <div class="col-12" style="text-align: center;">
            <div class="col-3 col-t-3 col-m-3" style="float: left"><p>movieID</p></div>
            <div class="col-3 col-t-3 col-m-3" style="float: left"><p>Title</p></div>
            <div class="col-3 col-t-3 col-m-3" style="float: left"><p>Rating</p></div>
            <div class="col-3 col-t-3 col-m-3" style="float: left;"><p>Seasons</p></div>
        </div>
        <?php
                    
                     $query="select * from movie";
                      $result=mysqli_query($conn,$query);
                      while($row = mysqli_fetch_array($result))
                         {
                            $id=$row['movieID'];
                            $title=$row['title'];
                            $season=$row['seasons'];
                            $rating=$row['rating'];
                            echo '
                            <div class="col-12 col-t-12 col-m-12 ch1" style="background-color:black;text-align:center">
                            <div class="col-3 col-t-3 col-m-3 ch1 othertextd" style="float:left"><p class="ch">'.$id.'</p></div>
                            <div class="col-3 col-t-3 col-m-3 ch1 othertextd" style="float:left"><p class="ch">'.$title.'</p></div>
                            <div class="col-3 col-t-3 col-m-3 ch1 othertextd" style="float:left"><p class="ch">'.$season.'</p></div>
                            <div class="col-3 col-t-3 col-m-3 ch1 othertextd" style="float:left"><p class="ch">'.$rating.'</p></div>
                            </div>';
                         }

        ?>
        </div>
        <div class="col-12" style="text-align: center;color: white;margin-top: 30px"><button id="logout"><a href="../Controller/Logout.php" style="text-decoration: none: ">LOG OUT</a></button></div>

    <div style="display:inline-block;width:100%">
        <?php include 'Footer.html'; ?>
    </div>
	 <script src="../Controller/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="../Controller/HeaderFooter.js"></script>   
</body>
</html>
