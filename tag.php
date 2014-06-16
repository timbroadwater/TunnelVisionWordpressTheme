<?php get_header(); ?>

<div id="contentwrap">
<div id="contentcol">
	<div id="maincol">

<h1><?php
					printf( __( 'Tag Archives: %s', 'twentyten' ), '' . single_tag_title( '', false ) . '' );
				?></h1>

<?php
/* Run the loop for the tag archive to output the posts
 * If you want to overload this in a child theme then include a file
 * called loop-tag.php and that will be used instead.
 */
 get_template_part( 'loop', 'tag' );
?>

</div>
	<div id="sidebarcol"><?php get_sidebar(); ?></div>
</div>
</div>
<div style="clear:both;"></div>

<?php get_footer(); ?>
