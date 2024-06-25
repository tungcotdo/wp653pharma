<?php require WT_PARTIALS( 'header.php' )?>
    <?php if(have_posts(  )): while (have_posts(  )): the_post(  );?>
        <div class="breadcrumb">
            <div class="page-width">
                <h3 class="breadcumb__title">
                    Chi tiết sản phẩm
                </h3>
            </div>
        </div>

        <div class="page-width">
            <div class="product__detail">
                <div class="product-detail__left">
                    <div class="swiper product-detail-left__featuredslide">
                        <div class="swiper-wrapper">
                            <?php $slides = get_field('slide', $post->ID); ?>
                            <?php if( !empty( $slides ) ): ?>
                                <?php foreach( $slides as $item ): ?>
                                    <div class="swiper-slide"><img src="<?php echo $item['img']?>" alt=""></div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                     </div>
                     <div thumbsSlider="" class="swiper product-detail-left__thumbslide">
                        <div class="swiper-wrapper">
                            <?php $slides = get_field('slide', $post->ID); ?>
                            <?php if( !empty( $slides ) ): ?>
                                <?php foreach( $slides as $item ): ?>
                                    <div class="swiper-slide"><img src="<?php echo $item['img']?>" alt=""></div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                     </div>
                </div>
                <div class="product-detail__right">
                    <h1 class="product-detail__title"><?php the_title(); ?></h1>
                    <div class="product-detail__price">
                        <del class="product-detail-price__origin"><?php echo get_field('original_price', $post->ID); ?></del>
                        <span class="product-detail-price__sale"><?php echo get_field('price', $post->ID); ?></span>
                    </div>
                    <div class="product-detail__summary">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div> 
        </div> <!-- End page-width -->
    <?php endwhile; endif; ?>

    <?php
        $bestsellers = new WP_Query(array(
            'post_type'  => 'product',
            'query_var' => '0',
            'tax_query' => array(
                array(
                    'taxonomy' => 'product_category',
                    'field'    => 'slug',
                    'terms' => 'best-seller'
                ),
            ),
        ));
    ?>
    <div class="page-width">
        <section class="product__section">
            <div class="product__latest swiper">
                <div class="product-row__header">
                    <h3 class="product-row-header__title">
                        Các sản phẩm khác
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
        </section> <!-- End product -->
    </div>
<?php require WT_PARTIALS( 'footer.php' )?>
