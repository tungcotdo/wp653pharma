<section class="brand__section">
    <div class="brand__latest swiper">
        <div class="swiper-wrapper brand-row__wrapper">
            <?php $home_brands = get_field('home_brand', 'option'); ?>
            <?php if( !empty( $home_brands ) ): ?>
                <?php foreach( $home_brands as $item ): ?>
                    <a href="#" class="swiper-slide brand-row__item">
                        <div class="brand-row__content">
                            <div class="brand-row__thumnail">
                                <img class="brand-row__img" src="<?php echo $item['logo']; ?>">
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>