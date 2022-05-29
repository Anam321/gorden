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


<div class="container-fluid bg-secondary py-5">
    <div class="container py-5">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Gallery</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="d-inline-flex align-items-center">
                    <a class="btn btn-outline-primary" href="<?= base_url('') ?>">Home</a>
                    <i class="fas fa-angle-double-right text-primary mx-2"></i>
                    <a class="btn btn-outline-primary disabled" href="">Gallery</a>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="container py-5">
    <div class="row pt-5">
        <div class="col-lg-8">

            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
                <h6 class="text-primary">Our Gallery</h6>
                <h1 class="mb-4">
                    Gallery
                </h1>
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

            <!-- <div class="mb-5 mx-n3 mt-5">
                <h3 class="mb-4 ml-3 section-title">Related Produk</h3>
                <div class="owl-carousel service-carousel position-relative">

                    <?php foreach ($B_produk as $prod) : ?>
                        <?php $text = $prod->deskripsi;
                        $limitext = word_limiter($text, 30);
                        ?>
                        <?php $id = $prod->produk_id;
                        $visitproduk = $this->db->query("SELECT * FROM section_visit WHERE produk_id='" . $id . "'")->num_rows(); ?>
                        <div class="card border-0 mx-3">
                            <img class="card-img-top" src="<?= base_url() ?>assets/upload/gallery/<?= $prod->foto ?>" alt="">
                            <div class="card-body bg-light p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <a class="btn btn-primary" href="<?= base_url() ?>katalog/detailproduk/<?= $prod->slug ?>/<?= $prod->produk_id ?>"><i class="fa fa-link"></i></a>
                                    <a href="<?= base_url() ?>katalog/detailproduk/<?= $prod->slug ?>/<?= $prod->produk_id ?>">
                                        <h5 class="m-0 ml-3 text-truncate"><?= $prod->nama_produk ?></h5>
                                    </a>
                                </div>
                                <p><?= $limitext ?></p>
                                <div class="d-flex">
                                    <small class="mr-3"><i class="fa fa-eye text-primary"></i><?= $visitproduk ?></small>
                                    <small class="mr-3"><i class="fa fa-folder text-primary"></i> <?= $prod->kategori ?></small>
                                    <small class="mr-3"><i class="fa fa-clock text-primary"></i> <?= waktu_lalu($prod->date_post) ?></small>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>

                </div>
            </div> -->
        </div>

        <?php $this->load->view('pages/right_v') ?>
    </div>
</div>