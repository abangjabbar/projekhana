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
                            <a href="/penjualan/tambahMasterCustomer" class="btn btn-primary btn-sm">Tambah Customer</a>
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
                                            <th width="100px">Kode</th>
                                            <th width="250px">Nama Customer</th>
                                            <th width="120px">Kontak</th>
                                            <th width="150px">HP</th>
                                            <th width="300px">Telp</th>
                                            <th width="150px">Email</th>
                                            <th width="150px">Alamat Kantor</th>
                                            <th width="200px">Kota</th>
                                            <th width="200px">Sales</th>
                                            <th width="200px">TOP</th>
                                            <th width="200px">Berikat</th>
                                            <th width="200px">Limit</th>
                                            <th width="200px">NPWP</th>
                                            <th width="150px" style="text-align: center;">Aksi</th>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($customer as $c) : ?>
                                                <tr>
                                                    <th scope="row"><?= $i++; ?></th>
                                                    <td><?= $c->kode_customer; ?></td>
                                                    <td><?= $c->nama_customer; ?></td>
                                                    <td><?= $c->kontak_customer; ?></td>
                                                    <td><?= $c->no_hp; ?></td>
                                                    <td><?= $c->no_telp; ?></td>
                                                    <td><?= $c->email_customer; ?></td>
                                                    <td><?= $c->alamat_kantor; ?></td>
                                                    <td><?= $c->kota_customer; ?></td>
                                                    <td><?= $c->nama_sales; ?></td>
                                                    <td><?= $c->waktu_pembayaran; ?></td>
                                                    <td><?= $c->berikat; ?></td>
                                                    <td><?= $c->limit_kredit; ?></td>
                                                    <td><?= $c->npwp; ?></td>
                                                    <td>
                                                        <a href="<?= site_url('penjualan/editMasterCustomer/' . $c->customer_id); ?>" class="btn btn-sm btn-success">Edit</a>
                                                        <form action="/penjualan/deleteMasterCustomer/<?= $c->customer_id; ?>" method="post" class="d-inline">
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