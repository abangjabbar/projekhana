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
                    <form action="/penjualan/simpanParameterBiaya" method="post">
                        <?= csrf_field(); ?>
                        <div class="row">
                            <div class="col-3">
                                <div class="row">
                                    <label class="col-sm-5 control-label">No. Txn : * </label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control input-sm" name="kode" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-5 control-label">Tanggal : * </label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control input-sm " name="nama" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-5 control-label">Revisi : * </label>
                                    <div class="col-sm-7">
                                        <input type="date" class="form-control input-sm" name="kode" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="row">
                                    <label class="col-sm-4 control-label">Customer : * </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm" name="kode" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label">Alamat : * </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm " name="nama" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label form-text-font-size">Ditujukan/UP : *</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm " name="nama" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="row">
                                    <label class="col-sm-4 control-label">Keterangan : * </label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" id="floatingTextarea2" style="height: 100px; font-size:12px;" name="alamat_kantor"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-primary btn-success">Simpan</button>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-primary btn-danger">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-wrapper">
                                <div class="table-responsive">
                                    <table>
                                        <thead>
                                            <th width="80px">#</th>
                                            <th width="300px">Deskripsi</th>
                                            <th width="100px">Panjang</th>
                                            <th width="100px">Lebar</th>
                                            <th width="100px">Tinggi</th>
                                            <th width="300px">Bahan</th>
                                            <th width="100px">Flute</th>
                                            <th width="150px">Harga</th>
                                            <th width="200px">Min Order</th>
                                            <th width="150px" style="text-align: center;">Aksi</th>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>