<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<div id="left-part">
                    
	<?php if ( !function_exists('dynamic_sidebar')
    || !dynamic_sidebar('Blog Widget') ) : ?>
    <?php endif; ?>
        
</div>