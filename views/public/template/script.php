 <!--   Core JS Files   -->
 <script src="<?php echo $rootPath; ?>/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?php echo $rootPath; ?>/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
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
  <!-- Control Center foe Now UI Design System: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="<?php echo $rootPath; ?>/assets/js/now-design-system-pro.min.js" type="text/javascript"></script>
  <script>
  </script>
  <script type="text/javascript">
    if (document.getElementById('state1')) {
      const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    }
    if (document.getElementById('state2')) {
      const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }
    if (document.getElementById('state3')) {
      const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
      if (!countUp2.error) {
        countUp2.start();
      } else {
        console.error(countUp2.error);
      };
    }

    var el = document.getElementById('navbarPresentationShadow');
    var distance = 58;

    function scrollNavbarShadow() {
      if (this.pageYOffset > distance) {
        el.classList.remove('shadow-none');
        el.classList.add('shadow');
      } else {
        el.classList.add('shadow-none');
        el.classList.remove('shadow');
      }
    }

    window.addEventListener("scroll", function() {
      scrollNavbarShadow();
    });
  </script>
  <script>
    if (document.getElementsByClassName('page-header')) {
      window.addEventListener('scroll', function() {
        var scrollPosition = window.pageYOffset;
        var bgParallax = document.querySelector('.page-header');
        var limit = bgParallax.offsetTop + bgParallax.offsetHeight;
        if (scrollPosition > bgParallax.offsetTop && scrollPosition <= limit) {
          bgParallax.style.backgroundPositionY = (50 - 10 * scrollPosition / limit * 3) + '%';
        } else {
          bgParallax.style.backgroundPositionY = '50%';
        }
      });
    }
  </script>