<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!--[if IE]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/ie.css" type="text/css" media="screen" /><![endif]-->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script src="https://www.google.com/jsapi?key=ABQIAAAAOvvYrV-mHRz4y7Y_ld23jxRoAscEXkVbs6ig30fN3zlOI3kofBRbKrmtKGgfYRYWlw9OHYKNMj0b8Q" type="text/javascript"></script>
<?php wp_head(); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19982381-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>

<div id="wrapper">

  <div id="header">
    <div id="logo">
    <a href="<?php echo get_option('home'); ?>"><img src="/wp-content/themes/clean-home/images/TitleImage.gif" alt="<?php bloginfo('name'); ?>" width="736" height="130" border="0"/></a>
    
    </div>
    <div id="nav">
    <?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('Top Navigation') ) : ?>
      <ul>
        <?php wp_list_pages('include=2&title_li='); ?>
      </ul>
    <?php endif; ?>
    </div>
  </div>

  <!--<div id="blurb">
    <?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('Blurb') ) : ?>
    Use your widget sidebars in the admin Design tab to change this little blurb here. Add the text widget to the Blurb Sidebar!
    <?php endif; ?>
  </div>-->
