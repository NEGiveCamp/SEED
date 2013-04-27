<?php
/**
 * The template for displaying latest news
 */
?>

<article id="post-<?php the_ID() ?>" <?php post_class() ?>>

	<header class="entry-header clearfix">

		<h1 class="entry-title">
			<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title() ?></a>
		</h1>

		<?php if ( has_post_thumbnail( $post->ID ) ) : ?>
			<div class="entry-photo"><?php echo ar2_get_thumbnail( 'single_feature' ) ?></div>
		<?php endif ?>

	</header><!-- .entry-header -->

    <div class="entry-content clearfix">
	<?php the_content( __( '<p>Read the rest of this entry &raquo;</p>', 'ar2' ) ); ?>
	</div>

	<div class="entry-social">
		<div class="addthis_toolbox addthis_default_style"
			addthis:url="<?php echo esc_attr( get_permalink( $post->ID ) ) ?>"
			addthis:title="<?php echo esc_attr( get_the_title() ) ?>"
			addthis:description="<?php the_excerpt_rss( 30, 2 ) ?>">
			<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
			<a class="addthis_button_tweet"></a>
			<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
			<a class="addthis_counter addthis_pill_style"></a>
		</div>
	</div>

</article>