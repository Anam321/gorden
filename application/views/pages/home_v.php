<?php
function waktu_lalu($timestamp)
{
    $selisih = time() - strtotime($timestamp);
    $detik = $selisih;
    $menit = round($selisih / 60);
    $jam = round($selisih / 3600);
    $hari = round($selisih / 86400);
    $minggu = round($selisih / 604800);
    $bulan = round($selisih / 2419200);
    $tahun = round($selisih / 29030400);
    if ($detik <= 60) {
        $waktu = $detik . ' detik yang lalu';
    } else if ($menit <= 60) {
        $waktu = $menit . ' menit yang lalu';
    } else if ($jam <= 24) {
        $waktu = $jam . ' jam yang lalu';
    } else if ($hari <= 7) {
        $waktu = $hari . ' hari yang lalu';
    } else if ($minggu <= 4) {
        $waktu = $minggu . ' minggu yang lalu';
    } else if ($bulan <= 12) {
        $waktu = $bulan . ' bulan yang lalu';
    } else {
        $waktu = $tahun . ' tahun yang lalu';
    }
    return $waktu;
}
?>
<!-- Carousel Start -->
<style>
    @media screen and (max-width: 500px) {
        /* .col-sm-4 {
            width: 50%;
            padding: 6px;
            margin: auto;
        } */

        .col-lg-3 {
            width: 50%;
            padding: 6px;
            margin: auto;
        }

        .col-lg-4 {
            width: 50%;
            padding: 6px;
            margin: auto;
        }

        /* .col-md-6 {
            width: 50%;
            padding: 6px;
            margin: auto;
        } */

        .col-md-4 {
            width: 50%;
            padding: 6px;
            margin: auto;
        }


    }
</style>

<div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="owl-carousel header-carousel position-relative">

        <?php foreach ($slide as $hero) : ?>
            <div class="owl-carousel-item position-relative" data-dot="<img src='<?= base_url() ?>assets/upload/gallery/<?= $hero->foto ?>'>">
                <img class="img-fluid" src="<?= base_url() ?>assets/upload/gallery/<?= $hero->foto ?>" alt="" />
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">
                                    <?= $hero->judul ?>
                                </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">
                                    <?= $hero->paragraf ?>
                                </p>
                                <a href="<?= $hero->judul ?>" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>


<!-- Feature Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="fa fa-users text-white"></i>
                    </div>
                    <!-- <h1 class="mb-0" data-toggle="counter-up">3453</h1> -->
                </div>
                <h5 class="mb-3">Happy Customers</h5>

            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="fa fa-check text-white"></i>
                    </div>
                    <!-- <h1 class="mb-0" data-toggle="counter-up">4234</h1> -->
                </div>
                <h5 class="mb-3">Project Done</h5>

            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="fa fa-award text-white"></i>
                    </div>
                    <!-- <h1 class="mb-0" data-toggle="counter-up">3123</h1> -->
                </div>
                <h5 class="mb-3">Awards Win</h5>

            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="fa fa-users-cog text-white"></i>
                    </div>
                    <!-- <h1 class="mb-0" data-toggle="counter-up">1831</h1> -->
                </div>
                <h5 class="mb-3">Expert Workers</h5>

            </div>
        </div>
    </div>
</div>
<!-- Feature Start -->

<!-- About Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="<?= base_url() ?>assets/upload/poto/<?= $foto ?>" style="object-fit: cover" alt="" />
                </div>
            </div>
            <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <h6 class="text-primary">About Us</h6>
                    <h1 class="mb-4">
                        25+ Menawarkan Beberapa Pilihan Model Gorden Untuk Anda
                    </h1>
                    <p>
                        <?= $deskripsi ?>
                    </p>

                    <a href="" class="btn btn-primary rounded-pill py-3 px-5 mt-3">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
            <h6 class="text-primary">Our Best Produk</h6>
            <h1 class="mb-4">Click Here</h1>
        </div>
        <div class="row g-4">

            <?php foreach ($bsproduk as $bs) : ?>
                <?php $text = $bs->deskripsi;
                $limitext = word_limiter($text, 25);
                ?>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="<?= base_url() ?>assets/upload/gallery/<?= $bs->foto ?>" alt="" />
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-tag fa-3x"></i>
                            </div>
                            <h4 class="mb-3"><?= $bs->nama_produk ?></h4>
                            <p>
                                <?= $limitext ?>
                            </p>
                            <a class="small fw-medium" href="<?= base_url() ?>katalog/detailproduk/<?= $bs->slug ?>/<?= $bs->produk_id ?>">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

            <?php endforeach ?>
        </div>
    </div>
</div>
<!-- Service End -->







<!-- Features Katalog -->
<div class="container-fluid bg-light pt-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col text-center mb-4">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Katalog</h6>
                <h1 class="mb-4">Pilih Design Yang Anda Sukai yang Pas Untuk Rumah Anda</h1>
            </div>
        </div>


        <div class="row pb-3">
            <?php foreach ($dataKatalog as $katalog) : ?>
                <?php $id = $katalog->produk_id;
                $visitorprod = $this->db->query("SELECT * FROM section_visit WHERE produk_id='" . $id . "'")->num_rows(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="<?= base_url() ?>assets/upload/gallery/<?= $katalog->foto ?>" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <!-- <a class="btn btn-primary" href="<?= base_url() ?>katalog/detailproduk/<?= $katalog->slug ?>/<?= $katalog->produk_id ?>"><i class="fa fa-link"></i></a> -->

                                <a href="<?= base_url() ?>katalog/detailproduk/<?= $katalog->slug ?>/<?= $katalog->produk_id ?>">
                                    <h5 class="m-0 ml-3 text-truncate"><?= $katalog->nama_produk ?></h5>
                                </a>
                            </div>
                            <div class="d-flex">
                                <small class="mr-5"><i class="fa fa-eye text-primary"></i> <?= $visitorprod ?></small>
                                <small class="mr-5"><i class="fa fa-folder text-primary"></i> <?= $katalog->kategori ?></small>
                                <small class="mr-5"><i class="fa fa-clock text-primary"></i> <?= waktu_lalu($katalog->date_post) ?></small>
                            </div>
                        </div>
                    </div>

                </div>
            <?php endforeach ?>
        </div>

        <div class="row pb-3">

            <div class="col-md-4 mb-4">

                <div class="d-flex align-items-center mb-3">
                    <a class="btn btn-primary" href="<?= base_url() ?>katalog">
                        <h5 class=" m-0 ml-3 text-truncate">Lihat Lainya </h5> <i class="fa fa-arrow-right "></i>
                    </a>

                </div>


            </div>

        </div>

    </div>

</div>
</div>
<!-- Features End -->

<!-- Feature Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="p-lg-5 ps-lg-0">
                    <h6 class="text-primary">Why Choose Us!</h6>
                    <h1 class="mb-4">
                        Nikmati Beberapa Kemudahan Di Sini
                    </h1>
                    <p class="mb-4 pb-2">
                        Anda bisa mendapatkan pelayan anda free kami siap melayani anda kapan pun anda mau.
                    </p>
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="btn-lg-square bg-primary rounded-circle">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-0">Quality</p>
                                    <h5 class="mb-0">Services</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="btn-lg-square bg-primary rounded-circle">
                                    <i class="fa fa-user-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-0">Expert</p>
                                    <h5 class="mb-0">Workers</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="btn-lg-square bg-primary rounded-circle">
                                    <i class="fa fa-drafting-compass text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-0">Free</p>
                                    <h5 class="mb-0">Consultation</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="btn-lg-square bg-primary rounded-circle">
                                    <i class="fa fa-headphones text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-0">Customer</p>
                                    <h5 class="mb-0">Support</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="<?= base_url() ?>assets/upload/poto/<?= $foto ?>" style="object-fit: cover" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->




<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
            <h6 class="text-primary">Our Gallery</h6>
            <h1 class="mb-4">
                Gallery
            </h1>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <!-- <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">All</li>
                    <li class="mx-2" data-filter=".first">Solar Panels</li>
                    <li class="mx-2" data-filter=".second">Wind Turbines</li>
                    <li class="mx-2" data-filter=".third">Hydropower Plants</li>
                </ul>
            </div> -->
        </div>
        <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
            <?php foreach ($gallery as $row) : ?>
                <div class="col-lg-4 col-md-6 portfolio-item <?= $row->nama_foto ?>">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="<?= base_url() ?>assets/upload/gallery/<?= $row->foto ?>" alt="" />
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="<?= base_url() ?>assets/upload/gallery/<?= $row->foto ?>" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="javascript:void(0);"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0"><?= $row->nama_foto ?></p>
                        <hr class="text-primary w-25 my-2" />
                        <!-- <h5 class="lh-base">
                            We Are pioneers of solar & renewable energy industry
                        </h5> -->
                    </div>
                </div>
            <?php endforeach ?>
        </div>


        <div class="row pb-3 mt-5">
            <div class="col-md-4 mb-4">
                <div class="d-flex align-items-center mb-3">
                    <a class="btn btn-primary" href="<?= base_url() ?>gallery">
                        <h5 class=" m-0 ml-3 text-truncate">Lihat Lainya </h5> <i class="fa fa-arrow-right "></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Projects End -->



<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
            <button onclick="addtesti()" class="btn btn-sm btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Masukan Testimoni</button>
            <h6 class="text-primary">Testimonial</h6>

            <h1 class="mb-4">Apa yang dikatan Client Kami</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <?php foreach ($testimoni as $testi) : ?>

                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="<?= base_url() ?>assets/upload/poto/<?= $foto ?>" />
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>
                            <?= $testi->testi ?>
                        </p>
                        <h5 class="mb-1"><?= $testi->nama ?></h5>
                        <span class="fst-italic"><?= $testi->email ?></span>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<!-- Testimonial End -->







<div class="modal fade" id="modaltesti" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form" action="">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="validationServer01" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" required>

                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationServer01" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>

                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationServer01" class="form-label">Foto</label>
                            <input type="file" class="form-control" name="foto" required>

                        </div>
                        <div class="mb-3">
                            <label for="validationTextarea" class="form-label">Textarea</label>
                            <textarea class="form-control" name="testi" placeholder="Required example textarea" required></textarea>

                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="btnSave" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Blog Start -->
<div class="container-fluid bg-light pt-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col text-center mb-4">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Blog</h6>
                <h1 class="mb-4">Artikel Terbaru</h1>
            </div>
        </div>
        <div class="row pb-3">

            <?php foreach ($artikel as $blog) : ?>
                <?php $text = $blog->konten;
                $limitext = word_limiter($text, 30);
                ?>
                <?php $id = $blog->artikel_id;
                $visitartik = $this->db->query("SELECT * FROM section_visit WHERE artikel_id='" . $id . "'")->num_rows(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="<?= base_url() ?>assets/upload/artikel/<?= $blog->foto ?>" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href="<?= base_url() ?>artikel/single/<?= $blog->slug ?>/<?= $blog->artikel_id ?>"><i class="fa fa-link"></i></a>
                                <a href="<?= base_url() ?>artikel/single/<?= $blog->slug ?>/<?= $blog->artikel_id ?>">
                                    <h5 class="m-0 ml-3 "><?= $blog->judul_artikel ?></h5>
                                </a>
                            </div>
                            <p><?= $limitext ?></p>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> <?= $blog->penerbit ?></small>
                                <small class="mr-3"><i class="fa fa-eye text-primary"></i> <?= $visitartik ?></small>
                                <small class="mr-3"><i class="fa fa-clock text-primary"></i> <?= waktu_lalu($blog->date_post) ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>



<script>
    function showAlert(type, msg) {

        toastr.options.closeButton = true;
        toastr.options.progressBar = true;
        toastr.options.extendedTimeOut = 1000; //1000

        toastr.options.timeOut = 3000;
        toastr.options.fadeOut = 250;
        toastr.options.fadeIn = 250;

        toastr.options.positionClass = 'toast-top-center';
        toastr[type](msg);
    }

    function fileValidation() {
        var fileInput = document.getElementById('file');
        var filePath = fileInput.value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
        if (!allowedExtensions.exec(filePath)) {
            alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
            fileInput.value = '';
            return false;
        } else {
            //Image preview
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imagePreview').innerHTML = '<img style="max-width:350px;" src="' + e.target
                        .result + '"/>';
                };
                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    }

    function addtesti() {

        $('#form')[0].reset();
        // $('#imagePreview').html('');

        $('#modaltesti').modal('show');
        $('.modal-title').text('Tambah Testimoni Anda');
    }


    $('#form').submit(function(e) {
        e.preventDefault();
        var form = $('#form')[0];
        var data = new FormData(form);

        if ($('[name="foto"]').val() == '') {
            alert('Pilih Foto Produk Yang Akan di Upload !');
            return false;
        }

        $('#btnSave').text('Sedang Proses, Mohon tunggu...'); //change button text
        $('#btnSave').attr('disabled', true); //set button disable
        $.ajax({
            url: "<?php echo site_url('home/inputtesti/') ?>",
            type: "POST",
            //contentType: 'multipart/form-data',
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            data: data,
            dataType: "JSON",

            success: function(data) {
                if (data.status == '00') {
                    showAlert(data.type, data.mess);
                    $('#modaltesti').modal('hide');
                    $('#form')[0].reset();
                } else {
                    showAlert(data.type, data.mess);
                }
                $('#btnSave').text('Simpan'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable
            },
            error: function(jqXHR, textStatus, errorThrown) {
                type = 'error';
                msg = 'Error adding / update data';
                showAlert(type, msg); //utk show alert
                $('#btnSave').text('Simpan'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable
            }
        });

    });
</script>