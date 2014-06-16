<?php get_header(); ?>

<div id="contentwrap">
<div id="contentcol">
	<div id="maincol">

				<h1><?php _e( 'Not Found', 'twentyten' ); ?></h1>
				<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?></p>
				<?php get_search_form(); ?>

	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

</div>
	<div id="sidebarcol"><?php get_sidebar(); ?></div>
</div>
</div>
<div style="clear:both;"></div>

<?php get_footer(); ?>





<?php get_footer(); ?>