<?php include("top.php"); ?>

<br>

<?php

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $username = strtolower($username);

    //print $username . "\n" . $number . "\n" . $password . "\n";

    $file = file_get_contents("users.txt");
    $lines = explode("\n", $file);   		// explode eevry line

    for($i = 0; $i < count($lines); $i++) 
    {

        $info = explode(",", $lines[$i]); 	// explode every comma
		$check = 0;
        
        if($info[0] == $username)
        {
			$check = 1;

			break;
		}
	}

    if($check == 0) // if user doesn't exist
	{
	
		$string = $username . "," . $password . "," . $email  . "\n"; 
		file_put_contents("users.txt", $string, FILE_APPEND);
        //print "Success <br>";
    ?>

    <div>
        <h3>Welcome, <?=$username?>!<h3>
        <h3>Click <a id="link" href="/MGL/login.php">here</a> to log in.<h3>

    </div>




<?php
    }
	else //if user exists
	{

?>

    <div>
        <h3>This user already exists. Try again.<h3>
        <h3>Click <a id="link" href="/MGL/signup.php">here</a> to sign up.<h3>

    </div>

<?php
		//print "This user already exists. Try again. <br>";
		
	}

?>











<?php include("bottom.html"); ?>