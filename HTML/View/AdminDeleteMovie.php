<?php
    session_start();
    //check for admin
    if($_SESSION['username'] != "admin"){
        header('location:Error.php');        
    }
?>

<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Buenard' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="UmeHani.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="HeaderFooter.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <title>Admin Delete Movie By ID</title>
</head>

<body>
    <?php $set = 0; ?>
    <?php 
        include '../Controller/config.php';
        if (isset($_POST['search'])){

        $set = 0;    
        //creating check on searchid
        if($_POST["searchid"] == null){

            $set = 1;
        }
        else{
            $sql = "SELECT * FROM movie WHERE movieID = $_POST[searchid]";
            $result_id = $conn->query($sql);

            if ($result_id->num_rows > 0) {
                $row = $result_id->fetch_assoc();
                $_POST['id'] = $_POST['searchid'];
                $_POST['title'] = $row['title'];
                $_POST['rating'] = $row['rating'];
                $_POST['season'] = $row['seasons'];
                $_POST['url'] = $row['image_url'];
            }
            else 
            {
                echo '<script>console.log("id does not exist");</script>';
                echo '<script>$("#noexistid").removeAttr("hidden");</script>';
                $set = 1;
            }
        }       
    }
    if (isset($_POST['delete'])){
        if($_POST["searchid"] == null){
        }   
        else {
            $sql = "DELETE FROM movie WHERE movieID = '$_POST[id]'";
            if ($conn->query($sql) == TRUE) {
                echo '<script>alert("Movie deleted successfully");</script>';
                $_POST = array();
            } else {
                echo '<script>alert("Error")</script>';
            }
        }             
    }
    ?>    
    
    <div  style="background-color:black">
        <?php include 'Header.php' ?>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" id="myform" ?>
        <div class="admincontainer-t">
            <div class="backbuttoncontainer">
                <a href="./Admin.php" class="backbutton-t">&#8249;</a>
            </div>
            <div>
                <p class="admintitle">Delete Movie/Show By ID</p>
            </div>
            <div style="width:100%;border-top:solid 2px #FFCB0A;">
            </div>
            <div style="text-align:center;">
                <div style="width:100%;text-align:justified;">
                    <div class="c-3 c-t-3 adminform-t">
                        <p class="adminsub ">Search ID</p>
                    </div>
                    <div class="c-8 c-t-8 adminform-t">
                        <input class="admininput c-8 c-t-8" type="number" min="0" name="searchid" placeholder="Search ID" value="<?php echo (isset($_POST["searchid"]))?$_POST["searchid"]:'';?>"/>
                    </div>
                     <p id="noexistid" class="colred" style="margin:0%" hidden>id does not exists</p>
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
                        <p class="adminsub ">ID</p>
                    </div>
                    <div class="c-8 c-t-8 adminform-t">
                        <input class="admininput c-8 c-t-8" type="number" min="0" name="id" placeholder="ID" readonly value="<?php echo (isset($_POST["id"]))?$_POST["id"]:'';?>" readonly/>
                    </div>
                </div>
                <div style="width:100%;text-align:justified">
                    <div class="c-3 c-t-3 adminform-t">
                        <p class="adminsub ">Title</p>
                    </div>
                    <div class="c-8 c-t-8 adminform-t">
                        <input class="admininput c-8 c-t-8" type="text" name="title" placeholder="Title" readonly value="<?php echo (isset($_POST["title"]))?$_POST["title"]:'';?>"/>
                    </div>
                </div>
                <div style="width:100%;text-align:justified">
                    <div class="c-3 c-t-3 adminform-t">
                        <p class="adminsub ">Ratings</p>
                    </div>
                    <div class="c-8 c-t-8 adminform-t">
                        <input class="admininput c-8 c-t-8" type="number" name="rating" placeholder="Rating" readonly value="<?php echo (isset($_POST["rating"]))?$_POST["rating"]:'';?>"/>
                    </div>
                </div>
                <div style="width:100%;text-align:justified">
                    <div class="c-3 c-t-3 adminform-t">
                        <p class="adminsub ">Seasons</p>
                    </div>
                    <div class="c-8 c-t-8 adminform-t">
                        <input class="admininput c-8 c-t-8" type="number" min="0" name="season" placeholder="Seasons" readonly value="<?php echo (isset($_POST["season"]))?$_POST["season"]:'';?>"/>
                    </div>
                </div>
                <div style="width:100%;text-align:justified">
                    <div class="c-3 c-t-3 adminform-t">
                        <p class="adminsub ">Image_Url</p>
                    </div>
                    <div class="c-8 c-t-8 adminform-t">
                        <input class="admininput c-8 c-t-8" type="url" name="url" placeholder="Image URL" value="<?php echo (isset($_POST["url"]))?$_POST["url"]:'';?>" readonly/>
                    </div>
                </div>
                <div class="" style="text-align:center">
                    <button type='submit' name='delete' class="c-3 c-m-3 submitbutton-t">Delete</button>
                </div>
            </div>
        </div>
    </form>
    <div>
        <?php include 'Footer.html' ?>
    </div>

	<script src="../Controller/jquery-3.2.1.js"></script>
	<script src="../Controller/HeaderFooter.js" type="text/javascript">
		//took it from here
	</script>

    

    <?php 
    if ($set == 1){
        echo '<script>console.log("id does not exist");</script>;';
        echo '<script>$("#noexistid").removeAttr("hidden");</script>';
    }
    
    ?>
</body>
</html>
