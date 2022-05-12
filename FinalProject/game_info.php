<DOCTYPE html>
	<head>
		<link href = "MGL.css" type = "text/css" rel = "stylesheet"/>
	</head>
	
	<body> 
	<div id="banner">

            <a href="home.php">
                <img class="logo"src="logo.png" width = "150" height = "100" />
            </a>
    </div>
		<?php
			$name = $_GET["game"];
			$image = str_replace(' ','%20', $name);
			$content = file_get_contents("games.txt"); 
			$lines = explode("\n", $content);
			foreach ($lines as $line){
				$line = explode('|', $line);
				if($name == $line[0]){
					$game_name = $line[0];
					$game_genre = $line[1];
					$game_developer = $line[2];
					$game_publisher = $line[3];
					$game_release_date = $line[4];
					$game_review = $line[5];
					$game_rating = $line[6];
					$game_link = "<a href = $line[7]>$line[7]</a>";
					$game_trailer = $line[8];
					$game_image = "<img src = ./Game_Covers/$image.png width = 255 height = 383>";
				}
			}
		?>

		<div class = "game_details">
			<div id = "game_headers">
				<?php print "Game Details"; ?>
			</div>
		<?php
			print "<br>";
			print "Genre: $game_genre";
			print "<br><br><br>";
			print "Developer: $game_developer";
			print "<br><br><br>";
			print "Publisher: $game_publisher";
			print "<br><br><br>";
			print "Release Date: $game_release_date";
			print "<br><br><br>";
			print "Review: $game_review";
			print "<br><br><br>";
			print "ESRB Rating: $game_rating";
			print "<br><br><br>";
			print "Link to Game: $game_link";
			
		?>
		</div>
		
		<div class = "game_name_image">
			<div id = "game_headers">
				<?php print "$game_name"; ?>
			</div>
		<?php
			print "<br>";
			print " $game_image";
			
		?>
		</div>
		
		<div class = "game_trailer">
			<div id = "game_headers">
				<?php print "Game Trailer"; ?>
			</div>
		<?php
			print "<br>";
			print "$game_trailer";
			
		?>
		</div>
		
	<form class = "form" action = "game_info_submit.php?game=<?=$name?>" method = "post">
	
		<div class = "game_progress">
			<div id = "game_headers">
				<?php print "Game Progress Percentage"; ?>
			</div>
				<?php
					print "<br>";
				?>
			<select name = "progress" class = "progress_button">
				<?php
					for ($i=0; $i<=100; $i++)
						{
				?>
						<option value="<?php echo $i;?>"><?php echo $i;?></option>
				<?php
						}
				?>
			</select>
		</div>
	
		<div class = "game_status">
				<div id = "game_headers">
					<label for="status"><?php print "Game Status" ?></label>
				</div>
			<?php
				print "<br>";
			?>
			
			<select name="status" class = "status_button">
				<option value = "Not Started">Not Started</option>
				<option value = "Currently Playing">Currently Playing</option>		
				<option value = "Completed">Completed</option>
			</select>
			
		</div>
		
		<div class = "game_score">
			<div id = "game_headers">
				<?php print "Your Score"; ?>
			</div>
		<?php
			print "<br>";
		?>
			<select name = "score" class = "score_button">
				<?php
					for ($i=0; $i<=10; $i++)
						{
				?>
						<option value="<?php echo $i;?>"><?php echo $i;?></option>
				<?php
						}
				?>
			</select>
		</div>
		
		
		
		<p class = "Add_To_List_Button"><input type = "submit" value = "Add To List" /></p>
		
		</form>
		
		<form class = "form" action = "delete_game_info_submit.php?game=<?=$name?>" method = "post">
		
			<p class = "Remove_From_List_Button"><input type = "submit" value = "Delete From List" /></p>
			
		</form>
		
	</body>

</html>
