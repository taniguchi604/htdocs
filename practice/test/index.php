<!DOCTYPE html>

<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>Nesthair</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="screen">
</head>

<body>
	<h1><?php echo 'aaaaa'; ?></h1>
	<?php
	$variable = [1, 2, 3];
	foreach ($variable as $key => $value) {
		echo $value.'<br>';
	}
	?>
</body>

</html>
