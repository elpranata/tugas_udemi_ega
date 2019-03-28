<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tugas_udemy
 */

?>

<div class="container">
    <div class="row" id="primary">
    
	    <div id="content" class="col-sm-8">
	    	
	    	<article class="post no-border">
	    		<header>
	    			<div class="title"><?php the_title(); ?></div>
	    			<div class="post-details">
	    				<i class="fa fa-user"></i> <?php the_author(); ?>
	    				<i class="fa fa-clock-o"></i> <time><?php the_date('j F, Y'); ?></time>
        				<i class="fa fa-folder"></i> <?php the_category(''); ?>
        				<i class="fa fa-tags"></i> <?php the_tags(''); ?>
	    			</div>
	    		</header>
        		<div class="post-image">
        			<?php tugas_udemy_post_thumbnail(); ?>
        		</div>
	    		<div class="post-body">
	    		    <?php the_content(); ?>
	    		</div>
	    	</article>
	    	
	    </div>
	    
	   
	    <aside class="col-sm-4">
	    		<?php get_sidebar();?> 
	    </aside>
    
    </div>
</div>

<?php
