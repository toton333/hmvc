<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<style>
	 body{background: grey; color:cyan;}
	</style>
</head>
<body>
	<?php $this->load->view($module. '/'. $content); ?>
</body>
</html>