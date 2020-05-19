<?php 
    session_start();
    include 'CheckLogin.php';
?>

<DOCTYPE HTML>
<html>
<head>
	<title>Change password/edit page</title>
	<link rel="stylesheet" href="../Style/Header_Footer_Style.css" type="text/css">
    <link rel="stylesheet" href="../Style/edituser.css">
    <link rel="stylesheet" href="../Style/maira.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body >
    <?php include 'header.php' ?>
   
    <div class='col-12 col-t-12 login_container flexwrap' style="padding-top: 40px;padding-bottom: 40px">
    <div class='col-8 col-t-12 flexwrap desktopborder'>
                    <div class="col-3 col-t-3 remove-m sidebox" style="border-right:1px solid grey;float: left">
    <?php
                    $dbhost = 'localhost';
                    $dbuser = 'root';
                     $dbpass = '';
                     $dbname='movieswebsite';
                     $link = mysqli_init();
   
                         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
                         echo ' 
                    <div class="col-12 col-t-12 textstyle" ><button class=" textstyle button col-12 col-t-12" id="button1"><p>Edit Profile</p></button></div>
                    <div class="col-12 col-t-12 textstyle" ><button class=" textstyle button col-12" id="button2"><p><b>Change password</b></button></div>
                   <div class="col-12 textstyle" ><button class=" textstyle button col-12" id="button3"><p>User reviews</p></button></div>
                    <div class="col-12 textstyle"><button class=" textstyle button col-12" id="button4"><p>Favorites</p></button></div>
                    <div class="col-12 textstyle" ><button class=" textstyle button col-12" id="button5"><p>Watch history</p></button></div>
                    <div class="col-12 textstyle" ><button class=" textstyle button col-12" id="button6"><p>Saved movies</p></button></div>';
                ?>

                <?php 
			    $id=$_SESSION["userid"];
                        $query="select * from user where userID='$id'";
                         $result=mysqli_query($conn,$query);

                         while($row = mysqli_fetch_array($result))
                         {
                            $password=$row['password'];
                         }
                         

                
                ?>
                </div>
                <div class="col-9 col-t-9 col-m-12 login_container flexwrap" style="float: left;">  
                    <h3 class="col-12" style="text-decoration: underline;">Change Password</h3>
                    <form id="datadisplay" method="post" action="<?php $_PHP_SELF ?>">
                    <div class="col-8 flexwrap" style="padding-top: 50px;">
                        <div class="col-12">
                            <div class="col-3 col-m-12 mobiledata col-t-3 othertextd">Current password</div>
                             <div class="col-9 col-m-9 mobiledata col-t-9 othertextd" >
                            <input type="text" placeholder="type current password here" name="cp" class="col-12 inputtext"
                            value="<?php echo (isset($_POST["cp"]))?$_POST["cp"]:'';?>">
                            <p id="cpp" class="col-12" style="color: red" hidden>
                                 password dont match
                        </p>
                        </div>
                        </div>
                        <div class="col-12">
                            <div class="col-3 col-m-12 mobiledata col-t-3 othertextd">New password</div>
                             <div class="col-9 othertext col-m-9 mobiledata col-t-9 othertextd" >
                            <input type="text" placeholder="type new password here" name="np" class="col-12 inputtext"
                            value="<?php echo (isset($_POST["np"]))?$_POST["np"]:'';?>">
                            <p id="npp" class="col-12" style="color: red" hidden>
                                 Choose strong password
                        </p>
                        </div>
                        </div>
                        <div class="col-12">
                            <div class="col-3 col-m-12 mobiledata col-t-3 othertextd">Confirm password</div>
                             <div class="col-9 col-m-9 mobiledata col-t-9 othertextd" >
                            <input type="text" placeholder="Confirm new password" name="cnp" class="col-12 inputtext"
                            value="<?php echo (isset($_POST["cnp"]))?$_POST["cnp"]:'';?>">
                             <p id="cnpp" class="col-12" style="color: red" hidden>
                                 Choose strong password
                        </p>
                        </div>
                        </div>
                        <div class="col-12 submitdiv col-m-12 col-t-12">
                        <input type="submit" placeholder="submit" name="passwordsubmit" class=" buttonsubmit" value="Confirm">
                        
                        
                    </div>
                         
                
              </div></form></div></div></div>
              <?php
               if (isset($_POST['passwordsubmit'])) {
                $pass = $_POST['cp'];
                $newpassword=$_POST['np'];
                $confirm=$_POST['cnp'];
                 
                if( $password === $pass && $newpassword === $confirm){
                    $sql1 = mysqli_query($conn,"Update user Set
                         password='$newpassword' where userID='$id'");
                     echo '<script>alert("Successfully updated");</script>';

                           
                }
                else {
                    if($password!=$pass){
                         echo '<script>$("#cpp").removeAttr("hidden");</script>';
                         echo '<script>console.log("password are incorrect");</script>';
                         
                    }
                    else{
                         echo '<script>$("#npp").removeAttr("hidden");</script>';
                     echo '<script>$("#cnpp").removeAttr("hidden");</script>';
                     echo '<script>console.log("password dont match");</script>';
                     
                    }    

                }
                 
                            mysqli_close($conn);
            }





              ?>
    		 		<div class="col-m-12 remove remove-t sideboxt">
    				
    				<button class=" textstyle button col-m-3 mobileend" id="mbutton1"><p>Edit user</p></button>
                    <button class=" textstyle button col-m-2 mobileend" id="mbutton3"><p>User reviews</p></button>
                    <button class=" textstyle button col-m-3 mobileend" id="mbutton4"><p>User favourites</p></button>
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
