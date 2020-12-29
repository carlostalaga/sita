<?php get_header(); ?>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!-- header -->

<div class="jumbotron-fluid bg-oceano-pacifico m-0 p-0">
  <div class="container hero-blog-top d-flex flex-column justify-content-center align-items-start">
      
    <div class="hero-headline cielo-argentino pt-5 pb-2">
		<?php the_title(); ?>
    </div>
    <div class="hero-deck banana-chiquitita pb-5">
    	Get an actionable roadmap to overcome the hurdles of learning Spanish.
  	</div>

  </div>
</div>

<!-- // header -->


<div class="container py-5">
	<div class="row">
		<div class="col">

			<main id="content">

					<!-- breadcrumbs -->
					<div class="breadcrumbs  py-5">
						<?php
						if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						}
						?>
					</div>
					<!-- // breadcrumbs -->


					<div class="entry-content">

						<?php the_content();?>
						
					</div>

				</article>
				
				<?php endwhile; endif; ?>
			</main>

		</div>
	</div>
</div>

<?php get_footer(); ?>
