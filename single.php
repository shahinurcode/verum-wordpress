<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Verum
 */

get_header('single');
the_post();

$verum_sidebar_control = get_theme_mod( 'layout_sidebar_control', 'right-sidebar ' );

$verum_sidebar = ('left-sidebar' == $verum_sidebar_control) && ('right-sidebar' == $verum_sidebar_control) ? 'col-lg-9 col-md-8': '';
$verum_no_sidebar = ('no-sidebar' == $verum_sidebar_control) ? 'col-lg-12 col-md-12': 'col-md-8';

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
                    <div class="col-md-12">
                        <article class="post">
							<?php get_template_part('template-parts/single-post/single-post-header'); ?>
                            <div class="post-blog">
                                <?php the_content(); ?>

                                <!-- tags and share start-->
                                <div class="meta-row">
                                    <div class="meta-tags">
										
                                        <span>Tags:</span>
                                        <?php the_tags( ' ', '', '' )?>
                                    </div>
                                    <div class="meta-share">
                                        <div class="social-links">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>

                                        </div>
                                        <div class="share-btn"><i class="fa fa-share-alt pr-2"></i> Share</div>
                                    </div>
                                </div>
                                <!-- tags and share end-->

                                <!--custom pagination-->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="custom-pagination custom-pagination-post">
                                            <div class="older full-">
                                              
                                                <span class="next-post-pagination">
												<?php next_post_link( '%link', '<i class="fa fa-angle-right"></i> %title' ); ?>
                                                </span>
                                          
                                            </div>
                                            <div class="newer">
											<span class="next-post-pagination">
												<?php previous_post_link( '%link', '<i class="fa fa-angle-left"></i> %title' ); ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--custom pagination-->

                                <!--author info start-->
                                <div class="post-author-info">
                                    <div class="author-thumb">
										<?php 
										$args = array(
											'class'	=> 'img-fluid',
											'width'	=> 180,
										);
										echo get_avatar( get_the_author_meta("ID",$args) ); ?>
                                    </div>
                                    <div class="author-details mt-3">
									<h5><?php the_author_posts_link(); ?></h5>
                                        <p>
											<?php the_author_meta( 'description' ); ?>
										</p>
	
                                        <div class="s-links">
										<?php 
										$verum_user_cm = wp_get_user_contact_methods();

										foreach($verum_user_cm as $verum_user_cm_key => $verum_user_cm_value ):
											$verum_cm_link = get_user_meta( get_the_author_meta("ID"), $verum_user_cm_key, true);
											if($verum_cm_link ):
										?>
											<a href="<?php echo esc_url($verum_cm_link); ?>">
												<i class="fa fa-<?php echo esc_attr($verum_user_cm_key); ?>"></i>
											</a>
										<?php 
											endif; 
											endforeach; 
										?>

                                        </div>
                                    </div>
                                </div>
                                <!--author info end-->

                            </div>
                        </article>


                        <!--related post End-->

                        <!--comments area start-->
                        <div class="comments">
                            <h2 class="comments-title"> Comments</h2>
                            <ul>
                                <li class="comment ">
                                    <article class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author">
                                                <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/a0.jpg" class="">
                                                <b class="fn">
                                                    <a href="#" rel="external nofollow" class="url">
                                                        Chris Ames
                                                    </a>
                                                </b>
                                                <span class="says">says:</span>
                                            </div>
                                            <!-- .comment-author -->

                                            <div class="comment-metadata">
                                                <a href="#">
                                                    <time datetime="2018-09-02T12:17:07+00:00">
                                                        September 2, 2018 at 12:17 pm
                                                    </time>
                                                </a>
                                            </div><!-- .comment-metadata -->

                                        </footer><!-- .comment-meta -->

                                        <div class="comment-content">
                                            <p>Hi, this is a comment.<br>
                                                To get started with moderating, editing, and deleting comments, please visit
                                                the Comments screen in the dashboard.<br>
                                                Commenter avatars come from <a href="#">Gravatar</a>.</p>
                                        </div><!-- .comment-content -->

                                        <div class="reply">
                                            <a rel="nofollow" class="comment-reply-link" href="#" >Reply</a>
                                        </div>
                                    </article><!-- .comment-body -->
                                    <ul class="children">
                                        <li class="comment ">
                                            <article class="comment-body">
                                                <footer class="comment-meta">
                                                    <div class="comment-author ">
                                                        <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/a1.jpg" class="" >
                                                        <b class="fn">
                                                            <a href="#" rel="external nofollow" class="url">Jones Brown</a>
                                                        </b>
                                                        <span class="says">says:</span>
                                                    </div><!-- .comment-author -->

                                                    <div class="comment-metadata">
                                                        <a href="#">
                                                            <time datetime="2018-10-16T13:13:25+00:00">
                                                                October 16, 2018 at 1:13 pm
                                                            </time>
                                                        </a>
                                                    </div><!-- .comment-metadata -->

                                                </footer><!-- .comment-meta -->

                                                <div class="comment-content">
                                                    <p>Hi, this is a comment.<br>
                                                        To get started with moderating, editing, and deleting comments,
                                                        please visit the Comments screen in the dashboard.<br>
                                                        Commenter avatars</p>
                                                </div><!-- .comment-content -->

                                                <div class="reply">
                                                    <a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
                                                </div>
                                            </article><!-- .comment-body -->
                                        </li><!-- #comment-## -->
                                    </ul><!-- .children -->
                                </li><!-- #comment-## -->
                            </ul>
                        </div>
                        <!--comments area end-->

                        <!--comment form start-->
                        <div class="comment-respond">
                            <h3 class="comment-reply-title">
                                Leave a Comment
                            </h3>

                            <form role="form" class="comment-form">
                                <div class="row">
                                    <div class=" col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name*" required="">
                                        </div>
                                    </div>
                                    <div class=" col-md-4">
                                        <div class="form-group ">
                                            <input type="email" class="form-control" placeholder="Email*" required="">
                                        </div>
                                    </div>
                                    <div class=" col-md-4">
                                        <div class="form-group ">
                                            <input type="text" class="form-control" placeholder="Website" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="controls">
                                        <textarea id="message" rows="5" placeholder="Comments*" class="form-control" required=""></textarea>
                                    </div>
                                </div>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <div class="text-center mt-md-5">
                                    <button type="submit" class="btn btn-black">Send</button>
                                </div>
                            </form>
                        </div>
                        <!--comment form end-->
                    </div>
                </div>
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