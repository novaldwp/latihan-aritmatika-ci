<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Menu Hitung Aritmatika Versi CodeIgniter</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Silahkan Pilih Menu Perhitungan di bawah ini :</h1><br>
	<ul>
		<li><?php echo anchor('aritmatika/penjumlahan','Penjumlahan') ?></li>
		<li><?php echo anchor('aritmatika/pengurangan','Pengurangan') ?></li>
		<li><?php echo anchor('aritmatika/perkalian','Perkalian') ?></li>
		<li><?php echo anchor('aritmatika/pembagian','Pembagian') ?></li>
	</ul>

	<p><br>Page rendered {elapsed_time} seconds</p>
</body>
</html>