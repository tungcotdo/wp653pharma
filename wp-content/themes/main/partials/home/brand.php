<section class="brand__section">
    <div class="brand__latest swiper">
        <div class="swiper-wrapper brand-row__wrapper">
            <?php $product_categorys = get_field('product_category', 'option'); ?>
            <?php if( !empty( $product_categorys ) ): ?>
                <?php foreach( $product_categorys as $item ): ?>
                    <a href="<?php echo home_url('/');?>?s=&c=<?php echo $item['cat']?>&cn=<?php echo $item['title']?>" class="swiper-slide brand-row__item">
                        <div class="brand-row__content">
                            <div class="brand-row__thumnail">
                                <img class="brand-row__img" src="<?php echo $item['icon']; ?>">
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>