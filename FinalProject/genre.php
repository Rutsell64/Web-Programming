<?php include("top.php"); ?>

<?php


    $genre = $_GET["genre"];

?>






<div class="genre_div">


        <br>
        <h1><?=$genre?></h1>
        <br>
        <a href="https://www.youtube.com/user/NoOneSpecialChannel"><img class="genre_img" src="genres/<?=$genre?>.gif"/></a>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1 class="related">Related Games</h1>

        <?php

            if($genre == "Action") // 1
            {
        ?>
                <!-- insert action scroll -->
                <div class="scroll_genre">

            <ul>
                <li class="first"> <a href="https://www.google.com"> <img src="Game_Covers/GTA4.jpg" title="Resident Evil 4"></a></li>
                <li> <img src="Game_Covers/GTA4.jpg"> </li>
                <li> <img src="Game_Covers/GTA4.jpg"> </li>
                <li> <img src="Game_Covers/GTA4.jpg"> </li>
                <li> <img src="Game_Covers/GTA4.jpg"> </li>
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

                

        <?php
            }
            elseif($genre == "Adventure") // 2
            {
        ?>
                <!-- insert adventure scroll -->
                <div class="scroll_genre">

            <ul>
                <li class="first"> <a href="https://www.google.com"> <img src="Game_Covers/Little_Big_Planet.jpg" title="Resident Evil 4"></a></li>
                <li> <img src="Game_Covers/Little_Big_Planet.jpg"> </li>
                <li> <img src="Game_Covers/Little_Big_Planet.jpg"> </li>
                <li> <img src="Game_Covers/Little_Big_Planet.jpg"> </li>
                <li> <img src="Game_Covers/Little_Big_Planet.jpg"> </li>
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
        <?php
            }
            elseif($genre == "Arcade") // 3
            {
        ?>
                <!-- insert arcade scroll -->
                <div class="scroll_genre">

            <ul>
                <li class="first"> <a href="https://www.google.com"> <img src="Game_Covers/Super.jpg" title="Resident Evil 4"></a></li>
                <li> <img src="Game_Covers/Super.jpg"> </li>
                <li> <img src="Game_Covers/Super.jpg"> </li>
                <li> <img src="Game_Covers/Super.jpg"> </li>
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
        <?php
            }
            elseif($genre == "Horror") // 4
            {
        ?>
                <!-- insert horror scroll -->
                <div class="scroll_genre">

            <ul>
                <li class="first"> <a href="https://www.google.com"> <img src="Game_Covers/RE4.jpg" title="Resident Evil 4"></a></li>
                <li> <img src="Game_Covers/RE4.jpg"> </li>
                <li> <img src="Game_Covers/RE4.jpg"> </li>
                <li> <img src="Game_Covers/RE4.jpg"> </li>
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
        <?php
            }
            elseif($genre == "Indie") // 5
            {
        ?>
                <!-- insert Indie scroll -->
                <div class="scroll_genre">

            <ul>
                <li class="first"> <a href="https://www.google.com"> <img src="Game_Covers/Little_Big_Planet.jpg" title="Resident Evil 4"></a></li>
                <li> <img src="Game_Covers/Little_Big_Planet.jpg"> </li>
                <li> <img src="Game_Covers/Little_Big_Planet.jpg"> </li>
                <li> <img src="Game_Covers/Little_Big_Planet.jpg"> </li>
                <li> <img src="Game_Covers/Little_Big_Planet.jpg"> </li>
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
        <?php
            }
            elseif($genre == "RPG") // 6
            {
        ?>
                <!-- insert RPG scroll -->
                <div class="scroll_genre">

            <ul>
                <li class="first"> <a href="https://www.google.com"> <img src="Game_Covers/Super.jpg" title="Resident Evil 4"></a></li>
                <li> <img src="Game_Covers/Super.jpg"> </li>
                <li> <img src="Game_Covers/Super.jpg"> </li>
                <li> <img src="Game_Covers/Super.jpg"> </li>
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
        <?php
            }
            elseif($genre == "Shooter") // 7
            {
        ?>
                <!-- insert Shooter scroll -->
                <div class="scroll_genre">

            <ul>
                <li class="first"> <a href="https://www.google.com"> <img src="Game_Covers/DOOM.jpg" title="Resident Evil 4"></a></li>
                <li> <img src="Game_Covers/DOOM.jpg"> </li>
                <li> <img src="Game_Covers/DOOM.jpg"> </li>
                <li> <img src="Game_Covers/DOOM.jpg"> </li>
                <li> <img src="Game_Covers/DOOM.jpg"> </li>
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
        <?php
            }
            elseif($genre == "Sports") // 8
            {
        ?>
                <!-- insert Sports scroll -->
                <div class="scroll_genre">

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
        <?php
            }
            elseif($genre == "Strategy") // 6
            {
        ?>
                <!-- insert Strategy scroll -->
                <div class="scroll_genre">

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
        <?php
            }
        ?>




        


 



</div>

<?php include("bottom.html"); ?>