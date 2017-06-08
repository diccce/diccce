  <footer class="footer scene_element scene_element--delayed scene_element--fadeinup wow fadeInUp cf" role="contentinfo">

    <div class="group">
      <div class="col col-3 bottom">
        <p><a href="<?= html($site->dribbble()) ?>" target="_blank">Dribbble</a> / <a href="<?= html($site->instagram()) ?>" target="_blank">Instagram</a> / <a href="<?= html($site->twitter()) ?>" target="_blank">Twitter</a></p>
      </div>
      <div class="col col-5 right">
        <?php echo $site->copyright()->kirbytext() ?>
      </div>
    </div>

  </footer>

</div>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
  <?php echo js('assets/js/jquery.smoothState.min.js') ?>
  <?php echo js('assets/js/main.js') ?>

  <script>
  	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	
  	ga('create', 'UA-65297055-1', 'auto');
  	ga('send', 'pageview');
	</script>

  <script>
    $(function() {
      $("a[href*='#']:not([href='#'])").click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
    });
  </script>

  <script src="assets/js/wow.min.js"></script>
  <script>
    var wow = new WOW(
    {
      boxClass:     'wow',      // animated element css class (default is wow)
      animateClass: 'animated', // animation css class (default is animated)
      offset:       100,          // distance to the element when triggering the animation (default is 0)
      mobile:       true,       // trigger animations on mobile devices (default is true)
      live:         true,       // act on asynchronously loaded content (default is true)
      callback:     function(box) {
        // the callback is fired every time an animation is started
        // the argument that is passed in is the DOM node being animated
      },
      scrollContainer: null // optional scroll container selector, otherwise use window
    }
  );
  wow.init();
  </script>

  <?php echo js('assets/js/skrollr.min.js') ?>
  <script>
    var s = skrollr.init();
  </script>

</body>
</html>