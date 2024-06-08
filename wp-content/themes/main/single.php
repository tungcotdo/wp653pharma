<?php require WT_PARTIALS( 'header.php' )?>
    <?php if(have_posts(  )): while (have_posts(  )): the_post(  );?>
        <div class="breadcrumb">
            <div class="page-width">
                <h3 class="breadcumb__title">
                    <?php the_title(); ?>
                </h3>
            </div>
        </div>
        <div class="page-width">
            <div class="post__detail">
                <p class="post__date"><?php the_date(); ?></p>
                <?php the_content(); ?>
            </div> <!-- End post -->
        </div> <!-- End page-width -->
    <?php endwhile; endif; ?>
<?php require WT_PARTIALS( 'footer.php' )?>