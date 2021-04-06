
<?php 

global $wp_query;
$verum_current_post_index   = $wp_query->current_post+1;
$verum_post_grid            = ( $verum_current_post_index % 5 == 1) ? 12: 6;

?>
<div class="col-md-<?php echo $verum_post_grid; ?>">
    <article <?php post_class(); ?>>
        <?php get_template_part('template-parts/post/post','header'); ?>
        <?php get_template_part('template-parts/post/post','meta'); ?>
        <?php get_template_part('template-parts/post/post','content'); ?>

    </article>
</div>