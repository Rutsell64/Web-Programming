<?php include("top.html");?>

<div id="buttons">
        <br> <br>
        <!-- insert buttons here -->
        <ul class="buttons">
            <a href="https://www.google.com"><li id="button">Profile</li></a>
            <a href="https://www.yahoo.com"><li id="button">What's New?</li></a>
            <a href="https://www.bing.com"><li id="button">Community</li></a>
        </ul>
        <hr>
        <br>
    </div>
    
        


        <div class="scroll">

            <ul>
                <li class="first"> <a href="https://www.residentevil.com/4/us/"> <img src="GameCovers/RE4.jpg" title="Resident Evil 4"></a></li>
                <li> <img src="GameCovers/GTA4.jpg"> </li>
                <li> <img src="GameCovers/Mortal_Kombat.jpg"> </li>
                <li> <img src="GameCovers/DOOM.jpg"> </li>
                <li> <img src="GameCovers/Super.jpg"> </li>
                <li> <img src="GameCovers/Little_Big_Planet.jpg"> </li>
                <li> <img src="GameCovers/RE4.jpg"> </li>
                <li> <img src="GameCovers/GTA4.jpg"> </li>
                <li> <img src="GameCovers/Mortal_Kombat.jpg"> </li>
                <li> <img src="GameCovers/DOOM.jpg"> </li>
                <li> <img src="GameCovers/Super.jpg"> </li>
                <li> <img src="GameCovers/Little_Big_Planet.jpg"> </li>
                <li> <img src="GameCovers/RE4.jpg"> </li>
                <li class="last"> <img src="GameCovers/GTA4.jpg" title="GTA 4"> </li>
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

        </p>
    </div>

<?php include("bottom.html");?>

