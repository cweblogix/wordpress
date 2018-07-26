<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<div class="left_sidebar blogsidebar">
        
	<?php if ( !function_exists('dynamic_sidebar')
    || !dynamic_sidebar('Blog Sidebar') ) : ?>
    <?php endif; ?>
        
</div>