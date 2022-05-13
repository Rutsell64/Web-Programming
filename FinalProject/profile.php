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
		
		<?php $file = file_get_contents("users.txt");
			  $lines = explode("\n", $file);       // explode every line
			  foreach ($lines as $line){
			  $line = explode(",", $line);
			  if( $_SESSION['username'] == $line[4]){
				$email = $line[2];
			  break;
				}
			}
		?>
		
        <br>
        <h3>username: <span id="info"><?=$_SESSION['username']?></span></h3>
        <h3>email: <span id="info"><?=$email?></span></h3>

       <p class="logout"><a id="link" href="video_game_list.php">My List</a>   /   <a id="link" href="log-out.php">Log out</a></p>
        </div>

        <script>

        </script>




    

<?php
    }


?>

<?php include("bottom.html"); ?>
