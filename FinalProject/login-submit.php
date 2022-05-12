<?php include("top.php"); ?>

<br>

<?php
	error_reporting(E_ERROR);
    $username = $_POST["username"];
    $password = $_POST["password"];

    $username = strtolower($username);

   // print "$username <br> $password <br>";

    $file = file_get_contents("users.txt");
    $lines = explode("\n", $file);       // explode every line

    // check username

	foreach ($lines as $line){
	$line = explode(",", $line);
	$check = 0;
		if($password == $line[1] and $username == $line[4]){
			  $check = 1;
			  break;
		}
	}

    if($check == 1)
    {
        $_SESSION['username'] = $username;

        print $_SESSION['username'] . " is logged in.";
    }
    else
        {

            //print $username . " not found";
            print "The username or password you entered isn't connected to an account.";

        
        }




?>








<?php include("bottom.html"); ?>