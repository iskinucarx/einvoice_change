<?php 

include 'baglan.php';


if (isset($_POST['acmaislemi'])) {
	
	$FICHENO=$_POST['FICHENO'];

	$guncelle=$db->prepare("UPDATE invoice set
		ESTATUS=:ESTATUS

		where FICHENO={$_POST['FICHENO']}
		");

	$update=$guncelle->execute(array(

		'ESTATUS' => 10
		
	));

	if ($update) {

		Header("Location:index.php?durum=ok");

	} else {

		Header("Location:index.php?durum=no");

	}
}

if (isset($_POST['kapamaislemi'])) {
	
	$FICHENO=$_POST['FICHENO'];

	$guncelle=$db->prepare("UPDATE invoice set
		ESTATUS=:ESTATUS

		where FICHENO={$_POST['FICHENO']}
		");

	$update=$guncelle->execute(array(

		'ESTATUS' => 5
		
	));

	if ($update) {

		Header("Location:index.php?durum=ok");

	} else {

		Header("Location:index.php?durum=no");

	}
}

 ?>