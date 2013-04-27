<?php get_header(); ?>

<div id="content" class="section" role="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID() ?>" <?php post_class() ?>>

		<header class="entry-header clearfix">

			<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title() ?></a></h1>

			<?php if ( has_post_thumbnail( $post->ID ) ) : ?>
				<div class="entry-photo"><?php echo ar2_get_thumbnail() ?></div>
			<?php endif ?>

			<?php if ( ar2_get_theme_option( 'post_display[post_social]' ) ) : ?>
			<div class="entry-social">
					<div class="addthis_toolbox addthis_default_style">
						<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
						<a class="addthis_button_tweet"></a>
						<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
						<a class="addthis_counter addthis_pill_style"></a>
					</div>
			</div>
			<?php endif ?>

		</header><!-- .entry-header -->

        <div class="entry-content clearfix">
			<?php the_content( __( '<p>Read the rest of this entry &raquo;</p>', 'ar2' ) ); ?>
		</div>

		<footer class="entry-footer clearfix">

			<?php if ( ar2_get_theme_option( 'post_display[post_social]' ) ) : ?>
			<div class="entry-social">
					<div class="addthis_toolbox addthis_default_style">
						<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
						<a class="addthis_button_tweet"></a>
						<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
						<a class="addthis_counter addthis_pill_style"></a>
					</div>
			</div>
			<?php endif ?>

        </footer><!-- .entry-footer -->
    </article>

<?php endwhile; else: ?>

<?php ar2_post_notfound() ?>

<?php endif; ?>

</div><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>