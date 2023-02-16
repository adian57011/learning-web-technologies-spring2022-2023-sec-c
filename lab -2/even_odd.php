<!DOCTYPE html>
<html>
<head>
	<title>Even/Odd</title>
</head>
<body>

	<form action="even_odd.php" method="POST">
		Enter a number:

		<input type="number" name="number"> <br>
		<input type="submit">
		
	</form>

	<?php 
		$number = $_POST['number'];

		if($number % 2 == 0)
		{
			echo "It is Even Number";
		}

		else
		{
			echo "It is odd Number";
		}
	 ?>

</body>
</html>