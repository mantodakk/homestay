



    <!--   Core JS Files   -->
    <script src="<?php echo $rootPath; ?>/assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo $rootPath; ?>/assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo $rootPath; ?>/assets/js/core/bootstrap.min.js" type="text/javascript"></script>

    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="<?php echo $rootPath; ?>/assets/js/plugins/bootstrap-switch.js"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="<?php echo $rootPath; ?>/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>

    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="<?php echo $rootPath; ?>/assets/js/plugins/moment.min.js"></script>

    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="<?php echo $rootPath; ?>/assets/js/plugins/bootstrap-tagsinput.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="<?php echo $rootPath; ?>/assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>

    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="<?php echo $rootPath; ?>/assets/js/plugins/bootstrap-datetimepicker.js"
        type="text/javascript"></script>

    <!--  Google Maps Plugin    -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>


    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo $rootPath; ?>/assets/js/now-ui-kit.min.js" type="text/javascript"></script>
    <!-- Sharrre libray -->
    <script src="<?php echo $rootPath; ?>/assets/demo/jquery.sharrre.js"></script>

  

    <!-- Library for parallax, used just in Presentation Page -->
    <script src="<?php echo $rootPath; ?>/assets/js/plugins/rellax.min.js"
        type="text/javascript"></script>
    <!-- Place this tag in your head or just before your close body tag. -->

    
     <script type="text/javascript">

        $(document).ready(function () {
            if ($(window).width() >= 991) {

                setTimeout(function () {
                    var rellax = new Rellax('.rellax', {
                        center: true
                    });
                }, 5000);

                var rellaxHeader = new Rellax('.rellax-header');
                var rellaxText = new Rellax('.rellax-text');
            }

        });
    </script>