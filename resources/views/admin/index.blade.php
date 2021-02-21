<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="../assets/favicons/favicon-32x32.png">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mob.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/materialize.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                <a href="index" class="logo"><img src="../assets/images/logo-3.png" alt="" />
                </a>
            </div>
            <!--== SEARCH ==-->
            <div class="col-md-6 col-sm-6 mob-hide">

            </div>
            <!--== NOTIFICATION ==-->
            <div class="col-md-2 tab-hide">

            </div>
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img src="images/user/6.png" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>

                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li><a href="setting" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Profile Setting</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="?action=logout" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">

                </div>
                <!--== LEFT MENU ==-->
                <?php include ("left-menu.php"); ?>
            </div>

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Dashboard</a>
                        </li>
                    </ul>
                </div>
                <!--== DASHBOARD INFO ==-->
                <div class="ad-v2-hom-info">
                    <div class="ad-v2-hom-info-inn">
                        <ul>
                            <li>
                                <div class="ad-hom-box ad-hom-box-1">
                                    <span class="ad-hom-col-com ad-hom-col-1"><i class="fa fa-bar-chart"></i></span>
                                    <div class="ad-hom-view-com">
                                        <p><i class="fa  fa-arrow-up up"></i> Today Views</p>
                                        <h3>22,520</h3>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="ad-hom-box ad-hom-box-2">
                                    <span class="ad-hom-col-com ad-hom-col-2"><i class="fa fa-users"></i></span>
                                    <div class="ad-hom-view-com">
                                        <p><i class="fa  fa-arrow-up up"></i> Total Subscribers</p>
                                        <h3>43,320</h3>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="ad-hom-box ad-hom-box-3">
                                    <span class="ad-hom-col-com ad-hom-col-3"><i class="fa fa-address-card-o"></i></span>
                                    <div class="ad-hom-view-com">
                                        <p><i class="fa  fa-arrow-up up"></i> Users</p>
                                        <h3>2</h3>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="ad-hom-box ad-hom-box-4">
                                    <span class="ad-hom-col-com ad-hom-col-4"><i class="fa fa-envelope-open-o"></i></span>
                                    <div class="ad-hom-view-com">
                                        <p><i class="fa  fa-arrow-up up"></i> Enquiry</p>
                                        <h3>22,520</h3>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="sb2-2-3">
                    <div class="row">
                        <!--== Hotel Bookings ==-->
                        <div class="col-md-6">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>SUBSCRIBE NEWSLETTER</h4>
                                    <p></p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Select</th>
                                                    <th>Listing</th>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>City</th>
                                                    <th>Enquiry</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="ch2-1" />
                                                        <label for="ch2-1"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/1.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Taaj Club House</span><span class="list-enq-city">Illunois, United States</span>
                                                    </td>
                                                    <td>12 may</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">15</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="ch2-2" />
                                                        <label for="ch2-2"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/2.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Grand Hotel</span><span class="list-enq-city">Rio,Brazil</span>
                                                    </td>
                                                    <td>07 aug</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">05</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="ch2-3" />
                                                        <label for="ch2-3"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/3.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Grand Pales</span><span class="list-enq-city">Chennai,India</span>
                                                    </td>
                                                    <td>18 jun</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">35</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="ch2-4" />
                                                        <label for="ch2-4"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/4.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Lake Palace Hotel</span><span class="list-enq-city">Beijing,China</span>
                                                    </td>
                                                    <td>09 apr</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">24</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="ch2-5" />
                                                        <label for="ch2-5"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/5.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">First Class Hotel</span><span class="list-enq-city">Berlin,Germany</span>
                                                    </td>
                                                    <td>21 jun</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">18</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Google Map</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-map"><i class="material-icons">more_vert</i></a>
                                    <ul id="dr-map" class="dropdown-content">
                                        <li><a href="#!">Edit</a> </li>
                                    </ul>
                                    <!-- Dropdown Structure -->
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi tab-map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.6901721902213!2d90.3862512149815!3d23.758425484585377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xddec1fae8aa60761!2sHotel%20Shuktara%20Pvt.%20Ltd.!5e0!3m2!1sen!2sbd!4v1604158498576!5m2!1sen!2sbd" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>