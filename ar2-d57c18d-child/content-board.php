<?php
/**
 * The template for board of directors
 */
?>

<article id="post-<?php the_ID() ?>" <?php post_class() ?>>

	<header class="entry-header clearfix">

		<h1 class="entry-title">
			<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title() ?></a>
		</h1>

		<?php if ( has_post_thumbnail( $post->ID ) ) : ?>
			<div class="entry-photo"><?php echo ar2_get_thumbnail( 'biography' ) ?></div>
		<?php endif ?>

	</header><!-- .entry-header -->

    <div class="entry-content clearfix">
	<?php the_content( __( '<p>Read the rest of this entry &raquo;</p>', 'ar2' ) ); ?>
	</div>

</article>