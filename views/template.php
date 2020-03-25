<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=width-device, initial-scale=1.0">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>assets/framework/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>assets/framework/fonts/fonts.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>assets/framework/material_icons/icons.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>assets/css/style.css">
</head>
<body>

<?php $this->loadV($name, $dados); ?>

<script type="text/javascript" src="<?php echo BASE; ?>assets/framework/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo BASE; ?>assets/framework/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo BASE; ?>assets/js/script.js"></script>
</body>
</html>
