<DOCTYPE html>
	<head>
		<link href = "MGL.css" type = "text/css" rel = "stylesheet"/>
	</head>
	<body> 
		<div id="banner">

            <a href="home.php">
                <img class="logo"src="logo.png" width = "150" height = "150" />
            </a>
    </div>
		<div class = "login_box">
			<form class = "form" action = "login-submit.php" method = "post">
		
				<fieldset>
				<!-- This is how the user signup menu is created -->
			
					<p class = "new_user_title">Login</p>
				
						<h1><input type = "username" name = "username" maxlength = "16" size = "29" placeholder = "Username" required /></br></h1>
					
						<h1><input type = "password" name = "password" maxlength = "16" size = "29" placeholder = "Password" required /></br></h1>
					
						<p class = "login_have_account" ><a href = "signup.php">Don't have an account? Let's create one</a></br></p>
					
						<p class = "login_button"><input type = "submit" value = "Log In" /></p>
					
				</fieldset></br>
			
			</form>
		</div>

	</body>

</html>
