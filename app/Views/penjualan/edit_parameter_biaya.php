<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="content-wrap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 p-r-0 title-margin-right">
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
                    <form action="<?= site_url('penjualan/updateParameterBiaya/' . $parameterBiaya->parameter_biaya_id); ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="PUT">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <label class="col-sm-4 control-label">Kode : * </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm" name="kode" value="<?= $parameterBiaya->kode; ?>" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label">Nama : * </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm " name="nama" value="<?= $parameterBiaya->nama; ?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label">Type :</label>
                                    <div class="col-sm-8">
                                        <select class="form-control form-control-sm" name="type" value="<?= set_value('waktu_pembayaran'); ?>" required>
                                            <option></option>
                                            <option value="RP">Rupiah</option>
                                            <option value="%">Presentase</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-primary btn-success">Simpan</button>
                                    </div>
                                    <div class="col-sm-2">
                                        <button onclick="history.back()" class="btn btn-primary btn-danger">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>