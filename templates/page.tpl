<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Routes and Templates Test</title>
		<?php foreach ($this->css as $stylesheet): ?>
			<link rel="stylesheet" type="text/css" href="<?=$stylesheet?>">
		<?php endforeach; ?>
		<?php foreach ($this->js as $script): ?>
			<script src=<?=$script?> type="text/javascript"></script>
		<?php endforeach; ?>
	</head>
	<body>
	<div id="page-wrapper">
		<div id="header">
		<?=$this->menu?>
		</div>
		<div id="wrapper" class="clearfix">
			<div id="content">
			<?=$this->content?>
			</div>
		</div>
		<div id="footer" class="clearfix">
		</div>
	</div>
	</body>
</html>