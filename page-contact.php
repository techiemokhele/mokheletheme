<?php
/*
Template Name: Custom Contact Template
*/
?>

<?php get_header(); ?>

<main>
    <div class="container-fluid">
        <!-- image section -->
        <div class="mb-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/contact.png" class="img-fluid"
                alt="contact-hero">
        </div>

        <!-- contact section -->
        <div class="container mt-4 mb-5">
            <div class="row row-cols-1 row-col-md-2 row-cols-lg-3 g-4">
                <!-- contact 1 -->
                <div class="col">
                    <div class="card text-light text-center" style="background: #2F3B45;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/phone.png"
                            class="card-img-top mx-auto my-3" style="height: 25px; width: 25px;" alt="icon">
                        <div class="card-body">
                            <p class="card-title" style="font-size: 12px;">Phone</p>
                            <p class="card-text" style="font-size: 8px; color: rgba(255, 255, 255, 0.4);">+012 345 6789
                            </p>
                        </div>
                    </div>
                </div>

                <!-- contact 2 -->
                <div class="col">
                    <div class="card text-light text-center" style="background: #2F3B45;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/email.png"
                            class="card-img-top mx-auto my-3" style="height: 25px; width: 25px;" alt="icon">
                        <div class="card-body">
                            <p class="card-title" style="font-size: 12px;">Email</p>
                            <p class="card-text" style="font-size: 8px; color: rgba(255, 255, 255, 0.4);">
                                info@kernel.co.za</p>
                        </div>
                    </div>
                </div>

                <!-- contact 3 -->
                <div class="col">
                    <div class="card text-light text-center" style="background: #2F3B45;">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/icons/map.png"
                            class="card-img-top mx-auto my-3" style="height: 25px; width: 25px;" alt="icon">
                        <div class="card-body">
                            <p class="card-title" style="font-size: 12px;">Address</p>
                            <p class="card-text" style="font-size: 8px; color: rgba(255, 255, 255, 0.4);">la Rocca
                                Offices, South Africa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- map section -->
        <div class="container-fluid my-5"
            style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero/Map.png'); background-size: cover; background-position: center; height: 35vh; display: flex; align-items: center; justify-content: center;">
            <div class="d-flex flex-column align-items-center text-center text-light" style="margin-bottom: 20px;">
                <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/icons/point.png" class=""
                    style="height: 30px; width: 30px; object-fit: cover;" alt="icon">
            </div>
        </div>

        <!-- form section -->
        <div class="container mt-5 mb-5">
            <div class="justify-content-center text-center my-5">
                <h4 style="color: #fff; text-transform: uppercase;">Get in touch</h4>
            </div>

            <!-- form content -->
            <div class="p-3" style="background: #2F3B45; border-radius:15px">
                <form id="form-section" class="row g-3 needs-validation" novalidate>
                    <div class="col-md-6">
                        <label for="inputFullName" class="form-label text-light">Full name</label>
                        <input required type="text" class="form-control" id="inputFullName"
                            style="background: #2F3B45; border: 2px solid #475A6B; border-radius: 6px; color: white;">
                        <div class="invalid-feedback">Required with at least 2 characters.</div>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail" class="form-label text-light">Email address</label>
                        <input required type="email" class="form-control" id="inputEmail"
                            style="background: #2F3B45; border: 2px solid #475A6B; border-radius: 6px; color: white;">
                        <div class="invalid-feedback">Please enter a valid email address.</div>
                    </div>

                    <div class="col-md-6">
                        <label for="inputPhone" class="form-label text-light">Phone</label>
                        <input required type="text" class="form-control" id="inputPhone"
                            style="background: #2F3B45; border: 2px solid #475A6B; border-radius: 6px; color: white;">
                        <div class="invalid-feedback">Please enter a valid phone number.</div>
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label text-light">I am interested in</label>
                        <select required id="inputState" class="form-select"
                            style="background: #2F3B45; border: 2px solid #475A6B; border-radius: 6px; color: white;">
                            <option selected></option>
                            <option>Cloud service</option>
                            <option>Data encryption</option>
                        </select>
                        <div class="invalid-feedback">Please select one item from the dropdown</div>
                    </div>

                    <div class="col-md-12">
                        <label for="inputMessage" class="form-label text-light">Message</label>
                        <textarea required class="form-control" id="inputMessage"
                            style="background: #2F3B45; border: 2px solid #475A6B; border-radius: 6px; color: white;"></textarea>
                        <div class="invalid-feedback">Please send us a message with your details oh how we can help you
                            to.</div>
                    </div>

                    <div class="col-12">
                        <button type="button" onclick="validateAndSubmit()" class="btn btn-primary"
                            style="background: linear-gradient(180deg,#359EBD, #005A96); border-radius: 6px; color: white;">Send</button>
                    </div>
                </form>
            </div>

        </div>

        <!-- cta section -->
        <div class="container mx-auto my-5" style="background: #1D2226; border-radius: 25px;">
            <div class="row g-0">
                <!-- Column 1 (Text) -->
                <div class="col-md-7">
                    <div class="text-light d-flex flex-column h-100 justify-content-center" style="overflow: hidden;">
                        <div class="p-3">
                            <h2 class="card-text mb-3" style="color: #fff">
                                Become a Reseller
                            </h2>
                            <p class="card-text" style="font-size: 12px; color: rgba(255, 255, 255, 0.4);">
                                Join us now and become an authorised reseller
                            </p>

                            <div class="col-12">
                                <button class="btn btn-primary" onclick="scrollToFormSection()"
                                    style="background: linear-gradient(180deg, #359EBD, #005A96); border-radius: 6px; color: white;">Contact
                                    us now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column 2 (Image) -->
                <div class="col-md-5">
                    <div class="text-light text-center d-flex align-items-center"
                        style="height: 40vh; overflow: hidden; border-top-right-radius: 15px; border-bottom-right-radius: 15px;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/people.png"
                            class="img-fluid w-100 h-100" alt="icon">
                    </div>
                </div>
            </div>
        </div>

        <!-- office section -->
        <div class="container mt-4 mb-5">
            <div class="justify-content-center text-center my-5">
                <h4 style="color: #fff; text-transform: uppercase;">our offices</h4>
            </div>

            <div class="row row-cols-1 row-col-md-2 row-cols-lg-3 g-4">
                <!-- contact 1 -->
                <div class="col">
                    <div class="card text-light text-center" style="background: #2F3B45;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/pointer2.png"
                            class="card-img-top mx-auto my-3" style="height: 25px; width: 25px;" alt="icon">
                        <div class="card-body">
                            <p class="card-title" style="font-size: 12px;">South Africa</p>
                            <p class="card-text" style="font-size: 8px; color: rgba(255, 255, 255, 0.4);">Enim nec
                                rhoncus volutpat nullam eros sapien pharetra.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- contact 2 -->
                <div class="col">
                    <div class="card text-light text-center" style="background: #2F3B45;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/pointer2.png"
                            class="card-img-top mx-auto my-3" style="height: 25px; width: 25px;" alt="icon">
                        <div class="card-body">
                            <p class="card-title" style="font-size: 12px;">United Arab Emirates</p>
                            <p class="card-text" style="font-size: 8px; color: rgba(255, 255, 255, 0.4);">
                                Enim nec rhoncus volutpat nullam eros sapien pharetra.</p>
                        </div>
                    </div>
                </div>

                <!-- contact 3 -->
                <div class="col">
                    <div class="card text-light text-center" style="background: #2F3B45;">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/icons/pointer2.png"
                            class="card-img-top mx-auto my-3" style="height: 25px; width: 25px;" alt="icon">
                        <div class="card-body">
                            <p class="card-title" style="font-size: 12px;">Ukraine</p>
                            <p class="card-text" style="font-size: 8px; color: rgba(255, 255, 255, 0.4);">Enim nec
                                rhoncus volutpat nullam eros sapien pharetra.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
function validateAndSubmit() {
    var form = document.getElementById('form-section');

    if (!form.checkValidity()) {
        form.classList.add('was-validated');
        return;
    }

    form.classList.remove('was-validated');

    scrollToFormSection();
}


function scrollToFormSection() {
    document.getElementById('form-section').scrollIntoView({
        behavior: 'smooth'
    });
}
</script>


<?php get_footer(); ?>