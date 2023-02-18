<!DOCTYPE html>
<html>
<head>
	<title>Name Handling with retaining value</title>
</head>
<body>

			<form action = 'name_c.php' method = 'POST'>

			<fieldset>
				<legend> Name </legend>
				<input type='text' name='name'> <br>
		
				<input type='submit'>	
			</fieldset>
		</form>


	<?php 
		
		$fw = fopen('name.txt', 'a+');

		$name = $_POST['name'];
		fwrite($fw, $name);
		fclose($fw);


		$fr = fopen('name.txt', 'r');

		echo fread($fr, filesize('name.txt')) . " ";

		fclose($fr);



		


		

	 ?>

</body>
</html>