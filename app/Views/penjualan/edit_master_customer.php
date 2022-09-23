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
                    <form action="<?= site_url('penjualan/updateMasterCustomer/' . $masterCustomer->customer_id); ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="PUT">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <label class="col-sm-4 control-label">Kode Customer : * </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm" name="kode_customer" value="<?= $masterCustomer->kode_customer; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label">Nama : * </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm " name="nama_customer" value="<?= $masterCustomer->nama_customer; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label">Kontak : * </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm " name="kontak_customer" value="<?= $masterCustomer->kontak_customer; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label">Jabatan :</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm " name="jabatan" value="<?= $masterCustomer->jabatan; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label">No. HP :</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm " name="no_hp" value="<?= $masterCustomer->no_hp; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label">Telephone :</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm " name="no_telp" value="<?= $masterCustomer->no_telp; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label">Fax :</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm " name="fax" value="<?= $masterCustomer->fax; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label">Email :</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm " name="email_customer" value="<?= $masterCustomer->email_customer; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label">Sales :</label>
                                    <div class="col-sm-8">
                                        <select class="form-control form-control-sm" name="sales" value="<?= set_value('sales'); ?>">
                                            <option value="" hidden></option>
                                            <?php foreach ($sales as $s) : ?>
                                                <option value="<?= $s->sales_id ?>"><?= $s->nama_sales; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label">Waktu Pembayaran :</label>
                                    <div class="col-sm-8">
                                        <select class="form-control form-control-sm" name="waktu_pembayaran" value="<?= set_value('waktu_pembayaran'); ?>">
                                            <option></option>
                                            <option>CASH</option>
                                            <option>15 HARI</option>
                                            <option>30 HARI</option>
                                            <option>45 HARI</option>
                                            <option>60 HARI</option>
                                            <option>75 HARI</option>
                                            <option>90 HARI</option>
                                            <option>120 HARI</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 mb-3 control-label">Limit Kredit :</label>
                                    <div class="col-sm-8 mb-6">
                                        <input type="text" class="form-control input-sm " name="limit_kredit" value="<?= $masterCustomer->limit_kredit; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label">Kawasan Berikat :</label>
                                    <div class="col-sm-8">
                                        <select class="form-control form-control-sm" name="berikat" id="ddlViewBy">
                                            <option></option>
                                            <option>YA</option>
                                            <option>TIDAK</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 mb-3 control-label">NPWP :</label>
                                    <div class="col-sm-8 mb-6">
                                        <input type="text" class="form-control input-sm " name="npwp" value="<?= $masterCustomer->npwp; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 mb-3 control-label">KTP :</label>
                                    <div class="col-sm-8 mb-6">
                                        <input type="text" class="form-control input-sm " name="ktp" value="<?= $masterCustomer->ktp; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <label class="col-sm-4 mb-3 control-label">Alamat Kantor :</label>
                                    <div class="col-sm-8 mb-6">
                                        <textarea class="form-control" id="floatingTextarea2" style="height: 100px; font-size:12px;" name="alamat_kantor"><?= $masterCustomer->alamat_kantor; ?></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 mb-3 control-label">Kota :</label>
                                    <div class="col-sm-8 mb-6">
                                        <input type="text" class="form-control input-sm " name="kota_customer" value="<?= $masterCustomer->kota_customer; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 mb-3 control-label">Provinsi :</label>
                                    <div class="col-sm-8 mb-6">
                                        <input type="text" class="form-control input-sm " name="provinsi_customer" value="<?= $masterCustomer->provinsi_customer; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 mb-3 control-label">Kode Pos :</label>
                                    <div class="col-sm-4 mb-6">
                                        <input type="text" class="form-control input-sm " name="kode_pos" value="<?= $masterCustomer->kode_pos; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 mb-3 control-label">Alamat Kirim 1 :</label>
                                    <div class="col-sm-8 mb-6">
                                        <textarea class="form-control" id="floatingTextarea2" style="height: 100px; font-size:12px;" name="alamat_kirim1"><?= $masterCustomer->alamat_kirim1; ?></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 mb-3 control-label">Kontak Kirim 1 :</label>
                                    <div class="col-sm-8 mb-6">
                                        <input type="text" class="form-control input-sm " name="kontak_kirim1" value="<?= $masterCustomer->kontak_kirim1; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 mb-3 control-label">Alamat Kirim 2 :</label>
                                    <div class="col-sm-8 mb-6">
                                        <textarea class="form-control" id="floatingTextarea2" style="height: 100px; font-size:12px;" name="alamat_kirim2"><?= $masterCustomer->alamat_kirim2; ?></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 mb-3 control-label">Kontak Kirim 2 :</label>
                                    <div class="col-sm-8 mb-6">
                                        <input type="text" class="form-control input-sm " name="kontak_kirim2" value="<?= $masterCustomer->kontak_kirim2; ?>">
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

<script type="text/javascript">
    var selectedValue = document.getElementById("ddlViewBy").value;
</script>