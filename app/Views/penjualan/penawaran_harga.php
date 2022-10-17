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
                            <a href="/penjualan/tambahPenawaranHarga" class="btn btn-primary btn-sm">Tambah <?= $title; ?></a>
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
                                            <th width="150px">No.Txn</th>
                                            <th width="100px">Tanggal</th>
                                            <th width="100px">Revisi</th>
                                            <th width="300px">Customer</th>
                                            <th width="300px">Alamat</th>
                                            <th width="220px">Ditujukan</th>
                                            <th width="300px">Keterangan</th>
                                            <th width="150px" style="text-align: center;">Aksi</th>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($penawaranHarga as $c) : ?>
                                                <tr>
                                                    <th scope="row"><?= $i++; ?></th>
                                                    <td style="text-align: center;"><?= $c->no_txn; ?></td>
                                                    <td><?= $c->tanggal; ?></td>
                                                    <td><?= $c->revisi; ?></td>
                                                    <td><?= $c->customer; ?></td>
                                                    <td><?= $c->alamat; ?></td>
                                                    <td><?= $c->ditujukan; ?></td>
                                                    <td><?= $c->keterangan; ?></td>
                                                    <td>
                                                        <a href="<?= site_url('penjualan/editPenawaranHarga/' . $c->penawaran_harga_id); ?>" class="btn btn-sm btn-success">Edit</a>
                                                        <form action="/penjualan/deletePenawaranHarga/<?= $c->penawaran_harga_id; ?>" method="post" class="d-inline">
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

<?= $this->endSection(); ?>