<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
	
	<?php 
		//Detects if we're on the front page and assigns classes based on that.
		if( is_front_page() ):
			$basicrespond_classes = array( 'basicrespond-class', 'my-class' );
		else:
			$basicrespond_classes = array( 'no-basicrespond-class' );
		endif;
		
	?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
	<?php	global $wp_version;
if ( version_compare( $wp_version, '3.4', '>=' ) ) :
	add_theme_support( 'custom-header' );
else :
	add_custom_image_header( $wp_head_callback, $admin_head_callback );
endif;
?>
	<body <?php body_class($basicrespond_classes); ?>>
	<?php wp_nav_menu(array('theme_location'=>'primary')); ?>