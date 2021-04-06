<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Verum
 */

 $verum_sidebar_control = get_theme_mod( 'layout_sidebar_control', 'right-sidebar ' );
 
 $verum_sidebar = ('left-sidebar' == $verum_sidebar_control) && ('right-sidebar' == $verum_sidebar_control) ? 'col-lg-9 col-md-8': '';
 $verum_no_sidebar = ('no-sidebar' == $verum_sidebar_control) ? 'col-lg-12 col-md-12': 'col-md-8';
 
 
 get_header('search'); 
 ?>
	 <!--post start-->
	 <div class="container">
		 <div class="row">
			 <?php 
				 if('left-sidebar' == $verum_sidebar_control ){
					 get_sidebar();
				 }
			 ?>
			 <div class="<?php echo $verum_sidebar; ?><?php echo $verum_no_sidebar ; ?>">
 
				 <div class="row">
					 <?php while(have_posts()): the_post(); ?>
					 <?php get_template_part('template-parts/post/post', 'container' ); ?>
					 <?php endwhile; ?>
				 </div>
 
				 <!--custom pagination-->
				 <div class="row">
					 <div class="col-12">
						 <div class="custom-pagination">
							 <?php 
							  $verum_ppl = get_previous_posts_link();
							  $verum_npl = get_next_posts_link();
							 ?>
							 
							 <!-- Previous Post -->
							 <?php if( !$verum_npl): ?>
								 <div class="older full">
									 <?php previous_posts_link( __('< Newer Post', 'verum')); ?>
								 </div>
							 <?php else: ?>
								 <div class="newer">
									 <?php previous_posts_link( __('< Newer Post', 'verum')); ?>
								 </div>
							 <?php endif; ?>
 
							 <!-- Older Post -->
							 <?php if( !$verum_ppl): ?>
								 <div class="older full">
									 <?php next_posts_link( __('Older Post >', 'verum')); ?>
								 </div>
							 <?php else: ?>
								 <div class="older">
									 <?php next_posts_link( __('Older Post >', 'verum')); ?>
								 </div>
							 <?php endif; ?>
 
						 </div>
					 </div>
				 </div>
				 <!--custom pagination-->
			 </div>
			 <?php 
				 if('right-sidebar' == $verum_sidebar_control ){
					 get_sidebar();
				 }
			 ?>
		 </div>
	 </div>
	 <!--post end-->
 
 <?php get_footer(); ?>
 