<?php get_header(); ?>

<div id="content" class="section" role="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php ar2_above_post() ?>

    <?php get_template_part( 'content', 'board' ) ?>

<?php endwhile; else: ?>
<?php ar2_post_notfound() ?>

<?php endif; ?>

</div><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>