<?php ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>


<title>VF20 DESIGNS</title>
<meta name="keywords" content="Morgantown Web Design, West Virginia Web Design, WV, VF20 Designs, Web Design, Multimedia Design, Animation, Web Hosting, Domain Registration, Instructional Design, Graphic Design">
<meta name="description" content="VF20 Designs is a sole proprietorship multimedia, graphic, animation and web design business operating in the greater Pittsburgh, North-Central West Virginia and East Maryland area." />
<meta name="viewport" content="width=device-width; initial-scale=1.0, maximum-scale=1.0">
<link href="favicon.ico" rel="icon" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>

<?php wp_head(); ?>
</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=398775990149892";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="topmenu">
	<div id="logo"><a style="text-decoration:none;" href="http://www.vf20designs.com/"><span style="color:#ff0000; font-weight:bold;">V F 2 0 </span> <span style="color:#fff;">&nbsp; D E S I G N S</span></a></div>
<div id="mlogo"><a style="text-decoration:none;" href="http://www.vf20designs.com/"><span style="color:#ff0000; font-weight:bold;">V F 2 0 </span> <span style="color:#fff;">&nbsp; D E S I G N S</span></a></div>
		<div id="access" role="navigation">
			<div id="menu"><?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</div>
		</div>
		<div id="mnav" role="navigation">

<form name="form1" id="form1" action="" method="get">
<?php $select = wp_dropdown_pages('show_option_none=Select%20a%20Page&depth=0&sort_column=menu_order&echo=0');
$select = preg_replace("#<select([^>]*)>#", "<select$1 onchange='return this.form.submit()'>", $select);
echo $select;
?>
<noscript><input type="submit" name="submit" value="view" /></noscript>
</form>


</div>
		<div id="search">
			<form role="search" method="get" id="searchform" action="http://www.vf20designs.com/" >
			<input type="submit" id="searchsubmit" value="" />
			<input type="text" value="SEARCH" name="s" id="s" /></form>
		</div>
		<div id="msearch">
			<form role="search" method="get" id="searchform" action="http://www.vf20designs.com/" >
			<input type="submit" id="searchsubmit" value="" />
			<input type="text" value="SEARCH" name="s" id="s" /></form>
		</div>
</div>