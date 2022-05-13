<?php include("top.php");?>

<div id="buttons">
        <br> <br>
        <!-- insert buttons here -->
        <ul class="buttons">

<?php

    if(!isset($_SESSION['username']))
    {
?>
        <a href="login.php"><li id="button">Profile</li></a>
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
            <!-- <a href="https://www.bing.com"><li id="button">Community</li></a> -->

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
                <option value="genre.php?genre=Action">Action</option> <!-- will change link for these-->
                <option value="genre.php?genre=Adventure">Adventure</option>
                <option value="genre.php?genre=Arcade">Arcade</option>
                <option value="genre.php?genre=Horror">Horror</option>     
                <option value="genre.php?genre=Indie">Indie</option>
                <option value="genre.php?genre=RPG">RPG</option>
                <option value="genre.php?genre=Shooter">Shooter</option>
                <option value="genre.php?genre=Sports">Sports</option>
                <option value="genre.php?genre=Strategy">Strategy</option>
            </select>
        </p>

            <br><br><br>

        <div class="table">

            <table cellspacing="0" cellpadding="0">
            <tr>
                <td><a href="genre.php?genre=Action"><img id="gif" src="genres/Action.gif"/></a></td>
                <td><a href="genre.php?genre=Adventure"><img id="gif" src="genres/Adventure.gif"/></a></td>
                <td><a href="genre.php?genre=Arcade"><img id="gif" src="genres/Arcade.gif"/></a></td>
            </tr>
            <tr>
                <td><a href="genre.php?genre=Horror"><img id="gif" src="genres/Horror.gif"/></a></td>
                <td><a href="genre.php?genre=Indie"><img id="gif" src="genres/Indie.gif"/></a></td>
                <td><a href="genre.php?genre=Action"><img id="gif" src="genres/arcade.gif"/></a></td>
            </tr>
            <tr>
                <td><a href="genre.php?genre=Action"><img id="gif" src="genres/action.gif"/></a></td>
                <td><a href="genre.php?genre=Action"><img id="gif" src="genres/adventure.gif"/></a></td>
                <td><a href="genre.php?genre=Action"><img id="gif" src="genres/arcade.gif"/></a></td>
            </tr>
            </table>


            <!-- <a href="https://www.google.com"><img src="genres/action.gif"/></a> -->

        </div>

        
    </div>




<?php include("bottom.html");?>

