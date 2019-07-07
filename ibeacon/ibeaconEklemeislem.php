<?php

include '../database/config.php';
if (isset($_POST['ekle'])) {

    $Sor = $db->prepare("SELECT * from ibeaconlar where ibeacon_ID=:ibeacon_ID");
    $Sor->execute(array(
        'ibeacon_ID' => $_POST['id']));
    $say = $Sor->rowCount();
    if (!$say) {
        $id = $_POST['id'];
        $ad = $_POST['ad'];
        $bina = $_POST['bina'];
        $kat = $_POST['kat'];
        
        $query = $db->query("INSERT INTO ibeaconlar VALUES (null,'$id','$ad','$bina','$kat')", PDO::FETCH_ASSOC);

        if ($query) {
            ?>
<script>
alert("KAYIT BAŞARILI");
</script>
<meta http-equiv="refresh" content="0.2;url=ibeaconEkle.php">

<?php
} else {
            ?>
<script>
alert("KAYIT BAŞARISIZ");
</script>

<?php
}

    } else {?>
<script>
alert("KAYITLI ID GİRDİNİZ! ");
</script>
<meta http-equiv="refresh" content="0.2;url=ibeaconEkle.php">
<?php
}
}
?>