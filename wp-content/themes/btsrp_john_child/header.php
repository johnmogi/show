<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package btstrp_john
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!--php wp_head(); -->
	<link rel='stylesheet' id='wp-block-library-rtl-css'  href='<?php echo home_url(); ?>/wp-includes/css/dist/block-library/style-rtl.min.css' media='all' />
<link rel='stylesheet' id='parent-style-css'  href='<?php echo home_url(); ?>/wp-content/themes/btstrp_john/style.css' media='all' />
<link rel='stylesheet' id='btstrp_john-style-rtl-css'  href='<?php echo home_url(); ?>/wp-content/themes/btsrp_john_child/style-rtl.css' media='all' />
<link rel='https://api.w.org/' href='<?php echo home_url(); ?>/wp-json/' />
	<link rel="stylesheet" href="<?php echo home_url(); ?>\wp-content\themes\btsrp_john_child\bulma-0.9.0\css\bulma.min.css">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="container">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'btstrp_john' ); ?></a>

	<header id="masthead" class="site-header">

	<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">

  <div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$btstrp_john_description = get_bloginfo( 'description', 'display' );
			if ( $btstrp_john_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $btstrp_john_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->


    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
	<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'btstrp_john' ); ?></button>
			
<?php
wp_nav_menu( array(
    'theme_location'    => 'menu-1',
    'menu_id'        => 'primary-menu',
    'depth'             => 2,
    'container'         => false,
    'container_class'   => 'navbar-burger burger',
    'container_id'      => 'navbarBurger',
    'menu_class'        => 'navbar-menu',

) );
?>




		</nav><!-- #site-navigation -->
	</div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light">
            Log in
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>




	
	</header><!-- #masthead -->
