<!DOCTYPE html>
<html>
<head>
	<title>Name Handling with retaining value</title>
</head>
<body>

	<form action = "name_c.php" method = "POST">

		<fieldset>
			<legend> Name </legend>
			<input type="text" name="name"> <br>
		
			<input type="submit">	
		</fieldset>
	</form>



	<?php 

		if(isset($_POST['name']));
		{
			$name = $_POST['name'];

			$fp = fopen('name.txt','a');

			fwrite($fp,$name);
			fclose($fp);
		}

		$fp= fopen('name.txt');
		echo fread('$fp',filesize('name.txt'));
		fclose($fp);

	 ?>

</body>
</html>