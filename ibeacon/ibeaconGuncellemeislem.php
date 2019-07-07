<?php
include '../database/config.php';
if (isset($_POST['guncelle'])) {

    $guncel=$_REQUEST['guncel'];
    $ad = $_POST['ad'];
    $bina = $_POST['bina'];
    $kat = $_POST['kat'];
    
    $guncelle=$db->prepare("UPDATE ibeaconlar 
    SET ibeacon_AD=?,ibeacon_BINA=?,ibeacon_KAT=?
    WHERE id=?
    ");
$query=$guncelle->execute([$ad,$bina,$kat,$guncel]);
if ($query) {?>
<script>
alert("KAYIT GÜNCELLENDİ.");
</script>
<meta http-equiv="refresh" content="0.2;url=ibeaconListele.php">

<?php
} else {?>
<script>
alert("KAYIT GÜNCELLENEMEDİ.");
</script>
<meta http-equiv="refresh" content="0.2;url=ibeaconListele.php">

<?php
}
}
?>