<?php include("top.php"); ?>

<?php

	if(!isset($_SESSION['username']))
    {
        print "Nobody logged in.";
    }
    else
    {
	$game = $_GET["game"];
	$file = file_get_contents("users_game_list.txt");
    $lines = explode("\n", $file); 
	
	foreach ($lines as $line => $row){
		if(preg_match("/($game)/",$row)){
			unset($lines[$line]);
			file_put_contents("users_game_list.txt", implode("\n", $lines));
			print "The game has been successfully removed from your list";
			return;	
		}
	}
	
	print "The game was not in your list";
	return;	
	
	}
?>

<?php include("bottom.html"); ?>