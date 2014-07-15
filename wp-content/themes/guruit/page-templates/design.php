<?php
/**
 * Template Name: Design Page
 *
 * @package WordPress
 * @subpackage guruit
 * @since guruit 0.1
 */
wp_enqueue_script( 'jquery');
get_header(); if (true) {?>
>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/design.css" />

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'design' ); ?>
<!--				--><?php //comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

<?php get_footer(); }?>
