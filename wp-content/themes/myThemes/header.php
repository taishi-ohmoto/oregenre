<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- ORG CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- ORG JS -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/org.js"></script>
	<!-- FontAwesome -->
	<link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css?v=" rel="stylesheet">
	<title>OREgenre</title>
	<?php wp_head(); ?>
</head>
<style>
	@media screen and (max-width: 782px)
{
  html{
    margin: 0 !important;
  }
}
  
.logo{
  margin: 0;
  padding:  3vh;
  font-size: 4vh;
  font-weight: 600;
}

.logo a{
  text-decoration: none;
  color: white;
  /* 仮 */
}
</style>
<body id="top">
	<header>
		<!-- logo -->
		<div class="logoImage">
		<?php original_the_custom_logo(); ?>
		</div>
    <!-- logo -->
    <!-- mobile navigation -->
    <div id="nav-drawer">
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content">
        <?php 
          wp_nav_menu( array(
            'theme_location' => 'main-menu',
            'container' => 'nav'
          ));
          ?>
      </div>
    </div>
    <!-- mobile navigation -->
    <!-- PC navigation -->
    <div id="pc-nav">
      <?php 
        wp_nav_menu( array(
          'theme_location' => 'main-menu',
          'container' => 'nav'
        ));
      ?>
    </div>
		<!-- PC navigation -->
	</header>