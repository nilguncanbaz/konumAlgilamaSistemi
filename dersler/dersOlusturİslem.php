<?php

include '../database/config.php';
if (isset($_POST['olustur'])) {
 
        $ad = $_POST['ad'];
        $hoca = $_POST['hoca'];
        $sinif = $_POST['sinif'];
        $sure = $_POST['sure'];
        $tarih = $_POST['tarih'];
        $saat = $_POST['saat'];
    
        $query = $db->query("INSERT INTO dersler VALUES (null,'$ad','$hoca','$sinif','$sure','$tarih','$saat')", PDO::FETCH_ASSOC);

        if ($query) {
            ?>
<script>
alert("KAYIT BAŞARILI");
</script>
<meta http-equiv="refresh" content="0.2;url=dersOlustur.php">

<?php
} else {
            ?>
<script>
alert("KAYIT BAŞARISIZ");
</script>
<meta http-equiv="refresh" content="0.2;url=dersOlustur.php">

<?php
}

}
?>