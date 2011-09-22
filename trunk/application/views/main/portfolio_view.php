<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class=" js flexbox canvas canvastext no-webgl no-touch geolocation postmessage no-websqldatabase no-indexeddb hashchange no-history draganddrop no-websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity no-cssanimations csscolumns cssgradients no-cssreflections csstransforms no-csstransforms3d no-csstransitions fontface video audio localstorage sessionstorage webworkers applicationcache svg no-inlinesvg no-smil svgclippaths" xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Yakks - Portfolio</title>
<?php 
echo link_tag('libs/css/reset.css','stylesheet','text/css'); 
echo link_tag('libs/css/text.css','stylesheet','text/css'); 
echo link_tag('libs/css/960.css','stylesheet','text/css'); 
echo link_tag('libs/css/master.css','stylesheet','text/css'); 
echo link_tag('libs/css/gallery.css','stylesheet','text/css'); 
echo link_tag('libs/images/favicon.gif', 'shortcut icon', 'image/ico'); 
?>
<script type="text/javascript" src="<?php echo site_url('libs/js/jquery-1.6.4.js'); ?>" ></script>
<script type="text/javascript" src="<?php echo site_url('libs/js/my-gallery.js'); ?>" ></script>
<script type="text/javascript" src="<?php echo site_url('libs/js/portfolio.js'); ?>" ></script>
</head>
<body>

<?php $this->load->view('includes/header');?>

<div id = "content" class="container_12">

<div id = "top-content" class="grid_12 clearfix portfolio">
<h1>portfolio</h1>
<p>Blog commenting is another link-building technique that has become quite popular these days. Search the web for authoritative blogs in your niche that allow do-follow commenting and share your mind there. Make sure you read the post before commenting and try to make a point with your comment.</p>

</div>

<div id = "middle-content" class="grid_12 clearfix portfolio">
<ul id = "gallery-thumbnails">
	<li class = "previous_thumbnail grid_1 alpha"><div class="left_arrow">previous</div></li>
	<?php echo $pf; ?>
	<li class = "next_thumbnail grid_1 omega"><div class="right_arrow">next</div></li>
</ul>
</div>

<div id="bottom-content" class="grid_12 clearfix portfolio">

  <div id='gallery-content'>
  	<?php echo $pf_desc; ?>
  </div>
  

</div>

</div>


<div class="clear"></div>

<?php $this->load->view('includes/footer');?>

</body>
</html>