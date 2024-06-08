<footer class="footer">
            <section class="service__section">
                <div class="service__row">
                <?php $home_benefits = get_field('home_benefit', 'option'); ?>
                    <?php if( !empty( $home_benefits ) ): ?>
                        <?php foreach( $home_benefits as $item ): ?>
                            <div class="service-row__item service-row__item--separate">
                                <img src="<?php echo $item['icon']; ?>" alt="" class="service-row-item__icon">
                                <h3 class="service-row-item__text"><?php echo $item['title']; ?></h3>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </section> <!-- End service -->
            <div class="page-width">
                <div class="footer__above">
                    <div class="footer-above-row">
                        <div class="footer-above__col footer-above__col--2">
                            <h3 class="footer-above__title">Văn phòng</h3>
                            <ul class="footer-above__ul">
                                <li class="footer-above-ul__li footer-above-ul__li--padding">358/55/20 P. Bùi Xương Trạch, Khương Đình, Thanh Xuân, Hà Nội</li>
                                <li class="footer-above-ul__li">0962998328</li>
                                <li class="footer-above-ul__li">doandinh@exampledemo.com</li>
                            </ul>
                        </div>
                        <div class="footer-above__col">
                            <h3 class="footer-above__title">Về chúng tôi</h3>
                            <ul class="footer-above__ul">
                                <?php $footer_about_us = get_field('footer_about_us', 'option'); ?>
                                <?php if( !empty( $footer_about_us ) ): ?>
                                    <?php foreach( $footer_about_us as $item ): ?>
                                        <li class="footer-above-ul__li"><a class="footer-above-ul-li__a" href="<?php echo home_url('/');?>?p=<?php echo $item['id']?>"><?php echo $item['title']?></a></li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="footer-above__col">
                            <h3 class="footer-above__title">Danh mục sản phẩm</h3>
                            <ul class="footer-above__ul">
                                <?php $product_categorys = get_field('product_category', 'option'); ?>
                                <?php if( !empty( $product_categorys ) ): ?>
                                    <?php foreach( $product_categorys as $item ): ?>
                                        <li class="footer-above-ul__li"><a class="footer-above-ul-li__a" href="<?php echo home_url('/');?>?s=&c=<?php echo $item['cat']?>&cn=<?php echo $item['title']?>"><?php echo $item['title']?></a></li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="footer-above__col footer-above__col--2">
                            <h3 class="footer-above__title">Gửi email cho chúng tôi</h3>
                            <ul class="footer-above__ul">
                                <li class="footer-above-ul__li footer-above-ul__li--padding">Đăng ký nhận bản tin mới nhất của chúng tôi để nhận tin tức về giảm giá đặc biệt.</li>
                                <li class="footer-above-ul__li">
                                    <form class="footer-above__form" action="">
                                        <input type="text" class="footer-above-input__email" placeholder="Nhập email ...">
                                        <input type="submit" class="footer-above-input__submit" value="Đăng ký">
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__below">
                <div class="page-width">
                    <div class="footer-below__copyright">
                        <p>© 2024, Công ty cổ phần dược mỹ phẩm olympus</p>
                    </div>
                    <div class="footer-below__social">
                        <a href="#" class="footer-below-social__link"><img class="footer-below-social__icon" src="<?php echo WT_ASSET('img/social/facebook.png'); ?>" alt=""></a>
                        <a href="#" class="footer-below-social__link"><img class="footer-below-social__icon" src="<?php echo WT_ASSET('img/social/youtube.png'); ?>" alt=""></a>
                        <a href="#" class="footer-below-social__link"><img class="footer-below-social__icon" src="<?php echo WT_ASSET('img/social/gmail.png'); ?>" alt=""></a>
                    </div>
                </div>
            </div>
        </footer>
        
        <?php require WT_PARTIALS( 'contact-button.php' )?>
        
        <!-- Modal search layout -->
        <div class="modal" id="modal__search">
            <div class="modal__overlay"></div>
            <div class="modal__content">
                <div class="modal__header">
                    <div class="modal__width">
                        <h3 class="modal__title">Tìm kiếm sản phẩm</h3>
                        <img class="modal__clsicon" src="<?php echo WT_ASSET('img/icon/close.png'); ?>">
                    </div>
                </div>
                <div class="modal__body">
                    <div class="modal__width">
                        <form action="" class="modal-search__form">
                            <input type="text" class="modal-search-form__input" placeholder="Nhập thông tin sản phẩm ...">
                            <button class="modal-search-form__submit">TÌM KIẾM</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal category layout -->
        <div class="modal" id="modal__category">
            <div class="modal__overlay"></div>
            <div class="modal__content--left">
                <div class="modal__header">
                    <div class="modal__width">
                        <h3 class="modal__title">Danh mục sản phẩm</h3>
                        <img class="modal__clsicon" src="<?php echo WT_ASSET('img/icon/close.png'); ?>">
                    </div>
                </div>

                <div class="modal__body">
                    <div class="modal__width">
                        <ul class="modal-body__ul">
                            <?php $product_categorys = get_field('product_category', 'option'); ?>
                            <?php if( !empty( $product_categorys ) ): ?>
                                <?php foreach( $product_categorys as $item ): ?>
                                    <li class="modal-body__li"><a href="<?php echo home_url('/');?>?s=&c=<?php echo $item['cat']?>&cn=<?php echo $item['title']?>" class="modal-body__a"><?php echo $item['title']?></a></li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal menu layout -->
        <div class="modal" id="modal__menu">
            <div class="modal__overlay"></div>
            <div class="modal__content--right">
                <div class="modal__header">
                    <div class="modal__width">
                        <h3 class="modal__title">Menu</h3>
                        <img class="modal__clsicon" src="<?php echo WT_ASSET('img/icon/close.png'); ?>">
                    </div>
                </div>
                <div class="modal__body">
                    <div class="modal__width">
                        <ul class="modal-body__ul">
                            <li class="modal-body__li"><a href="" class="modal-body__a">Menu 1</a></li>
                            <li class="modal-body__li"><a href="" class="modal-body__a">Menu 2</a></li>
                            <li class="modal-body__li"><a href="" class="modal-body__a">Menu 3</a></li>
                            <li class="modal-body__li"><a href="" class="modal-body__a">Menu 4</a></li>
                            <li class="modal-body__li"><a href="" class="modal-body__a">Menu 5</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Wrapper -->

    <script src="<?php echo WT_ASSET('js/swiper-bundle.min.js'); ?>"></script>
    <script src="<?php echo WT_ASSET('js/swiper-config.js'); ?>"></script>
    <script src="<?php echo WT_ASSET('js/modal.js'); ?>"></script>
    <script src="<?php echo WT_ASSET('js/main.js'); ?>"></script>
</body>
</html>