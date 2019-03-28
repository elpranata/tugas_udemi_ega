<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tugas_udemy
 */

?>


<div class="col-sm-6" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<article class="post">
		<div class="post-image">
			<?php tugas_udemy_post_thumbnail(); ?>
		</div>
		<div class="pad-20">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			?>
	    	<div class="post-excerpt"><?php the_excerpt(); ?></div>
			<div class="post-details">
				<i class="fa fa-folder"></i> <?php the_category(''); ?>
				<i class="fa fa-tags"></i> <?php the_tags(''); ?>
			</div>
		</div>
	</article>
</div><!-- #post-<?php the_ID(); ?> -->