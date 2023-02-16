<!DOCTYPE html>
<html>
<head>
	<title>Largest of Three!</title>
</head>
<body>

	<form action="largest.php" method="POST">

		<input type="number" name="num1"> <br>
		<input type="number" name="num2"> <br>
		<input type="number" name="num3"> <br>

		<input type="submit" >
		
	</form>

	<?php 

		$a = $_POST['num1'];
		$b = $_POST['num2'];
		$c = $_POST['num3'];

		if($a > $b && $a > $c)
			echo $a."is the largest number";
		else if ($b > $a && $b > $c)
			echo $b." is the largest number";
		else
			echo $c." is the largest number";
	 ?>

</body>
</html>