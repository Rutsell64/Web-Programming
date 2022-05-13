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

        <div class="profile">

        <br>
        <h3 class="profile_header"><span id="profile">PROFILE</span><h3>
        <br>

        <div class="image">

        <img src="default_profile.jpg" id="photo"/>
        <input type="file" id="file"/>
        <label for="file" id="upload">edit picture</label>

        </div>

        <script src="MGL.js"></script>

        <br>
        <h3>username: <span id="info"><?=$_SESSION['username']?></span></h3>
        <h3>email: <span id="info"><?=$_SESSION['email']?></span></h3>

   

        <p class="logout"><a id="link" href="log-out.php">Log out</a></p>
        </div>

        <script>

        </script>




    

<?php
    }


?>

<?php include("bottom.html"); ?>

