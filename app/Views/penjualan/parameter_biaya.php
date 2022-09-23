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
                            <a href="/penjualan/tambahParameterBiaya" class="btn btn-primary btn-sm">Tambah <?= $title; ?></a>
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
                                            <th width="180px">Kode</th>
                                            <th width="300px">Nama</th>
                                            <th width="300px">Type</th>
                                            <th width="150px" style="text-align: center;">Aksi</th>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($parameter as $c) : ?>
                                                <tr>
                                                    <th scope="row"><?= $i++; ?></th>
                                                    <td style="text-align: center;"><?= $c->kode; ?></td>
                                                    <td><?= $c->nama; ?></td>
                                                    <td style="text-align: center;"><?= $c->type; ?></td>
                                                    <td>
                                                        <a href="<?= site_url('penjualan/editParameterBiaya/' . $c->parameter_biaya_id); ?>" class="btn btn-sm btn-success">Edit</a>
                                                        <form action="/penjualan/deleteParameterBiaya/<?= $c->parameter_biaya_id; ?>" method="post" class="d-inline">
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