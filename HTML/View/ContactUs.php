<?php 
    session_start();
?>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <link href='https://fonts.googleapis.com/css?family=Buenard' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="UmeHani.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="HeaderFooter.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <title>Contact Us</title>
</head>

<body>
    <!--html for page-->
    <div class="c- aboutus_container contactuspage flexwrap">
    </div>

    <div class="c-aboutdesk-d wrap_aboutus">
        <div style="background-color:black">
            <?php include 'Header.php' ?>
        </div>

        <div id="body">
            <div class="c- paddingaboutus-d">
                <p class="aboutus-title tcenter" style="font-size:45px"><b>Contact Us</b></p>
            </div>
            <div class="c- paddingdivs-d">
                <div class="form-title highlight" style="font-size:26px;padding-bottom:1%">Track TV is always there for you whenever you need our help and support.</div>
            </div>
            <div class="c- paddingaboutus-d" style="text-align:center;height:150px">
                <div class="hovering" onclick="window.location.hash='phone'">Phone Number</div>
                <div class="hovering" onclick="window.location.hash='email'">Email</div>
                <div class="hovering" onclick="window.location.hash='address'">Address</div>
                <div class="hovering" onclick="window.location.hash='sm'">Social media</div>
            </div>
            <div style="height:120px">
                <div class="skewdiv" style="height:80px">
                    <p class="form-title paddingdivs-d" id="phone" style="font-size:36px;"><b>Phone Number</b></p>
                </div>
            </div>
            <div class="c- paddingaboutus-d" style="padding-bottom:2%">
                <p class="aboutus-title" style="font-size:23px">You can contact us using our cell phone : <br><br> 03001111111 <br><br><br> or by simply dialing up our ptcl:<br><br> 062111111</p>
            </div>
            <div style="height:120px">
                <div class="skewdiv" style="height:80px">
                    <p class="form-title paddingdivs-d" id="email" style="font-size:36px;"><b>Email</b></p>
                </div>
            </div>
            <div class="c- paddingaboutus-d" style="padding-bottom:2%">
                <p class="aboutus-title" style="font-size:23px">Our main developer email addresses are as follows:<br><br><br>Maira Tariq - matariq.bscs18seecs@seec.edu.pk<br><br>Maha Shahwar - mrana.bscs18seecs@seec.edu.pk<br><br>Haleema Ramzan - hramzan.bscs18seecs@seec.edu.pk<br><br>Um E Hani - uhani.bscs18seecs@seec.edu.pk</p>
            </div>
            <div style="height:120px">
                <div class="skewdiv" style="height:80px">
                    <p class="form-title paddingdivs-d" id="address" style="font-size:36px;"><b>Address</b></p>
                </div>
            </div>
            <div class="c- paddingaboutus-d" style="padding-bottom:2%">
                <p class="aboutus-title" style="font-size:23px">Track TV is based in Islamabad with our office address:<br><br><br>Track TV,<br><br>NUST H12,<br><br>Islamabad,<br><br>Pakistan</p>
            </div>
            <div style="height:120px">
                <div class="skewdiv" style="height:80px">
                    <p class="form-title paddingdivs-d" id="sm" style="font-size:36px;"><b>Social Media</b></p>
                </div>
            </div>
            <div class="c- paddingaboutus-d" style="padding-bottom:2%">
                <p class="aboutus-title" style="font-size:23px">FInd track TV's sm links in the footer below!</p>
            </div>

            <div class="colorstrip">
                <div class="skewdiv" style="height: 50px;">
                </div>
            </div>
            <div class="colorstrip">
                <div class="skewdiv" style="height: 50px;background-color:#333333">
                </div>
            </div>
        </div>
        <div id="bodyfooter" style="padding-bottom:30px;">
            <?php include 'Footer.html' ?>
        </div>
    </div>

    <script src="../Controller/jquery-3.2.1.js"></script>
    <script src="../Controller/HeaderFooter.js" type="text/javascript">
		    //took it from here
    </script>
</body>
</html>
