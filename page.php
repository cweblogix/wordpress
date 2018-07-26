<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
get_header(); ?>


<!-- content part-->
<section id="content-part"> 

	<div class="wrapper">
    
    	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
			<?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>
    
    	<div id="right-part">

            <div class="commonBox">
            
                <h1><?php the_title(); ?></h1>
            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
                    <?php the_content(); ?>
                    
                <?php endwhile; endif; ?>	
                
            </div>
        
        </div>
        
        <?php get_sidebar(); ?>
        
        <div class="clear"></div>
    
    </div>
            
</section>
<!-- content part--> 

<?php get_footer(); ?>