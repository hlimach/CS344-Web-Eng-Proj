<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Buenard' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../Style/css file.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../Style/Header_Footer_Style.css" type="text/css">
    <title>Admin Add Movie Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
</head>

<body>
    <div  style="background-color:black">
        <?php include 'header.html' ?>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" id="myform" ?>
        <div class="admincontainer-t">
            <div class="backbuttoncontainer">
                <a href="./admin.php" class="backbutton-t">&#8249;</a>
            </div>
            <div>
                <p class="admintitle">New Movie/Show Information</p>
            </div>
            <div style="width:100%;border-top:solid 2px #FFCB0A;">
            </div>
            <div style="text-align:center">
                <div style="width:100%;text-align:justified">
                    <div class="c-3 c-t-3 adminform-t">
                        <p class="adminsub ">ID</p>
                    </div>
                    <div class="c-8 c-t-8 adminform-t">
                        <input class="admininput c-8 c-t-8" type="number" min="0" name="id" placeholder="ID" value="<?php echo (isset($_POST["id"]))?$_POST["id"]:'';?>"/>
                    </div>
                        <p id="iderr" class="colred" style="margin:0%" hidden>invalid id</p>
                        <p id="takenid" class="colred" style="margin:0%" hidden>id already exists</p>
                </div>
                <?php include 'admin_new.php' ?>
        </div>
    </form>
    <div>
        <?php include 'footer.html' ?>
    </div>

	<script src="../Functionality/jquery-3.2.1.js"></script>
	<script src="../Functionality/Header_Footer.js" type="text/javascript">
		//took it from here
	</script>


    <?php if (isset($_POST['submit'])){
        include 'dbconnect.php';

        $check = true;        

        //creating check on id
            if($_POST["id"] == null){
                $check = false; 
                echo '<script>console.log("invalid id");</script>;';
                echo '<script>$("#iderr").removeAttr("hidden");</script>';
            }
            else{
                $sql = "SELECT movieID FROM movie";
                $result_id = $conn->query($sql);

                if ($result_id->num_rows > 0) {
                    while($row = $result_id->fetch_assoc()){
                        if($_POST["id"] === $row["movieID"]){
                            $check = false; 
                            echo '<script>console.log("id already exists");</script>';
                            echo '<script>$("#takenid").removeAttr("hidden");</script>';
                            break;
                        }
                    }
                }
            }

        //checks
        include 'admin_new_check.php';

        //creating check on season and entering data
        if($check == true){
            if($_POST["season"] === null){
                $sql = "INSERT INTO movie (movieID, title, rating, image_url) VALUES ('$_POST[id]', '$_POST[title]', '$_POST[rating]', '$_POST[url]')";
                if ($conn->query($sql) == TRUE) {
                    echo '<script>alert("New record created successfully");</script>';
                } else {
                    echo '<script>alert("Error")</script>';
                }
            }
            else {
                $sql = "INSERT INTO movie (movieID, title, rating, seasons, image_url) VALUES ('$_POST[id]', '$_POST[title]', '$_POST[rating]', '$_POST[season]', '$_POST[url]')";
                if ($conn->query($sql) == TRUE) {
                    echo '<script>alert("New record created successfully");</script>';
                } else {
                    echo '<script>alert("Error")</script>';
                }           
            }  
        }
    } ?>
</body>