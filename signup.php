<?php include("top.php"); ?>


<div class="signup">

<form action="/MGL/signup-submit.php" method="post"> 
		
		<fieldset>
			
			<input type="text" name="username" placeholder="username" autocomplete="off" required /> <br> <br>
			<input type="number" name="number" placeholder="number" min="0" max="9999999999" autocomplete="off" required /> <br> <br>
			<input type="password" name="password" placeholder="password" required /> <br> <br>



			<br>
			<input type="submit" name="submit" value="Sign up" />
		</fieldset>

		

</form>

<p class="already_have_account">Already have an account? Click <a id="link" href="login.php">here</a> to log in</p>

	




</div>
















<?php include("bottom.html"); ?>
