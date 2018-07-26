<?php
/**
 * Template Name: About Template 
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>


<!-- content part-->
<section id="content-part"> 

	<div class="page-titleBar">
    	<h1><?php the_title(); ?></h1>
    </div>
    
    <?php the_post_thumbnail('page-img'); ?>
    
    	<div class="commonBox stafflist">
        
        	
            <?php if(get_field('sub_title')) { ?><h2><?php the_field('sub_title'); ?></h2><?php } ?>
        
        	<?php $args = array(
			'post_type' => 'staffprofiles',
			'posts_per_page' => -1,
			);
			$query = new WP_Query( $args ); ?>
			<?php if ( $query->have_posts() ) : ?>
			<ul class="staffList">
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<li>
					<h3><?php the_title(); ?> <?php if(get_field('qualification')) { ?><?php the_field('qualification'); ?><?php } ?> <?php if(get_field('designation')) { ?><?php the_field('designation'); ?><?php } ?></h3>
                    <div class="image">
                    	<?php the_post_thumbnail('staff-img'); ?>
                        <div class="social">
                        	<?php if(get_field('email_url')) { ?><a target="_blank" class="email_icon" href="<?php the_field('email_url'); ?>" class="btn">E-mail</a><?php } ?>
                            <?php if(get_field('linkedin_url')) { ?><a target="_blank" class="linked_icon" href="<?php the_field('linkedin_url'); ?>" class="btn">LinkedIn</a><?php } ?>
                            <?php if(get_field('twitter_url')) { ?><a target="_blank" class="twitter_icon" href="<?php the_field('twitter_url'); ?>" class="btn">Twitter</a><?php } ?>
                            <?php if(get_field('facebook_url')) { ?><a target="_blank" class="facebook_icon" href="<?php the_field('facebook_url'); ?>" class="btn">Facebook</a><?php } ?>
                            <?php if(get_field('link_to_blog_icon')) { ?><a target="_blank" class="blog_icon" href="<?php the_field('link_to_blog_icon'); ?>" class="btn">Blog Url</a><?php } ?>
                        </div>
                    </div>
                    <div class="text">
                    	<?php the_content(); ?>
                    </div>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
        
        </div>
            
</section>



<?php get_footer(); ?>