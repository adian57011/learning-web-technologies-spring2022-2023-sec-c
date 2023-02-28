<!DOCTYPE html>
<html>
<head>
	<title>Name Handling with retaining value</title>
</head>
<body>

			<form action = 'email_c.php' method = 'POST'>

			<fieldset>
				<legend> Email </legend>
				<input type='email' name='email'> <br>
		
				<input type='submit'>	
			</fieldset>
		</form>


	<?php 
		
		$fw = fopen('email.txt', 'a+');

		$email = $_POST['email'];
		fwrite($fw, $email);
		fwrite($fw, "\n");
		fclose($fw);


		$fr = fopen('email.txt', 'r');

		echo fread($fr, filesize('email.txt'));

		fclose($fr);
	 ?>

</body>
</html>