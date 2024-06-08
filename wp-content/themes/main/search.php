<?php require WT_PARTIALS( 'header.php' )?>
  <!-- End header -->
  <div class="breadcrumb">
      <div class="page-width">
            <?php if( !empty( $_GET['s'] ) ): ?>
                <h3 class="breadcumb__title">
                    Kết quả tìm kiếm cho "<?php echo $_GET['s']; ?>"
                </h3>
            <?php else: ?>
                <h3 class="breadcumb__title">
                    Các sản phẩm
                </h3>
            <?php endif; ?>

      </div>
  </div>

  <div class="product__filter">
      <div class="page-width">
          <button class="product-filter__btn">
              <img class="product-filter__icon" src="<?php echo WT_ASSET('img/icon/filter.png'); ?>" alt=""> 
              <span>Filter</span>
          </button>
      </div>
  </div>

  <div class="page-width">
      <div class="product">
          <div class="product__grid">
            <?php
                $results = new WP_Query(array(
                    'post_type' => array(       
                        'product'                        
                    ),
                    'posts_per_page' => -1,
                    's' => $search_value
                ));
            ?>

            <?php while ($results->have_posts()) : $results->the_post() ?>
              <div class="product-grid__item">
                  <span class="product-grid__sale">-<?php echo get_field('sale', $post->ID); ?>%</span>
                  <div class="product-grid__content">
                    <div class="product-grid__thumnail">
                        <img class="product-grid__img" src="<?php echo get_the_post_thumbnail_url($post->ID); ?>">
                    </div>
                    <h3 class="product-grid__title"><?php the_title(); ?></h3>
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
  </div> <!-- End page-width -->
<?php require WT_PARTIALS( 'footer.php' )?>