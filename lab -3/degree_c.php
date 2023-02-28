<!DOCTYPE html>
<html>
<head>
	<title>Name Handling with retaining value</title>
</head>
<body>

			<form action = 'degree_c.php' method = 'POST'>

			<fieldset>
				<legend> Gender </legend>
				<input type='checkbox' name='degree[]' value="SSC"> SSC <br>
				<input type='checkbox' name='degree[]' value="HSC"> HSC <br>
				<input type='checkbox' name='degree[]' value = "BSC"> BSC <br>
		
				<input type='submit'>	
			</fieldset>
		</form>


	<?php 
		
		$fw = fopen('degree.txt', 'a+');

		$degrees = $_POST['degree[]'];
		foreach($degrees as $degree)
		{
			fwrite($fw,$degree);
			fwrite($fw,"\n");
		}
		fclose($fw);


		$fr = fopen('degree.txt', 'r');

		echo fread($fr, filesize('degree.txt'));

		fclose($fr);
	 ?>

</body>
</html>