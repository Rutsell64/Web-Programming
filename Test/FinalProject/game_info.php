<DOCTYPE html>
	<head>
		<link href = "MGL.css" type = "text/css" rel = "stylesheet"/>
	</head>
	
	<body> 
	
		<?php
			$name = "Hollow Knight";
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
	
	</body>

</html>