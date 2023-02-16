<!DOCTYPE html>
<html>
<head>
	<title>Search in array</title>
</head>
<body>

	<?php 

		$value = array(10,12,15,18,20,100,200 );

		$search = 5;

		$n = count($value);

		$flag = 0;

		for($i = 0; $i < $n; $i++)
		{
			if($value[$i] == $search);
			{
				$flag = 1;
			}
		}

		if($flag == 1)
		{
			echo "Data found!!";
		}
		else
			echo "data not found!!";

	 ?>

</body>
</html>