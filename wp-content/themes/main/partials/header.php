<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Ecommerce</title>

    <link rel="stylesheet" href="<?php echo WT_ASSET('css/swiper-bundle.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/reset.css'); ?>">
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/base.css'); ?>">
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/header.css'); ?>">
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/home/slider-section.css'); ?>">
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/home/banner-section.css'); ?>">
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/product-section.css'); ?>">
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/product/product.css'); ?>">
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/home/brand-section.css'); ?>">
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/home/post-section.css'); ?>">
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/footer.css'); ?>">
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/modal.css'); ?>">
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/main.css'); ?>">

</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__top">
                <div class="page-width">
                    <ul class="header-top__ul">
                        <!-- <li class="header-top__li">
                            <select class="header-top__select">
                                <option value="">VND</option>
                                <option value="">USD</option>
                            </select>
                        </li>
                        <li class="header-top__li">
                            <select class="header-top__select">
                                <option value="">VI</option>
                                <option value="">US</option>
                                <option value="">UK</option>
                            </select>
                        </li> -->
                        <li class="header-top__li">Công ty cổ phần dược mỹ phẩm olympus</li>
                    </ul>
    
                    <ul class="header-top__ul header-top__ul--sm">
                        <li class="header-top__li">Hotline 0962998328</li>
                    </ul>
                </div>
            </div>

            <div class="header__middle page-width">
                <div class="header-middle__logo">
                    <img src="<?php echo WT_ASSET('img/olympus-logo.png'); ?>" class="header-middle-logo__img" alt="logo">
                </div>
                <div class="header-middle__search">
                    <form action="<?php echo home_url('/');?>" class="header-middle-search__form">
                        <?php
                            $search_value = !empty( $_GET['s'] ) ? $_GET['s'] : '';
                        ?>
                        <input type="text" class="header-middle-search-form__input" placeholder="Tìm kiếm các sản phẩm ..." name="s" value="<?php echo $search_value; ?>">
                        <button class="header-middle-search-form__submit">TÌM KIẾM</button>
                    </form>
                </div>
                <div class="header-middle__right">
                    <div class="header-middle-right__item header-middle-right__item--myaccount header-middle-right__item--xl">
                        <a href="#" class="header-middle-right__myacount">Tài khoản của tôi</a>
                    </div>
                    <div class="header-middle-right__item header-middle-right__item--sm">
                        <img class="header-middle-right__icon header-middle-right__icon--search" src="<?php echo WT_ASSET('img/icon/search.png'); ?>">
                    </div>
                    <div class="header-middle-right__item">
                        <img class="header-middle-right__icon" src="<?php echo WT_ASSET('img/icon/user.png'); ?>">
                    </div>
                    <div class="header-middle-right__item header-middle-right__item--cart">
                        <img class="header-middle-right__icon header-middle-right__icon--cart" src="<?php echo WT_ASSET('img/icon/cart.png'); ?>">
                        <span class="header-middle-right-cart__notification">3</span>
                    </div>
                    <div class="header-middle-right__item header-middle-right__item--sm">
                        <img class="header-middle-right__icon header-middle-right__icon--menu" src="<?php echo WT_ASSET('img/icon/bar.png'); ?>">
                    </div>
                </div>
            </div>

            <nav class="header__nav">
                <div class="page-width">
                    <div class="header-nav__category">
                        <button class="header-nav__catbtn" id="header-nav__catbtn">
                            <img class="header-nav-category__icon" src="<?php echo WT_ASSET('img/icon/category.png'); ?>">
                            <span class="header-nav-category__text">Danh mục sản phẩm</span>
                        </button>
                    </div>
                    
                    <ul class="header-nav__ul header-nav__ul--menu header-nav__ul--lg">
                        <li class="header-nav__li"><a class="header-nav__a" href="">Trang chủ</a></li>
                        <li class="header-nav__li"><a class="header-nav__a" href="">Sản phẩm</a></li>
                        <li class="header-nav__li"><a class="header-nav__a" href="">Tin tức</a></li>
                        <li class="header-nav__li"><a class="header-nav__a" href="">Giới thiệu</a></li>
                        <li class="header-nav__li"><a class="header-nav__a" href="">Liên hệ</a></li>
                    </ul>

                    <ul class="header-nav__ul header-nav__ul--freeship">
                        <li class="header-nav__li">Free ship với đơn từ <span class="header-nav-ul-freeship__value">100.000 đ +</span></li>
                    </ul>
                </div>
            </nav>
        </header>

        <header class="header__scroll" id="header__scroll">
            <div class="header__middle page-width">
                <div class="header-middle__logo">
                    <img src="<?php echo WT_ASSET('img/olympus-logo.png'); ?>" class="header-middle-logo__img" alt="logo">
                </div>
                <div class="header-middle__search">
                    <form action="" class="header-middle-search__form">
                        <input type="text" class="header-middle-search-form__input" placeholder="Tìm kiếm các sản phẩm ...">
                        <button class="header-middle-search-form__submit">TÌM KIẾM</button>
                    </form>
                </div>
                <div class="header-middle__right">
                    <div class="header-middle-right__item header-middle-right__item--myaccount header-middle-right__item--xl">
                        <a href="#" class="header-middle-right__myacount">Tài khoản của tôi</a>
                    </div>
                    <div class="header-middle-right__item header-middle-right__item--sm">
                        <img class="header-middle-right__icon header-middle-right__icon--search" src="<?php echo WT_ASSET('img/icon/search.png'); ?>">
                    </div>
                    <div class="header-middle-right__item header-middle-right__item--noxl">
                        <img class="header-middle-right__icon" src="<?php echo WT_ASSET('img/icon/user.png'); ?>">
                    </div>
                    <div class="header-middle-right__item header-middle-right__item--cart">
                        <img class="header-middle-right__icon header-middle-right__icon--cart" src="<?php echo WT_ASSET('img/icon/cart.png'); ?>">
                        <span class="header-middle-right-cart__notification">3</span>
                    </div>
                    <div class="header-middle-right__item header-middle-right__item--sm">
                        <img class="header-middle-right__icon header-middle-right__icon--menu" src="<?php echo WT_ASSET('img/icon/bar.png'); ?>">
                    </div>
                </div>
            </div>
        </header>