<!DOCTYPE html>
<html>
<head>
	<title>Shapes</title>
</head>
<body>

	<?php 

		for($i = 0; $i < 3;$i++)
		{
			for($j = 0; $j <= $i; $j++)
			{
				echo "* ";
			}
			echo "<br>";
		}

		echo "<br> <br>";

		for($i = 3; $i >= 1; $i--)
		{
			for($j = $i; $j >= 1; $j--)
			{
				echo $j." ";
				if ($j == 1)
				{
					echo " ";
					echo "<br>";
				}
			}
		}

	 ?>

</body>
</html>