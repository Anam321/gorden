 <div class="container-fluid bg-dark p-0">
     <div class="navsos sticky-top">
         <div class="row gx-0 d-none d-lg-flex">
             <div class="col-lg-7 px-5 text-start">
                 <div class="h-100 d-inline-flex align-items-center me-4">
                     <small class="fa fa-map-marker-alt text-primary me-2"></small>
                     <small><?= $alamat ?></small>
                 </div>
                 <div class="h-100 d-inline-flex align-items-center">
                     <small class="fa fa-envelope text-primary me-2"></small>
                     <small><?= $email ?></small>
                 </div>
             </div>
             <div class="col-lg-5 px-5 text-end">
                 <div class="h-100 d-inline-flex align-items-center me-4">
                     <small class="fa fa-phone-alt text-primary me-2"></small>
                     <small><?= $whatsap ?></small>
                 </div>
                 <div class="h-100 d-inline-flex align-items-center mx-n2">
                     <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="<?= $facebook ?>"><i class="fab fa-facebook-f"></i></a>
                     <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="<?= $instagram ?>"><i class="fab fa-instagram"></i></a>
                     <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="<?= $whatsap ?>"><i class="fab fa-whatsapp"></i></a>

                 </div>
             </div>
         </div>
     </div>

 </div>

 <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
     <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
         <img src="<?= base_url() ?>assets/upload/logo/<?= $logo ?>" alt="" height="50">
     </a>
     <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
         <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarCollapse">
         <div class="navbar-nav ms-auto p-4 p-lg-0">
             <a href="<?= base_url() ?>" class="nav-item nav-link ">Home</a>
             <a href="<?= base_url('about') ?>" class="nav-item nav-link">About</a>
             <a href="<?= base_url('katalog') ?>" class="nav-item nav-link">Katalog</a>
             <a href="<?= base_url('gallery') ?>" class="nav-item nav-link">Gallery</a>
             <a href="<?= base_url('artikel') ?>" class="nav-item nav-link">Artikel</a>


             <a href="<?= base_url('contact') ?>" class="nav-item nav-link">Contact</a>
         </div>
         <a href="<?= base_url('login') ?>" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a>
     </div>
 </nav>