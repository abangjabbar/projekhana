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
                    <form action="<?= site_url('penjualan/updateMasterSales/' . $masterSales->sales_id); ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="PUT">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Kode Sales :</label>
                                    <div style="color: red">*</div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm" name="kode_sales" value="<?= $masterSales->kode_sales; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 control-label">Nama :</label>
                                    <div style="color: red">*</div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm " name="nama_sales" value="<?= $masterSales->nama_sales; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 control-label">Type :</label>
                                    <div class="col-sm-8">
                                        <select class="form-control form-control-sm" name="type">
                                            <option></option>
                                            <option>Sales Internal</option>
                                            <option>Sales External</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 control-label">Telephone :</label>
                                    <div style="color: red">*</div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm " name="telp_sales" value="<?= $masterSales->telp_sales; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 control-label">Alamat :</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm " name="alamat_sales" value="<?= $masterSales->alamat_sales; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 control-label">Kota :</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm " name="kota_sales" value="<?= $masterSales->kota_sales; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 control-label">Provinsi :</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm " name="provinsi_sales" value="<?= $masterSales->provinsi_sales; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 control-label">Keterangan :</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm " name="keterangan" value="<?= $masterSales->keterangan; ?>">
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
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>