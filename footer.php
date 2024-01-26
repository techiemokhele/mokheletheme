<footer class="navbar navbar-dark bg-dark">
    <div class="container">
        <div class="row">
            <!-- about company -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/companyLogo.svg" alt="" width="215"
                        height="48" class="d-inline-block align-text-top">
                    <p class="mb-30 footer-desc text-light mt-3">
                        As Kernel Afrika, we are experts in cyber security, and through our association with global
                        partners,
                        we offer you the newest technology in cyber security products and services.
                    </p>
                </div>
            </div>

            <!-- links -->
            <div class="col-xl-2 col-lg-2 col-md-2">
                <div class="">
                    <h6 class="text-light mb-5">About Us</h6>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" class="text-decoration-none">Our Competition</a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none">Channels</a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none">Scale</a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none">Watch the Demo</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6">
                <div>
                    <h6 class="text-light mb-5">Products</h6>
                    <ul class=" list-unstyled">
                        <li>
                            <a href="#" class="text-decoration-none">Energy Logserver</a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none">Yubico</a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none">Elcomsolt</a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none">Fudo</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6">
                <div>
                    <h6 class="text-light mb-5">Resources</h6>
                    <ul class=" list-unstyled">
                        <li>
                            <a href="#" class="text-decoration-none">Partners</a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none">Developers</a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none">Community</a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none">Security</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6">
                <div>
                    <h6 class="text-light mb-5">Address</h6>
                    <ul class=" list-unstyled">
                        <li>
                            <a href="#" class="text-decoration-none">South Africa</a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none">United Arab Emirates</a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none">Ukraine</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- developer -->
        <div class="d-flex justify-content-center text-center">
            <div class="copyright">
                <p class="text-light">
                    <a href="#" target="_blank" class="text-decoration-none">Kernel Afrika</a>
                    &copy; <span id="currentYear"></span> Copyright Reserved
                </p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
<script>
document.getElementById("currentYear").innerHTML = new Date().getFullYear();
</script>

</body>

</html>