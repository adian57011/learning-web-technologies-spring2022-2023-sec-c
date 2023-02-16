<!DOCTYPE html>
<html>
<head>
	<title>Vat</title>
</head>
<body>

	<form action="vat.php" method="POST">
		
		Enter amount: 
		<input type="number" name="amount"> <br>
		<input type="submit" >
	</form>

	<?php 
		$amount = $_POST['amount'];
		$k = 0.15;
		$vat = $amount * $k ;

		echo "Value Added Tax: ".$vat;
	 ?>

</body>
</html>