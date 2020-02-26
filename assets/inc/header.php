<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="<?php echo $path;?>assets/css/brandstylesheet.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script src='<?php echo $path;?>assets/js/wineWorx.js' type='text/javascript'></script>
	<script src='<?php echo $path;?>assets/js/GiftCertification_js.js' type='text/javascript'></script>
</head>
<body>
	<?php include($path.'assets/inc/nav.php'); ?>
	<!-- Hero Banner Section -->
	<?php herobannersetup(); ?>
