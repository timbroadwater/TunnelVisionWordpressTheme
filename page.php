<?php get_header(); ?>

<div id="contentwrap">
<div id="contentcol">
	<div id="maincol">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					

						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>


<?php endwhile; ?>

</div>
	<div id="sidebarcol"><?php get_sidebar('footer'); ?></div>
</div>
</div>
<div style="clear:both;"></div>

<?php get_footer(); ?>