<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

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
            <div class="col-lg-8">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= base_url('/img/profile/' . user()->userimage); ?>" class="img-fluid rounded-start" alt="<?= user()->username; ?>">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h4><?= user()->username; ?></h4>
                                    </li>
                                    <?php if (user()->fullname) : ?>
                                        <li class="list-group-item"><?= user()->fullname; ?></li>
                                    <?php endif; ?>
                                    <li class="list-group-item"><?= user()->email; ?></li>
                                    <li class="list-group-item">
                                        <span class="badge badge-<?= (user()->name == 'admin') ? 'warning' : 'success'; ?>"><?= user()->name; ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        <small><a href="<?= base_url('admin'); ?>">&laquo; back to user list</a></small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>