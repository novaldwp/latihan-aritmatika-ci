<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Penjumlahan Aritmatika Versi CodeIgniter</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Form Penjumlahan</h1><br>
	<?php 
		$attrib = array('autofocus' => 'autofocus', ); 
		echo validation_errors(); 
	?>
	<p>silahkan masukan angka di kolom berikut!</p><br>
	<?php 
		echo form_open('aritmatika/penjumlahan');
		echo form_input('a1',$a1, $attrib);
	?> +
	<?php	
		echo form_input('a2',$a2);
	 	echo form_submit('submit', 'Hitung!');
	 	echo form_close();
	 ?>
	 <p>Hasil : <?php echo $hasil; ?></p>

</body>
</html>