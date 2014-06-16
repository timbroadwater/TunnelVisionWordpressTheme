<?php get_header(); ?>

<div id="contentwrap">
<div id="contentcol">
	<div id="maincol">

<?php if ( have_posts() )
		the_post();
?>

			<h1>
<?php if ( is_day() ) : ?>
				<?php printf( __( 'Daily Archives: %s', 'twentyten' ), get_the_date() ); ?>
<?php elseif ( is_month() ) : ?>
				<?php printf( __( 'Monthly Archives: %s', 'twentyten' ), get_the_date('F Y') ); ?>
<?php elseif ( is_year() ) : ?>
				<?php printf( __( 'Yearly Archives: %s', 'twentyten' ), get_the_date('Y') ); ?>
<?php else : ?>
				<?php _e( 'Blog Archives', 'twentyten' ); ?>
<?php endif; ?>
			</h1>

<?php

	rewind_posts();

get_template_part( 'loop', 'archive' );
?>

</div>
	<div id="sidebarcol"><?php get_sidebar(); ?></div>
</div>
</div>
<div style="clear:both;"></div>

<?php get_footer(); ?>


