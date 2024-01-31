<?php
/*
Template Name: Custom Home Template
*/
?>

<?php get_header(); ?>

<main>
    <!-- image section -->
    <div class="container-fluid" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/base.png'); background-size: cover; background-position: center; height: 55vh; display: flex; align-items: center; justify-content: center;">
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
                        <div class="card text-light text-center" style="background-color: #2F3B45; ">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/p1.png" class="card-img-top mx-auto my-3" style="height: 5vh" alt="Product 1">
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="col">
                        <div class="card text-light text-center" style="background-color: #2E556F; ">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/p2.png" class="card-img-top mx-auto my-3" style="height: 5vh" alt="Product 2">
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="col">
                        <div class="card text-light text-center" style="background-color: #2E556F; ">
                            <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/products/p3.png" class="card-img-top mx-auto my-3" style="height: 5vh" alt="Product 3">
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="col">
                        <div class="card text-light text-center" style="background-color: #2F3B45; ">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/p4.png" class="card-img-top mx-auto my-3" style="height: 5vh" alt="Product 4">
                        </div>
                    </div>

                    <!-- Product 5 -->
                    <div class="col">
                        <div class="card text-light text-center" style="background-color: #2F3B45; ">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/p5.png" class="card-img-top mx-auto my-3" style="height: 5vh" alt="Product 5">
                        </div>
                    </div>

                    <!-- Product 6 -->
                    <div class="col">
                        <div class="card text-light text-center" style="background-color: #2E556F; ">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/p6.png" class="card-img-top mx-auto my-3" style="height: 5vh" alt="Product 6">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- services section -->
        <div class="px-5 my-5 py-3">
            <h5 class="text-center">SERVICES</h5>

            <div class="container mt-4">
                <div class="row row-cols-1 row-col-md-2 row-cols-lg-3 g-4">
                    <!-- service 1 -->
                    <div class="col">
                        <div class="card text-light text-center" style="background: #2F3B45; transition: background 0.3s;" onmouseover="this.style.background='linear-gradient(135deg, #005A96, #359EBD)'" onmouseout="this.style.background='#2F3B45'">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/Icon.png" class="card-img-top mx-auto my-3" style="height: 20px; width: 20px;" alt="icon">
                            <div class="card-body">
                                <p class="card-title" style="font-size: 12px;">Cloud Security</p>
                                <p class="card-text" style="font-size: 8px; color: rgba(255, 255, 255, 0.4);">Enim nec
                                    rhoncus volutpat nullam eros
                                    sapien pharetra.</p>
                            </div>
                        </div>
                    </div>

                    <!-- service 2 -->
                    <div class="col">
                        <div class="card text-light text-center" style="background: #2F3B45; transition: background 0.3s;" onmouseover="this.style.background='linear-gradient(135deg, #005A96, #359EBD)'" onmouseout="this.style.background='#2F3B45'">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/Icon.png" class="card-img-top mx-auto my-3" style="height: 20px; width: 20px;" alt="icon">
                            <div class="card-body">
                                <p class="card-title" style="font-size: 12px;">Identity Management</p>
                                <p class="card-text" style="font-size: 8px; color: rgba(255, 255, 255, 0.4);">Enim nec
                                    rhoncus volutpat nullam eros
                                    sapien pharetra.</p>
                            </div>
                        </div>
                    </div>

                    <!-- service 3 -->
                    <div class="col">
                        <div class="card text-light text-center" style="background: #2F3B45; transition: background 0.3s;" onmouseover="this.style.background='linear-gradient(135deg, #005A96, #359EBD)'" onmouseout="this.style.background='#2F3B45'">
                            <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/products/Icon.png" class="card-img-top mx-auto my-3" style="height: 20px; width: 20px;" alt="icon">
                            <div class="card-body">
                                <p class="card-title" style="font-size: 12px;">Strong Authentication</p>
                                <p class="card-text" style="font-size: 8px; color: rgba(255, 255, 255, 0.4);">Enim nec
                                    rhoncus volutpat nullam eros
                                    sapien pharetra.</p>
                            </div>
                        </div>
                    </div>

                    <!-- service 4 -->
                    <div class="col">
                        <div class="card text-light text-center" style="background: #2F3B45; transition: background 0.3s;" onmouseover="this.style.background='linear-gradient(135deg, #005A96, #359EBD)'" onmouseout="this.style.background='#2F3B45'">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/Icon.png" class="card-img-top mx-auto my-3" style="height: 20px; width: 20px;" alt="icon">
                            <div class="card-body">
                                <p class="card-title" style="font-size: 12px;">Public Key Innfrastructure</p>
                                <p class="card-text" style="font-size: 8px; color: rgba(255, 255, 255, 0.4);">Enim nec
                                    rhoncus volutpat nullam eros
                                    sapien pharetra.</p>
                            </div>
                        </div>
                    </div>

                    <!-- service 5 -->
                    <div class="col">
                        <div class="card text-light text-center" style="background: #2F3B45; transition: background 0.3s;" onmouseover="this.style.background='linear-gradient(135deg, #005A96, #359EBD)'" onmouseout="this.style.background='#2F3B45'">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/Icon.png" class="card-img-top mx-auto my-3" style="height: 20px; width: 20px;" alt="icon">
                            <div class="card-body">
                                <p class="card-title" style="font-size: 12px;">Workshop and Training</p>
                                <p class="card-text" style="font-size: 8px; color: rgba(255, 255, 255, 0.4);">Enim nec
                                    rhoncus volutpat nullam eros
                                    sapien pharetra.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- offices section -->
        <div class="px-5 my-5 py-3">
            <h5 class="text-center">OUR OFFICES</h5>

            <div class="container mx-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Frame.png" class="card-img-top mx-auto my-3 img-fluid" alt="location">
            </div>
        </div>

        <!-- shop section -->
        <div class="px-5 my-5 py-3" style="background: #1A7FA8; border-radius: 25px">
            <h5 class="text-center">Shop Yubikeys</h5>

            <div class="container mt-5">
                <div class="container mt-4">
                    <div class="row row-cols-1 row-cols-md-3 g-3 mx-1">
                        <!-- Column 1 -->
                        <div class="col">
                            <div class="text-light d-flex flex-column" style="background: #1A7FA8; max-height: 40vh; overflow: hidden;">
                                <div class="align-self-start p-3">
                                    <!-- align-self-start keeps the text at the start of the div -->
                                    <p class="card-title" style="font-size: 12px;">Introduction Heading - Our USP</p>
                                    <p class="card-text" style="font-size: 8px; color: rgba(255, 255, 255, 0.4);">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto distinctio
                                        impedit
                                        dolores hic porro aperiam recusandae eius, mollitia molestiae tenetur dolorem
                                        assumenda
                                        fugit voluptates molestias blanditiis nobis, perspiciatis nemo earum. Lorem
                                        ipsum dolor
                                        sit amet consectetur adipisicing elit. Molestias reprehenderit id vel dolores,
                                        quae
                                        dolorum eveniet! A modi aut hic tenetur dolorum itaque deleniti laborum
                                        incidunt, ullam
                                        amet. Repellendus, quibusdam.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Column 2 -->
                        <div class="col">
                            <div class="text-light text-center d-flex align-items-center" style="background: #1A7FA8; height: 40vh">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/security.png" class="img-fluid" alt="icon">
                            </div>
                        </div>

                        <!-- Column 3 -->
                        <div class="col">
                            <div class="text-light d-flex flex-column" style="background: #1A7FA8; max-height: 40vh; overflow: hidden;">
                                <div class="align-self-start p-3">
                                    <!-- align-self-start keeps the text at the start of the div -->
                                    <p class="card-title" style="font-size: 12px;">Introduction Heading - Our USP</p>
                                    <p class="card-text" style="font-size: 8px; color: rgba(255, 255, 255, 0.4);">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto distinctio
                                        impedit
                                        dolores hic porro aperiam recusandae eius, mollitia molestiae tenetur dolorem
                                        assumenda
                                        fugit voluptates molestias blanditiis nobis, perspiciatis nemo earum. Lorem
                                        ipsum dolor
                                        sit amet consectetur adipisicing elit. Molestias reprehenderit id vel dolores,
                                        quae
                                        dolorum eveniet! A modi aut hic tenetur dolorum itaque deleniti laborum
                                        incidunt, ullam
                                        amet. Repellendus, quibusdam.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="justify-content-center text-center mt-2">
                    <button type="button" class="btn btn-dark">Go to Shop</button>
                </div>
            </div>
        </div>

        <!-- reseller section -->
        <div class="px-5 my-5 py-3">
            <h5 class="text-center">OUR TRUSTED RESELLERS</h5>

            <div class="container mt-4">
                <div class="row mx-5">
                    <!-- reseller 1 -->
                    <div class="col mb-3">
                        <div class="text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/p9.png" class="card-img-top mx-auto" style="height: 3vh; width: 10vh" alt="reseller 1">
                        </div>
                    </div>

                    <!-- reseller 2 -->
                    <div class="col mb-3">
                        <div class="text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/p7.png" class="card-img-top mx-auto" style="height: 3vh; width: 10vh" alt="reseller 2">
                        </div>
                    </div>

                    <!-- reseller 3 -->
                    <div class="col mb-3">
                        <div class="text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/p9.png" class="card-img-top mx-auto" style="height: 3vh; width: 10vh" alt="reseller 3">
                        </div>
                    </div>

                    <!-- reseller 4 -->
                    <div class="col mb-3">
                        <div class="text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/p8.png" class="card-img-top mx-auto" style="height: 3vh; width: 10vh" alt="reseller 4">
                        </div>
                    </div>

                    <!-- reseller 5 -->
                    <div class="col mb-3">
                        <div class="text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/p9.png" class="card-img-top mx-auto" style="height: 3vh; width: 10vh" alt="reseller 5">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5 d-flex justify-content-center align-items-center">
                <p class="m-0" style="font-size: 14px; color:#1A7FA8">Become a reseller of YubiKeys</p>
                <a href="<?php echo esc_url(get_permalink(get_page_by_title('page-contact'))); ?>">
                    <button type="button" class="btn btn-dark mx-5" style="width: 150px;">Contact us now</button>
                </a>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>