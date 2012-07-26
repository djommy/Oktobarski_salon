<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/wp-content/themes/Oktobarskisalon/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/Oktobarskisalon/js/jquery.mousewheel.js"></script>
<link rel="stylesheet" href="/wp-content/themes/Oktobarskisalon/js/jquery.jscrollpane.css" type="text/css" />
<link rel="stylesheet" href="/wp-content/themes/Oktobarskisalon/js/scroll.css" type="text/css" />
<script type="text/javascript">

$(function() {
	$('.entry-content').jScrollPane();
}); 
</script>

<style type="text/css" rel="stylesheet">
.entry-content {
width: 100%;
height: 415px;
overflow: auto;
} 

</style>


<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> <!-- enables nested comments in WP 2.7 -->
<?php wp_head(); //leave for plugins ?>

</head>

<div id="wrapper"> <!-- #wrapper ends in footer.php -->

<body>


<div id="header">
	<div id="header1"></div>
		
	<div id="logo"></div>

<div id="date">
	<?php echo date ('l'); echo '<br>'; echo date('j F Y'); ?> 
</div>

<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
<h2><?php bloginfo('description'); ?></h2>

</div><!-- end #header -->

<div id="content">

<!-- Language selection -->
<div id="language">
	<span><a href="#">sprski </a></span>
	<span><a href="#">| english</a></span>
</div>
	
<!-- Searchform -->
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="nađi" />
<input type="submit" id="searchsubmit" value="<?php _e('Search'); ?>" />
</form>

<!-- Menu list -->

<div id="aside">
	<?php wp_nav_menu(); ?>
	<?php
  if($post->post_parent)
  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
  else
  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
  if ($children) { ?>
  <ul>
  <?php echo $children; ?>
  </ul>
  <?php } ?>

</div> <!-- end Aside -->

<div id="picture"></div>
</div> <!-- end Content -->

<div id="social">
	<a href="#" class="youtube">youtube</a>
	<a href="#" class="facebook">facebook</a>
	<a href="#" class="twitter">twitter</a>
</div><!-- end social-->

<div class="katalog">
	<a href="#" class="katalog1">preuzmi PDF katalog</a>
</div>