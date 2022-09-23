<div class="sidebar sidebar-hide-to-small sidebar-shrink">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="index.html">
                        <!-- <img src="assets/images/logo.png" alt="" /> --><span>CV Hana Citra Buana</span>
                    </a></div>
                <?php if (in_groups('admin')) : ?>
                    <li class="label" style="background: #37517e;">Admin</li>
                    <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-home"></i> Dashboard <span class="badge badge-primary"></span> <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="#" style="background: #37517e;">Dashboard 1</a></li>
                            <li><a href="#" style="background: #37517e;">Dashboard 2</a></li>
                        </ul>
                    </li>
                    <li class="label" style="background: #37517e;">Penjualan</li>
                    <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-bar-chart-alt"></i> Master Data <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="/manager/masterCustomer" style="background: #37517e;">Master Customer</a></li>
                            <li><a href="/manager/coba" style="background: #37517e;">Master Sales</a></li>
                            <li><a href="<?= base_url('logout'); ?>">Logout</a></li>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if (in_groups('manager')) : ?>
                    <li class="label" style="background: #37517e;">Manager</li>
                    <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-home"></i> Dashboard <span class="badge badge-primary"></span> <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="#" style="background: #37517e;">Dashboard 1</a></li>
                            <li><a href="#" style="background: #37517e;">Dashboard 2</a></li>
                        </ul>
                    </li>
                    <li class="label" style="background: #37517e;">Penjualan</li>
                    <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-bar-chart-alt"></i> Penjualan <span class="badge badge-primary"></span> <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-bar-chart-alt"></i>Master Data<span class="sidebar-collapse-icon ti-angle-down"></span></a>
                                <ul>
                                    <li><a href="/penjualan/masterCustomer" style="background: #37517e;">Master Customer</a></li>
                                    <li><a href="/penjualan/masterSales" style="background: #37517e;">Master Sales</a></li>
                                </ul>
                            </li>
                            <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-bar-chart-alt"></i> Utility <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                                <ul>
                                    <li><a href="/penjualan/parameterBiaya" style="background: #37517e;">Parameter Biaya</a></li>
                                    <li><a href="/pembelian/pembelianSheetTanpaSPK" style="background: #37517e;">Pembelian Sheet Tanpa SPK</a></li>
                                    <li><a href="<?= base_url('logout'); ?>">Logout</a></li>
                                </ul>
                            </li>
                            <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-bar-chart-alt"></i> Data Entry <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                                <ul>
                                    <li><a href="/pembelian/pembelianSheetDenganSPK" style="background: #37517e;">Pembelian Sheet Dengan SPK</a></li>
                                    <li><a href="/pembelian/pembelianSheetTanpaSPK" style="background: #37517e;">Pembelian Sheet Tanpa SPK</a></li>
                                    <li><a href="<?= base_url('logout'); ?>">Logout</a></li>
                                </ul>
                            </li>
                            <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-bar-chart-alt"></i> Laporan <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                                <ul>
                                    <li><a href="/pembelian/pembelianSheetDenganSPK" style="background: #37517e;">Pembelian Sheet Dengan SPK</a></li>
                                    <li><a href="/pembelian/pembelianSheetTanpaSPK" style="background: #37517e;">Pembelian Sheet Tanpa SPK</a></li>
                                    <li><a href="<?= base_url('logout'); ?>">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="label" style="background: #37517e;">Pembelian</li>
                    <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-bar-chart-alt"></i> Pembelian <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="/manager/masterCustomer" style="background: #37517e;">Master Customer</a></li>
                            <li><a href="/manager/coba" style="background: #37517e;">Master Sales</a></li>
                            <li><a href="<?= base_url('logout'); ?>">Logout</a></li>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if (in_groups('produksi')) : ?>
                    <li class="label" style="background: #37517e;">Produksi</li>
                    <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-bar-chart-alt"></i> Master Data <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="/pembelian/masterSupplier" style="background: #37517e;">Master Supplier</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-bar-chart-alt"></i> Data Entry <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="/pembelian/pembelianSheetDenganSPK" style="background: #37517e;">Pembelian Sheet Dengan SPK</a></li>
                            <li><a href="/pembelian/pembelianSheetTanpaSPK" style="background: #37517e;">Pembelian Sheet Tanpa SPK</a></li>
                            <li><a href="<?= base_url('logout'); ?>">Logout</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<!-- /# sidebar -->