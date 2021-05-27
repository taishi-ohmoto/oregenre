<footer>
    <!-- navigation -->
    <div id="pc-nav">
      <?php 
        wp_nav_menu( array(
          'theme_location' => 'main-menu',
          'container' => 'nav'
        ));
      ?>
    </div>
    <!-- navigation -->
    <small>© 2020 OREgenre Portfolio.</small>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>