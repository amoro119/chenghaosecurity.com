<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <base href="<?php echo get_option('home','http://chenghaosecurity.com/') ?>">
  <title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
  <meta name="description" content="">
  <meta name="author" content="xtunes.cn">
  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <link rel="stylesheet" type="text/css" media="all" href="base/templates/css/common.css" />
  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="js/libs/modernizr-1.7.min.js"></script>
  <script type="text/javascript" src="base/js/base.js"></script>
  <script type="text/javascript" src="base/js/common.js"></script>
  <script type="text/javascript" src="base/js/form.js"></script>
  <script type="text/javascript" src="base/js/blockui.js"></script>
<?php
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body class="page" id="<?php the_ID(); ?>" style='background:#eaeaea url(effect/source/bg/topbg.jpg) repeat-x scroll 0% 0%'>
<script>
var PDV_PAGEID='1'; 
var PDV_RP=''; 
var PDV_COLTYPE='index'; 
var PDV_PAGENAME='index'; 
</script>

<div id='contain' style='width:1258px;background:none transparent scroll repeat 0% 0%;margin:0px auto;padding:0px'>

<div id='top' style='width:1258px;height:552px;background:none transparent scroll repeat 0% 0%'>


<!-- 全站头部图片广告 -->

<div id='pdv_14981' class='pdv_class'  title='广告位' style='width:1258px;height:401px;top:151px;left:0px; z-index:1'>
<div id='spdv_14981' class='pdv_top' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:12px;line-height:25px;font-weight:bold;color:">
		广告位
		</div>
		<div style="float:right;margin-right:10px;display:none">
		<a href="-1" style="line-height:25px;color:">更多</a>
		</div>
	</div>
<div style="padding:0px">


<a href="http://"><img src="advs/pics/20130323/1364047559.jpg" border="0" width="100%" /></a>

</div>
</div>

</div>
</div>

<!-- 网站标志 -->

<div id='pdv_10806' class='pdv_class'  title='' style='width:299px;height:48px;top:50px;left:38px; z-index:3'>
<div id='spdv_10806' class='pdv_top' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:12px;line-height:25px;font-weight:bold;color:">
		
		</div>
		<div style="float:right;margin-right:10px;display:none">
		<a href="-1" style="line-height:25px;color:">更多</a>
		</div>
	</div>
<div style="padding:0px">


<a href="#"><img src="advs/pics/20121212/1355308402.png"border="0" /></a>


</div>
</div>

</div>
</div>

<!-- 全站透明FLASH18 -->

<div id='pdv_15142' class='pdv_class'   style='width:1220px;height:370px;top:163px;left:9px; z-index:8'>
<div id='spdv_15142' class='pdv_top' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:12px;line-height:25px;font-weight:bold;color:">
		
		</div>
		<div style="float:right;margin-right:10px;display:none">
		<a href="-1" style="line-height:25px;color:">更多</a>
		</div>
	</div>
<div style="padding:0px">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="100%" height="100%">
 <param name="movie" value="effect/templates/images/traflash18.swf" />
 <param name="quality" value="high" />
 <param name="wmode" value="transparent" />
 <embed src="effect/templates/images/traflash18.swf" wmode="transparent" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="100%" height="100%"></embed>
</object>


</div>
</div>

</div>
</div>

<!-- 二级下拉菜单44 -->

<div id='pdv_14929' class='pdv_class'   style='width:876px;height:150px;top:0px;left:382px; z-index:10'>
<div id='spdv_14929' class='pdv_top' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:12px;line-height:25px;font-weight:bold;color:">
		导航菜单
		</div>
		<div style="float:right;margin-right:10px;display:none">
		<a href="-1" style="line-height:25px;color:">更多</a>
		</div>
	</div>
<div style="padding:0px">

<link href="menu/templates/css/dropmenu44.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="menu/js/dropmenu44.js"></script>

<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary', 'menu_id' => 'dropmenu' ) ); ?>
</div>
</div>

</div>
</div>
</div>
