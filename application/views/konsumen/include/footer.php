    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?= base_url('assets/') ?>bootstrap/js/popper.min.js"></script>
    <script src="<?= base_url('assets/') ?>bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="<?= base_url('assets/') ?>plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script> -->
    <script src="<?= base_url('assets/') ?>js/apps/mailbox-chat.js"></script>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <!-- <script src="<?= base_url('assets/') ?>js/authentication/form-2.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script> -->
    <!-- <script src="<?= base_url('assets/') ?>plugins/hlight.pack.js"></script> -->
    <!-- <script src="<?= base_url('assets/') ?>stom.js"></script> -->
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
    <script>
        // var e;
        c1 = $('#style-1').DataTable({
            headerCallback: function(e, a, t, n, s) {
                e.getElementsByTagName("th")[0].innerHTML = '<label class="new-control new-checkbox checkbox-outline-primary m-auto">\n<input type="checkbox" class="new-control-input chk-parent select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
            },
            columnDefs: [{
                targets: 0,
                width: "30px",
                className: "",
                orderable: !1,
                render: function(e, a, t, n) {
                    return '<label class="new-control new-checkbox checkbox-outline-primary  m-auto">\n<input type="checkbox" class="new-control-input child-chk select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
                }
            }],
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 5
        });

        // multiCheck(c1);

        c2 = $('#style-2').DataTable({
            headerCallback: function(e, a, t, n, s) {
                e.getElementsByTagName("th")[0].innerHTML = '<label class="new-control new-checkbox checkbox-outline-primary m-auto">\n<input type="checkbox" class="new-control-input chk-parent select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
            },
            columnDefs: [{
                targets: 0,
                width: "30px",
                className: "",
                orderable: !1,
                render: function(e, a, t, n) {
                    return '<label class="new-control new-checkbox checkbox-outline-primary  m-auto">\n<input type="checkbox" class="new-control-input child-chk select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
                }
            }],
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 5
        });

        // multiCheck(c2);

        c3 = $('#style-3').DataTable({
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 5
        });

        // multiCheck(c3);
    </script>
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
    <script src="<?= base_url('assets/') ?>plugins/blockui/jquery.blockUI.min.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script>
        // var getInputStatus = document.getElementById('radio-6');
        // var getPricingContainer = document.getElementsByClassName('pricing-plans-container')[0];
        // var getYearlySwitch = document.getElementsByClassName('billed-yearly-radio')[0];
        // getInputStatus.addEventListener('change', function() {
        //     var isChecked = getInputStatus.checked;
        //     if (isChecked) {
        //         getPricingContainer.classList.add("billed-yearly");
        //         getYearlySwitch.classList.add("billed-yearly-switch");
        //     } else {
        //         getYearlySwitch.classList.remove("billed-yearly-switch");
        //         getPricingContainer.classList.remove("billed-yearly");
        //     }
        // })
    </script>