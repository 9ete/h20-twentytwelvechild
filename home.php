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
				<div id='device-nav-wrap' class='device-nav-wrap'>
					<nav id='device-featured-nav' class='device-featured-nav'>
						<ul>
							<li><a href='/smart-phones'>Smart Phones</a></li>
							<li><a href='/ipad-minis'>iPad Minis/eReaders</a></li>
							<li><a href='/ipad-tablet'>iPads/Tablets</a></li>
						</ul>
					</nav>
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
					<img src='http://h20dry.petelower.com/wp-content/uploads/2014/03/nurse4.jpg' />
					<img src='http://h20dry.petelower.com/wp-content/uploads/2014/03/nurse4.jpg' />
					<img src='http://h20dry.petelower.com/wp-content/uploads/2014/03/nurse4.jpg' />
				</p>
			</section>
			

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>

<?php /* while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. */?>