<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Dược mỹ phẩm Olympus</title>

    <link rel="stylesheet" href="<?php echo WT_ASSET('css/swiper-bundle.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/reset.css'); ?>">
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/base.css'); ?>">
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/header.css'); ?>">
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/home/slider-section.css'); ?>">
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/home/banner-section.css'); ?>">
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/product-section.css'); ?>">
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/product/product.css'); ?>">
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/detail.css'); ?>">
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/home/brand-section.css'); ?>">
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/home/post-section.css'); ?>">
    <link rel="stylesheet" href="<?php echo WT_ASSET('css/button.css'); ?>">
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
                        <li class="header-top__li">Công ty cổ phần dược mỹ phẩm olympus</li>
                    </ul>
    
                    <ul class="header-top__ul header-top__ul--sm">
                        <li class="header-top__li">Giờ làm việc 8h30 - 17h30</li>
                    </ul>
                </div>
            </div>

            <div class="header__middle page-width">
                <a href="<?php echo home_url('/');?>" class="header-middle__logo">
                    <img src="<?php echo WT_ASSET('img/olympus-logo.png'); ?>" class="header-middle-logo__img" alt="logo">
                </a>
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
                    <div class="header-middle-right__item">
                        <a href="#" class="header-middle-right__myacount">Hotline 0962998328</a>
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
                        <li class="header-nav__li"><a class="header-nav__a" href="<?php echo home_url('/');?>">Trang chủ</a></li>
                        <li class="header-nav__li"><a class="header-nav__a" href="">Sản phẩm</a></li>
                        <li class="header-nav__li"><a class="header-nav__a" href="">Tin tức</a></li>
                        <li class="header-nav__li"><a class="header-nav__a" href="">Giới thiệu</a></li>
                        <li class="header-nav__li"><a class="header-nav__a" href="">Liên hệ</a></li>
                    </ul>

                    <ul class="header-nav__ul header-nav__ul--freeship">
                        <li class="header-nav__li">Free ship với đơn từ <span class="header-nav-ul-freeship__value"><?php echo get_field('free_ship', 'option'); ?></span></li>
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
                        <a href="#" class="header-middle-right__myacount">Hotline 0962998328</a>
                    </div>
                </div>
            </div>
        </header>