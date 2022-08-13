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
                    <form class="row g-3">
                        <div class="col-md-3">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input class="form-control input-sm" type="text" placeholder=".form-control-sm">
                        </div>
                        <div class="col-md-3">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input class="form-control input-sm" type="text" placeholder=".input-sm">
                        </div>
                        <div class="col-md-3">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input class="form-control input-sm" type="text" placeholder=".input-sm">
                        </div>
                        <div class="col-md-3">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input class="form-control input-sm" type="text" placeholder=".input-sm">
                        </div>
                        <div class="col-md-2">
                            <label for="inputAddress" class="form-label">Kode Supplier</label>
                            <input type="text" class="form-control input-sm" id="kodeSupplier" placeholder="1234 Main St">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">State</label>
                            <select class="form-control" name="master_supplier_id" id="master_supplier_id" onchange="pilih_kode()">
                                <option value="" hidden></option>
                                <?php foreach ($masterSupplier as $t) : ?>
                                    <option value="<?= $t->master_supplier_id; ?>"><?= $t->kode_supplier; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="inputAddress2" class="form-label">Address 2</label>
                            <input type="text" class="form-control input-sm" id="kodeSupplier" name="nama_supplier">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control input-sm" id="inputCity">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection('layout/template_manager'); ?>