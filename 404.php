<?php get_header(); ?>


<!-- header -->

<div class="jumbotron-fluid bg-oceano-pacifico m-0 p-0">
  <div class="container hero-blog-top d-flex flex-column justify-content-center align-items-start">
      
    <div class="hero-headline cielo-argentino pt-5 pb-2">
		<?php single_term_title(); ?>
    </div>
    <div class="hero-deck banana-chiquitita pb-5">
    	
    	<main id="content">
    	<article id="post-0" class="post not-found">
    	<header class="header">
    	<h1 class="entry-title"><?php esc_html_e( '404 Not Found', 'broucku' ); ?></h1>
    	</header>
    	<div class="entry-content">
    	<p><?php esc_html_e( 'The page you are looking for may have been removed or relocated.', 'broucku' ); ?></p>
    	<?php get_search_form(); ?>
    	</div>
    	</article>
    	</main>
    	
  	</div>

  </div>
</div>

<!-- // header -->



<?php get_sidebar(); ?>
<?php get_footer(); ?>