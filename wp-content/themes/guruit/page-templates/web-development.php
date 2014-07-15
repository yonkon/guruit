<?php
/**
 * Template Name: Web Development Page
 *
 * @package WordPress
 * @subpackage guruit
 * @since guruit 0.1
 */

get_header(); if (true) {?>
>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/web_development.css" />

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'web_development' ); ?>
<!--				--><?php //comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/web_development.js"></script>
<?php get_footer(); }?>
