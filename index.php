<?php include 'baglan.php';
error_reporting(E_ALL); // Hata kodlarını aktif et.
ini_set('display_errors','On'); // Hata kodlarını ekranda gözükmesini sağla.
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>E-Fatura Statü Değiştirme</title>
</head>
<body background="invoice.jpg">

		<form action="islem.php" method="POST">
		
		<input type="text" required="required " name="FICHENO" placeholder="Fatura Numarasını Girin">
		<button type="submit" name="acmaislemi">Aç</button>
		<button type="submit" name="kapamaislemi">Kapat</button>

		

	</form>

</body>
</html>