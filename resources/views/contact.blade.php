@include('layouts.header')
<body id="bg">
    <div class="wrapper">
        <!-- Header Area Start -->
        <header class="header-portion">
            <!-- Top bar start -->
            <!-- Main navigation start -->
            @include('layouts.menu')
            <!-- Main navigation end -->
        </header>
        <!-- Header Area End -->

        <!-- Page title section start -->
        <section class="page-title p-t-120 p-b-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-area">
                            <h1>Contact Us</h1>
                            <ul>
                                <li><a href="index">Home</a></li>
                                <li>/</li>
                                <li><a href="contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page title section end -->

        <!-- Contact page section start -->
        <section class="contact-us section-light-grey p-t-70 p-b-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="address-block">
                            <div class="address-icon">
                                <i class="fa fa-phone text-center"></i>
                            </div>
                            <div class="address-text">
                                <h5>Phone</h5>
                                <p>+880140334422, +8801977150415, </p>
                                <p>+8801794284500, +8801787772320</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="address-block">
                            <div class="address-icon">
                                <i class="fa fa-envelope text-center"></i>
                            </div>
                            <div class="address-text">
                                <h5>Email</h5>
                                <p>info@wealthdevelopmentbd.com</p>
                                <p>wdml.ltd@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="address-block">
                            <div class="address-icon">
                                <i class="fa fa-home text-center"></i>
                            </div>
                            <div class="address-text">
                                <h5>Address</h5>
                                <span>20/A INDIRA ROAD, SHERE BANGLA NAGAR, DHAKA-1215, BANGLADESH</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-t-20">
                    <div class="col-md-12 col-sm-12">
                        <div class="quote-form m-b-30">
                            <form role="form" id="contactForm" method="POST">
                                <div id="msgSubmit" class="alert-danger alert hidden"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>
                                            <label>Your Name</label>
                                            <input type="text" name="name" id="name" placeholder="Your Name" title="* Please provide your name" required="required">
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <label>Email Address</label>
                                            <input type="email" name="email" id="email" placeholder="Your Email Address" title="* Please provide your email address" required="required">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>
                                            <label>Subject</label>
                                            <input type="text" id="subject" placeholder="Subject"  title="* Please provide a subject">
                                        </p>
                                        <p>
                                            <label>Mobile</label>
                                            <input type="text" id="mobile" placeholder="Mobile" title="* Provide your mobile no" required="required">
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <label>Your Message</label>
                                            <textarea name="message" id="message" placeholder="Comment" title="* Please type a message"></textarea>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <input type="submit" id="form-submit" value="Send Message">
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact page section end -->

        <!-- Google map section start -->
        <div id="googleMap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.6901721902213!2d90.3862512149815!3d23.758425484585377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xddec1fae8aa60761!2sHotel%20Shuktara%20Pvt.%20Ltd.!5e0!3m2!1sen!2sbd!4v1604158498576!5m2!1sen!2sbd" width="100%" height="450px" allowfullscreen></iframe>
        </div>
        <!-- Google map section end -->

        <!-- Newsletter section start -->
        @include('layouts.newsletter')
        <!-- Newsletter section end -->

        <!-- Footer start -->
        @include('layouts.footer')
