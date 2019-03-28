<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tugas_udemy
 */

get_header();
?>

<div class="container">
    <div class="row" id="primary">
    
	    <div id="content" class="col-sm-12">
		    
		    <section class="main-content">
		    	<div class="title">Halaman Muka</div>
		    	<div class="excerpt"> Please keep in mind that some of the following resources are my affiliate links, and should you decide to make a purchase, I will earn a small commission &mdash; at no extra cost to you! I am recommending these resources only because I have found them to be incredibly helpful. Don&rsquo;t spend your money on any products or resources unless you think they will benefit you </div>
		    	<hr>
				<div class="row">
					<?php
					if ( have_posts() ) :
			
						if ( is_home() && ! is_front_page() ) :
							?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
							<?php
						endif;
			
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
			
							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_type() );
			
						endwhile;
			
						// the_posts_navigation();
						
						the_posts_pagination( array(
							'mid_size'  => 2,
							'prev_text' => __( 'back', 'textdomain' ),
							'next_text' => __( 'next', 'textdomain' ),
						) );
			
					else :
			
						get_template_part( 'template-parts/content', 'none' );
			
					endif;
					?>
				</div>
			</section>
		</div>
	</div>
</div>

<?php
get_footer();
