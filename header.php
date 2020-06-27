<!DOCTYPE html>
<html <? language_attributes(); ?>>
<head>
	<meta charset="<? bloginfo('charset'); ?>">
	<title><? wp_title(''); ?><? if(wp_title('', false)) { echo ' :'; } ?> <? bloginfo('name'); ?></title>
	
	<meta name="theme-color" content="#ffffff">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="<? bloginfo('description'); ?>">

	<link rel="shortcut icon" type="image/png" href="<?=get_template_directory_uri(); ?>/favicon.png">
	<link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/dist/css/main.css?<?= time() ?>">

	<script>var template_directory = "<?=get_template_directory_uri(); ?>";</script>

	<? wp_head(); ?>
</head>

<body <? body_class(); ?>>

<div id="application">
	<header>
		<? get_template_part('partials/navigation'); ?>
	</header>