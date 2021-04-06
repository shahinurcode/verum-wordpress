<?php 
    $verum_tags_ids = array();
    $verum_post_tags = wp_get_post_tags( get_the_ID() );
    foreach ($verum_post_tags as $verum_post_tag ) {
        $verum_tags_ids[]    = $verum_post_tag->term_id;
    }
    $verum_rlp_args = array(
        'posts_per_page'    => 3,
        'tag__in'           => $verum_tags_ids,
        'post__not_in'      => array( get_the_ID() ),
        'ignore_sticky_posts'   => true,
    );
    $verum_related_post     = new WP_Query($verum_rlp_args);    
?>

<!--related post start-->
<?php if($verum_related_post->have_posts()): ?>
<div class="row related-post">
    <div class="col-12 text-center">
        <h2 class="post-single-title"><?php _e('You may also like', 'verum'); ?></h2>
    </div>
    <?php 
        while($verum_related_post->have_posts()): 
        $verum_related_post->the_post(); 
    ?>
        <div class="col-lg-4 col-md-6">
            <article class="post">
                <div class="post-img">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                </div>
                <div class="post-header">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                    <?php 
                        $verum_post_categories  = get_the_category();
                        if($verum_post_categories):
                    ?>
                    <div class="post-meta">
                        <ul class="cat">
                            <?php foreach($verum_post_categories as $verum_post_category): ?>
                            <li>
                                <a href="<?php get_category_link($verum_post_category) ?>">
                                    <?php echo esc_html($verum_post_category->name); ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="separation"></div>
                        <div class="post-date">
                            <a href="<?php the_permalink(); ?>">
                                <?php echo get_the_date('dS M Y', $post->ID ); ?>
                            </a>
                        </div>
                    </div>
                    <?php endif; ?> 

                </div>
            </article>
        </div>
    <?php 
        endwhile; 
        wp_reset_query();
    ?>
    <?php  ?>
</div>
<?php endif; ?>