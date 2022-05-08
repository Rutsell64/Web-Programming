<DOCTYPE html>
	<head>
		<link href = "MGL.css" type = "text/css" rel = "stylesheet"/>
	</head>
	
	<body> 
		
		<form class = "form" action = "MGL.php" method = "post">
		
			<fieldset>
			<!-- This is how the user signup menu is created -->
			
				<legend> Login: </legend>
				
					<h1><strong class = "login"><label> Username: </label></strong>
					<input type = "name" maxlength = "16" size = "20 name = "name" required /></br></h1>
					
					<h1><strong class = "login"><label> Password: </label></strong>
					<input type = "password" name = "password" required /></br></h1>
					
					<p class = "login_recover" ><a href = "recover.php">Forgot password?</a></br></p>
					
					<p class = "login_button"><input type = "submit" value = "Log In" /></p>
					
					<p class = "login_create_new"> <a href = "signup.php">Create new account</a> </br> </p>
					
			</fieldset></br>
			
		</form>

	</body>

</html>