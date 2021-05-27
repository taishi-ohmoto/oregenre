<?php get_header(); ?>




<main>

<h2><?php the_title(); ?></h2>

<div class="container winHeight">
    <div class="row">

<?php
global $post;
//投稿数
$args = array( 'posts_per_page' => 8 );
$myposts = get_posts($args);

//ループで回す
foreach( $myposts as $post ) {
setup_postdata($post);
?>

<div class="col-md-4">
    <div style="margin-bottom: 5vh;">
        <a href="<?php the_permalink() ?>">
            <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail('medium'); ?>
        </a>
        <?php else: ?>
        <?php endif; ?>
    </div>
</div>
        
        <?php
}
wp_reset_postdata();
?>

</div>
</div>
</main>
<?php get_footer(); ?>