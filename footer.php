<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
        <!-- bar-->
        <footer id="footer">
        
        		<div class="wrapper"> 
                	<div class="one">
                    
                    	<a class="footer-logo" href="<?php echo get_option('home'); ?>/"><img src="<?php echo of_get_option('logo_upload'); ?>" alt="<?php bloginfo('name'); ?>" /></a>
                        
                        <div class="social">							 
                            
                            <?php if(of_get_option('linkedin_url')) { ?><a class="linkedin" target="_blank" href="<?php echo of_get_option('linkedin_url'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a><?php } ?>
                            <?php if(of_get_option('facebook_url')) { ?><a class="facebook" target="_blank" href="<?php echo of_get_option('facebook_url'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php } ?>
                            <?php if(of_get_option('twitter_url')) { ?><a class="twitter" target="_blank" href="<?php echo of_get_option('twitter_url'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a><?php } ?>
                            <?php if(of_get_option('youtube_url')) { ?><a class="youtube" target="_blank" href="<?php echo of_get_option('youtube_url'); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a><?php } ?>
                            
                            <?php if(of_get_option('rss_url')) { ?><a class="rss" target="_blank" href="<?php echo of_get_option('rss_url'); ?>"><i class="fa fa-rss" aria-hidden="true"></i></a><?php } ?>
                            
                        
                        </div>

                    </div> 
                    <div class="two">              
						<?php if ( !function_exists('dynamic_sidebar')
                        || !dynamic_sidebar('footer_widget') ) : ?>
                        <?php endif; ?>
                    </div>
               	<div class="clear"></div>
                </div>
                <div class="copyright-bar">
                	<div class="wrapper">
						<?php if ( !function_exists('dynamic_sidebar')
                            || !dynamic_sidebar('footer_copyright_widget') ) : ?>
                            <?php endif; ?>
                        <div class="clear"></div>
                    </div>
                </div>
            
            <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
        </footer>
        <!-- bar--> 
        <div class="clear"></div>
        </div>
</section>
<!--wrapper --> 
        
<?php wp_footer(); ?>

</body>
</html>
