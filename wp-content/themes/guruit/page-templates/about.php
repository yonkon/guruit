<?php
/**
 * Template Name: About Page
 *
 * @package WordPress
 * @subpackage guruit
 * @since guruit 0.1
 */

get_header(); if (true) {?>
>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/about.css" />

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'about' ); ?>
<!--				--><?php //comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

<?php get_footer(); }?>
