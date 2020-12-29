</div>





<footer class="section bg-oceano-pacifico text-dark mt-0 pt-5 pb-2" id="footer">
  <div class="container">
    <div class="row">

    <div class="col-12 col-md-12 col-xl-4 pb-5 pb-xl-1">
   	  <p><a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/logo-sita-lock-up-banana.png" id="logo-footer" class="img-fluid" alt="logo"></a></p>
    </div>

    <div class="col-12 col-md-6 col-xl-2">
      <div class="widget-footer">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer2") ) : ?>
        <?php endif;?>
      </div>
    </div>

    <div class="col-12 col-md-6 col-xl-2">
      <div class="widget-footer">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer3") ) : ?>
        <?php endif;?>
      </div>
    </div>

    <div class="col-12 col-md-6 col-xl-2">
      <div class="widget-footer">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer4") ) : ?>
        <?php endif;?>
      </div>
    </div>

    <div class="col-12 col-md-6 col-xl-2">
      <div class="widget-footer">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer5") ) : ?>
        <?php endif;?>
      </div>
    </div>

  </div>
  </div>

</footer>

<div id="copyright" class="bg-oceano-pacifico">
	<div class="container py-5">
		<div class="row">

			<div class="col-12 col-lg-3 text-center text-lg-left credits-regular"style="font-size: 1.8rem; color: #8090c0;">
				&copy; <?php echo esc_html( date_i18n( __( 'Y', 'broucku' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
			</div>
			<div class="col-12 col-lg-6 text-center credits-bold" style="font-size: 1.8rem; color: #8090c0;">
				MADE WITH <span style="font-size: 1.2rem; color: #fcdc5a;">
          <i class="fas fa-heart"></i>
			</div>
			<div class="col-12 col-lg-3 text-center text-lg-right" >

        <img src="<?php echo get_template_directory_uri() ?>/img/icon-facebook.png" width="30px" height="30px">

        <img src="<?php echo get_template_directory_uri() ?>/img/icon-instagram.png" width="30px" height="30px">

        <img src="<?php echo get_template_directory_uri() ?>/img/icon-youtube.png" width="30px" height="30px">

        <img src="<?php echo get_template_directory_uri() ?>/img/icon-whatsapp.png" width="30px" height="30px">

        <img src="<?php echo get_template_directory_uri() ?>/img/icon-twitter.png" width="30px" height="30px">

        <!-- <span style="font-size: 1.5rem; color: #7F8FC2;">
          <i class="fab fa-facebook"></i>
        </span>
        <span style="font-size: 1.5rem; color: #7F8FC2;">
          <i class="fab fa-instagram"></i>
        </span>
        <span style="font-size: 1.5rem; color: #7F8FC2;">
          <i class="fab fa-youtube"></i>
        </span>
        <span style="font-size: 1.5rem; color: #7F8FC2;">
          <i class="fab fa-whatsapp"></i>
        </span>
        <span style="font-size: 1.5rem; color: #7F8FC2;">
          <i class="fab fa-twitter"></i>
        </span> -->

			</div>

		</div>
	</div>
</div>


</div>
<?php wp_footer(); ?>




<script type="text/javascript">

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar-fx").style.padding = "10px 10px";
    document.getElementById("logo-change").style.width = "100px";

    //change logo
    document.getElementById("logo-change").setAttribute("src","<?php echo get_template_directory_uri() ?>/img/logo-sita-stamp-dark.png");

    var element = document.getElementById("navbar-fx");
    element.classList.remove("navbar-dark");
    element.classList.remove("navbar-custom");
    element.classList.add("navbar-light");
    element.classList.add("bg-light");
  } else {
    document.getElementById("navbar-fx").style.padding = "40px 10px";
    document.getElementById("logo-change").style.width = "";

    //change logo
    document.getElementById("logo-change").setAttribute("src", "<?php echo get_template_directory_uri() ?>/img/logo-sita-stamp-light.png");

    var element = document.getElementById("navbar-fx");
    element.classList.remove("navbar-light");
    element.classList.remove("bg-light");
    element.classList.add("navbar-dark");
    element.classList.add("navbar-custom");
  }
}

</script>



<script>
jQuery(document).ready(function(){
  jQuery('[data-toggle="popover"]').popover();
});
</script>



</body>
</html>
