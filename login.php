<?php
	
	//echo $_POST["email"];
	$email_error = "";
	$password_error = "";
	$name_error = "";
	$cname_error = "";
	$cemail_error = "";
	$cpassword_error = "";
	
	//kontrollime, et keegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "keegi vajutas nuppu";
		
		if (isset($_POST["login"])) {
			
			//kontrollin, et e-post ei ole tühi
			
			if ( empty($_POST["email"])){
				$email_error = "See väli on kohustuslik";
					
			}
			
			//kontrollin, et password ei ole tühi
			
			if ( empty($_POST["password"])){
				$password_error = "See väli on kohustuslik";
				
			} else {
				
				//kui oleme siia jõudnud, siis parool ei ole tühi
				//kontrollin, et oleks vähemalt 8 sümbolit pikk
				if(strlen($_POST["password"]) < 8) {
					
					$password_error = "Peab olema vähemalt 8 tähemärki pikk";
					
				}
				
			}
		} else {
			if ( empty($_POST["cname"])){
				$cname_error = "See väli on kohustuslik";
				
			}
			
			if ( empty($_POST["cemail"])){
				$cemail_error = "See väli on kohustuslik";
					
			}
			
			if ( empty($_POST["cpassword"])){
				$cpassword_error = "See väli on kohustuslik";
				
			} else {
				
				//kui oleme siia jõudnud, siis parool ei ole tühi
				//kontrollin, et oleks vähemalt 8 sümbolit pikk
				if(strlen($_POST["cpassword"]) < 8) {
					
					$cpassword_error = "Peab olema vähemalt 8 tähemärki pikk";
					
				}
				
			}
		}
	}

?>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	<h2>Log in</h2>
	
		<form action="login.php" method="post" >
			<input name="email" type="email" placeholder="E-post">  <?php echo $email_error; ?><br><br>
			<input name="password" type="password" placeholder="parool">  <?php echo $password_error; ?><br><br>
			<input type="submit" name="login" value="Login">  <br><br>
		</form>
	
	<h2>Create user</h2>
	
		<form action="login.php" method="post"> 
			<input name="cname" type="text" placeholder="Eesnimi Perekonnanimi"> <?php echo $cname_error; ?> <br><br>
			<input name="cemail" type="email" placeholder="E-post"> <?php echo $cemail_error; ?> <br><br>
			<input name="cpassword" type="password" placeholder="parool"> <?php echo $cpassword_error; ?> <br><br> 
			<input type="submit" value="Registreeru"> <br><br>
		</form>
	
	<h2>MVP idee</h2>
	<p>Internetilehekülg, kus näidatakse League of Legends'i turniire ja kus saab kihla vedada, milline tiim, millise
	turniiri võidab. </p>
</body>

</html>