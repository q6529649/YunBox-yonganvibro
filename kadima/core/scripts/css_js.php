<?php function kadima_scripts()
    {
		wp_enqueue_style('bootstrap', get_template_directory_uri() .'/css/bootstrap.css');
        wp_enqueue_style('default', get_template_directory_uri() . '/css/default.css');
        wp_enqueue_style('media-responsive', get_template_directory_uri() . '/css/media-responsive.css');
        wp_enqueue_style('animations', get_template_directory_uri() . '/css/animations.css');
        wp_enqueue_style('theme-animtae', get_template_directory_uri() . '/css/theme-animtae.css');
        wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome-4.3.0/css/font-awesome.css');
		wp_enqueue_style('style', trailingslashit( get_template_directory_uri() ) . 'style.css');
        // Js
        wp_enqueue_script('menu', get_template_directory_uri() .'/js/menu.js', array('jquery'));
        wp_enqueue_script('bootstrap-js', get_template_directory_uri() .'/js/bootstrap.js');
        wp_enqueue_script('kadima-theme-script', get_template_directory_uri() .'/js/kadima_theme_script.js');
        if(is_front_page()){
            /*Carofredsul Slides*/
            wp_enqueue_script('jquery.carouFredSel', get_template_directory_uri() .'/js/carouFredSel-6.2.1/jquery.carouFredSel-6.2.1.js');
            wp_enqueue_script('carouFredSel-element', get_template_directory_uri() .'/js/carouFredSel-6.2.1/caroufredsel-element.js');
            /*PhotoBox JS*/
            wp_enqueue_script('photobox-js', get_template_directory_uri() .'/js/jquery.photobox.js');
            wp_enqueue_style('photobox', get_template_directory_uri() . '/css/photobox.css');
            //Footer JS//
    		wp_enqueue_script('kadima-footer-script', get_template_directory_uri() .'/js/kadima-footer-script.js','','',true);
    		wp_enqueue_script('waypoints', get_template_directory_uri() .'/js/waypoints.js','','',true);
    		wp_enqueue_script('scroll', get_template_directory_uri() .'/js/scroll.js','','',true);
		}
        if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
    }
    add_action('wp_enqueue_scripts', 'kadima_scripts');
?>
