<?php get_header(); ?>

<main>
    <!-- image section -->
    <div class="container-fluid"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/base.png'); background-size: cover; background-position: center; height: 55vh; display: flex; align-items: center; justify-content: center;">
        <div class="d-flex flex-column align-items-center text-center text-light" style="margin-bottom: 20px;">
            <h5>Welcome to</h5>
            <h1 class="my-4" style="color: #007bff;">Our Security is our Priority</h1>
            <p class="px-5" style="color: rgba(255, 255, 255, 0.4);">
                At Kernel Afrika, we are experts in cyber security, and through our association with global partners, we
                offer you the newest technology in cyber security products and services. We are committed to delivering
                work
                of the highest standard and work hard to ensure that our team keeps up with industry standards and best
                practices.
            </p>
        </div>
    </div>

    <!-- intro section -->
    <div class="bg-dark text-light m-5">
        <!-- usp section -->
        <div class="px-5 my-5 py-3">
            <h5>INTRODUCTION HEADING - OUR USP</h5>
            <p style="color: rgba(255, 255, 255, 0.4);">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt perspiciatis placeat corrupti non
                architecto dolore et iste rem distinctio, facere dolorem earum. Esse repellat qui repellendus excepturi
                a consectetur laborum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime in voluptates
                quasi modi, laboriosam deserunt? Mollitia cumque excepturi commodi, perspiciatis laudantium autem
                voluptatem at? Deleniti dolores animi ducimus alias inventore. Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Quis fugiat quos perferendis, illum eius dolore nihil ullam quo minus nam neque
                incidunt odio voluptates, animi, necessitatibus cupiditate quia eaque veniam.</p>
        </div>

        <!-- products section -->
        <div class="px-5 my-5 py-3">
            <h5 class="text-center">PRODUCTS PARTNERS</h5>

            <div class="container mt-4">
                <div class="row row-cols-1 row-cols-md-3 g-4 mx-5">
                    <!-- Product 1 -->
                    <div class="col">
                        <div class="card bg-dark text-light text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/p1.png"
                                class="card-img-top mx-auto my-3" style="height: 5vh" alt="Product 1">
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="col">
                        <div class="card bg-dark text-light text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/p2.png"
                                class="card-img-top mx-auto my-3" style="height: 5vh" alt="Product 2">
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="col">
                        <div class="card bg-dark text-light text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/p3.png"
                                class="card-img-top mx-auto my-3" style="height: 5vh" alt="Product 3">
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="col">
                        <div class="card bg-dark text-light text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/p4.png"
                                class="card-img-top mx-auto my-3" style="height: 5vh" alt="Product 4">
                        </div>
                    </div>

                    <!-- Product 5 -->
                    <div class="col">
                        <div class="card bg-dark text-light text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/p5.png"
                                class="card-img-top mx-auto my-3" style="height: 5vh" alt="Product 5">
                        </div>
                    </div>

                    <!-- Product 6 -->
                    <div class="col">
                        <div class="card bg-dark text-light text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/p6.png"
                                class="card-img-top mx-auto my-3" style="height: 5vh" alt="Product 6">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- services section -->

        <!-- offices section -->

        <!-- shop section -->

        <!-- reseller section -->
    </div>
</main>

<?php get_footer(); ?>