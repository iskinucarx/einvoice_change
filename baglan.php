<?php 

try {

	$db=new PDO('mysql:dbname=;host=','','');

	//echo "Veritabanı bağlantısı başarılı";

} catch (PDOExpception $e) {

	echo $e->getMessage();
}


?>