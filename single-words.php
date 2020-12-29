<?php get_header(); ?>

<div class="jumbotron-fluid bg-laguna-colorada m-0 p-0">
  <div class="container hero-post-top pb-5">
    <div class="row col h-100 align-items-end m-0 pl-0 pt-0 pb-5">
      &nbsp;
    </div>
  </div>
</div>

<div class="container py-5">


<!-- main image -->
	<div class="d-flex align-items-center p-0 mb-4">

		<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'large'); ?>">
		
		<h1 class="post-title px-4" style="position: absolute;"><?php the_title(); ?></h1>

	</div>
<!-- //end main image -->



	<div class="row px-5 mx-5">
		
		<div class="col pt-5 pb-md-5">

			<main id="content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php /*get_template_part( 'entry-content' );*/ ?>

		</div>	
	</div>
			

</div>












			<?php endwhile; endif; ?>
			<footer class="footer">
			<?php /*get_template_part( 'nav', 'below-single' );*/ ?>
			</footer>
			</main>



<?php get_footer(); ?>