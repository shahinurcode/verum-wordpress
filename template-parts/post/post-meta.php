<div class="post-header">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="post-meta">
        <?php 
        $verum_post_categories  = get_the_category();
        if($verum_post_categories):
        ?>
        <ul class="cat">
            <?php foreach($verum_post_categories as $verum_post_category): ?>
                <li><a href="<?php echo esc_url(get_category_link( $verum_post_category )); ?>"><?php echo esc_html($verum_post_category->name); ?></a></li>
            <?php endforeach; ?>
        </ul>
        <div class="separation"></div>
        <?php endif; ?>
        <div class="post-date"><a href="<?php the_permalink(); ?>"><?php echo get_the_date('dS M Y', $post->ID ); ?></a></div>
    </div>
</div>