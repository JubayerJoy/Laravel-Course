@extends('Layouts.app')

@section('content')
<section class="contact section" id="contact">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>Contact</h2>
            </div>
        </div>
        <h3 class="contact-title padd-15">Have You Any Question ?</h3>
        <h4 class="contact-sub-title padd-15">I'M AT YOUR SERVICES</h4>
        <div class="row">
            <!-- ===== Contact Info Item 1 Start ===== -->
            <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa fa-phone"></i></div>
                <h4>Call Us On</h4>
                <p>+8801737292239</p>
            </div>
            <!-- ===== Contact Info Item 1 End ===== -->
            <!-- ===== Contact Info Item 2 Start ===== -->
            <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa fa-map-marker-alt"></i></div>
                <h4>Office</h4>
                <p>Atikul Software</p>
            </div>
            <!-- ===== Contact Info Item 2 End ===== -->
            <!-- ===== Contact Info Item 3 Start ===== -->
            <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa fa-envelope"></i></div>
                <h4>Email</h4>
                <p>atikul.official2020@gmail.com</p>
            </div>
            <!-- ===== Contact Info Item 3 End ===== -->
            <!-- ===== Contact Info Item 4 Start ===== -->
            <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa fa-globe-europe"></i></div>
                <h4>Website</h4>
                <p>www.atikulsoftware.zyz</p>
            </div>
            <!-- ===== Contact Info Item 4 End ===== -->
        </div>
        <h3 class="contact-title padd-15">SEND ME AN EMAIL</h3>
        <h4 class="contact-sub-title padd-15">I'M VERY RESPOSIVE TO MESSAGES</h4>
        <!-- ===== Contact Form ===== -->
        <div class="row">
            <div class="contact-form padd-15">
                <div class="row">
                    <div class="form-item col-6 padd-15">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" id="name">
                        </div>
                    </div>

                    <div class="form-item col-6 padd-15">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" id="email">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject" id="subject">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <textarea name="" class="form-control" id="message" placeholder="Message"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <button type="submit" class="btn" id="sendbtn">Send Message</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
