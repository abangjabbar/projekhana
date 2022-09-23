<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="content-wrap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 p-r-0 title-margin-right">
                <div class="page-header">
                    <div class="page-title mt-3">
                        <h4><?= $title; ?></h4>
                    </div>
                </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
                <div class="page-header">
                    <div class="page-title mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active"><?= $title; ?></li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /# column -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <form action="/penjualan/simpanHitungHarga" method="post">
                        <?= csrf_field(); ?>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="row mb-3">
                                    <label>No.Perhitungan : * </label>
                                    <input type="text" class="form-control input-sm" name="kode_customer" required>
                                </div>
                                <div class="row mb-3">
                                    <label>Tanggal : * </label>
                                    <input type="date" class="form-control input-sm" name="kode_customer" required>
                                </div>
                                <div class="row mb-3">
                                    <label>Customer : * </label>
                                    <input type="text" class="form-control input-sm" name="kode_customer" required>
                                </div>
                                <div class="row mb-3">
                                    <label>Type Box : * </label>
                                    <input type="text" class="form-control input-sm" name="kode_customer" required>
                                </div>
                                <div class="row mb-3">
                                    <label>Ukuran Box (mm) : * </label>
                                    <input type="text" class="form-control input-sm" name="kode_customer" required>
                                </div>
                                <div class="row mb-3">
                                    <label>Bahan : * </label>
                                    <input type="text" class="form-control input-sm" name="kode_customer" required>
                                </div>
                                <div class="row mb-3">
                                    <label>Ukuran Bahan (mm) : * </label>
                                    <input type="text" class="form-control input-sm" name="kode_customer" required>
                                </div>
                                <div class="row mb-3">
                                    <label>Discount Bahan (mm) : * </label>
                                    <input type="text" class="form-control input-sm" name="kode_customer" required>
                                </div>
                                <div class="row mb-3">
                                    <div class="input-group mb-3">
                                        <button class="btn btn-primary btn-sm" type="button" id="button-addon1">Hitung Biaya Bahan</button>
                                        <input type="text" class="form-control input-sm" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6>Biaya Lain-lain :</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary btn-success btn-sm">Simpan</button>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">Qty Order</label>
                                            <input type="text" class="form-control input-sm" id="inputAddress" placeholder="1234 Main St">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">Total Biaya Lain2</label>
                                            <input type="text" class="form-control input-sm" id="inputAddress" placeholder="1234 Main St">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="bootstrap-data-table-panel">
                                        <div class="table-wrapper">
                                            <table style="width: 600px;">
                                                <thead>
                                                    <th width="10%">Kode</th>
                                                    <th width="25%">Nama</th>
                                                    <th width="10%">Jenis</th>
                                                    <th width="25%">Nilai</th>
                                                    <th width="10%">Qty/Biaya Bahan</th>
                                                    <th width="10%">Total</th>
                                                    <th width="10%" style="text-align: center;">Aksi</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">Qty Order</label>
                                            <input type="text" class="form-control input-sm" id="inputAddress" placeholder="1234 Main St">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">Total Biaya Lain2</label>
                                            <input type="text" class="form-control input-sm" id="inputAddress" placeholder="1234 Main St">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">Qty Order</label>
                                            <input type="text" class="form-control input-sm" id="inputAddress" placeholder="1234 Main St">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">Qty Order</label>
                                            <input type="text" class="form-control input-sm" id="inputAddress" placeholder="1234 Main St">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4">
                                <button type="submit" class="btn btn-primary btn-success">Simpan</button>
                                <button type="submit" class="btn btn-primary btn-danger">Batal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>