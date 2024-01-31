<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kernel Afrika</title>
    <?php wp_head(); ?>
</head>

<body class="bg-dark" <?php body_class(); ?>>

    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo esc_url(get_permalink(get_page_by_title('page-home'))); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/companyLogo.svg" alt="" width="215" height="50" class="d-inline-block align-text-top">
            </a>

            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="color: #fff; width: 60px; display: flex; align-items: center; text-align: center; border: 1px solid #fff;">
                <span class="navbar-toggler-icon mt-2" style="font-size: 14px;">Menu</span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: #fff" href="<?php echo esc_url(get_permalink(get_page_by_title('page-services'))); ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo esc_url(get_permalink(get_page_by_title('page-services'))); ?>">Services</a>
                            </li>
                            <li><a class="dropdown-item" href="<?php echo esc_url(get_permalink(get_page_by_title('page-cloud-service'))); ?>">Cloud
                                    Service</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: #fff" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Energy Logserver</a></li>
                            <li><a class="dropdown-item" href="#">Yubico</a></li>
                            <li><a class="dropdown-item" href="#">ELcomsolt</a></li>
                            <li><a class="dropdown-item" href="#">Fudo</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: #fff" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About us
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Our Competition</a></li>
                            <li><a class="dropdown-item" href="#">Channels</a></li>
                            <li><a class="dropdown-item" href="#">Scale</a></li>
                            <li><a class="dropdown-item" href="#">Watch the Demo</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: #fff" href="<?php echo esc_url(get_permalink(get_page_by_title('page-news'))); ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            News and Insights
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo esc_url(get_permalink(get_page_by_title('page-news'))); ?>">News</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" style="color: #fff" aria-current="page" href="<?php echo esc_url(get_permalink(get_page_by_title('page-contact'))); ?>">Contact</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: #fff" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Resources
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Partners</a></li>
                            <li><a class="dropdown-item" href="#">Developers</a></li>
                            <li><a class="dropdown-item" href="#">Community</a></li>
                            <li><a class="dropdown-item" href="#">Security</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" style="color: #fff" aria-current="page" href="#">Shop</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>