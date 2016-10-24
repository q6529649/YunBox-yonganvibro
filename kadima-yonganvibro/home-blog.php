<!-- service section -->
<div class="triangle-down"></div>
<div class="kadima_blog_area-new ">
<?php $wl_theme_options = kadima_get_options();
if($wl_theme_options['blog_title'] !='') { ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="kadima_heading_title">
					<h3 style="color: #fff !important;">&nbsp;&nbsp;<?php echo esc_attr($wl_theme_options['blog_title']); ?>&nbsp;&nbsp;</h3>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="row" id="kadima_blog_section">
				<?php
					$args=array(
						'cat' => 1,
						'posts_per_page' => 5,
					);
					query_posts($args);
					if ( have_posts()) :
						while(have_posts()):
							the_post();
				?>
					<div class="col-md-12 col-sm-12 scrollimation scale-in d2 pull-left">
						<div class="kadima_blog_thumb_wrapper">
							<div class="kadima_blog_thumb_wrapper_showcase">
								<?php $img = array('class' => 'kadima_img_responsive');
										if(has_post_thumbnail()):
										the_post_thumbnail('home_post_thumb',$img);
								endif; ?>
								<div class="kadima_blog_thumb_wrapper_showcase_overlay">
									<div class="kadima_blog_thumb_wrapper_showcase_overlay_inner ">
										<div class="kadima_blog_thumb_wrapper_showcase_icons">
											<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
										</div>
									</div>
								</div>
							</div>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<?php if(get_the_tag_list() != '') { ?>
							<p class="kadima_tags"><?php the_tags('Tags :&nbsp;', '', '<br />'); ?></p>
							<?php } ?>
							<?php the_excerpt( __( 'Read More' , 'kadima' ) ); ?>
							<a href="<?php the_permalink(); ?>" class="kadima_blog_read_btn"><i class="fa fa-plus-circle"></i><?php _e('Read More','kadima'); ?></a>
						</div>
					</div>
					<?php  endwhile;
					else : ?>
					<div class="col-md-4 col-sm-12 scrollimation scale-in d2 pull-left">
						<div class="kadima_blog_thumb_wrapper">
							<div class="kadima_blog_thumb_wrapper_showcase">
								<img  alt="Kadima" src="<?php echo WL_TEMPLATE_DIR_URI ?>/images/wall/img(11).jpg">
								<div class="kadima_blog_thumb_wrapper_showcase_overlay">
									<div class="kadima_blog_thumb_wrapper_showcase_overlay_inner ">
										<div class="kadima_blog_thumb_wrapper_showcase_icons">
											<a title="Kadima" href="#"><i class="fa fa-link"></i></a>
										</div>
									</div>
								</div>
							</div>
							<h2><a href="#"><?php _e('NO Post','kadima'); ?></a></h2>

							<div class="kadima_tags">
								<?php _e('Tags :&nbsp;','kadima'); ?>
								<a href="#"><?php _e('Bootstrap','kadima'); ?></a>
								<a href="#"><?php _e('HTML5','kadima'); ?></a>

							</div>
							<p><?php _e('Add You Post To show post here..','kadima'); ?></p>
							<a href="#" class="kadima_blog_read_btn"><i class="fa fa-plus-circle"></i><?php _e('Read More','kadima'); ?></a>
						</div>
					</div>
				<?php endif; ?>
				</div>
				<div class="kadima_carousel-navi">
					<div id="port-next" class="kadima_carousel-prev" ><i class="fa fa-arrow-left"></i></div>
					<div id="port-prev" class="kadima_carousel-next" ><i class="fa fa-arrow-right"></i></div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<video src="http://cdn.yunclever.com/job_client/website/yonganvibro/Electric-vibro-hammer.mp4" controls="controls" width="100%" height="100%" preload="preload"></video>
			</div>
		</div>
	</div>
</div>
