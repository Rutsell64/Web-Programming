<!DOCTYPE html>
<html>
  <head>
  
    <title>Title of the document</title>
	<link href = "MGL.css" type = "text/css" rel = "stylesheet"/>
  </head>
  
  <body>
  <?php include("top.php"); ?>
  <hr>
  <div class = "titles">
		<p>List Of All My Video Games</p>
  </div>
  <?php
  if(!isset($_SESSION['username']))
    {
        print "Nobody logged in.";
    }
	else
    {
	$file = file_get_contents("users_game_list.txt");
    $lines = explode("\n", $file); 
	$count = 0;
	?>
	<div class="table">
      <table>
        <thead>
          <tr>
            <th>Number</th>
            <th>Image</th>
			<th>Game Title</th>
			<th>Game Status</th>
			<th>Score</th>
			<th>Progress</th>
          </tr>
        </thead>
        <tbody>
	<?php
			foreach ($lines as $line){
			$line = explode(",", $line);
			if($_SESSION['username'] == $line[0]){
			$username = $line[0];
			$game_name = $line[1];
			$game_status = $line[2];
			$game_score = $line[3];
			$game_progress = $line[4];
			$image = str_replace(' ','%20', $game_name);
			$game_image = "<img src = ./Game_Covers/$image.png>";
			$count = $count + 1;
	?>
	
          <tr>
		  
           <td><?=$count?></td>
			
           <td><?=$game_image?></td>
		   
		   <td><?=$game_name?></td>
		   
		   <td><?=$game_status?></td>
		   
		   <td><?=$game_score?></td>
		   
		   <td><?=$game_progress?></td>
		   
          </tr>
         
        
	<?php
		}
	}	
	 ?>
		</tbody>
      </table>
    </div>
	<?php
	}
  ?>
  
  </body>
  
</html>