<?php include("top.php");?>

<div id="buttons">
        <br> <br>
        <!-- insert buttons here -->
        <ul class="buttons">

<?php

    if(!isset($_SESSION['username']))
    {
?>
        <a href="signup.php"><li id="button">Profile</li></a>
<?php
    }
    else
    {
?>
    <a href="profile.php"><li id="button">Profile</li></a>
<?php

    }
    
?>

   
            <a href="whats_new.php"><li id="button">What's New?</li></a>
            <a href="https://www.bing.com"><li id="button">Community</li></a>

            <!-- 
            <a href="signup.php"><li id="button">Sign Up</li></a> 
            <a href="login.php"><li id="button">Log In</li></a>
            <a href="log-out.php"><li id="button">Log out</li></a>
            -->
            
        </ul>
        <hr>
        <br>
    </div>
    
        

        <div class="scroll">

            <ul>
                <li class="first"> <a href="https://www.google.com"> <img src="Game_Covers/RE4.jpg" title="Resident Evil 4"></a></li>
                <li> <img src="Game_Covers/GTA4.jpg"> </li>
                <li> <img src="Game_Covers/Mortal_Kombat.jpg"> </li>
                <li> <img src="Game_Covers/DOOM.jpg"> </li>
                <li> <img src="Game_Covers/Super.jpg"> </li>
                <li> <img src="Game_Covers/Little_Big_Planet.jpg"> </li>
                <li> <img src="Game_Covers/RE4.jpg"> </li>
                <li> <img src="Game_Covers/GTA4.jpg"> </li>
                <li> <img src="Game_Covers/Mortal_Kombat.jpg"> </li>
                <li> <img src="Game_Covers/DOOM.jpg"> </li>
                <li> <img src="Game_Covers/Super.jpg"> </li>
                <li> <img src="Game_Covers/Little_Big_Planet.jpg"> </li>
                <li> <img src="Game_Covers/RE4.jpg"> </li>
                <li class="last"> <img src="Game_Covers/GTA4.jpg" title="GTA 4"> </li>
            </ul>
        </div>
    


    <div class="genre">

        <p>
            <br><br>

              
            <select name="genres" onchange="location = this.value;">
                <option id="choose_genre" selected disabled hidden>choose genre...</option>
                <option value="https://www.google.com">Action</option> <!-- will change link for these-->
                <option value="https://www.bing.com">Adventure</option>
                <option value="https://www.yahoo.com">Arcade</option>
                <option value="https://www.facebook.com">Horror</option>     
                <option value="https://www.instagram.com">Indie</option>
                <option value="https://www.yahoo.com">RPG</option>
                <option value="https://www.twitter.com">Shooter</option>
                <option value="https://www.google.com">Sports</option>
                <option value="https://www.facebook.com">Strategy</option>
            </select>

            <br><br><br>
            <a href="https://www.google.com"><img src="genres/action.gif"/></a>

        </p>
    </div>




<?php include("bottom.html");?>

