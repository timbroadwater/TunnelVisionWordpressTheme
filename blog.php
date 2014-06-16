<?php
/*
Template Name: blog
*/
?>

<?php get_header(); ?>



<div id="contentwrap">

<div id="contentcol">

	<div id="maincol">
    <h1>Tim Broadwater's Blog</h1>
    
<?php query_posts(''); ?>
<?php get_template_part('bloop'); ?>

    </div>

	<div id="sidebarcol"><?php get_sidebar(); ?></div>

</div>

</div>

<div style="clear:both;"></div>

<?php get_footer(); 
?>