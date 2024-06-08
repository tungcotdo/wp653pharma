<?php
    $bestsellers = new WP_Query(array(
        'post_type'  => 'product',
        'query_var' => '0',
        'tax_query' => array(
            array(
                'taxonomy' => 'product_category',
                'field'    => 'slug',
                'terms' => 'latest'
            ),
        ),
    ));
?>

<!-- Best seller -->
<section class="product__section">
    <div class="product__latest swiper">
        <div class="product-row__header">
            <h3 class="product-row-header__title">
                Sản phẩm mới nhất
            </h3>  
            <div class="product-row-header__navigation">
                <img src="<?php echo WT_ASSET('img/icon/previous.png'); ?>" class="product-row-header__btn product-row-header__btn--next">
                <img src="<?php echo WT_ASSET('img/icon/next.png'); ?>" class="product-row-header__btn product-row-header__btn--prev">
            </div>
        </div>
        <div class="swiper-wrapper product-row__wrapper">
            <?php while ($bestsellers->have_posts()) : $bestsellers->the_post() ?>
                <div class="swiper-slide product-row__item">
                    <span class="product-row__sale">-<?php echo get_field('sale', $post->ID); ?>%</span>
                    <div class="product-row__content">
                        <div class="product-row__thumnail">
                            <img class="product-row__img" src="<?php echo get_the_post_thumbnail_url($post->ID); ?>">
                        </div>
                        <h3 class="product-row__title"><?php the_title(); ?></h3>
                        <div class="product-row__price">
                            <del class="product-row-price__origin"><?php echo get_field('original_price', $post->ID); ?></del>
                            <span class="product-row-price__sale"><?php echo get_field('price', $post->ID); ?></span>
                        </div>
                        <a href="<?php echo get_permalink($post->ID); ?>" class="product-row__viewbtn">
                            xem chi tiết
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section> <!-- End Best seller -->


