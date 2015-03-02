<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Edmundo Junior / Designer &amp; Front-end Developer</title>
	<meta name="description" content="Solving problems is the favourite part of my job. I develop functional websites that work in every OS or device that the user has in his hands. I strive for a unique experience, using well thought design and a extremely thorough execution.">

	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">

	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/main.css">
<!--
	<script type="text/javascript" src="//use.typekit.net/zco3qqa.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
 -->

</head>

<body <?php body_class(); ?>>

	<header class="header" role="banner">

		<nav class="nav container" role="navigation">
			<h1 class="logo ir">
				<a href="./">
					<img src="assets/img/logo.svg" alt="Edmundo's brand" width="70" height="79">
					Edmundo Junior, Designer and Front-end Developer
				</a>
			</h1>
			<ul>
				<li><a <?php active_class("index"); ?> href="./">About</a></li>
				<li><a <?php active_class("work"); ?> href="work">Work</a></li>
				<li><a <?php active_class("blog"); ?> href="blog">Blog</a></li>
				<li><a <?php active_class("contact"); ?> href="contact">Contact</a></li>
			</ul>
		</nav>

<?php $page = basename($_SERVER['PHP_SELF'], ".php"); ?>
		<div class="intro container cf">
			<div class="row">
				<div class="col col-2-3">
<?php if ($page == "index"): ?>
					<h1>Elegant design,<br> thorough execution.</h1>
					<p>As a designer and developer, I unite visual and code, always striving for an unique experience.</p>
<?php elseif ($page == "work"): ?>
					<h1>Porta ipsum,<br> tellus vulputate.</h1>
					<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
<?php elseif ($page == "blog"): ?>
					<h1>Porta ipsum,<br> tellus vulputate.</h1>
					<p>Cum sociis natoque penatibus et magnis parturient montes, nascetur ridiculus.</p>
<?php elseif ($page == "contact"): ?>
					<h1>Let's get down<br> to business.</h1>
					<p>I'm always looking for new projects and opportunities, have you got any?</p>
<?php endif; ?>
				</div>
			</div>
		</div>

	</header>

	<main <?php main_class(); ?> role="main">