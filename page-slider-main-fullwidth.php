<?php
/*
Template Name: Slider Main Full Width
*/
?>

<?php get_header(); ?>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



<div class="container-fluid position-relative bg-secondary p-0">

<div class="Modern-Slider">
  <!-- Item -->
  <div class="item">
    <div class="img-fill">
      <img src="https://i.imgur.com/JNKiMHU.jpg" alt="">
      <div class="info">
        <div>
          <h3>Struggling to learn Spanish?</h3>
          <h5>Get an actionable roadmap to overcome the hurdles of learning Spanish. </h5>
          <h3>Join our challenge</h3>
          <h5>Find out how</h5>
        </div>
      </div>
    </div>
  </div>
  <!-- // Item -->
  <!-- Item -->
  <div class="item">
    <div class="img-fill">
      <img src="https://i.imgur.com/ESMjChq.jpg" alt="">
      <div class="info">
        <div>
          <h3>Join our challenge</h3>
          <h5>Find out how</h5>
        </div>
      </div>
    </div>
  </div>
  <!-- // Item -->
  <!-- Item -->
  <!-- <div class="item">
    <div class="img-fill">
      <img src="https://i.imgur.com/TDxSvHH.jpg" alt="">
      <div class="info">
        <div>
          <h3>Awesome Transtions With CSS3</h3>
          <h5>Donec id ornare dui. Aenean tristique condimentum elit, quis blandit nisl varius sit amet. Sed eleifend felis quis massa viverra</h5>
        </div>
      </div>
    </div>
  </div> -->
  <!-- // Item -->
  <!-- Item -->
  <!-- <div class="item">
    <div class="img-fill">
      <img src="https://i.imgur.com/p1XZ3Mu.jpg" alt="">
      <div class="info">
        <div>
          <h3>Separate settings per breakpoint</h3>
          <h5>Donec id ornare dui. Aenean tristique condimentum elit, quis blandit nisl varius sit amet. Sed eleifend felis quis massa viverra</h5>
        </div>
      </div>
    </div>
  </div> -->
  <!-- // Item -->
</div>

</div>


<div class="container py-5">
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