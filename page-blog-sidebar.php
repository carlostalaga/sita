<?php
/*
Template Name: Blog side bar
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
	      <div class="col-12 hero-kicker banana-chiquitita">¡Bienvenido!</div>
	      <div class="col-12 hero-headline oceano-pacifico pb-2">al BLOG de Spanish in the air!</div>
	      <div class="col-12 hero-deck text-white pb-5">Here you'll find actionable blog posts with guides, tips and exercises to master the Spanish language.
				</div>
		</div>

  </div>
</div>




<div class="container py-5">


	<div class="row">

		<div class="col-12  breadcrumbs  py-5 mb-1">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
			  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
		</div>

		<!-- Blog -->
		<div class="col-12 col-md-8">


			<div class="row mb-5">
				<div class="col-12 custom-modal-title py-3"
				 style="background: #fff6ce;">
					<i class="fas fa-info-circle"></i> How this blog works?
				</div>
				<div class="col-12 custom-modal-text py-4">
					<ul>
						<li>Filter the posts according to your level of Spanish.</li>
						<li>Read the post, listen to the audio and download the grammar guide.</li>
						<li>Do the exercises to challenge yourself ;)</li>
					</ul>
				</div>
				<div class="col-12" style="border-top: 3px solid #f8e074;">
				</div>
			</div>


		    <?php

		    $args = array( 'cat' => 'array( 1,11,12,13 )', 'posts_per_page' => 18, 'order' => 'DESC', );

		    // Variable to call WP_Query.
		    $the_query = new WP_Query( $args );

		    if ( $the_query->have_posts() ) :
		        // Start the Loop
		        while ( $the_query->have_posts() ) : $the_query->the_post();
		    ?>

			<!-- Block Post -->
			<?php include('block-post.php'); ?>

		    <?php
		        // End the Loop
		        endwhile;
		    else:
		    // If no posts match this query, output this text.
		        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
		    endif;

		    wp_reset_postdata();
		    ?>


		</div>
		<!-- //end Blog -->



<!-- sidebar -->
<div class="col-12 col-md-4">
	<?php include('inc-blog-sidebar.php'); ?>
</div>
<!-- //end sidebar -->


				
<?php endwhile; endif; ?>




	</div>
</div>



<?php get_footer(); ?>