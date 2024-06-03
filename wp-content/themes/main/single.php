<?php $_webInvert = true; ?>
<?php require WT_PARTIALS( 'header.php' )?>
    <?php if(have_posts(  )): while (have_posts(  )): the_post(  );?>
            <div class="body">
                <div class="container">
                    <div class="post">
                        <div class="post-header">
                            <h1 class="post-header__title"><?php echo the_title(); ?></h1>
                            <p class="post-header__date"><?php echo the_date(); ?></p>
                        </div>
                        <div class="post__body">
                            <?php echo the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; endif; ?>
<?php require WT_PARTIALS( 'footer.php' )?>