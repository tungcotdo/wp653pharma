        <!-- Home slide -->
        <section class="slider__section">
            <div class="slider__main swiper">
                <div class="swiper-wrapper">
                    <?php $home_slider_banners = get_field('home_slider_banner', 'option'); ?>
                    <?php if( !empty( $home_slider_banners ) ): ?>
                        <?php foreach( $home_slider_banners as $item ): ?>
                            <div class="swiper-slide slider-main__item">
                                <img class="slider-main__img" src="<?php echo $item['background']; ?>">
                                <div class="slider-main__content">
                                    <p class="slider-main__sale"><?php echo $item['text1']; ?></p>
                                    <h3 class="slider-main__title">
                                        <?php echo $item['text2']; ?>
                                    </h3>
                                    <p class="slider-main__description"><?php echo $item['text3']; ?></p>
                                    <a class="slider-main__viewbtn" href="<?php echo $item['link']; ?>" >xem chi tiết</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section> <!-- End slide -->
