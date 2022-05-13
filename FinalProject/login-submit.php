<?php include("top.php"); ?>

<br>

<?php

    $username = $_POST["username"];
    $password = $_POST["password"];

    $username = strtolower($username);

   // print "$username <br> $password <br>";

    $file = file_get_contents("users.txt");
    $lines = explode("\n", $file);       // explode every line

    // check username

    for($i = 0; $i < count($lines); $i++) 
    {
        $info = explode(",", $lines[$i]); // explode every comma in line
        $check = 0; 

        if($info[0] == $username and $info[1] == $password) // if found
        {
            
           $check = 1;
           


            break;
            
        }
  
    }


    if($check == 1)
    {
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $info[2];
        

        //print $_SESSION['username'] . " is logged in.";
?>

        <h3>You've succesfully logged in.</h3>
        <h3>Click <a id="link" href="/MGL/profile.php">here</a> to see your profile.<h3>
        

<?php
    }
    else
        {

            //print $username . " not found";
            //print "The username and password you entered isn't connected to an account.";

?>
        <h3>The username and password you entered isn't connected to an account.<h3>
        <h3>Click <a id="link" href="/MGL/login.php">here</a> to try again.<h3>
        


<?php

        
        }




?>








<?php include("bottom.html"); ?>