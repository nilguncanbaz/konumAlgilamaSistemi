<?php
	  
		$server="localhost";
		$kullaniciAdi="root";
		$sifre = "";


			try{
				$db=new PDO("mysql:host=localhost;dbname=konumalgilamasistemi;charset=utf8",$kullaniciAdi,$sifre);
			}catch(PDOException $e){

				echo $e->getMessage();
			}
	
?>








