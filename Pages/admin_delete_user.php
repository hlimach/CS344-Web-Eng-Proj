<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Buenard' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../Style/css file.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../Style/Header_Footer_Style.css" type="text/css">
    <title>Admin Delete User</title>
</head>

<body>
    <?php $set = 0; ?>
    <?php if (isset($_POST['search'])){
        include 'dbconnect.php';
        $set = 0;    
        //creating check on searchid
        if($_POST["searchusername"] == null){

            $set = 1;
        }
        else{
            $sql = "SELECT * FROM user WHERE username = '$_POST[searchusername]'";
            $result_id = $conn->query($sql);

            if ($result_id->num_rows > 0) {
                $row = $result_id->fetch_assoc();
                $_POST['username'] = $_POST['searchusername'];
                $_POST['fname'] = $row['f_name'];
                $_POST['lname'] = $row['l_name'];
                $_POST['pass'] = $row['password'];
                $_POST['age'] = $row['age'];
                $_POST['email'] = $row['email'];
            }
            else 
            {
                $set = 1;
            }
        }       
    }
    ?>    
    
    <div  style="background-color:black">
        <?php include 'header.html' ?>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" id="myform" ?>
        <div class="admincontainer-t">
            <div class="backbuttoncontainer">
                <a href="./admin.php" class="backbutton-t">&#8249;</a>
            </div>
            <div>
                <p class="admintitle">Delete User By User Name</p>
            </div>
            <div style="width:100%;border-top:solid 2px #FFCB0A;">
            </div>
            <div style="text-align:center;">
                <div style="width:100%;text-align:justified;">
                    <div class="c-3 c-t-3 adminform-t">
                        <p class="adminsub ">Search Username</p>
                    </div>
                    <div class="c-8 c-t-8 adminform-t">
                        <input class="admininput c-8 c-t-8" type="text"  name="searchusername" placeholder="Search User Name" value="<?php echo (isset($_POST["searchusername"]))?$_POST["searchusername"]:'';?>"/>
                    </div>
                     <p id="noexistusername" class="colred" style="margin:0%" hidden>username does not exists</p>
                </div>
            </div>
            <div class="" style="text-align:center">
                <button type='submit' name='search' class="c-3 c-m-3 submitbutton-t">Search</button>
            </div>
            <div style="width:100%;border-top:solid 2px #FFCB0A;">
            </div>
            <div style="text-align:center">
                <div style="width:100%;text-align:justified">
                    <div class="c-3 c-t-3 adminform-t">
                        <p class="adminsub ">UserName</p>
                    </div>
                    <div class="c-8 c-t-8 adminform-t">
                        <input class="admininput c-8 c-t-8" type="text" name="username" placeholder="username" value="<?php echo (isset($_POST["username"]))?$_POST["username"]:'';?>" readonly/>
                    </div>
                    <div class="c-3 c-t-3 adminform-t">
                        <p class="adminsub ">First Name</p>
                    </div>
                    <div class="c-8 c-t-8 adminform-t">
                        <input class="admininput c-8 c-t-8" type="text" name="fname" placeholder="First Name" value="<?php echo (isset($_POST["fname"]))?$_POST["fname"]:'';?>" readonly/>
                    </div>
                    <div class="c-3 c-t-3 adminform-t">
                        <p class="adminsub ">Last Name</p>
                    </div>
                    <div class="c-8 c-t-8 adminform-t">
                        <input class="admininput c-8 c-t-8" type="text" name="lname" placeholder="Last Name" value="<?php echo (isset($_POST["lname"]))?$_POST["lname"]:'';?>" readonly/>
                    </div>
                    <div class="c-3 c-t-3 adminform-t">
                        <p class="adminsub ">Password</p>
                    </div>
                    <div class="c-8 c-t-8 adminform-t">
                        <input class="admininput c-8 c-t-8" type="text" name="pass" placeholder="Password" value="<?php echo (isset($_POST["pass"]))?$_POST["pass"]:'';?>" readonly/>
                    </div>
                    <div class="c-3 c-t-3 adminform-t">
                        <p class="adminsub ">Age</p>
                    </div>
                    <div class="c-8 c-t-8 adminform-t">
                        <input class="admininput c-8 c-t-8" type="text" name="age" placeholder="Age" value="<?php echo (isset($_POST["age"]))?$_POST["age"]:'';?>" readonly/>
                    </div>
                    <div class="c-3 c-t-3 adminform-t">
                        <p class="adminsub ">Email</p>
                    </div>
                    <div class="c-8 c-t-8 adminform-t">
                        <input class="admininput c-8 c-t-8" type="text" name="email" placeholder="Email" value="<?php echo (isset($_POST["email"]))?$_POST["email"]:'';?>" readonly/>
                    </div>
                    <div class="" style="text-align:center">
                        <button type='submit' name='delete' class="c-3 c-m-3 submitbutton-t">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div>
        <?php include 'footer.html' ?>
    </div>

	<script src="../Functionality/jquery-3.2.1.js"></script>
	<script src="../Functionality/Header_Footer.js" type="text/javascript">
		//took it from here
	</script>

    

    <?php 
    if ($set == 1){
        echo '<script>console.log("username does not exist");</script>;';
        echo '<script>$("#noexistusername").removeAttr("hidden");</script>';
    }
    
    if (isset($_POST['delete'])){
        include 'dbconnect.php';

        if($_POST["searchusername"] == null){
        }   
        else {
            $sql = "DELETE FROM user WHERE username = '$_POST[username]'";
            if ($conn->query($sql) == TRUE) {
                echo '<script>alert("User deleted successfully");</script>';
            } else {
                echo '<script>alert("Error")</script>';
            }
        $_POST = array();
        }          
    }
    ?>
</body>
</html>