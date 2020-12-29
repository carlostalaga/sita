	<?php if (is_page('blog')) {
		?>
	<div class="mb-5">
		<div class="bg-white filter-head px-3 pt-2 pb-2">
			<div class="filter-title">
				<!-- <button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal">
				  FILTER POSTS BY
				</button> -->
				FILTER POSTS BY
			</div>
		</div>
		<div class="bg-laguna-colorada-100 pt-4 pb-2 small">
			<?php echo do_shortcode( '[searchandfilter id="1168"]' ); ?>
		</div>
	</div>
	<?php } ?>


	<div class="mb-5">
		<?php echo do_shortcode('[elfsight_instagram_feed id="2"]'); ?>
		<div class="sidebar-banner-title text-center" style="border-top: 2px red solid">
			<a href="speak-dating">WORD OF THE WEEK</a>
		</div>
	</div>


	<div class="mb-5">
		<?php echo do_shortcode('[elfsight_instagram_feed id="1"]'); ?>
		<div class="sidebar-banner-title text-center" style="border-top: 2px red solid">
			<a href="speak-dating">QUOTE OF THE WEEK</a>
		</div>
	</div>


	<div class="mb-5">
		<img src="<?php echo get_template_directory_uri() ?>/img/badge-30-days-challenge.jpg" class="img-fluid">
		<div class="sidebar-banner-title text-center" style="border-top: 2px red solid">
			<a href="30-day-challenge">30 DAY SPANISH CHALLENGE</a>
		</div>
	</div>


	<div class="mb-5">
		<img src="<?php echo get_template_directory_uri() ?>/img/badge-speak-dating.jpg" class="img-fluid">
		<div class="sidebar-banner-title text-center" style="border-top: 2px red solid">
			<a href="speak-dating">SPEAK DATING</a>
		</div>
	</div>