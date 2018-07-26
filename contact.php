<?php
/**
 * Template Name: Contact Template 
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
    
    	<div class="commonBox contact-page">
        	<div class="contact_left">
        		<?php echo do_shortcode( '[contact-form-7 id="74" title="Footer Contact Form"]' ); ?>
            </div>
            <div class="contact_right">
            	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
            		<?php the_content(); ?>
                    
				<?php endwhile; else: ?>
			<?php endif; ?>
                
            </div>
            
            <div class="clear"></div>
            
            <div class="contact-full">
            
            	<?php if(get_field('content')) { ?><?php the_field('content'); ?><?php } ?>
                
            	<?php if(get_field('booking_form')): ?>
                <ol>
                    <?php while(has_sub_field('booking_form')): ?>
                    <li>
                        <?php the_sub_field('text'); ?>
                        <?php if(get_sub_field('upload_file')) { ?><a class="download_link" download="" href="<?php the_sub_field('upload_file'); ?>" class="btn">Donwload Here</a><?php } ?>
                    </li>
                    <?php endwhile; ?>
                </ol>
                <?php endif; ?>
            </div>
        
        </div>
            
</section>



<?php get_footer(); ?>