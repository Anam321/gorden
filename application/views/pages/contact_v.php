<div class="container-fluid bg-secondary py-5">
    <div class="container py-5">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Contact Us</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="d-inline-flex align-items-center">
                    <a class="btn btn-outline-primary" href="">Home</a>
                    <i class="fas fa-angle-double-right text-primary mx-2"></i>
                    <a class="btn btn-outline-primary disabled" href="">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header Start -->


<div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
    <div class="container contact px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <h6 class="text-primary">Contact Us</h6>
                    <h1 class="mb-4">Kirim Pesan Andan Di Sini</h1>

                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="name" name="nama" placeholder="Masukan Nama Lengkap" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control p-4" id="email" name="email" placeholder="Masukan Email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="subject" name="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea id="summernote" class="form-control p-4" rows="6" id="message" name="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-3 px-5" type="submit" id="btnSave">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <iframe class="position-absolute w-100 h-100" style="object-fit: cover;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    // function showAlert(type, msg) {

    //     toastr.options.closeButton = true;
    //     toastr.options.progressBar = true;
    //     toastr.options.extendedTimeOut = 1000; //1000

    //     toastr.options.timeOut = 3000;
    //     toastr.options.fadeOut = 250;
    //     toastr.options.fadeIn = 250;

    //     toastr.options.positionClass = 'toast-top-center';
    //     toastr[type](msg);
    // }
    $(document).ready(function() {
        $('#summernote').summernote();
    });


    function notif() {
        $('#notifalert').empty();
        $.ajax({
            url: "<?php echo site_url('contact/alertnotif') ?>",
            type: "POST",
            dataType: "JSON",
            success: function(data) {
                $('#notifalert').html(data);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    $('#contactForm').submit(function(e) {
        e.preventDefault();
        var form = $('#contactForm')[0];
        var data = new FormData(form);
        $('#btnSave').text('Sedang Proses, Mohon tunggu...'); //change button text
        $('#btnSave').attr('disabled', true); //set button disable
        $.ajax({
            url: "<?php echo site_url('contact/input_message') ?>",
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
                    // showAlert(data.type, data.mess);
                    $('#contactForm')[0].reset();
                    $('#summernote').summernote('code', '');
                    notif();

                } else {
                    // showAlert(data.type, data.mess);
                }
                $('#btnSave').text('Send Message'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable
                $('#btnSave').attr('hide', false); //set button enable
            },
            error: function(jqXHR, textStatus, errorThrown) {
                type = 'error';
                msg = 'Error adding / update data';
                showAlert(type, msg); //utk show alert
                $('#btnSave').text('Send Message'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable
                $('#btnSave').attr('hide', false); //set button enable
            }
        });

    });
</script>