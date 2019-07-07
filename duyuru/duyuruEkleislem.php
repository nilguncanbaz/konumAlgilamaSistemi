<?php

include '../database/config.php';
if (isset($_POST['ekle'])) {

        
        $sinif = $_POST['sinif'];
        $baslik = $_POST['baslik'];
        $icerik = $_POST['icerik'];


        $query = $db->query("INSERT INTO duyurular VALUES (null,'$sinif','$baslik','$icerik')", PDO::FETCH_ASSOC);

        if ($query) {
            ?>
<script>
alert("KAYIT BAŞARILI");
</script>
<meta http-equiv="refresh" content="0.2;url=duyuruEkle.php">

<?php
} else {
            ?>
<script>
alert("KAYIT BAŞARISIZ");
</script>
<meta http-equiv="refresh" content="0.2;url=duyuruEkle.php">

<?php
}

}
?>