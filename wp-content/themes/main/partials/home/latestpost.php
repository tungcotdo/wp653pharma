<?php
    $latestposts = new WP_Query(array(
        'post_type'  => 'post',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms' => 'latest'
            ),
        ),
    ));
?>

<section class="post__section">
    <div class="post__latest swiper">
        <div class="post-row__header">
            <h3 class="post-row-header__title">
                Bài viết mới nhất
            </h3>  
            <div class="post-row-header__navigation">
                <img src="<?php echo WT_ASSET('img/icon/previous.png'); ?>" class="post-row-header__btn post-row-header__btn--next">
                <img src="<?php echo WT_ASSET('img/icon/next.png'); ?>" class="post-row-header__btn post-row-header__btn--prev">
            </div>
        </div>
    
        <div class="swiper-wrapper post-row__wrapper">
            <?php while ($latestposts->have_posts()) : $latestposts->the_post() ?>
                <div class="swiper-slide post-row__item">
                    <div class="post-row__content">
                        <div class="post-row__thumnail">
                            <img class="post-row__img" src="<?php echo get_the_post_thumbnail_url($post->ID); ?>">
                        </div>
                        <p class="post-row__date"><?php the_date(); ?></p>
                        <h3 class="post-row__title"><?php the_title(); ?></h3>
                        <div class="post-row__description"><?php the_excerpt(); ?></div>
                        <a href="<?php echo get_permalink($post->ID); ?>" class="post-row__viewlink">
                            xem chi tiết
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        
    </div>
</section> <!-- End post -->