<?php 
$verum_media_sourc  = get_post_meta( get_the_ID(), 'verum_media_url', true );
$verum_post_gallery  = get_post_meta( get_the_ID(), 'verum_gallery_image', false );



if( 'audio' == get_post_format()): ?>
    <div class="post-audio">
        <iframe width="100%" height="100%" scrolling="no" frameborder="no" allow="autoplay" src="<?php echo esc_url($verum_media_sourc); ?>"></iframe>
    </div>

<?php 
elseif('video' == get_post_format()): 
    $verum_post_src =   get_the_post_thumbnail_url(get_the_ID(),'full');
?>
    <div class="post-img position-relative">
        <?php if(!has_post_thumbnail()): ?>
            <a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/video-image.png" alt=""/></a>
        <?php else: ?>
        <a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php echo $verum_post_src; ?>" alt=""/></a>
        <?php endif; ?>

        <a href="<?php echo esc_url($verum_media_sourc); ?>" class="play-btn popup-youtube"><i class="fa fa-play"></i></a>
    </div>
<?php 
    elseif('gallery' == get_post_format()): 
        if($verum_post_gallery ):
            $choose_gallery_type  = get_post_meta( get_the_ID(), 'choose_gallery_type', true );
            ?>

            <?php if($choose_gallery_type == 'carousel'): ?>

            <div class="post-img">
                <div class="post_gallery owl-carousel owl-theme">
                    <?php 
                    foreach($verum_post_gallery as $verum_post_gallery_id):
                        $verum_gallery_img_large  = wp_get_attachment_image_src($verum_post_gallery_id, 'large'); ?>
                        <div class="item">
                            <a href="#"><img class="img-fluid" src="<?php echo esc_url($verum_gallery_img_large[0]); ?>" alt=""/></a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <?php elseif($choose_gallery_type == 'justify'): ?>

            <div id="justified_gallery" class="post-img popup-gallery">
            <?php 
                foreach($verum_post_gallery as $verum_post_gallery_id):
                $verum_gallery_img_large  = wp_get_attachment_image_src($verum_post_gallery_id, 'large');
                $verum_gallery_img_full  = wp_get_attachment_image_src($verum_post_gallery_id, 'full');
            ?>
                <a title="<?php the_title(); ?>" href="<?php echo esc_url($verum_gallery_img_full[0]); ?>">
                    <img alt="<?php the_title(); ?>" src="<?php echo esc_url($verum_gallery_img_large[0]); ?>"/>
                </a>
            <?php 
                endforeach; 
            ?>
            </div>

        <?php endif; ?>

    <?php endif; ?>

<?php endif; ?>