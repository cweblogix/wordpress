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
            <div class="commonBox blogpage">
        
                <h1 class="searchresult"> <?php _e('Search Results'); ?>: <?php echo esc_html( get_search_query( false ) ); ?> 
</h1>
                
                <?php if (have_posts()) : ?>    
                <?php while (have_posts()) : the_post(); ?>    
                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    
                    <h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    
                    <small class="date_mete"><span class="date_item_repeat"><i class="fa fa-user" aria-hidden="true"></i><?php the_author(); ?></span><span class="date_item_repeat"><i class="fa fa-clock-o" aria-hidden="true"></i><?php the_time(__('F, j')) ?></span></small>
                    
                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('post-thumb'); ?></a>     
                    
                    <p><?php 
						$excerpt=get_the_excerpt();
						echo substr($excerpt,0,620);
					?></p>
                   
                </div>
                
                <?php endwhile; ?>
                
                
                <?php else: ?>
                
                <h2 class="center"><?php _e('غير معثور عليه'); ?></h2>
                
                <p class="center"><?php _e('عذرا، ولكنك تبحث عن شيء ليس هنا.'); ?></p>
                
                <?php endif; ?>
               
            </div>
            <?php wp_pagenavi(); ?>        
		</div>
        <?php get_sidebar(); ?>
         <div class="clear"></div>       
	</div>
            
</section>
<!-- content part--> 



<?php get_footer(); ?>