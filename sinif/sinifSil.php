<?php
include '../database/config.php'; 


//listelenen üyelerde silme işlemi istenenler için yapılan işlemler
$sil=$db->prepare("DELETE from sinif where id=:ID");
$kontrol=$sil->execute(array(
	'ID' => $_GET['ID']
));

if ($kontrol) {
		 ?>
		<script> alert("SİLME İŞLEMİ BAŞARILI");</script> 
		<meta http-equiv="refresh" content="0.0;url=sinifListesi.php?durum=ok"><?php
			exit; //her header'dan sonra sonlandırma için exit kullanmak yararlıdır.
		}
		else{
			 ?>
		<script> alert("SİLME İŞLEMİ BAŞARISIZ");</script> 
		<meta http-equiv="refresh" content="0.0;url=sinifListesi.php?durum=no"><?php
			exit;
		}
	


?>