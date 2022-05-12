<?php include("top.php"); ?>

<br>

<?php
	error_reporting(E_ERROR);
	$name = $_POST["name"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$phone_number = $_POST["phone_number"];
    $username = $_POST["username"];
    $username = strtolower($username);

    //print $username . "\n" . $number . "\n" . $password . "\n";

    $file = file_get_contents("users.txt");
    $lines = explode("\n", $file);   		// explode eevry line
	
	foreach ($lines as $line){
	$line = explode(',', $line);
	$check = 0;
		if($username == $line[4] and $email == $line[2] and $phone_number == $line[3]){
			  $check = 1;
			  break;
		}
	}

    if($check == 0) // if user doesn't exist
	{
	
		$string = $name . "," . $password . "," . $email  . "," . $phone_number . "," . $username . "\n"; 
		file_put_contents("users.txt", $string, FILE_APPEND);
        //print "Success <br>";
    ?>

    <div>
        <h3>Welcome, <?=$username?>!<h3>
        <h3>Click <a id="link" href="login.php">here</a> to log in.<h3>

    </div>




<?php
    }
	else //if user exists
	{

?>

    <div>
        <h3>This user already exists. Try again.<h3>
        <h3>Click <a id="link" href="signup.php">here</a> to sign up.<h3>

    </div>

<?php
		//print "This user already exists. Try again. <br>";
		
	}

?>











<?php include("bottom.html"); ?>
