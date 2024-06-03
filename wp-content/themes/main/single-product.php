<?php $_webInvert = true; ?>
<?php require WT_PARTIALS( 'header.php' )?>
    <?php if(have_posts(  )): while (have_posts(  )): the_post(  );?>
        <div class="body">
            <div class="container">
                <div class="breadcrumb">
                    <a class="breadcrumb__link" href="<?php echo home_url('/');?>" title="Home">Home</a> 
                    <span class="s">/</span>
                    <a class="breadcrumb__link" href="<?php echo home_url('/').'?s=';?>" title="Home">Tour in Vietnam</a> 
                    <span class="s">/</span>
                    <a class="breadcrumb__link" href="#" title="Halong Bay Tours"><?php echo $post->post_title; ?></a>
                </div>
                <div class="tour">
                    <div class="tour-header">
                        <h1 class="tour-header__title"><?php echo the_title(); ?></h1>
                    </div>
                    <div class="tour__image">
                        <div class="tour__description">
                            <div class="swiper swiper--tourdetail">
                                <div class="swiper-wrapper">
                                    <?php
                                        $slides = get_field('slide', $post->ID);
                                        if( !empty( $slides ) ):
                                            foreach( $slides as $item ):
                                    ?>
                                                <div class="swiper-slide"><img class="swiper__img" src="<?php echo $item['img']?>" alt=""></div>
                                    <?php 
                                            endforeach;
                                        endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="tour__product">
                            <div class="card card--border card--noradius">
                                <div class="card__info">
                                    <a class="btn btn--primary" href="<?php echo WT_LINK_BOOKING($post->ID); ?>">Book Tour</a>
                                    <?php if(!empty( get_field('price', $post->ID) )): ?>
                                        <div class="card-price">
                                            <label class="card-price__label">Price</label>
                                            <span class="card-price__value"><?php echo get_field('price', $post->ID); ?></span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tour__tab">
                        <div class="tour-menu">
                            <div data-index-number="1" class="tour-menu__item tour-menu__item--separate tour-menu__item--active">Overview</div>
                            <div data-index-number="2" class="tour-menu__item tour-menu__item--separate">Include</div>
                            <div data-index-number="3" class="tour-menu__item tour-menu__item--separate">Map</div>
                            <div data-index-number="4" class="tour-menu__item">Review</div>
                        </div>
                        <div class="tour-component">
                            <div id="tour-component__item--1" class="tour-component__item tour-component__item--active"><?php echo the_content(); ?></div>
                            <div id="tour-component__item--2" class="tour-component__item"><?php echo get_field('tour_include', $post->ID); ?></div>
                            <div id="tour-component__item--3" class="tour-component__item"><?php echo get_field('tour_map', $post->ID); ?></div>
                            <div id="tour-component__item--4" class="tour-component__item"><?php echo get_field('tour_review', $post->ID); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; endif; ?>

    <section class="section section--shadow section--slide">
        <div class="container">
          <div class="section__header">
            <h2 class="section__title">Other tour</h2>
            <div class="section-navslide">
              <img class="section-navslide__btn section-navslide__btn--previous" src="<?php echo WT_ASSET('img/slide/previous.png'); ?>" alt="previous.png">
              <img class="section-navslide__btn section-navslide__btn--next" src="<?php echo WT_ASSET('img/slide/next.png'); ?>" alt="next.png">
            </div>
          </div>
          <div class="section__swiper section__swiper--othertour swiper">
            <div class="swiper-wrapper">
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

                <?php while ($bestsellers->have_posts()) : $bestsellers->the_post() ?>
                    <div class="swiper-slide">
                        <div class="card card--border">
                            <a href="<?php echo get_permalink($post->ID); ?>" class="card__frame" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');"></a>
                            <a href="<?php echo get_permalink($post->ID); ?>" class="card__title"><?php the_title(); ?></a>
                            <div class="card__info">
                                <a class="btn btn--primary" href="<?php echo WT_LINK_BOOKING($post->ID); ?>">Book Tour</a>
                                <?php if(!empty( get_field('price', $post->ID) )): ?>
                                    <div class="card-price">
                                        <label class="card-price__label">Price</label>
                                        <span class="card-price__value"><?php echo get_field('price', $post->ID); ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
          </div>
        </div><!-- container -->
      </section>

<?php require WT_PARTIALS( 'footer.php' )?>

<script>
    var swiper = new Swiper(".swiper--tourdetail", {
        effect: "coverflow",
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        coverflowEffect: {
          rotate: -30,
          stretch: 0,
          depth: 1000,
          modifier: 1,
          slideShadows: true,
        },
        slidesPerView: "auto",
        centeredSlides: true,
        spaceBetween: 15,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
    });

    var swiper = new Swiper(".section__swiper--othertour", {
        slidesPerView: 4,
        spaceBetween: 30,
        // autoplay: {
        //   delay: 2500,
        //   disableOnInteraction: false,
        // },
        breakpoints: {
            // when window width is >= 320px
            320: {
            slidesPerView: 1,
            spaceBetween: 30
            },
            // when window width is >= 992px
            992: {
            slidesPerView: 2,
            spaceBetween: 30
            },
            // when window width is >= 1200px
            1200: {
            slidesPerView: 4,
            spaceBetween: 30
            }
        },
        navigation: {
            nextEl: ".section-navslide__btn--next",
            prevEl: ".section-navslide__btn--previous",
        }
    
    });


    // tabs
    const tourMenus = document.querySelectorAll('.tour-menu__item');
      tourMenus.forEach( menu1 => {
        menu1.onclick = () => {
          document.querySelectorAll('.tour-menu__item').forEach( menu2 => {
            menu2.classList.remove('tour-menu__item--active');
          });

          menu1.classList.add('tour-menu__item--active');

          document.querySelectorAll('.tour-component__item').forEach( component => {
            component.classList.remove('tour-component__item--active');
          });

          document.getElementById('tour-component__item--' + menu1.dataset.indexNumber).classList.add('tour-component__item--active');
        }
    });
</script> 