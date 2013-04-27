<?php
/*
Category: Latest News
*/
?>

<?php get_header(); ?>

<div id="content" class="section" role="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID() ?>" <?php post_class() ?>>

		<header class="entry-header">

			<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title() ?></a></h1>

			<?php if ( has_post_thumbnail( $post->ID ) ) : ?>
				<div class="entry-photo"><?php echo ar2_get_thumbnail( 'single_thumb' ) ?></div>
			<?php endif ?>

		</header><!-- .entry-header -->

        <div class="entry-content">
		<?php the_excerpt( __( '<p>Read the rest of this entry &raquo;</p>', 'ar2' ) ); ?>

		</div>

    </article>

<?php endwhile; else: ?>

<?php ar2_post_notfound() ?>

<?php endif; ?>

</div><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>