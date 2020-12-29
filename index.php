<?php get_header(); ?>

<div class="jumbotron-fluid bg-laguna-colorada m-0 p-0">
  <div class="container hero-blog-top d-flex flex-column justify-content-end align-items-start">
      
      <div class="hero-kicker banana-chiquitita">¡Bienvenido!</div>
      <div class="hero-headline oceano-pacifico pb-2">al BLOG de Spanish in the air!</div>
      <div class="hero-deck text-white pb-5">Here you ́ll find actionable blog posts with guides, tips and exercises to master the Spanish language. 
</div>

  </div>
</div>


<div class="container py-5">
	<div class="row">



		<div class="col-lg-8 pb-md-5">

			<div>
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
				?>
			</div>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="mb-2">
				<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?></a>
				<?php endif; ?>
			</div>

			<div class="hero-headline mb-2">
				<h1><a href="<?php the_permalink(); ?>" title="<?phpthe_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			</div>

			<?php get_template_part( 'entry' ); ?>
			<?php comments_template(); ?>
			<?php endwhile; endif; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
			


		</div>
		<div class="col-lg-4">

			<?php get_sidebar(); ?>
		
		</div>
	</div>
</div>

<?php get_footer(); ?>