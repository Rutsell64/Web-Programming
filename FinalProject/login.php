
<DOCTYPE html>
	<head>
		<link href = "MGL.css" type = "text/css" rel = "stylesheet"/>
	</head>
	<body> 
		<div id="banner">

            <a href="home.php">
                <img class="logo"src="logo.png" width = "150" height = "100" />
            </a>
    </div>
		<div class = "login_box">
			<form class = "form" action = "login-submit.php" method = "post">
		
				<fieldset>
				<!-- This is how the user signup menu is created -->
			
					<legend> Login: </legend>
				
						<h1><strong class = "login"><label> Username: </label></strong>
						<input type = "username" maxlength = "16" size = "20" name = "username" required /></br></h1>
					
						<h1><strong class = "login"><label> Password: </label></strong>
						<input type = "password" name = "password" required /></br></h1>
					
						<p class = "login_recover" ><a href = "signup.php">Don't have an account? Let's create one</a></br></p>
					
						<p class = "login_button"><input type = "submit" value = "Log In" /></p>
					
						<p class = "login_create_new"> <a href = "signup.php">Create new account</a> </br> </p>
					
				</fieldset></br>
			
			</form>
		</div>
	</body>

</html>