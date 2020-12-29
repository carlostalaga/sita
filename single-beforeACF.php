<?php get_header(); ?>

<div class="jumbotron-fluid bg-laguna-colorada m-0 p-0">
  <div class="container hero-post-top pb-5">
    <div class="row col h-100 align-items-end m-0 pl-0 pt-0 pb-5">
      &nbsp;
    </div>
  </div>
</div>

<div class="container py-5">
	***hola post***
	<div class="row">
		
		<div class="col-lg-8 pb-md-5">
			<main id="content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry' ); ?>
			<?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
			<?php endwhile; endif; ?>
			<footer class="footer">
			<?php get_template_part( 'nav', 'below-single' ); ?>
			</footer>
			</main>
		</div>

		<div class="col-lg-4">
			<?php get_sidebar(); ?>			
		</div>

	</div>
	***//hola post***
</div>

<?php get_footer(); ?>