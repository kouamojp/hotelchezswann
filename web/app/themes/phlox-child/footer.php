<?php
/* The template for displaying the footer.
 * Contains the closing of the body div and all contents
 *
 * 
 * @package    Auxin
 * @author     averta (c) 2014-2022
 * @link       http://averta.net
 */

do_action( 'auxin_before_the_footer' ); ?>

</div><!--! end of #inner-body -->

<?php do_action( "auxin_before_body_close", $post ); ?>

<!-- outputs by wp_footer -->
<?php wp_footer(); ?>
<!-- end wp_footer -->
</body>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script>
	jQuery(document).ready(function($){
      $('.home_slide').bxSlider({
		touchEnabled:false,
		  controls:false,
// 		  auto:true,
		  pause:5000,
		});
		
		$('.slider_section_home').bxSlider({
			controls:false,
			touchEnabled:false,
// 			auto:true,
		});
		
		
		$('.slide_event').bxSlider({
			controls:false,
			touchEnabled:false,
// 			auto:true,
		});
		
		
		$('.slide_apropos').bxSlider({
			pager:false,
			touchEnabled:false,
			maxSlides:3,
			infiniteLoop: true,
		});
		
	});
	
</script>

</body>
</html>
