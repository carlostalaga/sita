<div class="col-12 p-0 mb-5" style="background: #f7f8f9;">

	<div style="position:relative; background: #EE4466;">
		<!-- <div style="position:absolute; right: 0; bottom: 20px;">
			<img src="<?php echo get_template_directory_uri() ?>/img/badge-post-free.png">
		</div> -->
		<a href="<?php the_permalink(); ?>">
		<?php
		if( has_post_thumbnail() ):
		echo the_post_thumbnail( 'post-thumbnail', array( 'alt' => the_title_attribute( 'echo=0' ), 'class'  => "img-fluid img-responsive" ) );
		endif;
		?>
		</a>
	</div>

	<div class="p-5" >
		<h3 class="laguna-colorada"><?php the_title(); ?></h3>
		<?php the_excerpt(); ?>
		<span class="hero-button"><?php the_shortlink( __( 'MORE', 'textdomain' ) ); ?></span>
	</div>

	<div class="" style="border-top: 2px solid #DBDAD4">

	</div>


	<!-- ficha -->
	<div class="d-flex flex-row justify-content-start p-2">


		<div class="p-4 ficha-title">

			<?php if( get_field('level') == '21' ) { ?>
			    <img src="<?php echo get_template_directory_uri() ?>/img/icon-beginner.png"class="pr-2" style="vertical-align:middle;" alt="Beginner level"> Beginner
			    <?php
			}
			elseif( get_field('level') == '20' ) { ?>
			    <img src="<?php echo get_template_directory_uri() ?>/img/icon-intermediate.png"class="pr-2" style="vertical-align:middle;" alt="Intermediate level"> Intermediate
			    <?php
			}
			elseif( get_field('level') == '19' ) { ?>
			    <img src="<?php echo get_template_directory_uri() ?>/img/icon-advanced.png"class="pr-2" style="vertical-align:middle;" alt="Advanced level"> Advanced
			    <?php
			}
			?>

		</div>

		<div class="p-4 ficha-title">
			<img src="<?php echo get_template_directory_uri() ?>/img/icon-category.png"class="pr-2" style="vertical-align:middle;" alt="Duration">
			 <?php foreach((get_the_category()) as $category){
        		echo $category->name." ";
        	} ?>
		</div>

		<div class="p-4 ficha-title">
			<img src="<?php echo get_template_directory_uri() ?>/img/icon-time.png"class="pr-2" style="vertical-align:middle;" alt="Duration">
			<?php the_field('time'); ?>
		</div>

	</div>
  <!-- //end ficha -->

</div>