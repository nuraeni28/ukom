<!-- jQuery  -->
<script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/modernizr.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/detect.js') }}"></script>
<script src="{{ asset('assets/admin/js/fastclick.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('assets/admin/js/waves.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery.scrollTo.min.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/admin/js/app.js') }}"></script>

<script src="{{ asset('assets/admin/plugins/skycons/skycons.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/raphael/raphael-min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/morris/morris.min.js') }}"></script>

<script src="{{ asset('assets/admin/pages/dashborad.js') }}"></script>

<!-- Required datatable js -->
<script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('assets/admin/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables/buttons.colVis.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ asset('assets/admin/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ asset('assets/admin/pages/datatables.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/admin/js/app.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable2').DataTable();
    });
</script>
<script>
    /* BEGIN SVG WEATHER ICON */
    if (typeof Skycons !== 'undefined') {
        var icons = new Skycons({
                "color": "#fff"
            }, {
                "resizeClear": true
            }),
            list = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);
        icons.play();
    };

    // scroll

    $(document).ready(function() {

        $("#boxscroll").niceScroll({
            cursorborder: "",
            cursorcolor: "#cecece",
            boxzoom: true
        });
        $("#boxscroll2").niceScroll({
            cursorborder: "",
            cursorcolor: "#cecece",
            boxzoom: true
        });

    });
</script>
</body>

</html>
