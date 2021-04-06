<div class="post-header">
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
    <?php 
        $author_id = get_post_field('post_author', get_the_ID());
        $author_name = get_the_author_meta('display_name', $author_id);
    ?>
    <h2><?php the_title(); ?></h2>
    <div class="post-meta">
        <div class="post-author"><?php _e('By', 'verum');?> <?php the_author_posts_link(); ?></a></div>
    </div>
</div>