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
                            <h1>Our Support</h1>
                            <ul>
                                <li><a href="index">Home</a></li>
                                <li>/</li>
                                <li><a href="our-support">Our Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page title section end -->

        <!-- Team section start -->
        <section class="p-t-100 p-b-100 projects section-white">
            <div class="container">
                <div class="row">
                   <div class="col-sm-4">
                        <div class="team-area">
                            <img src="assets/images/Support-Big/BSRM-Steels-Limited.jpg" alt="Team">
                            <div class="team-detail">
                                <div class="social-links">
                                    <p>BSRM-Steels-Limited</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="team-area">
                            <img src="assets/images/Support-Big/crown-cement.jpg" alt="Team">
                            <div class="team-detail">
                                <div class="social-links">
                                    <p>Crown Cement</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="team-area">
                            <img src="assets/images/Support-Big/Crown-READY-MIX-logo.jpg" alt="Team">
                            <div class="team-detail">
                                <div class="social-links">
                                    <p>Crown Ready Mix</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="team-area">
                            <img src="assets/images/Support-Big/MARBLE-DI-CARRARA-logo.JPG" alt="Team">
                            <div class="team-detail">
                                <div class="social-links">
                                    <p>Marble-Di-Carrara</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="team-area">
                            <img src="assets/images/Support-Big/MiR-READY-MIX-logo.jpg" alt="Team">
                            <div class="team-detail">
                                <div class="social-links">
                                    <p>Mir Ready Mix</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="team-area">
                            <img src="assets/images/Support-Big/National-Polimar-group-logo.jpg" alt="Team">
                            <div class="team-detail">
                                <div class="social-links">
                                    <p>National Polimar Group</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="team-area">
                            <img src="assets/images/Support-Big/Navana-Interlink-Ltd-logo.jpg" alt="Team">
                            <div class="team-detail">
                                <div class="social-links">
                                    <p>Navana Interlink Ltd</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="team-area">
                            <img src="assets/images/Support-Big/RAK-Ceramics-Logo-1024x576.jpg" alt="Team">
                            <div class="team-detail">
                                <div class="social-links">
                                    <p>RAK Ceramics</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="team-area">
                            <img src="assets/images/Support-Big/Shah-Cement-Logo.jpg" alt="Team">
                            <div class="team-detail">
                                <div class="social-links">
                                    <p>Shah Cement</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="team-area">
                            <img src="assets/images/Support-Big/STELLA-SANITARY-logo.jpg" alt="Team">
                            <div class="team-detail">
                                <div class="social-links">
                                    <p>STELLA SANITARY</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="team-area">
                            <img src="assets/images/Support-Big/X%20ceramics.jpg" alt="Team">
                            <div class="team-detail">
                                <div class="social-links">
                                    <p>X-Ceramics</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Team section end -->

        <!-- Newsletter section start -->
        @include("layouts.newsletter")
        <!-- Newsletter section end -->

        <!-- Footer start -->
        @include('layouts.footer')
