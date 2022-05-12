<?php include("top.php"); ?>

<?php


    if(!isset($_SESSION['username']))
    {
        //print "Nobody logged in.";
?>

        <h3>Unexpected Error</h3>

<?php
    }
    else
    {
        //print "Hi, " . $_SESSION['username'];
?>

    <h3>Hi, <?=$_SESSION['username']?></h3>

<?php
    }


?>


    <p class="logout"><a id="link" href="log-out.php">Log out</a></p>

<?php include("bottom.html"); ?>