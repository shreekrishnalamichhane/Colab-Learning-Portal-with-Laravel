    <!--   Core JS Files   -->
    <script src="{{asset('assets_nonlogged/js/core/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets_nonlogged/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets_nonlogged/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets_nonlogged/js/plugins/moment.min.js')}}"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="{{asset('assets_nonlogged/js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{asset('assets_nonlogged/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
     {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script> --}}
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!--	Plugin for Sharrre btn -->
    <script src="{{asset('assets_nonlogged/js/plugins/jquery.sharrre.js')}}" type="text/javascript"></script>
        <!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="{{asset('assets_nonlogged/js/plugins/bootstrap-tagsinput.js')}}"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="{{asset('assets_nonlogged/js/plugins/bootstrap-selectpicker.js')}}" type="text/javascript"></script>
    <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{asset('assets_nonlogged/js/plugins/jasny-bootstrap.min.js')}}" type="text/javascript"></script>
    <!--	Plugin for Small Gallery in Product Page -->
    <script src="{{asset('assets_nonlogged/js/plugins/jquery.flexisel.js')}}" type="text/javascript"></script>
    <!-- Plugins for presentation and navigation  -->
    <script src="{{asset('assets_nonlogged/demo/modernizr.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets_nonlogged/demo/vertical-nav.js')}}" type="text/javascript"></script>
    <!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
    <script src="{{asset('assets_nonlogged/demo/demo.js')}}" type="text/javascript"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('assets_nonlogged/js/material-kit.mind1f1.js?v=2.2.0')}}" type="text/javascript"></script>
    {{-- <script>
      $(document).ready(function() {
        //init DateTimePickers
        materialKit.initFormExtendedDatetimepickers();

        // Sliders Init
        materialKit.initSliders();
      });
    </script> --}}
    @yield('additional_scripts')
