<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131464345-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-131464345-1');
	</script>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" type="image/ico" href="<?php echo get_template_directory_uri(); ?>/images/icon.png">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Oleo+Script:700|Raleway:500&display=swap" rel="stylesheet">

	<?php wp_head(); ?>

</head>

<body>
	<?php if(!is_front_page()) : ?>

		<header class="header-bar">
			<a href="./">
				<h1>Charles Hopkins</h1>
			</a>
		</header>

	<?php endif; ?>
