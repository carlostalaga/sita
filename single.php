<?php get_header(); ?>

<div class="jumbotron-fluid bg-laguna-colorada m-0 p-0">
  <div class="container hero-post-top pb-5">
    <div class="row col h-100 align-items-end m-0 pl-0 pt-0 pb-5">
      &nbsp;
    </div>
  </div>
</div>

<div class="container py-5">
	<!-- ***hola post*** -->


	<div class="col-12  breadcrumbs py-5 mb-1">
		<?php
		if ( function_exists('yoast_breadcrumb') ) {
		  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		}
		?>
	</div>


	<div class="d-flex align-items-end justify-items-center bg-banana-chiquitita p-5 mb-4" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/post-title-bg.jpg'); min-height: 600px;">

		<div class="">
			<h1 class="post-title"><?php the_title(); ?></h1>
		</div>

	</div>


	<div class="row px-5 my-4">

		<div class="my-4">
			<h4 class="entradilla-title"><?php the_field('entradilla_title'); ?></h4>
		</div>
		<div>
			<span class="entradilla-content"><?php the_field('entradilla_content'); ?></span>
		</div>

	</div>



	<div class="row px-5 mx-5">

		<div class="col-12 pt-5 pb-md-5">

			<main id="content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


			<!-- ficha -->
			<div id="border-laguna-colorada-100" class="d-flex flex-row justify-content-start border-bottom">


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

			<div class="d-flex flex-row justify-content-start bg-light">

				<div class="p-4">
					<h3 class="laguna-colorada">What are you going to learn?</h3>
					<?php the_field('what_are_you_going_to_learn'); ?>
				</div>

			</div>


			<div id="border-laguna-colorada-100" class="d-flex flex-row justify-content-end border-top mb-5">


				<div class="p-4">
					<?php $competencias = get_field('competencias');
						if( $competencias && in_array('speaking', $competencias) ) { ?>
					<img src="<?php echo get_template_directory_uri() ?>/img/icon-speaking.png"class="pr-2" style="vertical-align:middle;" alt="Speaking">
					<?php } ?>
				</div>

				<div class="p-4">
					<?php $competencias = get_field('competencias');
						if( $competencias && in_array('grammar', $competencias) ) { ?>
					<img src="<?php echo get_template_directory_uri() ?>/img/icon-grammar.png"class="pr-2" style="vertical-align:middle;" alt="Grammar">
					<?php } ?>
				</div>

				<div class="p-4">
					<?php $competencias = get_field('competencias');
						if( $competencias && in_array('listening', $competencias) ) { ?>
					<img src="<?php echo get_template_directory_uri() ?>/img/icon-listening.png"class="pr-2" style="vertical-align:middle;" alt="Listening">
					<?php } ?>
				</div>

				<div class="p-4">
					<?php $competencias = get_field('competencias');
						if( $competencias && in_array('reading', $competencias) ) { ?>
					<img src="<?php echo get_template_directory_uri() ?>/img/icon-reading.png"class="pr-2" style="vertical-align:middle;" alt="Reading">
					<?php } ?>
				</div>


			</div>
			<!-- //end ficha -->

			<?php get_template_part( 'entry-content' ); ?>



			<!-- travel tips -->
				<?php if( get_field('travel_tips') ): ?>

					<div id="" class="d-flex flex-column bg-oceano-pacifico text-white p-5 mb-0">

						<div class="d-flex justify-content-between">
							<h4 class="travel-tips-title py-0 px-4">
								Travel Tips
							</h4>
							<div class="travel-tips-title py-0 px-4" style="position:relative; bottom: -10px;">
								<img src="<?php echo get_template_directory_uri() ?>/img/travel-tips-dark.png" id="" class="" alt="travel tips">
							</div>
						</div>


						<div class="p-5 mx-4 mb-4 mt-0" style="border-style:dashed; border-width:6px; border-color:#ee4466;">

							<?php the_field('travel_tips'); ?>

						</div>
					</div>

				<?php endif; ?>
			<!-- //end travel tips -->

		</div>
	</div>


</div>


<!-- grammar guide -->

	<div class="jumbotron-fluid bg-laguna-colorada-100 text-center my-0 mb-5 py-5" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/bg-grammar-guide.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">

		<div id="" class="container p-4">
			<div class="grammar-guide-title py-0 px-4 mb-3">
				GRAMMAR GUIDE
			</div>
			<div class="grammar-guide-content py-0 px-4" style="font-weight:bolder;">
				5 ways to express duty in Spanish
			</div>
			<div class="mt-5 py-0 px-4">
				<?php echo do_shortcode( '[contact-form-7 id="1119" title="Contact Form Grammar Guide"]' ); ?>
			</div>
		</div>

	</div>

<!-- //end grammar guide -->





<!-- exercise your spanish -->
<div class="container mb-5">


	<div class="row py-2 mb-3" style="border-top: 5px solid #112277; border-bottom: 1px solid #DBDAD4;" >
		<h3 class="post-section">Exercise your Spanish</h3>
	</div>


	<div class="d-flex flex-column">



		<?php if( get_field('exercise_your_spanish_alternative_exercises') ): ?>
			<div>
				<div class="pt-3 pb-5">
					<!-- <div class="mb-4">
						<h4 class="post-section">Alternative Exercises</h4>
					</div> -->
					<div class="embed-container" style="position: relative; height: 50vh; overflow: scroll; z-index: 1;">
			    		<?php the_field('exercise_your_spanish_alternative_exercises'); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>



		<?php if( get_field('exercise_your_spanish_ready') ): ?>
			<div>
				<div class="pt-3 pb-5">
					<!-- <div class="mb-4">
						<h4 class="post-section">Ready?</h4>
					</div> -->
					<div class="embed-container">
			    		<?php the_field('exercise_your_spanish_ready'); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>



		<?php if( get_field('exercise_your_spanish_learn_it') ): ?>
			<div>
				<div class="pt-3 pb-5">
					<!-- <div class="mb-4">
						<h4 class="post-section">Learn It!</h4>
					</div> -->
					<div class="embed-container">
			    		<?php the_field('exercise_your_spanish_learn_it'); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>



		<?php if( get_field('exercise_your_spanish_practice_it') ): ?>
			<div>
				<div class="pt-3 pb-5">
					<!-- <div class="mb-4">
						<h4 class="post-section">Practice It!</h4>
					</div> -->
					<div class="embed-container">
			    		<?php the_field('exercise_your_spanish_practice_it'); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>



		<?php if( get_field('exercise_your_spanish_use_it') ): ?>
			<div>
				<div class="pt-3 pb-5">
					<!-- <div class="mb-4">
						<h4 class="post-section">Use It!</h4>
					</div> -->
					<div class="embed-container">
			    		<?php the_field('exercise_your_spanish_use_it'); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>


	</div>


</div>
<!-- //end exercise your spanish -->


<!-- lets talk -->
<?php if( get_field('lets_talk_title') ): ?>
	<div class="jumbotron-fluid bg-laguna-colorada my-0 mb-5 py-5" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/bg-lets-talk.png'); background-position: center top; background-repeat: no-repeat; background-size: cover;">

		<div class="container p-4">
			<div class="row align-items-center">
				<div class="col-md-8 align-self-center p-4">
					<div class="lets-talk-title py-0">
						LET’S TALK ABOUT THIS IN A
					</div>
					<div class="lets-talk-subtitle py-0">
						<strong>‘Speak Dating’ Session</strong>
					</div>
					<!-- <div class="lets-talk-content py-2">
						<?php the_field('lets_talk_content'); ?>
					</div> -->
				</div>

				<div class="col-md-4 align-self-center p-4">
					<div class="py-0">
						<a class="btn btn-info" href="speak-dating" role="button">BOOK NOW</a>
					</div>
				</div>
			</div>
		</div>

	</div>
<?php endif; ?>
<!-- //end lets talk -->


<!-- related posts -->
<div class="container mb-5">


	<div class="row py-2 mb-3" style="border-top: 5px solid #112277; border-bottom: 1px solid #DBDAD4;" >
		<h3 class="post-section">Related Posts</h3>
	</div>


	<div class="d-flex">

		<?php echo do_shortcode('[yarpp]'); ?>

	</div>


</div>
<!-- //end related posts -->


			<?php endwhile; endif; ?>
			<footer class="footer">
			<?php /*get_template_part( 'nav', 'below-single' );*/ ?>
			</footer>
			</main>

	<!-- ***//hola post*** -->

<?php get_footer(); ?>
