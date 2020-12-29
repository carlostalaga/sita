
<?php get_header(); ?>

<!-- header -->

<div class="jumbotron-fluid bg-oceano-pacifico m-0 p-0">
  <div class="container hero-blog-top d-flex flex-column justify-content-center align-items-start">
      
    <div class="hero-kicker banana-chiquitita pt-5 pb-2 mt-5">
		<?php the_field('headline'); ?>
    </div>
    <div class="hero-deck cielo-argentino pb-5">
    	<?php the_field('deck'); ?>
  	</div>

  </div>
</div>

<!-- // header -->


<!-- breadcrumbs -->
<div class="breadcrumbs">
	<?php
		if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		}
	?>
</div>
<!-- // breadcrumbs -->



				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>




<!-- horizontal scroll -->

<!-- // horizontal scroll -->

<div class="container py-5">
	<div class="row">
		<div class="col">

			<main id="content">



					<header class="header">
						<!-- <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?> -->
					</header>

					<div class="entry-content">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail('large'); } ?>
						<!-- <?php the_content();?> -->
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