<!DOCTYPE html>
<html>
<head>
	<title>Name Handling with retaining value</title>
</head>
<body>

			<form action = 'gender_c.php' method = 'POST'>

			<fieldset>
				<legend> Gender </legend>
				<input type='radio' name='gender' value="Male"> Male <br>
				<input type='radio' name='gender' value="Female"> Female <br>
				<input type='radio' name='gender' value = "Others"> Others <br>
		
				<input type='submit'>	
			</fieldset>
		</form>


	<?php 
		
		$fw = fopen('gender.txt', 'a+');

		$gender = $_POST['gender'];
		fwrite($fw, $gender);
		fwrite($fw, "\n");
		fclose($fw);


		$fr = fopen('gender.txt', 'r');

		echo fread($fr, filesize('gender.txt'));

		fclose($fr);
	 ?>

</body>
</html>