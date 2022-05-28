 </div> <!-- content -->

 <!-- Footer Start -->
 <footer class="footer">
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-6">
                 <script>
                     document.write(new Date().getFullYear())
                 </script> © anbomekerDev - <?= $perusahaan ?>
             </div>
             <div class="col-md-6">
                 <div class="text-md-end footer-links d-none d-md-block">
                     <a href="javascript: void(0);">About</a>
                     <a href="javascript: void(0);">Support</a>
                     <a href="javascript: void(0);">Contact Us</a>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- end Footer -->

 </div>

 <!-- ============================================================== -->
 <!-- End Page content -->
 <!-- ============================================================== -->


 </div>
 <!-- END wrapper -->


 <!-- Right Sidebar -->
 <div class="end-bar">

     <div class="rightbar-title">
         <a href="javascript:void(0);" class="end-bar-toggle float-end">
             <i class="dripicons-cross noti-icon"></i>
         </a>
         <h5 class="m-0">Settings</h5>
     </div>

     <div class="rightbar-content h-100" data-simplebar="">

         <div class="p-3">
             <div class="alert alert-warning" role="alert">
                 <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
             </div>

             <!-- Settings -->
             <h5 class="mt-3">Color Scheme</h5>
             <hr class="mt-1">

             <div class="form-check form-switch mb-1">
                 <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check" checked="">
                 <label class="form-check-label" for="light-mode-check">Light Mode</label>
             </div>

             <div class="form-check form-switch mb-1">
                 <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
                 <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
             </div>


             <!-- Width -->
             <h5 class="mt-4">Width</h5>
             <hr class="mt-1">
             <div class="form-check form-switch mb-1">
                 <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked="">
                 <label class="form-check-label" for="fluid-check">Fluid</label>
             </div>

             <div class="form-check form-switch mb-1">
                 <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                 <label class="form-check-label" for="boxed-check">Boxed</label>
             </div>


             <!-- Left Sidebar-->
             <h5 class="mt-4">Left Sidebar</h5>
             <hr class="mt-1">
             <div class="form-check form-switch mb-1">
                 <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                 <label class="form-check-label" for="default-check">Default</label>
             </div>

             <div class="form-check form-switch mb-1">
                 <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check" checked="">
                 <label class="form-check-label" for="light-check">Light</label>
             </div>

             <div class="form-check form-switch mb-3">
                 <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                 <label class="form-check-label" for="dark-check">Dark</label>
             </div>

             <div class="form-check form-switch mb-1">
                 <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check" checked="">
                 <label class="form-check-label" for="fixed-check">Fixed</label>
             </div>

             <div class="form-check form-switch mb-1">
                 <input class="form-check-input" type="checkbox" name="compact" value="condensed" id="condensed-check">
                 <label class="form-check-label" for="condensed-check">Condensed</label>
             </div>

             <div class="form-check form-switch mb-1">
                 <input class="form-check-input" type="checkbox" name="compact" value="scrollable" id="scrollable-check">
                 <label class="form-check-label" for="scrollable-check">Scrollable</label>
             </div>

             <div class="d-grid mt-4">
                 <button class="btn btn-primary" id="resetBtn">Reset to Default</button>

                 <a href="../../product/hyper-responsive-admin-dashboard-template/index.htm" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase
                     Now</a>
             </div>
         </div> <!-- end padding-->

     </div>
 </div>

 <div class="rightbar-overlay"></div>
 <!-- /End-bar -->


 <!-- bundle -->
 <script src="<?= base_url() ?>assets/backend/js/vendor.min.js"></script>
 <script src="<?= base_url() ?>assets/backend/js/app.min.js"></script>


 <script src="<?= base_url() ?>assets/backend/js/ui/component.todo.js"></script>

 <script src="<?= base_url() ?>assets/backend/js/pages/demo.toastr.js"></script>


 <!-- third party js -->
 <script src="<?= base_url() ?>assets/backend/js/vendor/jquery.dataTables.min.js"></script>
 <script src="<?= base_url() ?>assets/backend/js/vendor/dataTables.bootstrap5.js"></script>
 <script src="<?= base_url() ?>assets/backend/js/vendor/dataTables.responsive.min.js"></script>
 <script src="<?= base_url() ?>assets/backend/js/vendor/responsive.bootstrap5.min.js"></script>
 <script src="<?= base_url() ?>assets/backend/js/vendor/dataTables.buttons.min.js"></script>
 <script src="<?= base_url() ?>assets/backend/js/vendor/buttons.bootstrap5.min.js"></script>
 <script src="<?= base_url() ?>assets/backend/js/vendor/buttons.html5.min.js"></script>
 <script src="<?= base_url() ?>assets/backend/js/vendor/buttons.flash.min.js"></script>
 <script src="<?= base_url() ?>assets/backend/js/vendor/buttons.print.min.js"></script>
 <script src="<?= base_url() ?>assets/backend/js/vendor/dataTables.keyTable.min.js"></script>
 <script src="<?= base_url() ?>assets/backend/js/vendor/dataTables.select.min.js"></script>
 <!-- third party js ends -->




 <!-- Typehead -->
 <script src="<?= base_url() ?>assets/backend//js/vendor/handlebars.min.js"></script>
 <script src="<?= base_url() ?>assets/backend//js/vendor/typeahead.bundle.min.js"></script>

 <!-- Demo -->
 <script src="<?= base_url() ?>assets/backend//js/pages/demo.typehead.js"></script>

 <!-- Timepicker -->
 <script src="<?= base_url() ?>assets/backend//js/pages/demo.timepicker.js"></script>
 <!-- demo app -->
 <!-- <script src="<?= base_url() ?>assets/backend/js/pages/demo.datatable-init.js"></script> -->
 <!-- end demo js-->
 <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
 </body>

 </html>