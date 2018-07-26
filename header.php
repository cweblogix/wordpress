<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> dir="rtl" lang="ar">

<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon"/>
<link href="<?php bloginfo('template_url'); ?>/images/favicon.png" rel="apple-touch-icon" sizes="130x130" />

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!--wrapper -->
<section id="wrapper">
    
    <div id="mainCntr">

        <!--header part-->
        <header id="header">
            
            <div class="topheader"> 
            	<div class="wrapper"> 
                
                	<div class="search-left">
                    	<?php get_search_form(); ?>	
                    </div>  
                    
                    <a href="#menu" class="menuToggle"><span></span></a>        
                   
                   	 <?php
                        $defaults = array(
                            'theme_location'  => 'primary-menu',
                        );			
                        wp_nav_menu( $defaults );
                    ?>
                    
                    <div class="clear"></div>
                    
				</div>
            </div>
            
            <div class="middleheader">
            	<div class="wrapper">
                
                	<?php if ( !function_exists('dynamic_sidebar')
                        || !dynamic_sidebar('header_widget') ) : ?>
                        <?php endif; ?>
                	
                	<a class="logo" href="<?php echo get_option('home'); ?>/"><img src="<?php echo of_get_option('logo_upload'); ?>" alt="<?php bloginfo('name'); ?>" /></a>
                	<div class="clear"></div>
                </div>
            </div>
        
            <nav class="menuBox" id="menu">
            	<div class="wrapper">
                	<?php
                        $defaults = array(
                            'theme_location'  => 'secondary-menu',
                        );			
                        wp_nav_menu( $defaults );
                    ?>
                    <div class="clear"></div>
                </div>
            </nav>
        </header>
        <!--header part-->
