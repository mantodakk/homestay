<script src="<?php echo $rootPath; ?>/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?php echo $rootPath; ?>/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/jquery-3.7.1.js" type="text/javascript"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/perfect-scrollbar.min.js"></script>
<!--  Plugin for TypedJS, full documentation here: https://github.com/mattboldt/typed.js/ -->
<script src="<?php echo $rootPath; ?>/assets/js/plugins/typedjs.js"></script>
<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="<?php echo $rootPath; ?>/assets/js/plugins/countup.min.js"></script>
<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="<?php echo $rootPath; ?>/assets/js/plugins/rellax.min.js"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
<script src="<?php echo $rootPath; ?>/assets/js/plugins/tilt.min.js"></script>
<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
<script src="<?php echo $rootPath; ?>/assets/js/plugins/choices.min.js"></script>
<!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
<script src="<?php echo $rootPath; ?>/assets/js/plugins/parallax.min.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo $rootPath; ?>/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the GlideJS Carousel, full documentation here: http://kenwheeler.github.io/slick/ -->
<script src="<?php echo $rootPath; ?>/assets/js/plugins/glidejs.min.js" type="text/javascript"></script>
<!--  Plugin for the blob animation -->
<script src="<?php echo $rootPath; ?>/assets/js/plugins/anime.min.js" type="text/javascript"></script>
<!-- Chart JS -->
<script src="<?php echo $rootPath; ?>/assets/js/plugins/chartjs.min.js"></script>
<!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->
<!-- <script src="https://maps.googleapis.com/maps/api/js></script> -->

<script src="<?php echo $rootPath; ?>/assets/js/soft-design-system-pro.min.js" type="text/javascript"></script>



<script>
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('<?php echo $rootPath; ?>/service-worker.js')
        .then(reg => console.log("Service Worker Registered", reg))
        .catch(err => console.log("Service Worker Registration Failed", err));
    });
  }
</script>


<script>

$.ajax({
  url: '<?php echo $rootPath ?>/views/update',  // Your API URL
  type: 'POST',
   data: {
    page_view: "pageview",
    page_url: window.location.href
  },
  success: function (data) {

      console.log(data);  },
  error: function () {
    console.error('Error fetching weather data');
  }
});


</script>