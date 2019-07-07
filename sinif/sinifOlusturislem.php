<?php

include '../database/config.php';
if (isset($_POST['olustur'])) {

        
        $ad = $_POST['ad'];
        $mevcut = $_POST['mevcut'];
        $ibeacon1 = $_POST['ibeacon1'];
        $ibeacon2 = $_POST['ibeacon2'];
        $ibeacon3 = $_POST['ibeacon3'];
        $ibeacon4 = $_POST['ibeacon4'];

        $query = $db->query("INSERT INTO sinif VALUES (null,'$ad','$mevcut','$ibeacon1','$ibeacon2','$ibeacon3','$ibeacon4')", PDO::FETCH_ASSOC);

        if ($query) {
            ?>
<script>
alert("KAYIT BAŞARILI");
</script>
<meta http-equiv="refresh" content="0.2;url=sinifOlustur.php">

<?php
} else {
            ?>
<script>
alert("KAYIT BAŞARISIZ");
</script>
<meta http-equiv="refresh" content="0.2;url=sinifOlustur.php">

<?php
}

}
?>