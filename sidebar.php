<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Verum
 */

 if( !is_active_sidebar('blog-sidebar')){
	 return;
 }

?>
 <div class="col-lg-3 col-md-4">
 <div class="widget">
	 <?php dynamic_sidebar( 'blog-sidebar' ) ?>
 </div>

 <div class="widget">
	 <h2 class="widget-title">Latest Post</h2>
	 <div class="media">
		 <a href="#"><img class="mr-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/w1.jpg" width="90" alt="Generic placeholder image"></a>
		 <div class="media-body align-self-center">
			 <h6 class="mt-0"><a href="#">Thoughtful living in los Angeles</a></h6>
			 <p class="text-muted">October 10, 2018</p>
		 </div>
	 </div>
	 <div class="media">
		 <a href="#"><img class="mr-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/w2.jpg" width="90" alt="Generic placeholder image"></a>
		 <div class="media-body align-self-center">
			 <h6 class="mt-0"><a href="#">Plan your next trip with us</a></h6>
			 <p class="text-muted">October 10, 2018</p>
		 </div>
	 </div>
	 <div class="media">
		 <a href="#"><img class="mr-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/w3.jpg" width="90" alt="Generic placeholder image"></a>
		 <div class="media-body align-self-center">
			 <h6 class="mt-0"><a href="#">Explore the Beauty of North Amazon</a></h6>
			 <p class="text-muted">October 10, 2018</p>
		 </div>
	 </div>
 </div>
 <div class="widget">
	 <h2 class="widget-title mb-0">Subscribe</h2>
	 <p class="text-muted">Sign up and receive our newsletters</p>

	 <form action="">
		 <input type="text" class="form-control mb-3"/>
		 <button class="btn btn-default btn-block">Subscribe</button>
	 </form>
 </div>

 <div class="widget">
	 <h2 class="widget-title">Follow</h2>
	 <div class="widget-social">
		 <a href="#"><i class="fa fa-facebook"></i></a>
		 <a href="#"><i class="fa fa-twitter"></i></a>
		 <a href="#"><i class="fa fa-google-plus"></i></a>
		 <a href="#"><i class="fa fa-linkedin"></i></a>
		 <a href="#"><i class="fa fa-youtube"></i></a>
	 </div>
 </div>

 <div class="widget">
	 <a href="#"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ads.jpg" alt=""/></a>
 </div>
 
</div>
