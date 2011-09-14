<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class=" js flexbox canvas canvastext no-webgl no-touch geolocation postmessage no-websqldatabase no-indexeddb hashchange no-history draganddrop no-websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity no-cssanimations csscolumns cssgradients no-cssreflections csstransforms no-csstransforms3d no-csstransitions fontface video audio localstorage sessionstorage webworkers applicationcache svg no-inlinesvg no-smil svgclippaths" xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Yakks - Contact</title>
<?php 
echo link_tag('libs/css/reset.css','stylesheet','text/css'); 
echo link_tag('libs/css/text.css','stylesheet','text/css'); 
echo link_tag('libs/css/960.css','stylesheet','text/css'); 
echo link_tag('libs/css/master.css','stylesheet','text/css'); 
echo link_tag('libs/images/favicon.gif', 'shortcut icon', 'image/ico'); 
?>

<script type="text/javascript" src="<?php echo base_url();?>libs/js/fckeditor/fckeditor.js"></script>
<script type="text/javascript">
		window.onload=function(){
		  var oFCKeditor = new FCKeditor('msg') ;
		  oFCKeditor.BasePath = "<?php echo base_url();?>libs/js/fckeditor/" ;
		  oFCKeditor.Width = '80%' ;
		  oFCKeditor.Height = '400' ; 
		  oFCKeditor.ReplaceTextarea() ;
		};
</script>
</head>
<body>

<?php $this->load->view('includes/header');?>

<div id = "content" class="container_12">

<div id = "top-content" class="grid_12 clearfix">

<h1>Contact</h1>
<?php echo form_open("main/contact/sendmail"); ?>
	<p>Name</p>
	<p><input type="text" name="fname" /></p>
	<p>Email</p>
	<p><input type="text" name="email" /></p>
	<p>Message</p>
	<p><textarea id="msg" name="msg"></textarea></p>
    <p><input type="submit" value="Send"/></p>
</form>

<div id="hi-yak"></div>
</div>
</div>


<div class="clear"></div>

<?php $this->load->view('includes/footer');?>

</body>
</html>