<?php 
ob_start();
session_start();
include "../database/config.php";

if(isset($_POST["giris"])){
	$eposta=$_POST['eposta'];
	$sifre=$_POST['sifre']; //girilen parolayı md5 ile şifreledim (veritabanında doğru arama yapabilmek için)
	$kullaniciSor=$db->prepare("SELECT * from admin where admin_eposta=:admin_eposta and admin_sifre=:admin_sifre ");
	$kullaniciSor->execute(array(
		'admin_eposta' => $eposta,
		'admin_sifre' => $sifre,
		
	)); // email, parola bilgileri doğruysa sisteme giriş yapılabilsin


if ($kullaniciCek=$kullaniciSor->rowCount()) {
	$_SESSION['eposta']=$eposta; //giriş yapıldıysa girilen maili session atıp sakladım
	$_SESSION['id']=$kullaniciCek['admin_id'];
	header("Location:anasayfa.php");
	exit;

}
else{
	?>
	<script> alert("GİRİŞ BAŞARISIZ");</script> 
	<meta http-equiv="refresh" content="0.0;url=../index.php?girisDurum=no"><?php
			exit; //her header'dan sonra sonlandırma için exit kullanmak yararlıdır.
		}
	}

	?>