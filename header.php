<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<!--
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
-->
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:400" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body <?php body_class(); ?>>

	<nav class="main-nav">
		<ul class="top-nav">
			<li style="float:left"><a href="<?php echo home_url(); ?>">Handbook360</a></li>
			<li><a href="interview-insights">Interview Insights</a></li>
			<li><a href="application-advice">Application Advice</a></li>
		</ul>

		<?php if ( !is_front_page() && function_exists( 'yoast_breadcrumb' ) ) {
			echo "<div class='breadcrumb'>";
			yoast_breadcrumb();
			echo "</div>";
		} ?>

	</nav>