<?php 
    session_start();
    include '../Controller/CheckLogin.php';
?>
<!doctype html>
<html>
<head>
	<title>Edit User</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="HeaderFooter.css" type="text/css">
    <link rel="stylesheet" href="EditUser.css">
	

</head>

<body>
	<?php include 'Header.php' ?>
	<div class="mobilesizefix-d">
    	<div class="col-12 col-t-12 col-m-12 login_container flexwrap" style="padding-top: 40px;padding-bottom: 40px">
    		<div class="col-8 col-t-12 col-m-12 flexwrap desktopborder">
    			<div class="col-3 col-t-3 remove-m sidebox" style="float: left;padding-left: 8px">
    				<div class="textstyle col-12" ><button class="textstyle" id="button1"><p><b>Edit Profile</b></p></button></div>
    				<div class="textstyle col-12" ><button class=" textstyle" id="button2"><p>Change password</p></button></div>
    				<div class="textstyle col-12" ><button class=" textstyle" id="button3"><p>User reviews</p></button></div>
    				<div class="textstyle col-12"><button class=" textstyle" id="button4"><p>Favorites</p></button></div>
    				<div class="textstyle col-12" ><button class=" textstyle" id="button5"><p>Watch history</p></button></div>
    				<div class="textstyle col-12" ><button class=" textstyle" id="button6"><p>Saved movies</p></button></div>
    			</div>
    			<?php
                    $dbhost = 'localhost';
                    $dbuser = 'root';
                    $dbpass = '';
                    $dbname='movieswebsite';
                    $link = mysqli_init();
                    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
		    $id=$_SESSION["userid"];
                    $query="select * from user where userID='$id'";
                    $result=mysqli_query($conn,$query);
                ?>
                
    		 	<div class="col-9 col-t-9 col-m-12" style="float: left">
                    <form id="datadisplay" method="post" action="<?php $_PHP_SELF ?>">
                    	<?php 
                        while($row = mysqli_fetch_array($result))
                            {
                            $username = $row['username'];
                            $fname = $row['f_name'];
                            $lname = $row['l_name'];
                            $age = $row['age'];
                            $desc = $row['bio'];
                            $gender = $row['gender'];
                            $email = $row['email'];
                            $image = $row['pic_url'];
                            }
                        ?>
                        <?php
                            if (isset($_POST['buttonsubmit'])) {
                                $username = $_POST['username'];
                                $email = $_POST['mail'];
                                $gender = $_POST['gender'];
                                $age = $_POST['age'];
                                $fname = $_POST['fname'];
                                $lname = $_POST['lname'];
                                $desc = $_POST['bio'];
                                $image = $_POST['pic'];
                                }
                        ?>
    		 		    <div class="col-12  col-t-12 login_container flexwrap login_containert flexwrapt tabborder" style="float: left;border-left: 1px solid grey">	
    		 		        <div class="col-8 col-t-8" style="padding-top: 30px">
    		 				    <div class="col-2 col-m-2 col-t-2 mobiledata" style="float: left;height: 78px">
  								    <a href="userhome.php?id=<?php echo $_SESSION['username']?>"><img src="<?=$image?>" class="col-12 col-t-12 col-m-12 imagesettingst imagesettingsm imagediv"></a>
							    </div>

						        <div class="col-10 col-mo-10 col-m-10" style="float: left">
							        <p class="col-10 col-m-10 ptext col-t-10"><?=$username?></p>
							        <a href="" class="col-10 col-m-10 ptext col-t-10" style="padding-left: 0px;">Change profile photo</a>
						        </div>

					            <div class="col-12 col-m-12 col-t-12 inputdivs">
						            <div class="col-2 col-m-12 col-t-3 mobiledata othertextd">Username</div>
						            <div class="col-10 col-m-9 mobiledata col-t-9 othertextd">
                                        <input type="text" name="username"  placeholder="type username here" id="duname"  class="col-12 inputtext" 
                                        value="<?=$username?>">
						            </div>
					            </div>
					
                                <div class="col-12 inputdivs col-m-12 col-t-12">
                                    <div class="col-2 col-m-12 mobiledata col-t-3 othertextd">firstname</div>
                                    <div class="col-10 col-m-9 mobiledata col-t-9 othertextd" >
                                        <input type="text" placeholder="type first name here" name="fname" id="df" class="col-12 inputtext"
                                        value="<?=$fname?>">
                                    </div>
                                </div>

                                <div class="col-12 inputdivs col-m-12 col-t-12">
                                    <div class="col-2 col-m-12 mobiledata col-t-3 othertextd">lastname</div>
                                    <div class="col-10 col-m-9 mobiledata col-t-9 othertextd" >
                                        <input type="text" placeholder="type last name here" name="lname" id="dl" class="col-12 inputtext" value="<?=$lname?>">
                                    </div>
                                </div>
  
                                <div class="col-12 inputdivs col-m-12 col-t-12">
                                    <div class="col-2 col-m-12 mobiledata col-t-3 othertextd">age</div>
                                    <div class="col-10 col-m-9 mobiledata col-t-9 othertextd" >
                                        <input type="text" placeholder="type age here" name="age" id="dage" value="<?=$age?>" class="col-12 inputtext">
                                        <p id="aa" class="col-12" style="color: red" hidden>
                                                Enter integers only
                                        </p>
                                    </div>
                                </div>

					            <div class="col-12 inputdivs col-m-12 col-t-12">
						            <div class="col-2 col-m-12 mobiledata col-t-3 othertextd">Descrip</div>
						            <div class="col-10 col-m-9 mobiledata col-t-9 othertextd">
							            <input type="text" placeholder="type bio here" name="bio" id="ddesc" class="col-12 inputtext" value="<?=$desc?>">
						            </div>
					            </div>

					            <div class="col-12 inputdivs othertextd col-m-12 col-t-12">
                                    <p><b>Personal Information</b></p>
                                    <p>Provide your personal information, even if the account is used for a business, a pet or something else. This won't be a part of your public profile.</p>
                                </div>
	
					            <div class="col-12 inputdivs col-m-12 col-t-12">
						            <div class="col-2 col-m-12 mobiledata col-t-3 othertextd">Email</div>
						            <div class="col-10 col-m-9 mobiledata col-t-9 othertextd">
							            <input type="text" placeholder="type email here" name="mail" id="demail" class="col-12 inputtext" value="<?=$email?>">
                                        <p id="ps" class="col-12" style="color: red" hidden>
                                            Invalid email address
                                        </p>
						            </div>
					            </div>

					            <div class="col-12 inputdivs col-m-12 col-t-12">
						            <div class="col-2 col-m-12 mobiledata col-t-3 othertextd">Image</div>
						            <div class="col-10 col-m-9 mobiledata col-t-9 othertextd">
							            <input type="text" placeholder="type image url here" name="pic" id="dmobile" class="col-12 inputtext" value="<?=$image?>" >
                                        <p id="im" class="col-12" style="color: red" hidden>
                                                Invalid Url
                                        </p>
						            </div>
					            </div>

					            <div class="col-12 inputdivs col-m-12 col-t-12">
						            <div class="col-2 col-m-12 mobiledata col-t-3 othertextd">Gender</div>
						            <div class="col-10 col-m-9 mobiledata col-t-9 othertextd">
							            <input type="text" placeholder="type gender here" name="gender" id="dgen" class="col-12 inputtext" value="<?=$gender?>">
						            </div>
					            </div>

					            <div class="col-12 submitdiv col-m-12 col-t-12">
                                    <input type="submit" placeholder="submit" name="buttonsubmit" class="col-3 buttonsubmit" value="submit">
					            </div>
                            </div>
    		 		    </div>
                    </form>
                </div>
            </div>
        </div>
    	<div class="col-m-12 remove remove-t sideboxt">			
    	    <button class=" textstyle col-m-3 mobileend" id="mbutton2"><p>Change password</p></button>
    	    <button class=" textstyle col-m-2 mobileend" id="mbutton3"><p>User reviews</p></button>
    	    <button class=" textstyle col-m-3 mobileend" id="mbutton4"><p>User favourites</p></button>
    	    <button class=" textstyle col-m-2 mobileend" id="mbutton5"><p>Watch history</p></button>
    	    <button class=" textstyle col-m-2 mobileend" id="mbutton6"><p>Saved movies</p></button>	
    	</div>
    </div>
    	<?php         
            if (!empty($email) || !empty($image)|| !empty($age)) {
                $email = trim(htmlspecialchars($email));
                $email = filter_var($email, FILTER_VALIDATE_EMAIL);
                $image = trim(htmlspecialchars($image));
                $image = filter_var($image, FILTER_VALIDATE_URL);
                $age = $age;
                $age = filter_var($age, FILTER_VALIDATE_INT);

                if ($email === false) {  
                    echo '<script>$("#ps").removeAttr("hidden");</script>';
                    echo '<script>console.log("Invalid email address");</script>';
                }
                if ($image === false) {
                    echo '<script>$("#im").removeAttr("hidden");</script>';
                    echo '<script>console.log("wrong url");</script>';
                }

                if ($age === false) {
                    echo '<script>console.log("Enter number only");</script>';
                    echo '<script>$("#aa").removeAttr("hidden");</script>';
                }
            }
                                     
            $sql = mysqli_query($conn,"Update user Set
                username='$username', f_name='$fname',pic_url='$image',
                l_name='$lname',gender='$gender',age='$age',bio='$desc', email='$email' where userID='$id'");
            $result = mysqli_query($conn, $sql);  
            mysqli_close($conn);                 
        ?>

	<script src="../Controller/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="../Controller/Check1.js"></script>
    <script src="../Controller/HeaderFooter.js" type="text/javascript"></script>
    <div style=" background-color:yellow">
        <?php include 'Footer.html' ?>
    </div>


</body> 
