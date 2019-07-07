<?php
include '../database/config.php';
if (isset($_POST['guncelle'])) {

    $id=$_REQUEST['id'];
    $ad = $_POST['ad'];
    $mevcut = $_POST['mevcut'];

    $guncelle=$db->prepare("UPDATE sinif 
    SET sinif_ad=?,sinif_mevcudu=?
    WHERE id=?
    ");
$query=$guncelle->execute([$ad,$mevcut,$id]);
if ($query) {?>
<script>
alert("KAYIT GÜNCELLENDİ.");
</script>
<meta http-equiv="refresh" content="0.2;url=sinifListesi.php">

<?php
} else {?>
<script>
alert("KAYIT GÜNCELLENEMEDİ.");
</script>
<meta http-equiv="refresh" content="0.2;url=sinifListesi.php">

<?php
}
}
?>