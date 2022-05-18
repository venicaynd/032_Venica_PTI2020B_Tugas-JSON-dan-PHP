<html>
<head>
    <title>Data Buah</title>
</head>
<body>
	<h1>Nama-Nama Buah</h1>
	
	<?php
	$fruits = array('Apple', 'Avocado', 'Banana', 'Strawberry', 'Pineapple', 'Mango');

	$json = json_encode($fruits, JSON_PRETTY_PRINT | JSON_FORCE_OBJECT);

	echo'<pre>';
	echo $json;
	echo '</pre>';
	?>
	
</body>
</html>
