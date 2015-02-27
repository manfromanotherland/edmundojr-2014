<?php include 'inc/functions.php'; get_header(); ?>

		<div class="intro container container--narrow cf">
			<div class="row">
				<div class="col col-2-3">
					<h1>Let's get down<br> to business.</h1>
					<p>I'm always looking for new projects and opportunities, have you got any?</p>
				</div>
			</div>
		</div>

	</header>

	<main class="main main--contact color-bright" role="main">

		<div class="container container--narrow cf">
			<article class="row">
				<div class="col col-2-3">
					<h2 class="main-title">Get in touch</h2>
					<p>I'm currently <strong>available for freelance work</strong>. In case you have a project in mind or want more information, drop me a line.</p>
					<form action="sendmail.php" method="post" class="contact-form">
						<div class="row">
							<div class="col col-1-2">
								<input type="text" name="name" id="name" placeholder="Name">
							</div>
							<div class="col col-1-2">
								<input type="email" name="emal" id="email" placeholder="Email">
							</div>
							<div class="col">
								<textarea name="message" id="message" cols="30" rows="5" placeholder="Message"></textarea>
							</div>
							<div class="col">
								<input class="submit" type="submit" value="Send message">
							</div>
						</div>
					</form>
				</div>
				<aside class="col col-1-3 sidebar" role="complementary">
					<h4>Email me</h4>
					<ul class="contact-me">
						<li><a href="mailto:hello@edmundojr.com">hello@edmundojr.com</a></li>
					</ul>
					<h4>Call me</h4>
					<ul class="contact-me">
						<li><a href="tel:+353834599564">+353 83 459 9564</a></li>
					</ul>
					<h4>Follow me</h4>
					<ul class="contact-me">
						<li><a href="http://twitter.com/edmundojr_">Twitter</a></li>
						<li><a href="http://instagram.com/edmundojr_">Instagram</a></li>
					</ul>
				</aside>
			</article>
		</div>

<?php get_footer(); ?>