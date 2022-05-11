<?php include("top.php"); ?>


<div class="login">

<form action="/MGL/login-submit.php" method="post"> 
		
		<fieldset>
			
			<input type="text" name="username" placeholder="username" autocomplete="off" required /> <br> <br>
			<input type="password" name="password" placeholder="password" required /> <br> <br>



			<br>
			<input type="submit" name="submit" value="Log in" />
		</fieldset>

		

	</form>

	<p class="dont_have_account">Don't have an account? <a id="link" href="signup.php">Let's create one</a></p>

	




</div>

<?php include("bottom.html"); ?>