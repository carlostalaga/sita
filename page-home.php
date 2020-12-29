<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!-- encabezado -->
<div class="jumbotron-fluid bg-oceano-pacifico m-0 p-0" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/bg-dark-globe.png'); background-repeat: no-repeat; background-size: cover; background-repeat: no-repeat; background-position: right 50px; background-size: contain; background-attachment: fixed;">
  <div class="container hero-home-top d-flex flex-column justify-content-end align-items-start">

      <div class="hero-headline-top cielo-argentino pb-2">Struggling to learn Spanish?</div>
      <div class="hero-deck banana-chiquitita pb-5">Get an actionable roadmap to overcome the hurdles of learning Spanish.</div>
      <div class="hero-headline-2 cielo-argentino pb-2">JOIN OUR CHALLENGE</div>
      <div class="hero-deck banana-chiquitita hero-button-banner-top"><a href="#">Find out how</a></div>

  </div>
</div>
<!-- //end encabezado -->

<!-- learn the language -->
<!--
	<div class="jumbotron-fluid bg-cielo-argentino text-center my-0 py-5" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/bg-learn.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">

		<div id="" class="container p-4">
			<div class="banner-learn-title oceano-pacifico py-0 px-4">
				<img src="<?php echo get_template_directory_uri() ?>/img/banner-text-learn-the-language.png">
			</div>
		</div>

	</div>
 -->
<!-- //end learn the language -->



<div class="container pt-0 pb-0">
	<div class="row">
		<div class="col">

			<main id="content">
					<header class="header">
						<!-- <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?> -->
					</header>

					<div class="entry-content">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
						<?php the_content(); ?>
						<div class="entry-links"><?php wp_link_pages(); ?></div>
					</div>

				</article>
				<?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
				<?php endwhile; endif; ?>
			</main>

		</div>
	</div>
</div>

<?php get_footer(); ?>
