<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" type="image/x-icon">
</head>

<body <?php body_class(); ?>>
<header id="header">
	<div id="main-logo">
		<a href="<?php echo home_url(); ?>" class="logo">
      <?php get_template_part('img/logo.svg'); ?>
		</a>
  </div>

  <?php if ( has_nav_menu( 'header-menu' ) ) : ?>
    <?php wp_nav_menu( array(
      'theme_location' => 'header-menu',
      'container' => 'nav',
      'container_class' => 'header-menu',
      'container_id' => false,
      'menu_class' => false,
      'menu_id' => false,
      'menu_item_class' => false,
    ) ); ?>
  <?php endif; ?>
</header>
<?php edit_post_link( 'Edit', '<p class="edit-button">', '</p>' ); ?>
