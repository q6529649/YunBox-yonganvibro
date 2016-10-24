<?php $wl_theme_options = kadima_get_options(); ?>
<div class="kadima_project_section">
<?php if($wl_theme_options['port_heading'] !='') { ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="kadima_heading_title">
					<h3>&nbsp;&nbsp;<?php echo esc_attr($wl_theme_options['port_heading']); ?>&nbsp;&nbsp;</h3>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
	<div class="container">
		<div class="i_prolist mt30 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
			<ul class="prolist fix">
				<?php for($i=1; $i<=4; $i++ ) { ?>
				<li style="background:url(<?php echo esc_url($wl_theme_options['port_'.$i.'_img']); ?>) right top no-repeat;">
					<a href="<?php echo esc_url($wl_theme_options['service_'.$i.'_link']); ?>" target=""><div class="prolist-li"></div></a>
					<div class="_info">
						<a href="<?php echo esc_url($wl_theme_options['service_'.$i.'_link']); ?>" target="">
							<h2 class="_cn"><span class="_cns"><?php echo esc_attr($wl_theme_options['port_'.$i.'_title']); ?></span></h2>
							<div class="big">
								<span><?php echo esc_attr($wl_theme_options['port_'.$i.'_title']); ?></span>
							</div>
						</a>
					</div>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
