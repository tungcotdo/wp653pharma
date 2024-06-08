<section class="banner__section">
    <?php $small_banners = get_field('small_banner', 'option'); ?>
    <?php if( !empty( $small_banners ) ): ?>
        <?php foreach( $small_banners as $item ): ?>
            <div class="banner__item">
                <img class="banner__img" src="<?php echo $item['img']; ?>">
                <!-- <div class="banner__content">
                    <p class="banner__sale">Sale 50%</p>
                    <h3 class="banner__title">
                        Lorem ipsum dolor sit amet.
                    </h3>
                    <button class="banner__viewbtn">
                        xem chi tiết
                    </button>
                </div> -->
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</section><!-- Best product sale -->