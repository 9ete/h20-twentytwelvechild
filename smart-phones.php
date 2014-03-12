<?php
/*
Template Name: Smart Phones
*/

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<h1 class="entry-title">Smart Phone <span>Cases</span></h1>
						<?php if ( ! is_page_template( 'page-templates/front-page.php' ) ) : ?>
						<?php the_post_thumbnail(); ?>
						<?php endif; ?>
						
					</header>

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->
					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
			<section id='device-section' class='content-section device-section' >
				<div id='device-image-wrap' class='device-image-wrap'>
					<div id='first-img-wrap' class='device-img-wrap first-img-wrap'>
						<div class='device-img-txt'><p>Check it out!</p></div>
						<a href='/smart-phones/iphone-44s/'><img src='/wp-content/themes/h20-twentytwelvechild/images/h2odry_phone_water_pool_swim_underwater_case_waterproof.jpg' /></a>
					</div>
					<div id='second-img-wrap' class='device-img-wrap second-img-wrap'>
						<div class='device-img-txt'><p>Check it out!</p></div>
						<a href='/smart-phones/iphone-55c5s/'><img src='/wp-content/themes/h20-twentytwelvechild/images/h2odry_phone_water_pool_swim_underwater_case_waterproof.jpg' /></a>
					</div>
					<div id='third-img-wrap' class='device-img-wrap third-img-wrap'>
						<div class='device-img-txt'><p>Check it out!</p></div>
						<a href='/smart-phones/smart-phones-2/'><img src='/wp-content/themes/h20-twentytwelvechild/images/h2odry_phone_water_pool_swim_underwater_case_waterproof.jpg' /></a>
					</div>
					<div id='fourth-img-wrap' class='device-img-wrap fourth-img-wrap'>
						<div class='device-img-txt'><p>Check it out!</p></div>
						<a href='/smart-phones/large-smart-phones/'><img src='/wp-content/themes/h20-twentytwelvechild/images/h2odry_phone_water_pool_swim_underwater_case_waterproof.jpg' /></a>
					</div>
				</div>
				<div id='device-nav-wrap' class='device-nav-wrap'>
					<nav id='device-featured-nav' class='device-featured-nav'>
						<ul>
							<li>
								<div id='first-link-wrap' class='device-link-wrap first-link-wrap'>
									<a href='/smart-phones/iphone-44s/'>iPhone 4/4s</a>
								</div>
							</li>
							<li>
								<div id='second-link-wrap' class='device-link-wrap second-link-wrap'>
									<a href='/smart-phones/iphone-55c5s/'>iPhone 5/5c/5s</a>
								</div>
							</li>
							<li>
								<div id='third-link-wrap' class='device-link-wrap third-link-wrap'>
									<a href='/smart-phones/smart-phones-2/'>Smart Phones</a>
								</div>
							</li>
							<li>
								<div id='fourth-link-wrap' class='device-link-wrap fourth-link-wrap'>
									<a href='/smart-phones/large-smart-phones/'>Large Smart Phones</a>
								</div>
							</li>
						</ul>
					</nav>
				</div>
				<section class='page-middle'>
					You will maintain full functionality of your device, including use of your camera, while it is protected in your H2Odry cases are 100% waterproof and will protect your device from most any of the elements that could damage it. H2Odry waterproof cases have easy to use waterproof clips that seal the waterproof case to ensure your device remains dry and fully protected agianst dust, dirt, sand, water and snow.waterproof case. You may talk on your phone, watch video, listen to music, text, surf the internet and send and receive emails. You don’t have to give up your phone to have fun at the pool, at the beach, kayaking, rafting, fishing, boating, skiing and even in a relaxing bath. Your H2Odry waterproof case will keep it safely dry while you are enjoying these activities.
				</section>
				<h2>H2Odry offers sizes for all smart phones.</h2>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>