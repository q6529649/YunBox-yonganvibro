<?php $wl_theme_options = kadima_get_options(); ?>
    <div class="kadima_footer_area">
        <div class="kadima_footer_social_div">
            <div class="container" style="padding-top:10px;">
                <div class="col-md-8 col-sm-12">
                    <p style="padding-top:10px;">
                    	<span style="color:#006a96;">Yong’an Machinery Co., Ltd, one of the most professional vibratory hammer manufactures in China.</span>
                    </p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <ul class="social" >
                        <?php if($wl_theme_options['fb_link']!='') { ?>
                           <li class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><a  href="<?php echo esc_url($wl_theme_options['fb_link']); ?>"><i class="fa fa-facebook"></i></a></li>
                        <?php } if($wl_theme_options['twitter_link']!='') { ?>
                        <li class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><a href="<?php echo esc_url($wl_theme_options['twitter_link']) ; ?>"><i class="fa fa-twitter"></i></a></li>
                        <?php } if($wl_theme_options['linkedin_link']!='') { ?>
                        <li class="linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin"><a href="<?php echo esc_url($wl_theme_options['linkedin_link']) ; ?>"><i class="fa fa-linkedin"></i></a></li>
                        <?php } if($wl_theme_options['youtube_link']!='') { ?>
                        <li class="youtube" data-toggle="tooltip" data-placement="top" title="Youtube"><a href="<?php echo esc_url($wl_theme_options['youtube_link']) ; ?>"><i class="fa fa-youtube"></i></a></li>
                        <?php } if($wl_theme_options['gplus']!='') { ?>
                        <li class="twitter" data-toggle="tooltip" data-placement="top" title="gplus"><a href="<?php echo esc_url($wl_theme_options['gplus']) ; ?>"><i class="fa fa-google-plus"></i></a></li>
                        <?php } if($wl_theme_options['instagram']!='') { ?>
                        <li class="facebook" data-toggle="tooltip" data-placement="top" title="instagram"><a href="<?php echo esc_url($wl_theme_options['instagram']) ; ?>"><i class="fa fa-instagram"></i></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    	<div class="container">
    		<div class="col-md-12">
                     <?php
                     if ( is_active_sidebar( 'footer-widget-area' ) ){
                         dynamic_sidebar( 'footer-widget-area' );
                     } else
                         {
                         $args = array(
                         'before_widget' => '<div class="col-md-4 col-sm-12 kadima_footer_widget_column">',
                         'after_widget'  => '</div>',
                         'before_title'  => '<div class="kadima_footer_widget_title">',
                         'after_title'   => '<div class="kadima-footer-separator"></div></div>' );
                         the_widget('WP_Widget_Pages', null, $args);
                     } ?>
                <div class="visible-lg-2 visible-md-2"></div>
                <div class="col-md-6 col-sm-12 kadima_footer_copyright_info" style="padding-bottom:20px;padding-top:20px;float:right;">
                    <h3 style="color:#fff;">
                        <?php if($wl_theme_options['footer_customizations']) {
                            echo esc_attr($wl_theme_options['footer_customizations']);
                        } ?>
                    </h3>
                    <p><?php if($wl_theme_options['info_copyright']) { echo esc_attr($wl_theme_options['info_copyright']); } ?></p>
                    <p><?php if($wl_theme_options['info_tel']) { echo esc_attr($wl_theme_options['info_tel']); } ?></p>
                    <p><?php if($wl_theme_options['info_fax']) { echo esc_attr($wl_theme_options['info_fax']); } ?></p>
                    <p><?php if($wl_theme_options['info_mail']) { echo esc_attr($wl_theme_options['info_mail']); } ?></p>
                    <p>Power by: <a href="https://www.yunclever.com" target="_blank" style="color:#fff;">YunClever</a></p>
                </div>
    		</div>
    	</div>
    </div>

</div>
<a href="#" title="Go Top" class="kadima_scrollup" style="display: inline;">
    <i class="fa fa-chevron-up"></i>
</a>
<?php if($wl_theme_options['custom_css']) ?>
<style type="text/css">
<?php { echo esc_attr($wl_theme_options['custom_css']); } ?>
</style>
<?php wp_footer(); ?>
</body>
</html>
