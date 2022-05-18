<?php
$ch =curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost/tugas_json/json_curl/mhs.json");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$output = curl_exec($ch);
curl_close($ch);
$data = json_decode($output);
//echo "<pre>"; print_r ($data); echo"</pro>";
//echo $data[0]->nama;
?>

<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
	<h1>-- Data Mahasiswa --</h1>

    <?php
    foreach($data as $mhs){
        echo '
        <label> Nama :</label>
        '.$mhs->nama.'
        <br/>
        <label> NIM :</label>
        '.$mhs->nim.'
        <br/>
        <label> Riwayat Pendidikan :</label>
        '.$mhs->riwayat_pendidikan->SMA.'
        <br/>
        ';

        echo "<label> Hobi :</label><br/>";
        foreach ($mhs->hobi as $hobi){
            echo "- ".$hobi;
            echo "<br/>";
        }
    echo "<hr/>";
	}
    ?>
</body>

</html>