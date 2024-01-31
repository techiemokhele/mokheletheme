<?php get_header(); ?>

<main>
    <div class="container-fluid">
        <div class="mb-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/news.png" class="img-fluid"
                alt="news-hero">
        </div>

        <div class="container my-3">
            <div class="justify-content-center text-center my-5">
                <h4 style="color: #fff; text-transform: uppercase;"><?php the_title(); ?></h4>
            </div>

            <div class="container">
                <?php if (has_post_thumbnail()) : ?>
                <div class="mb-5">
                    <?php the_post_thumbnail('large'); ?>
                </div>
                <?php endif; ?>
            </div>

            <div class="justify-content-center text-center mt-5">
                <h6 style="color: #fff;"><?php the_content(); ?></h6>
            </div>

            <p class=" card-text">
                <span
                    style="color: #339BBC; font-size: 12px; text-decoration: none;"><?php the_category(', '); ?></span>
            </p>
        </div>
    </div>
</main>

<?php get_footer(); ?>