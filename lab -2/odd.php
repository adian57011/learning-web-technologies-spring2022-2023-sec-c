<!DOCTYPE html>
<html>
<head>
	<title>Printing Odds</title>
</head>
<body>

	<?php 

		for($i = 0 ; $i < 100; $i++)
		{
			if($i % 2 == 1)
				echo $i."<br>";
		}

	 ?>

</body>
</html>