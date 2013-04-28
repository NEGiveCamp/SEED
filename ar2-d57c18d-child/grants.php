<?php
/*
Template Name: Grant
*/
?>
<?php get_header();
	$args= array(
		'post_type' => 'project',
	);

	$the_query = new WP_Query( $args );
?>

<div id="content" class="section" role="main">

<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
	<article id="post-<?php the_ID() ?>" <?php post_class() ?>>

		<header class="entry-header clearfix">

			<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title() ?></a></h1>

			<?php if ( has_post_thumbnail( $post->ID ) ) : ?>
				<div class="entry-photo"><?php echo ar2_get_thumbnail() ?></div>
			<?php endif ?>

		</header><!-- .entry-header -->

        <div class="entry-content clearfix">
			<?php the_content( __( '<p>Read the rest of this entry &raquo;</p>', 'ar2' ) ); ?>
		</div>

    </article>

<?php endwhile; else: ?>

<?php ar2_post_notfound() ?>

<?php endif; ?>

</div><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>