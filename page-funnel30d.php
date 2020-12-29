<?php
/*
Template Name: Funnel 30 Days
*/
?>

<?php get_header('funnel30d'); ?>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!-- header -->

<div class="jumbotron-fluid bg-chili-habanero-200 m-0 p-0">
  <div class="container d-flex flex-column justify-content-center align-items-start hero-30d-top" style="text-align:center;">

<div class="py-5" style="margin:auto;">

	<img src="<?php echo get_template_directory_uri() ?>/img/logo_30dc.png" width="359px" height="120px" class="img-fluid">

</div>

  </div>
</div>

<!-- // header -->


<!-- horizontal scroll -->

<!-- // horizontal scroll -->

<div class="container py-5">
	<div class="row">
		<div class="col">

			<main id="content">


					<header class="header">

					</header>

					<div class="entry-content">

						<?php the_content();?>
					</div>

				</article>

				<?php endwhile; endif; ?>
			</main>

		</div>
	</div>
</div>

<?php get_footer('funnel30d'); ?>
