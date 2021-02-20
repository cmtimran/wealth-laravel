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
                            <h1>Company Profile</h1>
                            <ul>
                                <li><a href="index-2">Home</a></li>
                                <li>/</li>
                                <li>Company Profile</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-us section-light-grey about-page p-t-100 p-b-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Button trigger modal -->
                        <center>
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModalCenter">View Company Profile</button></center>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Wealth Development &amp; Management Ltd Profile Brochure</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                  <embed src="assets/Company-Profile/Wealth-Development-and-Management-ltd-Company-Profile-Brochure-(WDML).pdf" width="100%" height="550px" title="Company-Profile"/>
                                </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <a class="btn btn-primary" href="assets/Company-Profile/Wealth-Development-and-Management-ltd-Company-Profile-Brochure-(WDML).pdf" download="Wealth-Development-and-Management-ltd-Company-Profile">Download</a>

                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
             </div>
        </section>
        <!-- Page title section end -->
        @include('layouts.footer')
