<?php
include '../database/config.php'; 


//listelenen üyelerde silme işlemi istenenler için yapılan işlemler
$sil=$db->prepare("DELETE from duyurular where duyuru_id=:duyuru_id");
$kontrol=$sil->execute(array(
	'duyuru_id' => $_GET['ID']
));

if ($kontrol) {
		 ?>
		<script> alert("SİLME İŞLEMİ BAŞARILI");</script> 
		<meta http-equiv="refresh" content="0.0;url=duyuruListele.php?durum=ok"><?php
			exit; //her header'dan sonra sonlandırma için exit kullanmak yararlıdır.
		}
		else{
			 ?>
		<script> alert("SİLME İŞLEMİ BAŞARISIZ");</script> 
		<meta http-equiv="refresh" content="0.0;url=duyuruListele.php?durum=no"><?php
			exit;
		}
	


?>