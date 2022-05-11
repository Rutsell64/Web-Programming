<?php include("top.php"); ?>

<?php


    if(!isset($_SESSION['username']))
    {
        print "Nobody logged in.";
    }
    else
    {
    print "Hi, " . $_SESSION['username'];
    }


?>

<?php include("bottom.html"); ?>