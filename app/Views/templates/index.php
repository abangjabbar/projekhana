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
    <!-- My CSS -->
    <link rel="stylesheet" href="/css/style.css">

</head>

<?= $this->include('templates/topbar'); ?>

<body>


    <?= $this->include('templates/sidebar'); ?>
    <?= $this->renderSection('page-content'); ?>

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