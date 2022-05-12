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
	
	foreach ($lines as $line){
	$line = explode(",", $line);
		if($_SESSION['username'] == $line[0] and $game == $line[1]){
			print "This game is already in your list, go add another one to your list";
			return;
		}
	}
	
	$progress = $_POST["progress"];
	$status = $_POST["status"];
	$score = $_POST["score"];
			
	$string = $_SESSION['username']. "," . $game . "," . $status . "," . $score  . "," . $progress . "\n"; 
	file_put_contents("users_game_list.txt", $string, FILE_APPEND);
	print "The game has been successfully added to your list";
	return;	
	
	}
?>

<?php include("bottom.html"); ?>