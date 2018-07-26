<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<div class="wrapper"><!-- content part-->
<section id="content-part"> 

	<div class="page-titleBar">
    	<h1>Post tagged in "<?php single_tag_title(); ?>"</h1>
    </div>
    
    	<div class="commonBox blogpage">
	
    		<?php get_sidebar('blog'); ?>
            
            
			<div class="right_sidebar blogpost">
            	
                <?php if (have_posts()) : ?>    
                <?php while (have_posts()) : the_post(); ?>    
                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                
                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('post-thumb'); ?></a>
                    
                    <h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    
                    <small class="date_mete"><strong>Posted on</strong> <?php the_time(__('F j, Y')) ?></small>
                    
                    <div class="entry">
                        <p><?php echo get_the_excerpt(); ?> <a class="read_more" href="<?php the_permalink() ?>">read more</a></p>
                    </div>
                    
                </div>
                
                <?php endwhile; ?>
                
                <?php wp_pagenavi(); ?>
                
                <?php else : ?>
                
                <h2 class="center"><?php _e('Not Found', 'kubrick'); ?></h2>
                <p class="center"><?php _e('Sorry, but you are looking for something that isn&#8217;t here.', 'kubrick'); ?></p>
                <?php get_search_form(); ?>
                
                <?php endif; ?>
            
            </div>
        
       </div>
            
</section>
<!-- content part--> 


<?php get_footer(); ?>