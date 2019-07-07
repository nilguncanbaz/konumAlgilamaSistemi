<?php
include '../database/config.php';
if (isset($_POST['guncelle'])) {

    $id=$_REQUEST['id'];    
    $ad = $_POST['ad'];
    $hoca = $_POST['hoca'];
    $sure = $_POST['sure'];
    $tarih = $_POST['tarih'];
    $saat = $_POST['saat'];
        
   
    $guncelle=$db->prepare("UPDATE dersler
    SET ders_adi=?,ders_hocasi=?,ders_suresi=?,tarih=?,baslama_saati=?
    WHERE id=?
    ");
$query=$guncelle->execute([$ad,$hoca,$sure,$tarih,$saat,$id]);
if ($query) {?>
<script>
alert("KAYIT GÜNCELLENDİ.");
</script>
<meta http-equiv="refresh" content="0.2;url=dersListesi.php">

<?php
} else {?>
<script>
alert("KAYIT GÜNCELLENEMEDİ.");
</script>
<meta http-equiv="refresh" content="0.2;url=dersListesi.php">

<?php
}
}
?>