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
                            <a href="/penjualan/tambahHitungHarga" class="btn btn-primary btn-sm">Hitung Harga</a>
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
                                            <th width="100px">No. Hitung</th>
                                            <th width="250px">Tanggal</th>
                                            <th width="120px">Customer</th>
                                            <th width="150px">Type Box</th>
                                            <th width="300px">Ukuran Box</th>
                                            <th width="150px">Bahan</th>
                                            <th width="150px">Ukuran Bahan</th>
                                            <th width="200px">Qty Order</th>
                                            <th width="200px">Discount</th>
                                            <th width="200px">Biaya Bahan</th>
                                            <th width="200px">Biaya Lain2</th>
                                            <th width="200px">Total Biaya</th>
                                            <th width="200px">Profit</th>
                                            <th width="200px">Estimasi Harga</th>
                                            <th width="150px" style="text-align: center;">Aksi</th>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($hargaJual as $c) : ?>
                                                <tr>
                                                    <th scope="row"><?= $i++; ?></th>
                                                    <td><?= $c->no_perhitungan; ?></td>
                                                    <td><?= $c->tanggal; ?></td>
                                                    <td><?= $c->customer; ?></td>
                                                    <td><?= $c->type_box; ?></td>
                                                    <td><?= $c->ukuran_box; ?></td>
                                                    <td><?= $c->bahan; ?></td>
                                                    <td><?= $c->ukuran_bahan; ?></td>
                                                    <td><?= $c->quantity_order; ?></td>
                                                    <td><?= $c->diskon_bahan; ?></td>
                                                    <td><?= $c->biaya_bahan; ?></td>
                                                    <td><?= $c->biaya_lain; ?></td>
                                                    <td><?= $c->total_biaya; ?></td>
                                                    <td><?= $c->profit; ?></td>
                                                    <td><?= $c->estimasi_harga; ?></td>
                                                    <td>
                                                        <a href="<?= site_url('penjualan/editMasterCustomer/' . $c->id); ?>" class="btn btn-sm btn-success">Edit</a>
                                                        <form action="/penjualan/deleteMasterCustomer/<?= $c->id; ?>" method="post" class="d-inline">
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