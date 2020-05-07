<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Buenard' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="../Style/css file.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <title>Login</title>
    </head>

    <body>
        <!--html for page-->
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" id="myform" ?>
            <div class="c- login_container flexwrap" style="background-image:url(https://png.pngtree.com/png-vector/20190226/ourlarge/pngtree-vector-background-seamless--retro-film-png-image_704930.jpg)">
                <div class="c-4 c-m-6 wraplogin flexwrap">
                    <div>
                        <table>
                            <tr>
                                <td>
                                    <b class="form-title">Member Login</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="wrap-input c-12">
                                        <input class="input heightlogin" type="text" name="username" placeholder="User Name" value="<?php echo (isset($_POST["username"]))?$_POST["username"]:'';?>">
                                        <div class="colred">
                                            <i id="wrongname" hidden>invalid username: try again</i>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="wrap-input c-12">
                                        <input class="input heightlogin" type="password" name="pass" placeholder="Password">
                                        <div class="colred">
                                            <i id="wrongpass" hidden>incorrect password: try again</i>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="button-container">
                                        <button type="submit" class="login-form-btn" name="login">
                                            Login
                                        </button>
                                    </div>
                            
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="form-title" style="font-size:15px">
                                        <a href="./signup.php"><b>New here? Create your account now!</b></a>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </form>

        <!--login php script-->
        <?php if (isset($_POST['login'])){

            //database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "movieswebsite";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);}
        
            //get results
            $dom = new DOMDocument();
            $dom->loadHTML("./login.php");
            $name = $_POST['username'];
            $pass = $_POST['pass'];
            $sql = "SELECT username FROM user";
            $result_uname = $conn->query($sql);
            $current_name = null;
            $flagname = 0;
            if ($result_uname->num_rows > 0) {

            // compare username of each row
                while($row = $result_uname->fetch_assoc()){
                    if($name === $row["username"]){
                        $flagname = 0;
                        $current_name = $row["username"];
                        echo '<script>console.log("user found");</script>';
                        break;
                    }
                    else {
                        $flagname = 1;
	                }
                }

                if($flagname == 1){
                        echo '<script>$("#wrongname").removeAttr("hidden");</script>';
                        echo '<script>console.log("user not found");</script>';
                }
            }

            // compare password of username
            $sql = "SELECT password FROM user WHERE username= '$current_name'";
            $result_pass = $conn->query($sql);
            $row = $result_pass->fetch_assoc();
            if($pass === $row["password"]){
                echo '<script>console.log("password match");</script>';
            }
            else {
                echo '<script>console.log("password not match");</script>';
                echo '<script>$("#wrongpass").removeAttr("hidden");</script>';
	        }
        }?>
    </body>
</html>
