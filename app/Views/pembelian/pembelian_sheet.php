<?= $this->extend('layout/template_manager'); ?>

<?= $this->section('content'); ?>

<div class="content-wrap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 p-r-0 title-margin-right">
                <div class="page-header">
                    <div class="page-title">
                        <h4><?= $title; ?></h4>
                        <a href="/pembelian/tambahPembelianSheet" class="btn btn-primary btn-sm">Tambah Pembelian Sheet</a>
                    </div>
                </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
                <div class="page-header">
                    <div class="page-title">
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
                    <div class="bootstrap-data-table-panel">
                        <div class="outer-wrapper">
                            <div class="table-wrapper">
                                <table id="bootstrap-data-table-export">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th width="150px">No.PO</th>
                                            <th width="150px">Tanggal</th>
                                            <th width="300px">Supplier</th>
                                            <th width="150px">Tanggal Kirim</th>
                                            <th width="100px">Kode Harga</th>
                                            <th width="100px">TOP</th>
                                            <th width="300px">Keterangan</th>
                                            <th width="50px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($pembelianSheet as $k) : ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $k->nomor_po; ?></td>
                                                <td><?= $k->tgl_buat; ?></td>
                                                <td><?= $k->nama_supplier; ?></td>
                                                <td><?= $k->tgl_kirim; ?></td>
                                                <td><?= $k->kode_harga; ?></td>
                                                <td><?= $k->waktu_pembayaran; ?></td>
                                                <td><?= $k->keterangan_pembelian; ?></td>
                                                <td>
                                                    <a href="<?= site_url('pembelian/' . $k->pembelian_sheet_id . '/editPembelianSheet'); ?>" class="btn btn-warning btn-sm"><i class="">edit</i></a>
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


<?= $this->endSection('layout/template_manager'); ?>