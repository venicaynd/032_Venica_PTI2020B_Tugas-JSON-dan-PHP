<html>
<head>
    <title>Biodata Venica</title>
</head>
<body>
	<h1>Venica Yulia Nur Dheanty</h1>
	
	<?php
	$data = '{
		"name" : "Venica Yulia Nur Dheanty",
		"occupation" : "mahasiswa",
		"smstr" : 4,
		"jrsn" : "Teknik Informatika",
		"university" : "Universitas Negeri Surabaya"
		
	}';
	
	$a = json_decode($data, true);
	echo "{$a["name"]} adalah seorang {$a["occupation"]} semester {$a["smstr"]} jurusan {$a["jrsn"]} di {$a["university"]}";
	?>
	
</body>
</html>
