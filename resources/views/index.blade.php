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

        <!-- Main Slider section start -->
        @include('layouts.slider')
        <!-- Main Slider section end -->

        <!-- About us section start -->
        <section class="about-us section-white p-t-100 p-b-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>About Us</h2>
                            <span class="divider"></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non libero consectetur, blandit mauris eget, imperdiet nisl. Etiam commodo ex nec erat tempor.</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="row m-t-20">
                            <div class="col-sm-12">
                                <h4 class="m-t-20">About Company</h4>
                                <p align='justify'><b>Wealth Development and Management Ltd</b> is a leading property developer of modern luxury buildings that are representation of architecture at its best. We have relentlessly pursued "<b>Putting Quality first</b>" without compromise. After more than decade of thriving achievements , <b>Wealth Development and Management Ltd</b> is now an established name in the world of real estate and construction in Bangladesh.</p>
                                <p align="justify"><b>Wealth Development and Management Ltd</b> has built modern apartments and constructing commercial complexes in mostly prime locations in Dhaka. We do not compromise when it comes to locations, selection of architects, technology, engineering,construction materials, systematic monitoring and reliable after-sales service. Most importantly all our projects are built in compliance with the <b>Bangladesh National Building (BNBC)</b>. When planning our structural designs, climatic conditions and changing trends recieve our top consideration. We aim to create idealistic surroundings for self contained, independent and distinguished houses in secured and prestigious communities around Dhaka.</p>
                                <div class="read-more">
                                    <a href="about.php" class="">ABOUT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="assets/images/about-us.jpg" alt="about us" class="m-b-xs-30 about-img center-block">
                    </div>
                </div>
            </div>
        </section>
        <!-- About us section end -->

        <!-- Recent Projects section Start -->
        @include('layouts.homeproject')
        <!-- Recent Projects section End -->

        <!-- Meet the team section start -->
<!--
        <section class="section-light-grey team p-b-70 p-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Meet The Team</h2>
                            <span class="divider"></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="team-area">
                            <img src="assets/images/team/team-1.jpg" alt="Team">
                            <div class="team-detail">
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h4>
                                <a href="#">Petrik Johnson</a>
                            </h4>
                            <p>Developer</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="team-area">
                            <img src="assets/images/team/team-2.jpg" alt="Team">
                            <div class="team-detail">
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h4>
                                <a href="#">Petrik Johnson</a>
                            </h4>
                            <p>Developer</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="team-area">
                            <img src="assets/images/team/team-3.jpg" alt="Team">
                            <div class="team-detail">
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h4>
                                <a href="#">Petrik Johnson</a>
                            </h4>
                            <p>Developer</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="team-area">
                            <img src="assets/images/team/team-4.jpg" alt="Team">
                            <div class="team-detail">
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h4>
                                <a href="#">Petrik Johnson</a>
                            </h4>
                            <p>Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
-->
        <!-- Meet the team section end -->

        <!-- Projects completed section start -->
        <section class="section-light-grey">
            <div class="container-fluid p-0">
                <div class="row project-counter">
                    <div class="col-md-3 counter-1 p-t-40 p-b-40">
                        <div class="pro-icon">
                            <span class="fa fa-check-circle"></span>
                        </div>
                        <span class="counter">350</span><span>+</span>
                        <h4>Completed Projects</h4>
                    </div>
                    <div class="col-md-3 counter-2 p-t-40 p-b-40">
                        <div class="pro-icon">
                            <span class="fa fa-clock-o"></span>
                        </div>
                        <span class="counter">256</span><span>+</span>
                        <h4>Running Projects</h4>
                    </div>
                    <div class="col-md-3 counter-3 p-t-40 p-b-40">
                        <div class="pro-icon">
                            <span class="fa fa-thumbs-up"></span>
                        </div>
                        <span class="counter">472</span><span>+</span>
                        <h4>Best Feedback</h4>
                    </div>
                    <div class="col-md-3 counter-4 p-t-40 p-b-40">
                        <div class="pro-icon">
                            <span class="fa fa-trophy"></span>
                        </div>
                        <span class="counter">500</span><span>+</span>
                        <h4>Certified Designers</h4>
                    </div>
                </div>
            </div>
        </section>
        <!-- Projects completed section end -->

        <!-- Free quote section start -->
        <section class="free-quote p-b-100 p-t-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                        <div class="quote-form">
                            <form id="freeQuoteForm" method="POST">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="section-heading">
                                            <h2 class="text-white">MEET THE PROFESSIONALS</h2>
                                            <span class="divider"></span>
                                        </div>
                                        <div id="msgSubmit" class="alert-danger alert hidden"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Land Information</p>
                                        <p>
                                            <label>Locality*</label>
                                            <input type="text" id="locality" name="locality" required="required" placeholder="Area/Neighbourhood the land is located.">
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Landowners Profile</p>
                                        <p>
                                            <label>Name Of The Landowner*</label>
                                            <input type="text" id="landowner" required="required" name="landowner" placeholder="Full name of the registered landowner">
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <label>Address*</label>
                                            <input type="text" id="address" name="address" required="required" placeholder="Full address of the land">
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <label>Contact Person</label>
                                            <input type="text" id="contact-person" name="contact-person" placeholder="Name (if different from the landowner)">
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <label>Size Of The Land</label>
                                            <input type="text" id="land-size" name="land-size" placeholder="Size of the land in kathas (rounded)">
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <label>Email*</label>
                                            <input type="email" id="email" required="required" name="email" placeholder="Contact person's email address">
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <label>Width of the road in front</label>
                                            <input type="text" id="width-road-front" name="width-road-front" placeholder="In Feet">
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <label>Contact number*</label>
                                            <input type="text" id="contact-number" required="required" name="contact-number" placeholder="Contact person's number">
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <label>Category of land</label>
                                            <select name="land" id="land" class="form-control">
                                                <option value="" selected>Select...</option>
                                                <option value="Freehold">Freehold</option>
                                                <option value="Leasehold">Leasehold</option>
                                            </select>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>
                                            <label>Facing</label>
                                            <select name="Facing" id="facing" name="facing" class="form-control">
                                                <option value="" selected>Select...</option>
                                                <option value="East">East</option>
                                                <option value="West">West</option>
                                                <option value="North">North</option>
                                                <option value="South">South</option>
                                            </select>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>
                                            <label>Attractive Features (If Any)</label>
                                            <select name="feature" id="feature" class="form-control">
                                                <option value="" selected>Select...</option>
                                                <option value="Lakeside">Lakeside</option>
                                                <option value="Corner_Plot">Corner Plot</option>
                                                <option value="Park_View">Park View</option>
                                                <option value="Main_Road">Main Road</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <p><input type="submit" id="form-submit" value="Submit"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Free quote section end -->

        <!-- Blog posts section start -->
<!--
        <section class="section-light-grey p-t-100 p-b-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Latest Blog</h2>
                            <span class="divider"></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="blog-area">
                            <div class="blog-img">
                                <a href="#">
                                    <img src="assets/images/blog/blog-3.jpg" alt="blog-image" />
                                </a>
                            </div>
                            <div class="blog-head">
                                <h3>
                                    <a href="#"> blog post 1</a>
                                </h3>
                            </div>
                            <div class="blog-meta">
                                <p>
                                    <i class="fa fa-calendar"></i> 10.12.2020
                                </p>
                            </div>
                            <div class="blog-content">
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-area">
                            <div class="blog-img">
                                <a href="#">
                                    <img src="assets/images/blog/blog-2.jpg" alt="blog-image" />
                                </a>
                            </div>
                            <div class="blog-head">
                                <h3>
                                    <a href="#"> blog post 2</a>
                                </h3>
                            </div>
                            <div class="blog-meta">
                                <p>
                                    <i class="fa fa-calendar"></i> 10.12.2019
                                </p>
                            </div>
                            <div class="blog-content">
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-area">
                            <div class="blog-img">
                                <a href="#">
                                    <img src="assets/images/blog/blog-3.jpg" alt="blog-image" />
                                </a>
                            </div>
                            <div class="blog-head">
                                <h3><a href="#"> blog post 3</a></h3>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-calendar"></i> 10.12.2018</p>
                            </div>
                            <div class="blog-content">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
-->
        <!-- Blog posts section end -->

        <!-- Testimonials section start -->
        <section class="testimonial-area p-t-100 p-b-100">
            <div class="testimonial-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading text-color-white">
                            <h2>Happy Customers</h2>
                            <span class="divider"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="owl-carousel-2 owl-theme" id="testimonials">
                        <div class="item">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="testi-block">
                                    <div class="user-pic">
                                        <img src="assets/images/testimonial/testimonial-1.jpg" alt="Testimonial">
                                    </div>
                                    <h4 class="user-name">Sarah Johnson</h4>
                                    <div class="designation">Architect</div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="testi-block">
                                    <div class="user-pic">
                                        <img src="assets/images/testimonial/testimonial-2.jpg" alt="Testimonial">
                                    </div>
                                    <h4 class="user-name">
                                        Sarah Johnson
                                    </h4>
                                    <div class="designation">
                                        Architect
                                    </div>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="testi-block">
                                    <div class="user-pic">
                                        <img src="assets/images/testimonial/testimonial-3.jpg" alt="Testimonial">
                                    </div>
                                    <h4 class="user-name">
                                        Sarah Johnson
                                    </h4>
                                    <div class="designation">
                                        Architect
                                    </div>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials section end -->

        <!-- Support section start -->
        @include('layouts.support')
        <!-- Support section end -->

        <!-- Newsletter section start -->
        @include('layouts.newsletter')
        <!-- Newsletter section end -->

        <!-- Footer section end -->
        @include('layouts.footer')
        <!-- Footer section end -->
