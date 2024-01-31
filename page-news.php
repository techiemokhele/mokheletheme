<?php
/*
Template Name: Custom News Template
*/
?>

<?php get_header(); ?>

<main>
    <div class="container-fluid">
        <!-- image section -->
        <div class="mb-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/news.png" class="img-fluid"
                alt="news-hero">
        </div>

        <!-- title with image section -->
        <div class="container mt-5 mb-5">
            <div class="justify-content-center text-center my-5">
                <h4 style="color: #fff; text-transform: uppercase;">Blogs</h4>
            </div>

            <div class="container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/blog.png" class="img-fluid"
                    alt="blog-hero">
            </div>
        </div>

        <!-- control section -->
        <div class="container">
            <div class="row justify-content-center text-center mb-4">
                <div class="col-md-9">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"
                                style="background-color: #2F3B45; color: #fff; border: 1px solid #475A6B; font-size: 12px;">View
                                all</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #1A7FA8; font-size: 12px;">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #1A7FA8; font-size: 12px;">Articles</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <select id="inputFetch" class="form-select"
                            style="background-color: transparent; border: 1px solid #2F3B45; border-radius: 5px; color: #fff; font-size: 10px; ">
                            <option selected>Most recent</option>
                            <option>Old</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>


        <!-- filter section -->
        <div class="container col-md-12 mb-3" style="width: 97%;">
            <div class="form-group">
                <select id="inputFilter" class="form-select"
                    style="background-color: #2F3B45; border: 1px solid #475A6B; border-radius: 5px; color: #fff; font-size: 10px; ">
                    <option selected>Filter</option>
                    <option>Today</option>
                    <option>Last 7 days</option>
                    <option>Last 2 weeks</option>
                    <option>Last month</option>
                    <option>Last 6 month</option>
                    <option>Last year</option>
                    <option>2023</option>
                </select>
            </div>
        </div>

        <!-- blog section -->
        <div class="container">
            <div class="row" id="posts-container">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                // WP Query to fetch blog posts dynamically
                $args = array(
                    'post_type' => 'post',  // Assuming your blogs are regular posts
                    'posts_per_page' => 3,  // Adjust the number of posts to display
                    'order' => 'DESC',      // Display latest posts first
                    'paged' => $paged,
                );

                $query = new WP_Query($args);

                // Custom function to truncate excerpt
                function custom_excerpt($text, $length)
                {
                    if (strlen($text) > $length) {
                        $text = substr($text, 0, $length);
                        $text = substr($text, 0, strrpos($text, ' '));
                        $text .= '...';
                    }
                    return $text;
                }

                // Loop through the posts and display them
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>

                <div class="col-md-4 mb-4">
                    <div class="card" style="border: none;">

                        <?php
                                // Display the post thumbnail
                                $thumbnail = get_the_post_thumbnail(null, 'medium', array('class' => 'card-img-top', 'alt' => get_the_title()));
                                if ($thumbnail) {
                                    echo '<div style="border-radius: 20px; overflow: hidden; background-color: #343a40;">' . $thumbnail . '</div>';
                                }
                                ?>

                        <div class="card-body bg-dark">
                            <!-- Display inline images in post content -->
                            <?php
                                    $content = get_the_content();
                                    preg_match_all('/<img[^>]+>/i', $content, $matches);
                                    if (!empty($matches[0])) {
                                        echo implode(' ', $matches[0]);
                                    }
                                    ?>

                            <!-- Display categories -->
                            <p class="card-text mt-3">
                                <span
                                    style="color: #339BBC; font-size: 12px; text-decoration: none;"><?php the_category(', '); ?></span>
                            </p>

                            <!-- Display title -->
                            <h6 class="card-title">
                                <a href="<?php the_permalink(); ?>" style="color: #fff; text-decoration: none;">
                                    <?php the_title(); ?>
                                </a>
                            </h6>

                            <!-- Custom excerpt -->
                            <p class="card-text" style="font-size: 12px; color: rgba(255, 255, 255, 0.4);">
                                <?php echo custom_excerpt(get_the_excerpt(), 310); ?>
                            </p>
                        </div>
                    </div>
                </div>

                <?php
                    endwhile;
                    wp_reset_postdata(); // Reset the query
                else :
                    echo 'No posts found.';
                endif;
                ?>
            </div>
        </div>

        <!-- show pagination -->
        <nav class="container" aria-label="Page navigation">
            <ul class="pagination d-flex justify-content-between">
                <!-- previous -->
                <li class="page-item">
                    <?php
                    $prev_link = get_pagenum_link(max(1, get_query_var('paged') - 1));
                    if ($prev_link && get_query_var('paged') > 1) :
                    ?>
                    <a class="page-link border-0"
                        style="background-color: #475A6B; border-radius:10px; border: 1px solid rgba(255, 255, 255, 0.4);"
                        href="<?php echo esc_url($prev_link); ?>" aria-label="Previous">
                        <span aria-hidden="true" style="color:#6E9BA8;">&laquo;</span>
                    </a>
                    <?php endif; ?>
                </li>

                <!-- page numbers -->
                <div class="d-flex justify-content-between">
                    <?php
                    $current_page = get_query_var('paged') ? get_query_var('paged') : 1;

                    for ($i = 1; $i <= $query->max_num_pages; $i++) {
                        $is_current_page = ($i == $current_page);
                        $page_link_classes = 'page-link border-0';
                        $page_item_classes = 'page-item';

                        if ($is_current_page) {
                            $page_link_classes .= ' active';
                            $page_item_classes .= ' active';
                        }

                        echo '<li class="' . $page_item_classes . '"><a class="' . $page_link_classes . '" style="background-color: ' . ($is_current_page ? '#475A6B' : 'transparent') . '; color:' . ($is_current_page ? '#6E9BA8' : '#6E9BA8') . '; font-size: 12px; border-radius:10px;" href="' . esc_url(get_pagenum_link($i)) . '">' . $i . '</a></li>';
                    }
                    ?>
                </div>

                <!-- next -->
                <li class="page-item">
                    <?php
                    $next_link = get_next_posts_page_link($query->max_num_pages);
                    if ($next_link) :
                    ?>
                    <a class="page-link border-0"
                        style="background-color: #475A6B; border-radius:10px; border: 1px solid rgba(255, 255, 255, 0.4);"
                        href="<?php echo esc_url($next_link); ?>" aria-label="Next">
                        <span aria-hidden="true" style="color:#6E9BA8;">&raquo;</span>
                    </a>
                    <?php endif; ?>
                </li>

            </ul>
        </nav>
    </div>
</main>

<?php get_footer(); ?>