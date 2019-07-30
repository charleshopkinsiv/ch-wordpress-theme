<?php
get_header();
?>

<div id="top-sky">
	<div>
		<h1>Charles Hopkins</h1>
	</div>
	<img id="jet" src="<?php echo get_template_directory_uri(); ?>/images/jet.png" alt="Charles Hopkins Jet">
</div>

<div id="top-content" class="container bg-white7 align-self-center mx-auto pt-3">
	<div class="row">
		<div class="w-50">
			<h4><i class="far fa-file-code"></i> Advanced Features</h4>
			<p>If you have a website that will need advanced features, I am the guy you want to work with! I like working with both front and back end development languages.</p>
		</div>
		<div class="w-50">
			<h4><i class="fab fa-wordpress"></i> WordPress</h4>
			<p>I can create WordPress sites, custom themes, and custom plugins. <a href="https://github.com/charleshopkinsiv/ch-wordpress-theme/tree/master/build/wp-content/themes/ch-theme" target="_blank">Click Here to see the files for this theme.</a></p>
		</div>
	</div>
	<div class="row">
		<div class="w-25">
			<h4><i class="fab fa-php"></i> PHP</h4>
			<p>I have done much with PHP, from coding Ecommerce platforms to modifying WordPress.</p>
		</div>
		<div class="w-25">
			<h4><i class="fab fa-js-square"></i> JavaScript</h4>
			<p>I love building with plain JavaScript but also can use libraries such as React. <a href="./portfolio_tag/javascript/" target="_blank">Click here to see my JavaScript projects.</a></p>
		</div>
		<div class="w-25">
			<h4><i class="fab fa-python"></i> Python</h4>
			<p>I usually use python for different automation tasks and for scraping data.</p>
		</div>
		<div class="w-25">
			<h4><i class="fab fa-sass"></i> SASS</h4>
			<p><a href="https://github.com/charleshopkinsiv/ch-wordpress-theme/tree/master/src/scss" target="_blank">Click here to see the .scss files I made for this site.</a></p>
		</div>
	</div>
	<div class="row">
		<div class="w-33">
			<h4><i class="fab fa-github"></i> GitHub</h4>
			<p><a href="https://github.com/charleshopkinsiv" target="_blank">Click here to see code examples from this site.</a> You can find a few JavaScript libraries I made, as well as this WordPress theme and the plugins I made.</p>
		</div>
		<div class="w-33">
			<h4><i class="fas fa-cloud-download-alt"></i> Fast Load Times</h4>
			<p><a href="https://developers.google.com/speed/pagespeed/insights/?url=charleshopkins.website" target="_blank">Click here to see this site's google page speed rating.</a> I can help your site load as fast as possible by compiling your scripts, minimizing the file size of images, and can discover other ways to optimize loading speed.</p>
		</div>
		<div class="w-33">
			<h4><i class="fab fa-google"></i> High Search Rankings</h4>
			<p>I can help your site rank high on search engines. I can help you with keyword research, on page optimization and backlinking.</p>
		</div>
	</div>
</div>

<div id="projects" class="row">
	<h3>Projects</h3>
	<?php echo do_shortcode("[display_portfolio]"); ?>
</div>


<div id="blog-feed">
	<h3 class="display-4 text-white text-center w-100 shadow-lg mb-0 pb-2">Blog</h3>
	<div class="row">
		<?php echo do_shortcode("[display_loop]"); ?>
	</div>
</div>

<div id="social" class="container">
	<a href="https://linkedin.com/in/charles-hopkins-iv-b795a5143" target="_blank">
    <i class="fab fa-linkedin text-white fa-3x"></i>
	</a>
	<a href="https://instagram.com/charleshopkins.design" target="_blank">
    <i class="fab fa-instagram text-white fa-3x"></i>
	</a>
	<?php echo do_shortcode("[ig_feed]"); ?>
</div>

<div id="contact-form" class="container">
	<h3>Contact</h3>
	<div id="email-alert">
	</div>
	<form>
		<input type="email" id="email-form" placeholder="Your Email">
		<input type="email" id="subject-form" placeholder="Subject">
		<textarea id="message-form" placeholder="Message"></textarea>
		<button type="button" class="btn btn-outline-light float-right" onclick="sendEmail()">Send</button>
	</form>
</div>

<?php
get_footer();