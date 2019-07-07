<?php
include '../database/config.php';
if (isset($_POST['guncelle'])) {
    
    $id=$_REQUEST['id'];
    $ad = $_POST['ad'];
    $baslik = $_POST['baslik'];
    $icerik = $_POST['icerik'];
   
    $guncelle=$db->prepare("UPDATE duyurular
    SET sinif_adi=?,duyuru_baslik=?,duyuru=?
    WHERE duyuru_id=?
    ");
$query=$guncelle->execute([$ad,$baslik,$icerik,$id]);
if ($query) {?>
<script>
alert("KAYIT GÜNCELLENDİ.");
</script>
<meta http-equiv="refresh" content="0.2;url=duyuruListele.php">

<?php
} else {?>
<script>
alert("KAYIT GÜNCELLENEMEDİ.");
</script>
<meta http-equiv="refresh" content="0.2;url=duyuruListele.php">

<?php
}
}
?>