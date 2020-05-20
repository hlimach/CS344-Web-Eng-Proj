<?php 
    session_start();
    include '../Controller/CheckLogin.php';
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
        <title>Developers</title>
    </head>

    <body>
        <!--html for page-->
        <div class="c- aboutus_container devpage flexwrap">
        </div>

        <div class="c-aboutdesk-d wrap_aboutus">
            <div style="background-color:black">
                <?php include 'Header.php' ?>
	        </div>

            <div id="body">
                <div class="c- paddingaboutus-d">
                    <p class="aboutus-title"><b>Developers</b></p>
                </div>
                <div class="c- paddingdivs-d">
                    <p class="aboutus-title" style="font-size:26px">Track Time has a developing team of highly skilled and professional web developers and coders:</p>
                    <p class="aboutus-title " style="font-size:24px;">Maira Tariq</p>
                    <p class="aboutus-title " style="font-size:24px">Haleema Ramzan</p>
                    <p class="aboutus-title " style="font-size:24px">Maha Shahwar</p>
                    <p class="aboutus-title " style="font-size:24px">Um E Hani</p>
                </div>
                <div style="height:100px">
                    <div class="skewdiv" style="height:80px"> 
                        <p class="form-title paddingdivs-d" style="font-size:36px;"><b>Maira Tariq</b></p>
                    </div>
                </div>
                <div class="c- paddingaboutus-d" style="padding-bottom:2%">
                    <p class="aboutus-title" style="font-size:23px">Maira Tariq possesses the ability to derive unique insights into any design challenge. She assists our clients in maximizing the value of their online presence.<br><br> She has been an invited speaker on the topic of web design industry for IEEE and has also given lectures to students at the annual web development fair. </p>
                </div>
                <div style="height:100px">
                    <div class="skewdiv" style="height:80px"> 
                        <p class="form-title paddingdivs-d" style="font-size:36px;"><b>Haleema Ramzan</b></p>
                    </div>
                </div>
                <div class="c- paddingaboutus-d" style="padding-bottom:2%">
                    <p class="aboutus-title" style="font-size:23px">Haleema Ramzan has been working with the IT industry for over 3 years, specializing in web for over 2. She has received her degree in Computer Science from the National University of Science and Technology,Pakistan.<br><br> She has  also previously held management positions at previous web firms before applying to Track TV.</p>
                </div>
                <div style="height:100px">
                    <div class="skewdiv" style="height:80px"> 
                        <p class="form-title paddingdivs-d" style="font-size:36px;"><b>Maha Shahwar</b></p>
                    </div>
                </div>
                <div class="c- paddingaboutus-d" style="padding-bottom:2%">
                    <p class="aboutus-title" style="font-size:23px">Maha Shahwar is passionate about web standards. With a BSCS degree, she sets out to learn as much as she can with the goal of creating ground breaking websites with positive user experiences.<br><br>Maha enjoys showing her potential and is also a co-founder of one of our other projects, Happy Times.</p>
                </div>
                <div style="height:100px">
                    <div class="skewdiv" style="height:80px"> 
                        <p class="form-title paddingdivs-d" style="font-size:36px;"><b>Um E Hani</b></p>
                    </div>
                </div>
                <div class="c- paddingaboutus-d" style="padding-bottom:2%">
                    <p class="aboutus-title" style="font-size:23px">Track Times youngest member, Um E Hani is a recent graduate from NUST, Pakistan with a major in CS, concentrating in Graphic Design.<br><br>With her background in fine arts and design, Hani is a quick learner with endless creative energy. During her time in Track TV, she has done it all, from branding and design to production and coding.</p>
                </div>
                <div class="c- paddingaboutus-d" >
                    <h3 class="highlight form-title" style="padding-bottom:50px">And our teams welcomes you to Track TV!</h3>
                </div>
                <div class="colorstrip">
                    <div class="skewdiv" style="height: 50px;"> 
                    </div>
                </div>
                <div class="colorstrip">
                    <div class="skewdiv" style="height: 50px;background-color:#333333"> 
                    </div>
                </div>

                <div class="gifcontainer" style="padding:1%">
                    <div class="skewdiv" style="height: 340px;background-image:url(https://i.pinimg.com/originals/b9/7d/c2/b97dc288d71e7938c1ce8b7faacdc9ac.gif);background-size:100% 100%;"> 
                    </div>
                </div>
            </div>
            <div id="bodyfooter" style="padding-bottom:30px;" >
                <?php include 'Footer.html' ?>
            </div>
        </div>
	    <script src="../Controller/jquery-3.2.1.js"></script>
	    <script src="../Controller/HeaderFooter.js" type="text/javascript">
		    //took it from here
	    </script>
    </body>
</html>
