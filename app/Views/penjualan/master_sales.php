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
                            <a href="/penjualan/tambahMasterSales" class="btn btn-primary btn-sm">Tambah Sales</a>
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
                                            <th width="100px">Kode Sales</th>
                                            <th width="250px">Nama</th>
                                            <th width="120px">Type</th>
                                            <th width="150px">No. Telp</th>
                                            <th width="300px">Alamat</th>
                                            <th width="150px">Kota</th>
                                            <th width="150px">Provinsi</th>
                                            <th width="200px">Keterangan</th>
                                            <th>Aksi</th>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($sales as $s) : ?>
                                                <tr>
                                                    <th scope="row"><?= $i++; ?></th>
                                                    <td><?= $s->kode_sales; ?></td>
                                                    <td><?= $s->nama_sales; ?></td>
                                                    <td><?= $s->type; ?></td>
                                                    <td><?= $s->telp_sales; ?></td>
                                                    <td><?= $s->alamat_sales; ?></td>
                                                    <td><?= $s->kota_sales; ?></td>
                                                    <td><?= $s->provinsi_sales; ?></td>
                                                    <td><?= $s->keterangan; ?></td>
                                                    <td>
                                                        <a href="<?= site_url('penjualan/editMasterSales/' . $s->sales_id); ?>" class="btn btn-sm btn-success">Detail</a>
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