<?php
/**
 * Template Name: Contacts Page
 *
 * @package WordPress
 * @subpackage guruit
 * @since guruit 0.1
 */
wp_enqueue_script( 'jquery');
get_header(); if (true) {?>
>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contacts.css" />

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'contacts' ); ?>
<!--				--><?php //comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
<!--<script type="text/javascript" src="--><?php //echo get_template_directory_uri(); ?><!--/js/contacts.js"></script>-->
<?php get_footer(); }?>
