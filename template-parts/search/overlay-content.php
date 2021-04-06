<div class="col-md-3">
    <article class="post">
        <div class="post-img">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
        </div>

        <div class="post-header">
                <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
                    </a>
                </h3>
                <?php 
                    $verum_post_categories  = get_the_category();
                    if($verum_post_categories):
                ?>
                <div class="post-meta">
                    <ul class="cat">
                    <?php
                        foreach($verum_post_categories as $verum_post_category): 
                    ?>
                    <li>
                        <a href="<?php get_category_link($verum_post_category) ?>">
                            <?php echo esc_html($verum_post_category->name); ?>
                        </a>
                    </li>
                    <?php 
                        break;
                        endforeach; 
                    ?>
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