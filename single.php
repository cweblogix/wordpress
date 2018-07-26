<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>
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

            <div class="commonBox blogpage">
            	
                <div class="single-title-bar">
            
                    <h1><?php the_title(); ?></h1>
                    <small class="date_mete"><span class="date_item_repeat"><i class="fa fa-user" aria-hidden="true"></i><?php the_author(); ?></span><span class="date_item_repeat"><i class="fa fa-clock-o" aria-hidden="true"></i><?php the_time(__('F, j')) ?></span></small>
                    
				 </div>   
                
                    <div class="blogdetails">
                    
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                                
                                <?php if(has_post_thumbnail()) { ?>
                                <div class="blogimg"><?php the_post_thumbnail('blog-img'); ?></div>
                                <?php } ?>
                                                    
                                <?php the_content(); ?>
                        
                            </div>
                            
                            <?php /*?><div class="comment_section"><?php comments_template(); ?></div><?php */?>
                            
                            <?php endwhile; else: ?>
                            
                            <p><?php _e('Sorry, no posts matched your criteria.', 'kubrick'); ?></p>
                            
                            <?php endif; ?>
                    
                    </div>  
                
                 
            
            </div>
        
        </div>
        
        <?php get_sidebar(); ?>
        
        <div class="clear"></div>
	</div>
            
</section>
<!-- content part--> 

<script type="text/javascript">
	jQuery(function(){
		jQuery('.commentlist cite.fn a').removeAttr('href');
	})
</script>


<?php get_footer(); ?>