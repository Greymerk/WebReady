<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><?=$this->title?></title>
<?php foreach ($this->css as $stylesheet): ?>
		<link rel="stylesheet" type="text/css" href="<?="http://".$_SERVER['SERVER_NAME']."/".$stylesheet?>">
<?php endforeach; ?>
<?php foreach ($this->js as $script): ?>
		<script src=<?="http://".$_SERVER['SERVER_NAME']."/".$script?> type="text/javascript"></script>
<?php endforeach; ?>
	</head>
	<body>
	<h1><?=$this->title?></h1>
	<div id="content">
<?=$this->content?>
	</div>
	</body>
</html>

