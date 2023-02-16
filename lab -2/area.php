<!DOCTYPE html>
<html>
<head>
	<title>Area of Rectangle</title>
</head>
<body>

	<form action="area.php" method="POST">
		Enter length
		 <input type="number" name="length"> <br>
		 Enter width
		 <input type="number" name="width">
		 <input type="submit">
		
	</form>

	<?php 
		$length = $_POST['length'];
		$width = $_POST['width'];

		$area = $length * $width;

		$perimeter = 2*($length + $width);

		echo "Area: ".$area."<br>";
		echo "Perimeter: ".$perimeter."\r\n";
	 ?>

</body>
</html>