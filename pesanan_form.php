<br>
<?php
$model = new pesanan();
$data_pesanan = $model->datapesanan();

?>
<form action="pesanan_controller.php" method="POST">
    <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Tanggal</label>
        <div class="col-8">
            <input id="tanggal" name="tanggal" type="date" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Total</label>
        <div class="col-8">
            <input id="total" name="total" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Pelanggan</label>
        <div class="col-8">
            <input id="pelanggan_id" name="pelanggan_id" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Pembayaran</label>
        <div class="col-8">
            <input id="pembayaran_id" name="pembayaran_id" type="text" class="form-control">
        </div>
    </div>
    <br>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>