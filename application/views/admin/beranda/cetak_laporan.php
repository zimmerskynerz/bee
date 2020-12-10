<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>SELAMAT DATANG ADMIN BEE-DESIGN</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/') ?>img/favicon.ico" />
    <link href="<?= base_url('assets/') ?>css/loader.css" rel="stylesheet" type="text/css" />
    <script src="<?= base_url('assets/') ?>js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/') ?>css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL  STYLES -->
    <link href="<?= base_url('assets/') ?>plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/') ?>css/dashboard/dash_2.css" rel="stylesheet" type="text/css" />
    <script src="<?= base_url('assets/') ?>plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <link href="<?= base_url('assets/') ?>plugins/animate/animate.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/') ?>css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/') ?>css/components/custom-modal.css" rel="stylesheet" type="text/css" />
    <!-- sweet Alert -->
    <link href="<?= base_url('assets/') ?>css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/') ?>plugins/animate/animate.css" rel="stylesheet" type="text/css" />
    <script src="<?= base_url('assets/') ?>plugins/sweetalerts/promise-polyfill.js"></script>
    <link href="<?= base_url('assets/') ?>plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/') ?>plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/') ?>css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>plugins/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>plugins/table/datatable/custom_dt_custom.css">
    <link href="<?= base_url('assets/') ?>css/apps/mailing-chat.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="<?= base_url('assets/') ?>css/authentication/form-2.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/forms/switches.css">
    <style>
        .sidebar.toggled .nav-item .collapse {
            position: relative;
            padding-left: 1rem;
            left: 0;
            z-index: 1;
            top: 0;
        }

        .sidebar.toggled {
            width: 60vw !important;
            transition: all .3s ease-in-out;
            -webkit-transition: all .3s ease-in-out;
        }
    </style>
    <style>
        .responsive img {
            max-width: 50%;
            align-content: center;
            /*width:100%;*/
            height: auto;
        }
    </style>
    <style>
        .avatar2 {
            vertical-align: top;
            width: 126px;
            margin-right: 6px;
        }
    </style>
</head>

<body>

    <br>
    <section class="alert-wrap p-t-50 p-b-30">
        <div class="container">
            <img src="<?= base_url('assets/') ?>img/logo2.svg" style="width: 50px; position: absolute;">
            <h4 align="center"><b>LAPORAN TRANSAKSI</b></h4>
            <br>
            <table id="style-3" class="table style-3  table-hover">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Kode Transaksi</th>
                        <th class="text-center">Tanggal Bayar</th>
                        <th class="text-center">Nama Konsumen</th>
                        <th class="text-center">Nama Produk</th>
                        <th class="text-center">Jumlah Produk</th>
                        <th class="text-center">Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($data_selesai as $Data_selesai) : ?>
                        <tr>
                            <td class="text-center"><?= $no ?></td>
                            <td style="text-align: center;"><?= date('Ymd', strtotime($Data_selesai->tgl_transaksi)) ?><?= $Data_selesai->id_transaksi ?></td>
                            <td><?= date('d F Y', strtotime($Data_selesai->tgl_bayar)) ?></td>
                            <td><?= $Data_selesai->nm_konsumen ?></td>
                            <td><?= $Data_selesai->nm_produk ?></td>
                            <td class="text-center"><?= $Data_selesai->jml_barang ?></td>
                            <td class="text-right"><?= $Data_selesai->total_harga ?>,-</td>
                            <!-- <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td> -->
                        </tr>
                        <?php $no++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>

    <script type="text/javascript">
        window.print();
    </script>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?= base_url('assets/') ?>js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?= base_url('assets/') ?>bootstrap/js/popper.min.js"></script>
    <script src="<?= base_url('assets/') ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/') ?>plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/app.js"></script>
    <script src="<?= base_url('assets/') ?>js/apps/mailbox-chat.js"></script>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="<?= base_url('assets/') ?>js/authentication/form-2.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="<?= base_url('assets/') ?>plugins/highlight/highlight.pack.js"></script>
    <script src="<?= base_url('assets/') ?>js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL  SCRIPTS -->
    <script src="<?= base_url('assets/') ?>plugins/apex/apexcharts.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/dashboard/dash_2.js"></script>
    <script src="<?= base_url('assets/') ?>js/scrollspyNav.js"></script>
    <!-- BEGIN THEME GLOBAL STYLE -->
    <script src="<?= base_url('assets/') ?>plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="<?= base_url('assets/') ?>plugins/sweetalerts/custom-sweetalert.js"></script>
    <!-- END THEME GLOBAL STYLE -->
    <!-- <script>
        $('#yt-video-link').click(function() {
            var src = 'https://www.youtube.com/embed/YE7VzlLtp-4';
            $('#videoMedia1').modal('show');
            $('<iframe>').attr({
                'src': src,
                'width': '560',
                'height': '315',
                'allow': 'encrypted-media'
            }).css('border', '0').appendTo('#videoMedia1 .video-container');
        });
        $('#vimeo-video-link').click(function() {
            var src = 'https://player.vimeo.com/video/1084537';
            $('#videoMedia2').modal('show');
            $('<iframe>').attr({
                'src': src,
                'width': '560',
                'height': '315',
                'allow': 'encrypted-media'
            }).css('border', '0').appendTo('#videoMedia2 .video-container');
        });
        $('#videoMedia1 button, #videoMedia2 button').click(function() {
            $('#videoMedia1 iframe, #videoMedia2 iframe').removeAttr('src');
        });
    </script> -->
    <!--  END CUSTOM SCRIPT FILE  -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?= base_url('assets/') ?>plugins/table/datatable/datatables.js"></script>

    <!-- END PAGE LEVEL SCRIPTS -->
    <script src="<?= base_url('assets/') ?>plugins/zoomerang/zoomerang.js"></script>
    <script>
        Array.prototype.forEach.call(document.querySelectorAll('p'), function(p, i) {
            p.style.marginLeft = i * 6 + '%'
        })
        Zoomerang
            .config({
                maxHeight: 400,
                maxWidth: 400,
                bgColor: '#000',
                bgOpacity: .85,
                onOpen: openCallback,
                onClose: closeCallback,
                onBeforeOpen: beforeOpenCallback,
                onBeforeClose: beforeCloseCallback
            })
            .listen('.zoom')

        function openCallback(el) {
            console.log('zoomed in on: ')
            console.log(el)
        }

        function closeCallback(el) {
            console.log('zoomed out on: ')
            console.log(el)
        }

        function beforeOpenCallback(el) {
            console.log('on before zoomed in on:')
            console.log(el)
        }

        function beforeCloseCallback(el) {
            console.log('on before zoomed out on:')
            console.log(el)
        }
    </script>
</body>

</html>