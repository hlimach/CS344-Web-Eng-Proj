<?php        
     //check for logged in
    if(!isset($_SESSION['userid'])) {
        echo '<script>alert("You need to login first to access this page.");</script>';
        echo '<script>window.location.href="Index.php";</script>';
    }
?>