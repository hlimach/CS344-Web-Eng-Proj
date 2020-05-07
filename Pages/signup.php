<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Buenard' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="../Style/css file.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <title>Sign Up</title>
    </head>

    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" id="myform" ?>
            <div class="c-12 login_container flexwrap" style=" background-image:url(https://png.pngtree.com/png-vector/20190226/ourlarge/pngtree-vector-background-seamless--retro-film-png-image_704930.jpg)">
                <div class="c-6 c-m-6 wraplogin " style="margin:2%; padding-bottom:1%" >
                    <div class="c-12 c-m-12">
                        <span class="form-title" style="padding-bottom:1%">
                            <b>SIGN UP</b>
                        </span>
                    </div>
                    <div class="c-12 c-m-12" style="text-align:center;margin: 0 auto;">
                        <div class="c-5 c-m-10" style="display:inline-block;vertical-align:top " >
                            <table class="c-12 c-m-10" style="table-layout:fixed">
                                <tr>
                                    <td class="logintag">First Name</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="input heightsignup" type="text" name="fname" placeholder="First Name" value="<?php echo (isset($_POST["fname"]))?$_POST["fname"]:'';?>">
                                        <div class="colred">                                      
                                            <i id="wrongfname" hidden>invalid first name</i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="logintag">Last Name</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="input heightsignup" type="text" name="lname" placeholder="Last Name" value="<?php echo (isset($_POST["lname"]))?$_POST["lname"]:'';?>">
                                        <div class="colred">
                                            <i id="wronglname" hidden>invalid last name</i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="logintag">Age</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="input heightsignup" type="text" name="age" placeholder="Age" value="<?php echo (isset($_POST["age"]))?$_POST["age"]:'';?>">
                                        <div class="colred">                                      
                                            <i id="wrongage" hidden>invalid age</i>
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td class="logintag">Gender</td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="input heightsignup" name="gender">
                                            <option value="male" selected>Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <div class="colred">                                      
                                            <i id="wronggender" hidden></i>
                                        </div>
                                    </td>
                                </tr>
                               
                                <tr>
                                    <td class="logintag">Bio</td>
                                </tr>
                                <tr>
                                    <td>
                                        <textarea class="input" style=" resize:none;" rows="3" name="bio" placeholder="Bio" value=""><?php echo (isset($_POST["bio"]))?$_POST["bio"]:'';?></textarea>
                                        <div class="colred">                                      
                                            <i id="wrongbio" hidden>Empty bio</i>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div> 
                        <div class="c-5 c-m-10" style=" margin: 0 auto;display:inline-block;vertical-align:top">
                            <table class="c-12 c-m-10" style="table-layout:fixed">
                                <tr>
                                    <td class="logintag">User Name</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="input heightsignup" type="text" name="username" placeholder="User Name" value="<?php echo (isset($_POST["username"]))?$_POST["username"]:'';?>">
                                        <div class="colred">                                      
                                            <i id="wrongusername" hidden>invalid username</i>
                                            <i id="takenusername" hidden>username already taken</i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="logintag">Password</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="input heightsignup" type="password" name="pass1" placeholder="Password">
                                        <div class="colred">                                      
                                            <i id="wrongpass" hidden>invalid password</i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="logintag">Confirm Password</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="input heightsignup" type="password" name="pass2" placeholder="Confirm Password" >
                                        <div  class="colred">                    
                                            <i id="wrongpass2" hidden>passwords don't match</i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="logintag">Profile Picture (https URL)</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="input heightsignup" type="url" name="pic" placeholder="Picture Url" value="<?php echo (isset($_POST["pic"]))?$_POST["pic"]:'';?>">
                                        <div class="colred">                                      
                                            <i id="wrongurl" hidden>invalid url</i>
                                        </div>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="logintag">Email</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="input heightsignup" type="email" name="email" placeholder="Email" value="<?php echo (isset($_POST["email"]))?$_POST["email"]:'';?>">
                                        <div class="colred">                                      
                                            <i id="wrongemail" hidden>invalid email</i>
                                            <i id="takenemail" hidden>account already exists</i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="button-container">
                                            <button type="submit" class="login-form-btn" name="submit">
                                                Submit
                                            </button>
                                        </div>
                                    </td>
                                </tr>
					            <tr>
                                    <td>
                                        <div class="button-container">
                                            <a href="./login.php">
                                                Already have account? Go to login page
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>   
            </div>
        </form>
        <!--login php script-->
        <?php if (isset($_POST['submit'])){

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "movieswebsite";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
    
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            $check = true;        

            //creating check on first Name
            if($_POST["fname"] === null || (!ctype_alpha($_POST["fname"]))){
                $check = false; 
                echo '<script>console.log("invalid first name");</script>;';
                echo '<script>$("#wrongfname").removeAttr("hidden");</script>';
            }        
        
            //creating check on Bio
            if($_POST["bio"] == null){
                $check = false; 
                echo '<script>console.log("invalid bio");</script>;';
                echo '<script>$("#wrongbio").removeAttr("hidden");</script>';
            }   

            //creating check on profile picture Url
                if($_POST["pic"] == null){
                $check = false; 
                echo '<script>console.log("invalid url");</script>;';
                echo '<script>$("#wrongurl").removeAttr("hidden");</script>';
            }  

            //creating check on last Name
            if($_POST["lname"] === null || (!ctype_alpha($_POST["lname"]))){
                $check = false; 
                echo '<script>console.log("invalid last name");</script>;';
                echo '<script>$("#wronglname").removeAttr("hidden");</script>';
            } 

            //creating check on Age
            if($_POST["age"] === null || (!is_numeric($_POST["age"]))){
                $check = false; 
                echo '<script>console.log("invalid age");</script>;';
                echo '<script>$("#wrongage").removeAttr("hidden");</script>';
            } 

            //creating check on password
            if($_POST["pass1"] == null){
                $check = false; 
                echo '<script>console.log("invalid password");</script>;';
                echo '<script>$("#wrongpass").removeAttr("hidden");</script>';
            } 
            
            //creating check on password confirm
            if($_POST["pass2"] != $_POST["pass1"]){
                $check = false; 
                echo '<script>console.log(possword dont match");</script>;';
                echo '<script>$("#wrongpass2").removeAttr("hidden");</script>';
            } 
            
            //creating check on username
            if($_POST["username"] == null){
                $check = false; 
                echo '<script>console.log("invalid username");</script>;';
                echo '<script>$("#wrongusername").removeAttr("hidden");</script>';
            }
            else{
                $sql = "SELECT username FROM user";
                $result_uname = $conn->query($sql);

                if ($result_uname->num_rows > 0) {
                    while($row = $result_uname->fetch_assoc()){
                        if($_POST["username"] === $row["username"]){
                            $check = false; 
                            echo '<script>console.log("user already exists");</script>';
                            echo '<script>$("#takenusername").removeAttr("hidden");</script>';
                            break;
                        }
                    }
                }
            }
            
            //creating check on email
            if($_POST["email"] == null){
                $check = false; 
                echo '<script>console.log("invalid email");</script>;';
                echo '<script>$("#wrongemail").removeAttr("hidden");</script>';
            }
            else{
                $sql = "SELECT email FROM user";
                $result_email = $conn->query($sql);

                if ($result_email->num_rows > 0) {
                    while($row = $result_email->fetch_assoc()){
                        if($_POST["email"] === $row["email"]){
                            $check = false; 
                            echo '<script>console.log("account already exists");</script>';
                            echo '<script>$("#takenemail").removeAttr("hidden");</script>';
                            break;
                        }
                    }
                }
            }


        //entering data into mysql
        if($check == true){
            $sql = "INSERT INTO user (username, password, f_name, l_name, age, bio, gender, email, pic_url) VALUES ('$_POST[username]', '$_POST[pass1]', '$_POST[fname]', '$_POST[lname]', '$_POST[age]', '$_POST[bio]', '$_POST[gender]', '$_POST[email]', '$_POST[pic]')";

            if ($conn->query($sql) == TRUE) {
                echo '<script>console.log("New record created successfully");</script>';
            } else {
                echo '<script>console.log("Error")</script>';
            }
            
        }

        }?>
    </body>

</html>
