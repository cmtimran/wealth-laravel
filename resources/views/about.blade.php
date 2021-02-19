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
                            <h1>About Us</h1>
                            <ul>
                                <li><a href="index-2">Home</a></li>
                                <li>/</li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page title section end -->

        <!-- Our history section start -->
        <section class="about-us section-light-grey about-page p-t-100 p-b-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading" id="#aboutus">
                            <h2>About Us</h2>
                            <span class="divider"></span>
                        </div>
                    </div>
                    <div class="col-md-5">
                         <img src="assets/images/about-us.jpg" alt="about us" class="m-b-xs-30 about-img center-block">
                    </div>
                    <div class="col-md-7">
                        <p align="justify"><b>Wealth Development and Management Ltd</b> is a leading property developer of modern luxury buildings that are representation of architecture at its best. We have relentlessly pursued "<b>Putting Quality first</b>" without compromise. After more than decade of thriving achievements , Wealth Development and Management Ltd is now an established name in the world of real estate and construction in Bangladesh.</p>
                        <p align="justify"><b>Wealth Development and Management Ltd</b> has built modern apartments and constructing commercial complexes in mostly prime locations in Dhaka. We do not compromise when it comes to locations, selection of architects, technology, engineering,construction materials, systematic monitoring and reliable after-sales service. Most importantly all our projects are built in compliance with the <b>Bangladesh National Building (BNBC)</b>. When planning our structural designs, climatic conditions and changing trends recieve our top consideration. We aim to create idealistic surroundings for self contained, independent and distinguished houses in secured and prestigious communities around Dhaka.</p>
                        <div class="clearfix "></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our history section end -->

        <!-- Our mission section start -->
        <section class="about-us section-white about-page p-t-100 p-b-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Our Mission</h2>
                            <span class="divider"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                       <h3>Our Mission</h3>
                        <p align='justify'><b>Wealth Development and Management Ltd</b> aims to look beyond the physical and geographical domains and its scope extends way beyond just building four concrete walls. We address the ever changing trend and need of a transitional urban city. Our commitment to the society and country is to shape up a community that knows and acknowledges a lifestyle that is not limited to only living but a lifestyle that solely concentrates on superior standard of living. Our motto is to put quality and design at the very first and prioritise the needs of modern living standards. We promise to be at best in the real estate game. </p> <br>
                        <h3>Our History</h3>
                        <p align='justify'><b>Wealth Development and Management Ltd</b> began as a real-estate developer since 2008. Over the years the company has undertaken many challenging projects and accumulated skills, knowledge and experiences in design, build solutions, project management, apartment trades. Today, <b>Wealth Development &amp; Management</b> has earned its place as one of the fastest project delivering companies in the country with putting quality first. We also provide interior solutions to flatowners as added services upon request.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="assets/images/mission.jpg" alt="Mission" class="m-b-30 about-img center-block">
                    </div>
                </div>

            </div>
        </section>
        <!-- Meet the team section end -->

        <!-- Support section start -->
        @include('layouts.support')
        <!-- Support section end -->

        <!-- Newsletter section start -->
        @include("layouts.newsletter")
        <!-- Newsletter section end -->

        <!-- Footer start -->
        @include('layouts.footer')
