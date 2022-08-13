<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="<?= base_url(); ?>/assets/assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/assets/css/lib/jquery-ui.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/assets/css/lib/helper.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/assets/css/style.css" rel="stylesheet">

</head>

<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="float-left">
                    <div class="hamburger sidebar-toggle">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="float-right">
                    <div class="dropdown dib">
                        <div class="header-icon" data-toggle="dropdown">
                            <i class="ti-bell"></i>
                            <div class="drop-down dropdown-menu dropdown-menu-right">
                                <div class="dropdown-content-heading">
                                    <span class="text-left">Recent Notifications</span>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">5 members joined today </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Mariam</div>
                                                    <div class="notification-text">likes a photo of you</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Tasnim</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you
                                                        ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you
                                                        ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="text-center">
                                            <a href="#" class="more-link">See All</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown dib">
                        <div class="header-icon" data-toggle="dropdown">
                            <i class="ti-email"></i>
                            <div class="drop-down dropdown-menu dropdown-menu-right">
                                <div class="dropdown-content-heading">
                                    <span class="text-left">2 New Messages</span>
                                    <a href="email.html">
                                        <i class="ti-pencil-alt pull-right"></i>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/1.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Michael Qin</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you
                                                        ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you
                                                        ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Michael Qin</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you
                                                        ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you
                                                        ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="text-center">
                                            <a href="#" class="more-link">See All</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown dib">
                        <div class="header-icon" data-toggle="dropdown">
                            <span class="user-avatar">John
                                <i class="ti-angle-down f-s-10"></i>
                            </span>
                            <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-user"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-email"></i>
                                                <span>Inbox</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-settings"></i>
                                                <span>Setting</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('logout'); ?>">
                                                <i class="ti-power-off"></i>
                                                <span>Logout</span>
                                            </a>
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
</div>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="index.html">
                            <!-- <img src="assets/images/logo.png" alt="" /> --><span>CV Hana Citra Buana</span>
                        </a></div>
                    <li class="label" style="background: #37517e;">Main</li>
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
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-bar-chart-alt"></i> Utility <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="/manager/parameterBiaya" style="background: #37517e;">Parameter Biaya</a></li>
                            <li><a href="/manager/hitungHarga" style="background: #37517e;">Hitung Harga</a></li>
                            <li><a href="/manager/penawaranHarga" style="background: #37517e;">Penawaran Harga</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-bar-chart-alt"></i> Data Entry <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="/manager/salesOrder" style="background: #0066FF;">Penjualan</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-bar-chart-alt"></i> Produksi <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="chart-flot.html" style="background: #37517e;">Daftar Penjulan/SO</a></li>
                            <li><a href="chart-morris.html" style="background: #37517e;">Daftar Penjualan/SO Per Sales </a></li>
                            <li><a href="chartjs.html" style="background: #37517e;">Outstanding Penjualan/SO</a></li>
                            <li><a href="chartist.html" style="background: #37517e;">Laporan Komisi</a></li>
                        </ul>
                    </li>
                    <li class="label" style="background: #37517e;">Pembelian</li>
                    <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-bar-chart-alt"></i> Master Data <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="/pembelian/masterSupplier" style="background: #37517e;">Master Supplier</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-bar-chart-alt"></i> Data Entry <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="/pembelian/pembelianSheetDenganSPK" style="background: #37517e;">Pembelian Sheet Dengan SPK</a></li>
                            <li><a href="/pembelian/pembelianSheetTanpaSPK" style="background: #37517e;">Pembelian Sheet Tanpa SPK</a></li>
                        </ul>
                    </li>
                    <li class="label" style="background: #37517e;">Persediaan</li>
                    <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-bar-chart-alt"></i> Master Data <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-bar-chart-alt"></i> Sheet <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                                <ul>
                                    <li><a href="/persediaan/kodeSheet" style="background: #37517e;">Kode Sheet</a></li>
                                    <li><a href="/persediaan/masterSheet" style="background: #37517e;">Master Sheet</a></li>
                                </ul>
                            </li>
                            <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-bar-chart-alt"></i>Box<span class="sidebar-collapse-icon ti-angle-down"></span></a>
                                <ul>
                                    <li><a href="/persediaan/typeBox" style="background: #37517e;">Type Box</a></li>
                                    <li><a href="/persediaan/masterBox" style="background: #37517e;">Master Sheet</a></li>
                                </ul>
                            </li>
                            <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-bar-chart-alt"></i>Master Harga Sheet<span class="sidebar-collapse-icon ti-angle-down"></span></a>
                                <ul>
                                    <li><a href="/persediaan/groupHarga" style="background: #37517e;">Group Harga</a></li>
                                    <li><a href="/persediaan/masterBox" style="background: #37517e;">Master Sheet</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-bar-chart-alt"></i> Utility <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="chart-flot.html">Parameter Biaya</a></li>
                            <li><a href="chart-morris.html">Hitung Harga</a></li>
                            <li><a href="chartjs.html">Penawaran Harga</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-bar-chart-alt"></i> Laporan <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="chart-flot.html">Daftar Penjulan/SO</a></li>
                            <li><a href="chart-morris.html">Daftar Penjualan/SO Per Sales </a></li>
                            <li><a href="chartjs.html">Outstanding Penjualan/SO</a></li>
                            <li><a href="chartist.html">Laporan Komisi</a></li>
                        </ul>
                    </li>
                    <li class="label" style="background: #37517e;">Produksi</li>
                    <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-bar-chart-alt"></i> Master Data <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="" style="background: #37517e;">Kode Sheet</a></li>
                            <li><a href="" style="background: #37517e;">Master Sheet</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-bar-chart-alt"></i> SPK <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="chart-flot.html">Parameter Biaya</a></li>
                            <li><a href="chart-morris.html">Hitung Harga</a></li>
                            <li><a href="chartjs.html">Penawaran Harga</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-bar-chart-alt"></i> BOX <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="chart-flot.html">Daftar Penjulan/SO</a></li>
                            <li><a href="chart-morris.html">Daftar Penjualan/SO Per Sales </a></li>
                            <li><a href="chartjs.html">Outstanding Penjualan/SO</a></li>
                            <li><a href="chartist.html">Laporan Komisi</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle" style="background: #37517e;"><i class="ti-bar-chart-alt"></i> Laporan <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="chart-flot.html">Daftar Penjulan/SO</a></li>
                            <li><a href="chart-morris.html">Daftar Penjualan/SO Per Sales </a></li>
                            <li><a href="chartjs.html">Outstanding Penjualan/SO</a></li>
                            <li><a href="<?= base_url('logout'); ?>">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <!-- My CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <?= $this->renderSection('content'); ?>

    <!-- Footer -->
    <div class="content-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer">
                        <p><?= date('Y'); ?> © Hana Citra Buana. - <a href="#">hanacitrabuana</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery vendor -->
    <script type="text/javascript" src="<?= base_url(); ?>/assets/assets/js/lib/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/assets/assets/js/lib/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/assets/assets/js/lib/jquery.nanoscroller.min.js"></script>


    <!-- nano scroller -->
    <script src="<?= base_url(); ?>/assets/assets/js/lib/menubar/sidebar.js"></script>
    <script src="<?= base_url(); ?>/assets/assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <script src="<?= base_url(); ?>/assets/assets/js/lib/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/assets/assets/js/scripts.js"></script>
    <!-- bootstrap -->

    <script src="<?= base_url(); ?>/assets/assets/js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- <script src="<?= base_url(); ?>/assets/assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="<?= base_url(); ?>/assets/assets/js/lib/calendar-2/pignose.init.js"></script> -->


    <script src="<?= base_url(); ?>/assets/assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="<?= base_url(); ?>/assets/assets/js/lib/weather/weather-init.js"></script>
    <script src="<?= base_url(); ?>/assets/assets/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="<?= base_url(); ?>/assets/assets/js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="<?= base_url(); ?>/assets/assets/js/lib/chartist/chartist.min.js"></script>
    <script src="<?= base_url(); ?>/assets/assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="<?= base_url(); ?>/assets/assets/js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="<?= base_url(); ?>/assets/assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>/assets/assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <!-- scripit init-->
    <script src="<?= base_url(); ?>/assets/assets/js/dashboard2.js"></script>

    <script src="<?= base_url(); ?>/assets/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="<?= base_url(); ?>/assets/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="<?= base_url(); ?>/assets/assets/js/lib/data-table/buttons.flash.min.js"></script>
    <script src="<?= base_url(); ?>/assets/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="<?= base_url(); ?>/assets/assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="<?= base_url(); ?>/assets/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="<?= base_url(); ?>/assets/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="<?= base_url(); ?>/assets/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="<?= base_url(); ?>/assets/assets/js/lib/data-table/datatables-init.js"></script>

    <script src="<?= base_url(); ?>/assets/assets/js/lib/moment/moment.js"></script>
    <script src="<?= base_url(); ?>/assets/assets/js/lib/calendar/fullcalendar.min.js"></script>
    <script src="<?= base_url(); ?>/assets/assets/js/lib/calendar/fullcalendar-init.js"></script>

    <script src="<?= base_url(); ?>/assets/js/jquery-3.6.0.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>/assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>/assets/js/jquery-ui.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#kodeSupplier").autocomplete({
                source: "<?php echo site_url('pembelian/get_autocomplete/'); ?>",
                select: function(event, ui) {
                    $('[name="kode_supplier"]').val(ui.item.label);
                    $('[name="nama_supplier"]').val(ui.item.nama_supplier);
                    $('[name="waktu_pembayaran"]').val(ui.item.waktu_pembayaran);
                },
            });
        });
    </script>

    <script type="text/javascript">
        function pilih_kode() {
            var master_supplier_id = $("#master_supplier_id").val();
            $.ajax({
                url: "<?php echo base_url() ?>pembelian/autoComplete",
                data: "master_supplier_id=" + master_supplier_id,
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    $("#nama_supplier").val(data.nama_supplier_b);
                }
            });
        }
        $(function() {
            $(document).ready(function() {
                $('#master_supplier_id').select2()
            });
        });
    </script>

</body>


</html>