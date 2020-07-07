<?php
/**
 * Template Name: Homepage
 *
 * Market homepage
 */

get_header();
?>


<section class="page-head">
	
</section>


<section class="container py-3 mb-5">
	<div class="row align-items-center justify-content-center mh-100">
		<div class="col-6 col-lg-5 py-3">
			<img src="<?php echo get_parent_theme_file_uri('/images/andrei.png') ?>" alt="Andrei" class="img-fluid animate__animated animate__zsoomIn" />
		</div>
		<div class="col-lg-5 py-3 animate__animated animate__fadeIn">
			<h3 class="subtitle text-center text-lg-left mb-3">Follow me on the internet:</h3>

			<a href="https://twitter.com/AndreiIgna" class="fancy-link bg-light rounded d-block py-2 px-3 mb-3">
				<span class="row align-items-center no-gutters">
					<span class="col-auto mr-3">
						<img src="<?php echo get_parent_theme_file_uri('/images/icon-twitter.svg') ?>" alt="Twitter" class="float-left" width="32" />
					</span>
					<span class="col">
						<span class="link-title d-block">Twitter</span>
						<span class="text-muted">@AndreiIgna</span>
					</span>
				</span>
			</a>

			<a href="https://www.instagram.com/andreihere" class="fancy-link bg-light rounded d-block py-2 px-3 mb-3">
				<span class="row align-items-center no-gutters">
					<span class="col-auto mr-3">
						<img src="<?php echo get_parent_theme_file_uri('/images/icon-instagram.svg') ?>" alt="Instagram" class="float-left" width="32" />
					</span>
					<span class="col">
						<span class="link-title d-block">Instagram</span>
						<span class="text-muted">@andreihere</span>
					</span>
				</span>
			</a>

			<a href="https://www.goodreads.com/andreihere" class="fancy-link bg-light rounded d-block py-2 px-3 mb-3">
				<span class="row align-items-center no-gutters">
					<span class="col-auto mr-3">
						<img src="<?php echo get_parent_theme_file_uri('/images/icon-goodreads.svg') ?>" alt="Goodreads" class="float-left" width="32" />
					</span>
					<span class="col">
						<span class="link-title d-block">Goodreads</span>
						<span class="text-muted">@andreihere</span>
					</span>
				</span>
			</a>

			<a href="https://www.linkedin.com/in/andreiigna/" class="fancy-link bg-light rounded d-block py-2 px-3 mb-3">
				<span class="row align-items-center no-gutters">
					<span class="col-auto mr-3">
						<img src="<?php echo get_parent_theme_file_uri('/images/icon-linkedin.svg') ?>" alt="LinkedIn" class="float-left" width="32" />
					</span>
					<span class="col">
						<span class="link-title d-block">LinkedIn</span>
						<span class="text-muted">@AndreiIgna</span>
					</span>
				</span>
			</a>

			<a href="https://github.com/AndreiIgna" class="fancy-link bg-light rounded d-block py-2 px-3 mb-3">
				<span class="row align-items-center no-gutters">
					<span class="col-auto mr-3">
						<img src="<?php echo get_parent_theme_file_uri('/images/icon-github.svg') ?>" alt="GitHub" class="float-left" width="32" />
					</span>
					<span class="col">
						<span class="link-title d-block">GitHub</span>
						<span class="text-muted">@AndreiIgna</span>
					</span>
				</span>
			</a>

		</div>
	</div>
</section>


<?php
get_footer();
