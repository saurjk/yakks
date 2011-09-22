<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class=" js flexbox canvas canvastext no-webgl no-touch geolocation postmessage no-websqldatabase no-indexeddb hashchange no-history draganddrop no-websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity no-cssanimations csscolumns cssgradients no-cssreflections csstransforms no-csstransforms3d no-csstransitions fontface video audio localstorage sessionstorage webworkers applicationcache svg no-inlinesvg no-smil svgclippaths" xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Yakks</title>
<?php 
echo link_tag('libs/css/reset.css','stylesheet','text/css'); 
echo link_tag('libs/css/text.css','stylesheet','text/css'); 
echo link_tag('libs/css/960.css','stylesheet','text/css'); 
echo link_tag('libs/css/master.css','stylesheet','text/css'); 
echo link_tag('libs/images/favicon.gif', 'shortcut icon', 'image/ico'); 
?>

</head>
<body>

<?php $this->load->view('includes/header');?>

<div id = "content" class="container_12">

<div id = "top-content" class="grid_12 clearfix">

<div id="web-development" class="grid_4 alpha"><?php echo img('libs/images/service-1.png'); ?></div>
<div id="corporate-identity" class="grid_4"><?php echo img('libs/images/service-2.png'); ?></div>
<div id="graphics-and-multimedia" class="grid_4 omega clearfix"><?php echo img('libs/images/service-3.png'); ?></div>
</div>

<div id="middle-content" class="grid_12 clearfix">
<div id = "left-box" class="grid_4 alpha">
	<p>If you're </br>
		looking for a </br>
		<span class="teal">great-looking </br>
		website</span> that </br>
		you have in </br>
		mind and a </br>
		<span class="green">team that'll </br>
		deliver</span> just that, </br>
		you've landed at </br>
		the <span class="yellow">right place!</span></p>
 </div>
<div id = "portfolio" class="grid_8 omega clearfix"><?php echo img('libs/images/portfolio.png'); ?></div>

</div>

<div id="bottom-content" class="grid_12 clearfix">

<div id = "team" class="grid_4 alpha">
<h1>The Team</h1>

	<?php echo $members; ?>


</div>
<div class="grid_5">
<div id="yakks-who">
<h1>Yakks Who?</h1>
	<p>Yakks is a professional web-based solutions agency, specializing in combining interactive design with intelligent technology. 
	Our main focus lies on web development, corporate identity, and graphics & multimedia. Our result-oriented services are tied in with 
	creative marketing campaigns for that extra ROI. We'll spare you the yada yada.</p>
	<p>
    See if you can find anything of interest in our portfolio. If you do, don't forget to shoot us an email.
	</p>
</div>
</div>
<div id = "so" class="grid_3 omega clearfix">

<h1>So?</h1>
<p class="blockquote">
Yakks is a professional web-based solutions agency, specializing in combine ing design with intelligent...
</p>
<p class="owner">
- Jericho, WWE
</p>
<div id="so-image">
<?php echo img('libs/images/so-image.png'); ?>
</div>

<div id = "now-what">
<input name="Submit1" type="submit" value="now what?" id="now-what-button" /></div>
</div>
</div>
</div>


<div class="clear"></div>

<?php $this->load->view('includes/footer');?>

</body>
</html>