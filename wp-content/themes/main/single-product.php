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
                    <!-- <div class="product-detail-right__bottom">
                        <button class="product-detail-right-bottom__btn product-detail-right-bottom__btn--view">Xem giỏ hàng</button>
                        <button class="product-detail-right-bottom__btn product-detail-right-bottom__btn--checkout">Mua hàng</button>
                    </div> -->
                </div>
            </div> <!-- End product detail -->
            <!-- <div class="product__description">
                <h1 class="product-description__title">Mô tả</h1>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, laudantium corporis itaque dolore, ipsum ipsam repudiandae harum reprehenderit nulla obcaecati ullam dignissimos laborum. Dolorem a quam inventore modi autem! Accusantium, nesciunt dolor? Quasi nihil ad suscipit assumenda hic laboriosam commodi voluptatibus exercitationem aspernatur voluptate eveniet quas ipsum dolorum consectetur, qui aperiam debitis ratione, ipsam et voluptates architecto magni aut. Quis sunt provident, accusamus, quaerat, asperiores voluptates voluptas in sed dolorem saepe ut aliquid aliquam. Qui exercitationem aspernatur suscipit dolor voluptatum distinctio similique, laudantium, atque numquam unde incidunt vitae, aliquid reiciendis! Unde similique consequatur modi laboriosam nisi rerum molestias, reiciendis quas amet sapiente nesciunt placeat asperiores quasi ducimus eum eius laudantium ex dolore porro ratione distinctio iure dolorum libero error. Mollitia tempore exercitationem cupiditate laudantium reiciendis molestias asperiores voluptates nostrum quos soluta expedita libero quisquam atque sit, ab omnis laborum incidunt? Repudiandae quae aliquam adipisci minima iusto voluptatem doloribus molestiae asperiores corrupti culpa sapiente labore, ab optio. Iste quas ducimus quam ipsam deleniti consequatur minus eius, autem necessitatibus vitae, fugiat, quos iusto praesentium maxime fuga. Adipisci quisquam excepturi veniam recusandae nobis quas est accusantium minima totam ratione tempora hic officia fugit quae, quidem perspiciatis corporis molestias, illum autem aspernatur dolores aperiam explicabo officiis animi! Consequuntur pariatur eos cupiditate nihil reprehenderit dolor sit repellendus nostrum esse amet maxime adipisci, repudiandae, a laudantium error assumenda veritatis corrupti dolorem nisi! Illum aperiam facere vero porro nihil. Vitae corporis explicabo ea, consequatur accusantium dolorum ratione incidunt atque cupiditate? Labore non, consectetur excepturi adipisci quidem necessitatibus aut sapiente harum aliquam placeat omnis animi rem recusandae magnam saepe iste nulla cum nihil, molestias accusamus fugit. Officiis eum laborum corporis! Officia explicabo, cupiditate amet libero dolorum repellendus aut ab sed facere qui molestias impedit illum laborum, labore vero sequi iste doloribus ex voluptate architecto? Dolorem, iure id. Maxime sequi dolore voluptates porro nisi reiciendis eos exercitationem vel, autem cupiditate alias voluptatibus, magni nihil eveniet soluta nam tempore! Ex tempora eius velit fugit saepe dicta atque officiis mollitia? Voluptatibus rerum debitis, consequuntur libero veritatis dignissimos sapiente omnis officia. Magnam iure et odio ex, optio cumque amet mollitia nobis deserunt asperiores maiores accusantium, nam voluptatibus expedita sunt nemo soluta nihil delectus saepe repellendus id cupiditate quos quis! A alias, deleniti adipisci odit officia eveniet omnis quibusdam nisi dolore natus, totam iure molestiae quam. Accusantium ipsa fugiat repellat voluptates, exercitationem labore minima eaque? Alias accusamus fugiat sit modi dolore quasi culpa architecto soluta doloremque beatae eveniet consequuntur vel tempore non atque nulla mollitia tenetur dolorem, omnis nostrum nemo ipsam dolorum, similique provident? Similique fugiat perspiciatis possimus. Voluptate est aperiam pariatur ratione totam accusamus voluptatum? Corporis saepe laboriosam quos architecto nisi porro vitae accusantium, beatae repellendus dolor excepturi recusandae aliquam voluptas ad placeat magni doloremque illo obcaecati. Laudantium, amet dolores? Architecto deserunt eius eligendi vitae tempora, fugiat tenetur corrupti explicabo officiis autem cupiditate, doloribus nemo excepturi, numquam repellendus illo. Cumque velit nemo dolor modi corrupti? Tempore deleniti quod blanditiis ab, eos amet sequi reiciendis velit, adipisci quasi, saepe ex veniam vel? Possimus illum velit nisi assumenda. Omnis molestias maiores laboriosam consequatur. Numquam debitis laboriosam nobis eum velit error quam recusandae sed nemo, expedita doloremque doloribus ab nam, iste ad fuga dolorum. Nisi necessitatibus commodi veritatis rem vel, cupiditate reprehenderit temporibus aspernatur corporis quisquam minima quibusdam non alias eius neque a nobis magnam delectus fugit similique quam autem est? Ab, omnis provident! Alias, excepturi? Ab temporibus autem magni, eveniet quis pariatur, error iure maiores quam accusantium nihil tenetur doloribus deserunt? Eius perferendis, magni odio sequi quia dignissimos illum voluptas velit. Ab nihil reiciendis iste dolore architecto totam laborum cumque eius ipsa, blanditiis ipsam necessitatibus illo voluptatum, atque minima animi odit eveniet voluptatibus voluptate minus aliquid doloribus sunt? Harum dignissimos sunt eaque nam laborum tempora quod maiores. Ipsam perspiciatis quam possimus a sit, tempora neque aperiam eveniet! Quae, iusto. Modi commodi, voluptate sapiente ratione asperiores ipsa iste necessitatibus sunt error vitae fugiat, veniam fugit rem similique quasi iusto unde sint id saepe ipsam reprehenderit vel quam eveniet sit. Illum nostrum odit numquam id perferendis accusantium cumque nulla illo? Maiores pariatur omnis eligendi porro facilis. Doloremque odit ad quos reprehenderit eveniet dolorum quae esse ducimus at perferendis soluta amet adipisci autem, nostrum maiores, et repellendus magnam facere eum alias quisquam nihil labore quis. Ut veritatis quos illum eius mollitia quas voluptatum tenetur, veniam blanditiis, aliquam commodi eum voluptates minima quam magnam architecto quae voluptatibus? Inventore numquam modi officia? Voluptatem necessitatibus ad sit ut distinctio dolor, eum tempora possimus, culpa animi ex sed aut aliquam eaque veniam iste porro quod sapiente explicabo dolores asperiores numquam! Magni aliquam voluptatum tempora, sapiente impedit sequi neque! Asperiores saepe eveniet molestiae, dolorem at commodi aliquid voluptate? Neque dolorum at in, odio ex quod maiores illum aperiam voluptatum suscipit accusantium, officia distinctio recusandae nesciunt inventore. Maiores porro, temporibus aspernatur consequuntur, est laboriosam accusantium nobis nihil exercitationem eligendi distinctio recusandae tempora dolores ratione qui sequi. Accusantium distinctio odio asperiores illum consequuntur soluta ipsam qui, doloribus beatae corporis rerum error? Nobis sit, expedita reprehenderit aperiam quod voluptate est aliquam temporibus cum ut repellendus exercitationem nihil provident aliquid inventore officiis officia rerum sequi architecto accusamus tempore labore dicta! Itaque, molestiae exercitationem consequuntur, modi illum officiis id possimus facilis adipisci deleniti, omnis alias laudantium qui quisquam ab unde vitae quis aliquam ratione repellat asperiores quibusdam fuga molestias pariatur! Corrupti nisi ab reprehenderit magni sapiente excepturi molestias sequi consequatur animi nobis repellendus, temporibus eum, amet dolorum, ut eveniet. Odit perferendis in vitae quibusdam dolorum? Impedit aliquid ipsa esse eos veritatis autem facilis aliquam inventore aut dolores nulla sit tempore laborum accusantium beatae consequatur officia asperiores dicta commodi dolor, dolore consectetur! Nulla facilis non cumque similique velit, dolores eos eligendi dolor debitis cum, quaerat accusantium fugit excepturi in placeat! Nesciunt quas rem maiores tempore aliquam molestias esse iusto aspernatur fuga quis mollitia tenetur in earum minus culpa voluptatibus quo, placeat assumenda ad itaque perspiciatis, nam ut cum obcaecati. Ex corrupti, neque recusandae voluptate tempore rem, unde vitae hic iure odit provident accusamus, numquam sit molestiae delectus aliquam.</div>
            </div> -->

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
                        <img src="./assets/img/icon/previous.png" class="product-row-header__btn product-row-header__btn--next">
                        <img src="./assets/img/icon/next.png" class="product-row-header__btn product-row-header__btn--prev">
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
