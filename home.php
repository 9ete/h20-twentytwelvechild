<?php
/*
Template Name: Landing Page

*
* @package WordPress
* @subpackage Twenty_Twelve
* @since Twenty Twelve 1.0
*/

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<section id='slider-section' class='content-section slider-section' >
				<?php echo do_shortcode('[meteor_slideshow slideshow="homepage"]'); ?>
			</section>
			<section id='device-section' class='content-section device-section' >
				<h2>It's a <span>Lifestyle!</span></h2>
				<div id='device-image-wrap' class='device-image-wrap'>
					<div id='first-img-wrap' class='device-img-wrap first-img-wrap'>
						<div id='first-text-wrap' class='device-img-txt'><p>Check it out!</p></div>
						<a href='/smart-phones'><img src='/wp-content/themes/h20-twentytwelvechild/images/h2odry_iphone_samsung_smartphone_case_waterproof_bacteria_free.png' /></a>
					</div>
					<div id='second-img-wrap' class='device-img-wrap second-img-wrap'>
						<div id='second-text-wrap' class='device-img-txt'><p>Check it out!</p></div>
						<a href='/ipad-minisereaders'><img src='/wp-content/themes/h20-twentytwelvechild/images/h20dry_ipad_mini_ereader_waterproof_case.png' /></a>
					</div>
					<div id='third-img-wrap' class='device-img-wrap third-img-wrap'>
						<div id='third-text-wrap' class='device-img-txt'><p>Check it out!</p></div>
						<a href='/ipadstablets'><img src='/wp-content/themes/h20-twentytwelvechild/images/h2odry_ipad_cases_waterproof.png' /></a>
					</div>
				</div>
				<div id='device-nav-wrap-holder' class='device-nav-wrap-holder'> <!-- Used to hide overflow of phone images when on mobile -->
					<div id='device-nav-wrap' class='device-nav-wrap'>
						<nav id='device-featured-nav' class='device-featured-nav'>
							<ul>
								<li>
									<div id='first-link-wrap' class='device-link-wrap first-link-wrap'>
										<a href='/smart-phones'>Smart Phones</a>
									</div>
								</li>
								<li>
									<div id='second-link-wrap' class='device-link-wrap second-link-wrap'>
										<a href='/ipad-minisereaders'>iPad Minis/eReaders</a>
									</div>
								</li>
								<li>
									<div id='third-link-wrap' class='device-link-wrap third-link-wrap'>
										<a href='/ipadstablets'>iPads/Tablets</a>
									</div>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<p class='page-middle'>
					H20dry Smart Phone and iPad Cases allow you to maintain your busy lifestyle while working, having fun or

					BOTH! H2Odry cases protect your device from dust, dirt and water and allow full functionality while using 

					your device at any number of outdoor activities including at the beach, pool, fishing, skiing, kayaking, raft-
					ing, snow skiing or even in a relaxing bath! We offer serval different sizes of cell phone cases to fit all smart 

					phones currently on the market.
				</p>
			</section>
			<section id='healthcare-section' class='content-section healthcare-section' >
				<h2><span>H20dry</span> for Healthcare</h2>
				<p class='page-middle'>
					<img src='/wp-content/themes/h20-twentytwelvechild/images/wash-ipad-h2o-dry-iphone-case.jpg' />
					<img src='/wp-content/themes/h20-twentytwelvechild/images/nurse-healthcare-ipad-h2o-dry-iphone-case.jpg' />
					<img src='/wp-content/themes/h20-twentytwelvechild/images/wash-iphone-h2o-dry-ipad-case.jpg' />
				</p>
			</section>
			

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>

<?php /* while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. */?>