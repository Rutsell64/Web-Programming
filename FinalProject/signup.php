
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
		<div class = "signup_box">
			<form class = "form" action = "signup-submit.php" method = "post">
		
				<fieldset>
				<!-- This is how the user signup menu is created -->
			
					<legend> New User Signup: </legend>
				
						<h1><strong class = "signup"><label> Name: </label></strong>
						<input type = "name" maxlength = "16" size = "13" name = "name" required /></br></h1>
					
						<h1><strong class = "signup"><label> Password: </label></strong>
						<input type = "password" name = "password" required /></br></h1>

						<h1><strong class = "signup"><label> Email Address: </label></strong>
						<input type = "email" name = "email" required /></br></h1>
					
						<h1><strong class = "signup"><label> Phone Number: </label></strong>
						<input type = "phone_number" maxlength = "10" size = "10" name = "phone_number" required /> </br></h1>
		
						<h1><strong class = "signup"><label> Username: </label></strong>
						<input type = "username" name = "username" required /></br></h1>	
					
						<p class = "signup_have_account" ><a href = "login.php">Have an account? Click here to login</a></br></p>
		
						<input type = "submit" value = "Sign Up" />
				</fieldset></br>
			
			</form>
		</div>

	</body>

</html>
