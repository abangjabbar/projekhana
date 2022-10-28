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
                    <form action="<?= site_url('penjualan/updateSalesOrder/' . $salesOrder[0]->sales_order_id); ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="PUT">
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <label class="col-sm-5 control-label">No. Penjualan : * </label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control input-sm" id="nomor_so" name="nomor_so" value="<?= $salesOrder[0]->nomor_so; ?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-5 control-label">Tanggal : * </label>
                                    <div class="col-sm-7">
                                        <input type="date" class="form-control input-sm " id="tanggal_so" name="tanggal_so" value="<?= $salesOrder[0]->tanggal_so; ?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-5 control-label">Tanggal Kirim : * </label>
                                    <div class="col-sm-7">
                                        <input type="date" class="form-control input-sm" id="tanggal_kirim" name="tanggal_kirim" value="<?= $salesOrder[0]->tanggal_kirim; ?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-5 control-label">Alamat Kirim : * </label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" id="floatingTextarea2" style="height: 100px; font-size:12px;" id="alamat_kirim" name="alamat_kirim"><?= $salesOrder[0]->alamat_kirim; ?></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-5 control-label">Keterangan: * </label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" id="floatingTextarea2" style="height: 100px; font-size:12px;" id="keterangan" name="keterangan"><?= $salesOrder[0]->keterangan; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <label class="col-sm-4 control-label">PO Cust :</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm" id="nomor_po" name="nomor_po" value="<?= $salesOrder[0]->nomor_po; ?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label">Tanggal PO :</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control input-sm " id="tanggal_po" name="tanggal_po" value="<?= $salesOrder[0]->tanggal_po; ?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label form-text-font-size">Customer :</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm " id="id_customer" name="id_customer" value="<?= $salesOrder[0]->id_customer; ?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label">Sales :</label>
                                    <div class="col-sm-8 mr-12">
                                        <input type="text" class="form-control input-sm " id="id_sales" name="id_sales" value="<?= $salesOrder[0]->id_sales; ?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label">PPN :</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control input-sm " id="ppn" name="ppn" value="<?= $salesOrder[0]->ppn; ?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label">Top :</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control input-sm" id="top" name="top" value="<?= $salesOrder[0]->top; ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-primary">Update</button>
                        </div>
                    </form>
                    <hr>
                    <!-- <div class="row">
                        <div class="col-5">
                            <div class="row">
                                <div class="form-group input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah-barang">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-5">
                            <div class="row">
                                <div class="form-group input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-item">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <table>
                                <tr>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Ukuran</th>
                                    <th>Satuan</th>
                                    <th>Qty</th>
                                    <th>Harga</th>
                                    <th>Total Harga</th>
                                    <th>Aksi</th>
                                </tr>
                                <form action="<?= site_url('penjualan/simpanBarang/' . $salesOrder[0]->sales_order_id); ?>" method="post">
                                    <?= csrf_field(); ?>
                                    <tr>
                                        <td>
                                            <input type="text" name="kode_barang" id="kode_barang" class="form-control input-sm" readonly>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control input-sm" name="nama_barang" id="nama_barang" readonly>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control input-sm" name="ukuran_barang" id="ukuran_barang" readonly>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control input-sm" name="satuan_barang" id="satuan_barang" readonly>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-sm btn-info">Simpan</button>
                                        </td>
                                    </tr>
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah-barang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tambah-barangLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambah-barangLabel">Modal title</h5>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-primary table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Ukuran</th>
                            <th>Satuan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="<?= site_url('penjualan/simpanBarang/' . $salesOrder[0]->sales_order_id); ?>" method="post">
                            <?php foreach ($barang as $c) : ?>
                                <tr>
                                    <td><?= $c->kode; ?>
                                        <input class="form-control" type="hidden" name="kode_barang" disabled>
                                    </td>
                                    <td><?= $c->nama; ?>
                                        <input class="form-control" type="hidden" name="nama_barang" disabled>
                                    </td>
                                    <td><?= $c->ukuran; ?>
                                        <input class="form-control" type="hidden" name="ukuran_barang" disabled>
                                    </td>
                                    <td><?= $c->satuan; ?>
                                        <input class="form-control" type="hidden" name="satuan_barang" disabled>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-sm btn-info">
                                            <i class="fa fa-check"></i>Select
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </form>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
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
            <div class="modal-body table-responsive">
                <table class="table table-primary table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Ukuran</th>
                            <th>Satuan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($barang as $c) : ?>
                            <tr>
                                <td><?= $c->kode; ?></td>
                                <td><?= $c->nama; ?></td>
                                <td><?= $c->ukuran; ?></td>
                                <td><?= $c->satuan; ?></td>
                                <td>
                                    <button class="btn btn-sm btn-info" id="select" data-id="<?= $c->barang_id; ?>" data-kode="<?= $c->kode; ?>" data-nama="<?= $c->nama; ?>" data-ukuran="<?= $c->ukuran; ?>" data-satuan="<?= $c->satuan; ?>">
                                        <i class="fa fa-check"></i>Select
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>