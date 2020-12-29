<?php get_header(); ?>


<!-- header -->

<div class="jumbotron-fluid bg-laguna-colorada m-0 p-0">
  <div class="container hero-blog-top d-flex justify-content-end align-items-end">

		<div class="row mb-5">
	      <div class="col-12 hero-kicker banana-chiquitita">¡Bienvenido!</div>
	      <div class="col-12 hero-headline oceano-pacifico pb-2">al BLOG de Spanish in the air!</div>
	      <div class="col-12 hero-deck text-white pb-5">Here you have your results.
				</div>
		</div>

  </div>
</div>

<!-- // header -->



<div class="container py-5">
	<div class="row">


		<!-- main column -->
		<div class="col-12 col-md-8">
			<main id="content">
				<div class="entry-content">
					
					<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<!-- <div class="p-5" >
						<h3 class="laguna-colorada"><?php the_title(); ?></h3>
						<?php the_excerpt(); ?>
						<?php the_shortlink( __( 'MORE', 'textdomain' ) ); ?>
					</div> -->


					<!-- Block Post -->
					<?php include('block-post.php'); ?>

					
					<?php endwhile; ?>
					<?php get_template_part( 'nav', 'below' ); ?>
					<?php else : ?>
					<article id="post-0" class="post no-results not-found">
					
					<h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'broucku' ); ?></h1>
					
					<div class="entry-content">
					<p><?php esc_html_e( 'Sorry, nothing matched your search. Please try again.', 'broucku' ); ?></p>
					<?php get_search_form(); ?>
					</div>
					<?php endif; ?>

				</div>

			</main>
		</div>
		<!-- //end main column -->


		<!-- sidebar -->
		<div class="col-12 col-md-4">
			<?php include('inc-blog-sidebar.php'); ?>
		</div>
		<!-- //end sidebar -->


		<!-- Modal -->
		<?php include('inc-blog-popup.php'); ?>
		<!-- //end Modal -->



		</div>


	</div>
</div>


<?php /*get_sidebar();*/ ?>
<?php get_footer(); ?>