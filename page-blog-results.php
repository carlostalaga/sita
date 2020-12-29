<?php
/*
Template Name: Blog results
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>




<div class="jumbotron-fluid bg-laguna-colorada m-0 p-0">


<!-- Modal -->
<?php include('inc-blog-popup.php'); ?>
<!-- //end Modal -->







  <div class="container hero-blog-top d-flex justify-content-end align-items-end">

		<div class="row mb-5">
	      <div class="col-12 hero-kicker banana-chiquitita">&nbsp;</div>
	      <div class="col-12 hero-headline oceano-pacifico pb-2">Your results</div>
	      <div class="col-12 hero-deck text-white pb-5">&nbsp;
				</div>
		</div>

  </div>
</div>




<div class="container py-5">


	<div class="row">



		
		<div class="col-12 col-md-8">
		
		<!-- Blog results -->
			<?php echo do_shortcode('[searchandfilter id="1168"]'); ?>
		    <?php echo do_shortcode('[searchandfilter id="1168" show="results"]'); ?>
		    <!-- //end Blog results -->

		</div>
		



<!-- sidebar -->
<div class="col-12 col-md-4">
	<?php include('inc-blog-sidebar.php'); ?>
</div>
<!-- //end sidebar -->


				
<?php endwhile; endif; ?>




	</div>
</div>



<?php get_footer(); ?>
∫