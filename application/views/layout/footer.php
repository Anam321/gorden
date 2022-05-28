<div class="container-fluid  text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s" style="background-color:#1a2a36 ;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Address</h5>
                <p class="mb-2">
                    <i class="fa fa-map-marker-alt me-3"></i><?= $alamat ?>
                </p>
                <p class="mb-2">
                    <i class="fa fa-phone-alt me-3"></i><?= $telpon ?>
                </p>
                <p class="mb-2">
                    <i class="fa fa-envelope me-3"></i><?= $email ?>
                </p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light btn-social" href="<?= $instagram ?>"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href="<?= $facebook ?>"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href="<?= $whatsap ?>"><i class="fab fa-whatsapp"></i></a>

                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Quick Links</h5>

            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Project Gallery</h5>
                <div class="row g-2">

                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#"><?= $perusahaan ?></a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="https://www.anamsaepul.site">AnbomekerDev</a>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/lib/wow/wow.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/lib/easing/easing.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/lib/waypoints/waypoints.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/lib/counterup/counterup.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/lib/isotope/isotope.pkgd.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="<?= base_url() ?>assets/frontend/js/main.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="<?= base_url() ?>assets/backend/js/pages/demo.toastr.js"></script>
</body>

</html>