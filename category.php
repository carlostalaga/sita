<?php get_header(); ?>


<!-- header -->

<div class="jumbotron-fluid bg-laguna-colorada m-0 p-0">
  <div class="container hero-blog-top d-flex flex-column justify-content-center align-items-start">
      
    <div class="hero-headline cielo-argentino pt-5 pb-2">
		<?php single_term_title(); ?>
    </div>
    <div class="hero-deck banana-chiquitita pb-5">
    	SPANISH IN THE AIR cat
  	</div>

  </div>
</div>

<!-- // header -->








<div class="container py-5">
	<div class="row">
		<div class="col">
			<main id="content">

					<!-- breadcrumbs -->
					<div class="breadcrumbs">
						<?php
						if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						}
						?>
					</div>
					<!-- // breadcrumbs -->


					<div class="entry-content">

						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<!-- Block Post -->
						<?php include('block-post.php'); ?>

						<?php endwhile; endif; ?>
						
					</div>
			</main>
		</div>
	</div>
</div>





<?php get_template_part( 'nav', 'below' ); ?>

<?php /*get_sidebar();*/ ?>
<?php get_footer(); ?>