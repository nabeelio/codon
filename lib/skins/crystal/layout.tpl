<?php
/**
 * 
 * STOP!!!!!!!!
 * 
 * Are you editing the crystal skin directly?
 * DON'T
 * 
 * Copy and rename the crystal folder. Otherwise it'll get 
 * overwritten in an update.
 * 
 * Also, READ THE DOCS
 * 
 *   http://www.phpvms.net/docs/skinning
 * 
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<title><?php echo $page_title; ?></title>

<?php 
/* This is required, so phpVMS can output the necessary libraries it needs */
echo $page_htmlhead; 
?>

<?php /*Any custom Javascript should be placed below this line, after the above call */ ?>

</head>
<body>
<?php
/* This should be the first thing you place after a <body> tag
	This is also required by phpVMS */
echo $page_htmlreq;
?>
	
	<div id="topNav">
		<ul class="nav">
			<?php
			/*	You can modify this template into a table or something, by default
				it's list elements inside of a UL. Here's a link with some info:
				
				http://articles.sitepoint.com/article/css-anthology-tips-tricks-4/2
			 */
			Template::Show('core_navigation.tpl');
			?>
		</ul>
	</div>
	
	<div id="bodytext">
	
	<?php
	/*	This will insert all of the "meat" of the page in there - the template
		which is generated, depending on which page you're on. To change these
		templates, check out the docs on the site. They're under the /core/templates
		folder, and to change them, copy them into the folder of your skin (the
		folder this file is in right now.
	 */
	 
	echo $page_content;
	
	?>
	
	</div>
</body>
</html>
