@include('layouts.header')

<body id="bg">
    <div class="wrapper">
        <!-- Header Area Start -->
        <header class="header-portion">
            @include('layouts.topbar') 
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
                            <h1>Handed Over Projects</h1>
                            <ul>
                                <li><a href="index">Home</a></li>
                                <li>/</li>
                                <li>Handed Over Projects</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page title section end -->

        <!-- Portfolio section start -->
        <section class="section-light-grey p-t-100 p-b-100 portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="portfolioFilter clearfix">
                            <a href="#" data-filter="*" class="current">All</a>
                            <a href="#" data-filter=".dhaka">Dhaka</a>
                            <a href="#" data-filter=".outside">Outside</a>
                        </div>
                    </div>
                    <div class="portfolioContainer projects">
                        <div class="dhaka project-area">
                            <img src="assets/images/projects-big/Hotel-Shuktara-Framgate.jpg" alt="image">
                            <div class="hover-box">
                                <h4><a href="#">Hotel Shuktara</a></h4>
                                <p>Dhaka/Framgate</p>
                            </div>
                        </div>
                        <div class="outside project-area">
                            <img src="assets/images/projects-big/Kaliakoir-River-Side.jpg" alt="image">
                            <div class="hover-box">
                                <h4><a href="#">Kaliakoir River Side</a></h4>
                                <p>Gazipur/Kaliakoir</p>
                            </div>
                        </div>
                        <div class="outside project-area">
                            <img src="assets/images/projects-big/Nowapur%203D.jpg" alt="image">
                            <div class="hover-box">
                                <h4><a href="#">Wealth Nowapur</a></h4>
                                <p>Nowapur</p>
                            </div>
                        </div>
                        <div class="Dhaka project-area">
                            <img src="assets/images/projects-big/Wealth%20copy%20A.jpg" alt="image">
                            <div class="hover-box">
                                <h4><a href="#">Wealth ...</a></h4>
                                <p>Dhaka/Gulshan</p>
                            </div>
                        </div>
                        <div class="Dhaka project-area">
                            <img src="assets/images/projects-big/Wealth-Arjamal.jpg" alt="image">
                            <div class="hover-box">
                                <h4><a href="#">Wealth Arjamal</a></h4>
                                <p>Dhaka/Gulshan</p>
                            </div>
                        </div>
                        <div class="Dhaka project-area">
                            <img src="assets/images/projects-big/Wealth-Development-66%20copy.jpg" alt="image">
                            <div class="hover-box">
                                <h4><a href="#">Wealth 66</a></h4>
                                <p>Dhaka/Gulshan</p>
                            </div>
                        </div>
                        <div class="Dhaka project-area">
                            <img src="assets/images/projects-big/Wealth-Tower.jpg" alt="image">
                            <div class="hover-box">
                                <h4><a href="#">Wealth Tower</a></h4>
                                <p>Dhaka/Gulshan</p>
                            </div>
                        </div>
                        <div class="Dhaka project-area">
                            <img src="assets/images/projects-big/Zafor%20Vi.jpg" alt="image">
                            <div class="hover-box">
                                <h4><a href="#">Wealth ....</a></h4>
                                <p>Dhaka/Gulshan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio section end -->

        <!-- Newsletter section start -->
        @include("layouts.newsletter")
        <!-- Newsletter section end -->

        @include('layouts.footer')
