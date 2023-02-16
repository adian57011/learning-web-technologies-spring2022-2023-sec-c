<!DOCTYPE html>
<html>
<head>
	<title>Name Handling on page </title>
</head>
<body>

	<form action = "name_b.php" method = "POST">

		<fieldset>
			<legend> Name </legend>
			<input type="text" name="name">
		
			<input type="submit">	
		</fieldset>
	</form>

	<?php 

		$name = $_POST['name'];

		echo $name;
	 ?>

</body>
</html>