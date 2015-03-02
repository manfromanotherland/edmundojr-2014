<?php include 'inc/functions.php'; get_header(); ?>

		<div class="container cf">

			<article class="row">

				<div class="col col-2-3">
					<h1 class="title-main">Get in touch</h1>
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
								<textarea name="message" id="message" cols="30" rows="6" placeholder="Message"></textarea>
							</div>
							<div class="col">
								<input class="submit" type="submit" value="Send message">
							</div>
						</div>
					</form>
				</div>

				<aside class="col col-1-3 sidebar" role="complementary">
					<h4>Email me</h4>
					<ul class="link-list">
						<li><a href="mailto:hello@edmundojr.com">hello@edmundojr.com</a></li>
					</ul>
					<h4>Call me</h4>
					<ul class="link-list">
						<li><a href="tel:+353834599564">+353 83 459 9564</a></li>
					</ul>
					<h4>Follow me</h4>
					<ul class="link-list">
						<li><a href="http://instagram.com/edmundojr_">Instagram</a></li>
						<li><a href="http://twitter.com/edmundojr_">Twitter</a></li>
					</ul>
				</aside>

			</article>

		</div>

<?php get_footer(); ?>