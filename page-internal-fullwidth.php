<?php
/*
Template Name: Internal full width
*/
?>

<?php get_header(); ?>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!-- header -->

<div class="jumbotron-fluid bg-oceano-pacifico m-0 p-0" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/bg-dark-globe.png'); background-repeat: no-repeat; background-size: cover; background-repeat: no-repeat; background-position: right 50px; background-size: contain; background-attachment: fixed;">
  <div class="container hero-blog-top d-flex justify-content-center align-items-end">
<div class="row mb-5" style="width:100% !important;">
    <div class="col-12 hero-kicker banana-chiquitita pt-5 pb-2 mt-5">
		<?php the_field('headline'); ?>
    </div>
    <div class="col-12 hero-deck cielo-argentino pb-5">
    	<?php the_field('deck'); ?>
  	</div>
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

						<?php the_content();?>
						
					</div>

				</article>
				
				<?php endwhile; endif; ?>
			</main>

		</div>
	</div>
</div>

<?php get_footer(); ?>