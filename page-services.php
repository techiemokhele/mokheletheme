<?php
/*
Template Name: Custom Services Template
*/
?>

<?php get_header(); ?>

<main>
    <div class="container-fluid">
        <!-- image section -->
        <div class="mb-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/services.png" class="img-fluid"
                alt="service-hero">
        </div>

        <!-- intro section -->
        <div class="d-flex flex-column align-items-center text-center text-light"
            style="margin-bottom: 20px; max-width: 800px; margin-left: auto; margin-right: auto;">
            <h2 class="my-4" style="color: #fff; text-transform: uppercase;">Introduction to Service Section</h2>
            <p class="px-3 px-md-5" style="color: rgba(255, 255, 255, 0.4);">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Nunc lobortis mattis aliquam faucibus purus in massa tempor. Tristique senectus et
                netus et malesuada fames ac turpis. Sed vulputate mi sit amet mauris commodo quis. Neque viverra justo
                nec ultrices dui sapien eget. Dui ut ornare lectus sit amet est placerat. A diam sollicitudin tempor id
                eu nisl nunc mi. Magna fermentum iaculis eu non diam phasellus vestibulum lorem.
            </p>
        </div>

        <!-- service section -->
        <div class="container mt-4 mb-5">
            <div class="row row-cols-1 row-col-md-2 row-cols-lg-3 g-4">
                <!-- service 1 -->
                <div class="col">
                    <div class="card text-light text-center" style="background: #2F3B45; transition: background 0.3s;"
                        onmouseover="this.style.background='linear-gradient(135deg, #005A96, #359EBD)'"
                        onmouseout="this.style.background='#2F3B45'">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/Icon.png"
                            class="card-img-top mx-auto my-3" style="height: 20px; width: 20px;" alt="icon">
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
                    <div class="card text-light text-center" style="background: #2F3B45; transition: background 0.3s;"
                        onmouseover="this.style.background='linear-gradient(135deg, #005A96, #359EBD)'"
                        onmouseout="this.style.background='#2F3B45'">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/Icon.png"
                            class="card-img-top mx-auto my-3" style="height: 20px; width: 20px;" alt="icon">
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
                    <div class="card text-light text-center" style="background: #2F3B45; transition: background 0.3s;"
                        onmouseover="this.style.background='linear-gradient(135deg, #005A96, #359EBD)'"
                        onmouseout="this.style.background='#2F3B45'">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/products/Icon.png"
                            class="card-img-top mx-auto my-3" style="height: 20px; width: 20px;" alt="icon">
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
                    <div class="card text-light text-center" style="background: #2F3B45; transition: background 0.3s;"
                        onmouseover="this.style.background='linear-gradient(135deg, #005A96, #359EBD)'"
                        onmouseout="this.style.background='#2F3B45'">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/Icon.png"
                            class="card-img-top mx-auto my-3" style="height: 20px; width: 20px;" alt="icon">
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
                    <div class="card text-light text-center" style="background: #2F3B45; transition: background 0.3s;"
                        onmouseover="this.style.background='linear-gradient(135deg, #005A96, #359EBD)'"
                        onmouseout="this.style.background='#2F3B45'">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/Icon.png"
                            class="card-img-top mx-auto my-3" style="height: 20px; width: 20px;" alt="icon">
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

        <!-- approach section -->
        <div class="container-fluid"
            style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero/hero2.jpg'); background-size: cover; background-position: center; height: 55vh; display: flex; align-items: center; justify-content: center;">
            <div class="d-flex flex-column align-items-center text-center text-light" style="margin-bottom: 20px;">
                <h2 class="my-4" style="color: #fff;">OUR APPROACH</h2>
                <p class="px-5 mb-3" style="color: rgba(255, 255, 255, 0.4);">
                    At Kernel Afrika, we are experts in cyber security, and through our association with global
                    partners, we
                    offer you the newest technology in cyber security products and services. We are committed to
                    delivering
                    work
                    of the highest standard and work hard to ensure that our team keeps up with industry standards and
                    best
                    practices.
                </p>
                <p class="px-5" style="color: rgba(255, 255, 255, 0.4);">
                    At Kernel Afrika, we are experts in cyber security, and through our association with global
                    partners, we
                    offer you the newest technology in cyber security products and services. We are committed to
                    delivering
                    work
                    of the highest standard and work hard to ensure that our team keeps up with industry standards and
                    best
                    practices.
                </p>
            </div>
        </div>

        <!-- steps section -->
        <div class="container mt-5 mb-5">
            <div class="justify-content-center text-center my-5">
                <h4 style="color: #fff; text-transform: uppercase;">Steps to providing Our Services</h4>
            </div>

            <div class="row row-cols-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-5 g-3 justify-content-between">
                <!-- service 1 -->
                <div class="col">
                    <div class="card text-light text-center"
                        style="width: 14rem; background: #2F3B45; transition: background 0.3s;"
                        onmouseover="this.style.background='linear-gradient(135deg, #005A96, #359EBD)'"
                        onmouseout="this.style.background='#2F3B45'">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/Icon.png"
                            class="card-img-top mx-auto my-3" style="height: 20px; width: 20px;" alt="icon">
                        <div class="card-body">
                            <p class="card-title" style="font-size: 12px;">Assessmenty</p>
                            <p class="card-text" style="font-size: 8px; color: rgba(255, 255, 255, 0.4);">Enim nec
                                rhoncus volutpat nullam eros
                                sapien pharetra.</p>
                        </div>
                    </div>
                </div>

                <!-- service 2 -->
                <div class="col">
                    <div class="card text-light text-center"
                        style="width: 14rem; background: #2F3B45; transition: background 0.3s;"
                        onmouseover="this.style.background='linear-gradient(135deg, #005A96, #359EBD)'"
                        onmouseout="this.style.background='#2F3B45'">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/Icon.png"
                            class="card-img-top mx-auto my-3" style="height: 20px; width: 20px;" alt="icon">
                        <div class="card-body">
                            <p class="card-title" style="font-size: 12px;">Design</p>
                            <p class="card-text" style="font-size: 8px; color: rgba(255, 255, 255, 0.4);">Enim nec
                                rhoncus volutpat nullam eros
                                sapien pharetra.</p>
                        </div>
                    </div>
                </div>

                <!-- service 3 -->
                <div class="col">
                    <div class="card text-light text-center"
                        style="width: 14rem; background: #2F3B45; transition: background 0.3s;"
                        onmouseover="this.style.background='linear-gradient(135deg, #005A96, #359EBD)'"
                        onmouseout="this.style.background='#2F3B45'">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/products/Icon.png"
                            class="card-img-top mx-auto my-3" style="height: 20px; width: 20px;" alt="icon">
                        <div class="card-body">
                            <p class="card-title" style="font-size: 12px;">Deployment</p>
                            <p class="card-text" style="font-size: 8px; color: rgba(255, 255, 255, 0.4);">Enim nec
                                rhoncus volutpat nullam eros
                                sapien pharetra.</p>
                        </div>
                    </div>
                </div>

                <!-- service 4 -->
                <div class="col">
                    <div class="card text-light text-center"
                        style="width: 14rem; background: #2F3B45; transition: background 0.3s;"
                        onmouseover="this.style.background='linear-gradient(135deg, #005A96, #359EBD)'"
                        onmouseout="this.style.background='#2F3B45'">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/Icon.png"
                            class="card-img-top mx-auto my-3" style="height: 20px; width: 20px;" alt="icon">
                        <div class="card-body">
                            <p class="card-title" style="font-size: 12px;">Transition</p>
                            <p class="card-text" style="font-size: 8px; color: rgba(255, 255, 255, 0.4);">Enim nec
                                rhoncus volutpat nullam eros
                                sapien pharetra.</p>
                        </div>
                    </div>
                </div>

                <!-- service 5 -->
                <div class="col">
                    <div class="card text-light text-center" style="width: 14rem; background: #2F3B45; transition:
                        background 0.3s;"
                        onmouseover="this.style.background='linear-gradient(135deg, #005A96, #359EBD)'"
                        onmouseout="this.style.background='#2F3B45'">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/Icon.png"
                            class="card-img-top mx-auto my-3" style="height: 20px; width: 20px;" alt="icon">
                        <div class="card-body">
                            <p class="card-title" style="font-size: 12px;">Support</p>
                            <p class="card-text" style="font-size: 8px; color: rgba(255, 255, 255, 0.4);">Enim nec
                                rhoncus volutpat nullam eros
                                sapien pharetra.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- contact section -->
        <div class="container my-5 d-flex justify-content-center align-items-center">
            <p class="m-0" style="font-size: 18px; color:#1A7FA8">Get in touch for more info about our products</p>
            <a href="<?php echo esc_url(get_permalink(get_page_by_title('page-contact'))); ?>">
                <button type="button" class="btn btn-dark mx-5"
                    style="background: linear-gradient(180deg,#359EBD, #005A96); border-radius: 6px; color: white;">Contact
                    us now</button>
            </a>
        </div>
    </div>
</main>

<?php get_footer(); ?>