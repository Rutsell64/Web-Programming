<DOCTYPE html>
	<head>
		<link href = "MGL.css" type = "text/css" rel = "stylesheet"/>
	</head>
	
	<body> 
	
		<?php
			$name = "Resident Evil 4";
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
		
		<div class = "game_progress">
			<div id = "game_headers">
				<?php print "Game Progress Percentage"; ?>
			</div>
				<?php
					print "<br>";
				?>
			<select class = "progress_button">
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
					<?php print "Game Status" ?>
				</div>
			<?php
				print "<br>";
			?>
			
			<select class = "status_button">
				<option value = "Not_Started">Not Started</option>
				<option value = "Currently_Playing">Currently Playing</option>		
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
			<select class = "score_button">
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
		
	</body>

</html>
