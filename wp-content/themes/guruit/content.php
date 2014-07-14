<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
if(false) {
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'guruit' ); ?>
		</div>
		<?php endif; ?>
		<header class="entry-header">
			<?php if ( ! post_password_required() && ! is_attachment() ) :
				the_post_thumbnail();
			endif; ?>

			<?php if ( is_single() ) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php else : ?>
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
			<?php endif; // is_single() ?>
			<?php if ( comments_open() ) : ?>
				<div class="comments-link">
					<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'guruit' ) . '</span>', __( '1 Reply', 'guruit' ), __( '% Replies', 'guruit' ) ); ?>
				</div><!-- .comments-link -->
			<?php endif; // comments_open() ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'guruit' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'guruit' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">
			<?php guruit_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'guruit' ), '<span class="edit-link">', '</span>' ); ?>
			<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
				<div class="author-info">
					<div class="author-avatar">
						<?php
						/** This filter is documented in author.php */
						$author_bio_avatar_size = apply_filters( 'guruit_author_bio_avatar_size', 68 );
						echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
						?>
					</div><!-- .author-avatar -->
					<div class="author-description">
						<h2><?php printf( __( 'About %s', 'guruit' ), get_the_author() ); ?></h2>
						<p><?php the_author_meta( 'description' ); ?></p>
						<div class="author-link">
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
								<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'guruit' ), get_the_author() ); ?>
							</a>
						</div><!-- .author-link	-->
					</div><!-- .author-description -->
				</div><!-- .author-info -->
			<?php endif; ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
<?php }
//echo "<h1>Content</h1>";
?>
<div id="ms_bgsize_fix">&nbsp;</div>
<div class="main_page content">
<!--	Коричневые кнопки-->
	<a class="main_page button" id="link_site_development">Разработка сайтов</a>
	<a class="main_page button" id="link_web_design">Веб-дизайн</a>
	<a class="main_page button" id="link_infographics" >Инфографика</a>
	<a class="main_page button" id="link_seo" >SEO</a>
	<a class="main_page button" id="link_portfolio" >Портфолио</a>
	<a class="main_page button" id="link_contacts" >Контакты</a>

	<a class="main_page button" id="link_make_order" >Заказать услугу</a>
<!--	Коричневые кнопки - КОНЕЦ -->
<!-- Синие кнопки -->
	<a class="main_page button" id="link_details" >Подробнее</a>
<!-- Синие кнопки - КОНЕЦ -->
<!-- Ссылки-->
	<a class="main_page button" id="link_download" >Скачать</a>
	<a class="main_page button" id="link_portfolio_count" >Работ в нашем <span class="underlined">портфолио</span></a>
<!-- Ссылки - КОНЕЦ -->
<!-- Невидимые кнопки-->
	<a class="main_page button"  id="link_email" >Почта</a>
	<a class="main_page button social"  id="link_vk" onclick="alert('vk');" >&nbsp;</a>
	<a class="main_page button social"  id="link_fb" onclick="alert('fb');">&nbsp;</a>
	<a class="main_page button social"  id="link_tw" onclick="alert('tw');">&nbsp;</a>
	<!-- Невидимые кнопки-->
    <!-- Серединка-->
  <div id="bulb_on"></div>
  <div id="bulb_off"></div>
  <div id="lamp_on"></div>
  <div id="lamp_off"></div>
    <!-- Серединка-->
    <?php // echo do_shortcode('[wonderplugin_carousel id="1"]'); ?>
</div>