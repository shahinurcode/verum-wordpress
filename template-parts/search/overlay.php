<?php 
    $verum_latest_post = get_theme_mod( 'verum_post_source', 'latest' );
?>

<div class="search-wrap">
        <div class="overlay">
            <?php get_search_form(); ?>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-light search-blog-title">Latest Posts</h4>
                    </div>
                </div>
            </div>
            <div class="search-blog-post">
                <div class="container">
                    <div class="row">

                <?php 

                    if( 'latest' == $verum_latest_post ):
                        $verum_latest_post_args = array(
                            'posts_per_page'    => 4,
                            'post_status'       => 'publish',
                            'post_type'         => 'post',
                            'ignore_sticky_posts'=> true,
                        );
                        $verum_latest_post_qry  = new WP_Query($verum_latest_post_args);
                        while($verum_latest_post_qry->have_posts()):
                            $verum_latest_post_qry->the_post(); 
                        ?>

                        <?php get_template_part('template-parts/search/overlay-content'); ?>    
                        <?php 
                        endwhile; 
                        else:
                            $verum_featured_post_id = get_theme_mod( 'featured_post' );
                            $verum_featured_posts = array_column($verum_featured_post_id, 'post');
                            $verum_featured_post_args = array(
                                'post_type'         => 'post',
                                'post__in'          => $verum_featured_posts,
                                'orderby'           => 'post__in',
                                'posts_per_page'    => 10,
                                'post_status'       => 'publish',
                                'ignore_sticky_posts'=> true,
                                
                            );
                            $verum_featured_post_qry  = new WP_Query($verum_featured_post_args);
                            while($verum_featured_post_qry->have_posts()):
                                $verum_featured_post_qry->the_post(); 
                            ?>
                            <?php get_template_part('template-parts/search/overlay-content'); ?>
                            <?php 
                                endwhile; 
                                wp_reset_query();
                    endif;
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>