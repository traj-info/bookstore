<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
 
<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
 
<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
    text-decoration: underline;
}
</style>
</head>
<body>
	<div style="">
		<ul>
			<li><a href="<?php echo base_url(); ?>/items">ITEMS</a></li>
			<li><a href="<?php echo base_url(); ?>/settings">SETTINGS</a></li>
			<li><a href="<?php echo base_url(); ?>/categories">CATEGORIES</a></li>
			<li><a href="<?php echo base_url(); ?>/users">USERS</a></li>
		</ul>
	</div>

    <div>
        <?php echo $output; ?>
 
    </div>
</body>
</html>