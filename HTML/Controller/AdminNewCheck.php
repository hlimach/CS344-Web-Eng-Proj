
<?php 
    //creating check on title
    if($_POST["title"] == null){
        $check = false; 
        echo '<script>console.log("invalid title");</script>;';
        echo '<script>$("#titleerr").removeAttr("hidden");</script>';
    }     

    //creating check on rating
        if($_POST["rating"] == null){
        $check = false; 
            echo '<script>console.log("invalid rating");</script>;';
            echo '<script>$("#ratingerr").removeAttr("hidden");</script>';
        }

    //creating check on url
        if($_POST["url"] == null){
        $check = false; 
        echo '<script>console.log("invalid url");</script>;';
        echo '<script>$("#urlerr").removeAttr("hidden");</script>';
    }
?>