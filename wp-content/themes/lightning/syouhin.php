<?php
/*
Template Name: 固定ページの商品テンプレート１
Template Post Type: productses, post, page 
*/
// カスタム系は子テーマに作る
?>
<?php get_header();?>

<h2>お知らせ</h2>
<?php

$args = array(
  'post_type' => 'お知らせ', /* カスタム投稿名が「gourmet」の場合 */
  'posts_per_page' => 5, /* 表示する数 */
); ?>
 
<?php $my_query = new WP_Query( $args ); ?>
 
<div class="container">
 <div class="row">
 
    <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
    
    <!-- ▽ ループ開始 ▽ -->
    <div class="col-md-4">
     <div classs="box">
        <h3><a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a></h3> 
        <p><?php the_title(); ?></P>
    <!-- △ ループ終了 △ -->
    </div>
    </div>
    <?php endwhile; ?>
 </div>
</div>
 
<?php wp_reset_postdata(); ?>


<?php get_sidebar(); ?>
			
<?php get_footer(); ?>
