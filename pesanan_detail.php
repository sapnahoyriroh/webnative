<?php
$id = $_REQUEST['id'];
$model = new Pesanan();
$pesanan = $model->getPesanan($id);

?>

<div>
    <h1>Detail Pesanan</h1>
    <h3>Tanggal : <?= $pesanan['tanggal'] ?> </h3>
</div>