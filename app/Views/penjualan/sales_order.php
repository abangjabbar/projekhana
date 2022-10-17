<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title mt-3">
                            <h4><?= $title; ?></h4>
                            <!-- <a href="/penjualan/tambahSalesOrder" class="btn btn-primary btn-sm">Tambah <?= $title; ?></a> -->
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-item">
                                Tambah <?= $title; ?>
                            </button>
                            <?php if (session()->get('success')) : ?>
                                <div class="alert alert-success alert-dismissible fade show" role="success">
                                    <strong><?= session()->getFlashdata('success'); ?></strong>
                                    </button>
                                </div>
                            <?php endif; ?>
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
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="bootstrap-data-table-panel">
                        <div class="outer-wrapper">
                            <div class="table-wrapper">
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table-export">
                                        <thead>
                                            <th width="80px">#</th>
                                            <th width="150px">No. Penjualan</th>
                                            <th width="100px">Tanggal</th>
                                            <th width="300px">Customer</th>
                                            <th width="300px">No PO Customer</th>
                                            <th width="220px">Tgl PO</th>
                                            <th width="300px">Tgl Kirim</th>
                                            <th width="300px">Gross</th>
                                            <th width="300px">PPN</th>
                                            <th width="300px">Nett</th>
                                            <th width="300px">Transporter</th>
                                            <th width="300px">Tujuan</th>
                                            <th width="300px">Tgl Buat</th>
                                            <th width="300px">User</th>
                                            <th width="150px" style="text-align: center;">Aksi</th>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($salesOrder as $c) : ?>
                                                <tr>
                                                    <th scope="row"><?= $i++; ?></th>
                                                    <td style="text-align: center;"><?= $c->nomor_so; ?></td>
                                                    <td><?= $c->tanggal_so; ?></td>
                                                    <td><?= $c->id_customer; ?></td>
                                                    <td><?= $c->nomor_po; ?></td>
                                                    <td><?= $c->tanggal_po; ?></td>
                                                    <td><?= $c->tanggal_kirim; ?></td>
                                                    <td><?= $c->harga; ?></td>
                                                    <td><?= $c->harga_ppn; ?></td>
                                                    <td><?= $c->harga_total; ?></td>
                                                    <td><?= $c->transporter; ?></td>
                                                    <td><?= $c->tujuan; ?></td>
                                                    <td><?= $c->transporter; ?></td>
                                                    <td><?= $c->tujuan; ?></td>
                                                    <td>
                                                        <a href="<?= site_url('penjualan/editSalesOrder/' . $c->sales_order_id); ?>" class="btn btn-sm btn-success">Edit</a>
                                                        <form action="/penjualan/deleteSalesOrder/<?= $c->sales_order_id; ?>" method="post" class="d-inline">
                                                            <?= csrf_field(); ?>
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin');">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
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
<!-- Modal -->
<div class="modal fade" id="modal-item" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-itemLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-itemLabel">Modal title</h5>
            </div>
            <div class="modal-body">
                <div class="card">
                    <form action="/penjualan/simpanSalesOrder" method="post">
                        <?= csrf_field(); ?>
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <label class="col-sm-5 control-label">No. Penjualan : * </label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control input-sm" name="nomor_so" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-5 control-label">Tanggal : * </label>
                                    <div class="col-sm-7">
                                        <input type="date" class="form-control input-sm " name="tanggal_so" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-5 control-label">Tanggal Kirim : * </label>
                                    <div class="col-sm-7">
                                        <input type="date" class="form-control input-sm" name="tanggal_kirim" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-5 control-label">Alamat Kirim : * </label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" id="floatingTextarea2" style="height: 100px; font-size:12px;" name="alamat_kirim"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-5 control-label">Keterangan: * </label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" id="floatingTextarea2" style="height: 100px; font-size:12px;" name="keterangan"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <label class="col-sm-4 control-label">PO Cust :</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm" name="nomor_po" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label">Tanggal PO :</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control input-sm " name="tanggal_po" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label form-text-font-size">Customer :</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm " name="id_customer" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label">Sales :</label>
                                    <div class="col-sm-8 mr-12">
                                        <input type="text" class="form-control input-sm " name="id_sales" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label">PPN :</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control input-sm " name="ppn" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label">Top :</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control input-sm" name="top" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-primary">Simpan</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>