<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
<!-- content part-->
<section id="content-part"> 

	<div class="wrapper">
    
        <div id="right-part">	
        
            <div class="home-slider-bar">
            
            	<?php if(get_field('slider_section')): ?>
                <div class="home-slider">
                    <?php while(has_sub_field('slider_section')): ?>
                     <?php $image = get_sub_field('slider_image'); ?>
                    <div class="home-item" style="background-image: url(<?php echo $image; ?>)">                      
                       <div class="text">
							<?php the_sub_field('slider_content'); ?>
                       </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>              
                   
            </div>
            
            <div class="news-bar">
            	<h2>أحدث الأخبار</h2>
				<?php $args = array(
					'post_type' => 'post',
					'posts_per_page' => 5,
                );
                
                $query = new WP_Query( $args ); ?>
                <?php if ( $query->have_posts() ) : ?>
                <ul>      
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>    
                    <li class="element-item">
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-img' ); ?>
                            <?php if($image) { ?>
                                <a href="<?php the_permalink(); ?>"><img src="<?php echo $image[0]; ?>" alt="" /></a>
                            <?php } ?>
                          
                            <small class="date_mete"><span class="date_item_repeat admin"><i class="fa fa-user" aria-hidden="true"></i><?php the_author(); ?></span><span class="date_item_repeat"><i class="fa fa-clock-o" aria-hidden="true"></i><?php the_time(__('F, j')) ?></span></small>
                            
	                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php 
                                $excerpt=get_the_excerpt();
                                echo substr($excerpt,0,312);
                            ?></p>
                    </li>
                    <?php endwhile; ?>
                </ul>
                
                <?php wp_reset_postdata(); ?>                   
                
                <?php endif; ?>
                    
                <div class="clear"></div>
            </div>
            
            <div class="video-bar">
            	<h2>فيديوهات</h2>
				<?php $args = array(
					'post_type' => 'videos',
					'posts_per_page' => 5,
                );
                
                $query = new WP_Query( $args ); ?>
                <?php if ( $query->have_posts() ) : ?>
                <div class="video-slider">   
                	<?php $j=1; ?>   
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>    
                    <div class="video-item">
                        <div class="video">	
                        	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'video-img' ); ?>
                            <?php if($image) { ?>
                                <img src="<?php echo $image[0]; ?>" alt="" />
                            <?php } ?>
                        	<a data-fancybox="gallery" data-src="#news-video<?php echo $j; ?>" href="javascript:void(0);" class="play-btn" >Play</a>
                            <?php $select_and_upload_video_here = get_field('select_and_upload_video_here'); 
								if($select_and_upload_video_here) {
							?>
                            <div class="news-video" id="news-video<?php echo $j; ?>" style="display: none;">
                                <video class="video-wrap" controls="controls">
                                    <source src="<?php echo $select_and_upload_video_here; ?>">                       
                                </video>    
                            </div>
                            <?php } ?>
                        </div>
                        <h3><?php the_title(); ?></h3>
                    </div>
                    <?php $j++ ?>
                    <?php endwhile; ?>
                </div>
                
                <?php wp_reset_postdata(); ?>                   
                
                <?php endif; ?>
                    
                <div class="clear"></div>
            </div>
            
            <div class="clear"></div>
        
        </div>
        
        <?php get_sidebar(); ?>
    
    <div class="clear"></div>
    </div>
    	    
</section>
<!-- content part--> 
<?php get_footer(); ?>