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
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="index" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i>Manage Users</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="user-all">All Users</a>
                                    </li>
                                    <li><a href="user-add">Add New user</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-home" aria-hidden="true"></i> Home Page Settings</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="slide-see-all">Main Slider</a></li>
                                    <li><a href="home-about">About Us Section</a></li>
                                    <li><a href="home-handed-over-projects">Handed Over Projects Section</a></li>
                                    <li><a href="home-blog">Blog Section</a></li>
                                    <li><a href="home-support-all">Our Supports Section</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="about-us-edit" class="collapsible-header"><i class="fa fa-h-square" aria-hidden="true"></i> About Us Page Settings</a>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-picture-o" aria-hidden="true"></i>Company Profile Page Settings</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="sight-see-all">Company Profile</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar-o" aria-hidden="true"></i>Handed Over Projects Page Settings</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="project-all">All Projects</a></li>
                                    <li><a href="event-add">Add New Projects</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i> Our Team Page Settings</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="event-all">All Team Members</a></li>
                                    <li><a href="event-add">Add New Team Member</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-life-ring" aria-hidden="true"></i> Our Supports Page Settings</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="discount">All Supporters</a></li>
                                    <li><a href="discount-add">Add New Support</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="contact-edit" class="collapsible-header"><i class="fa fa-address-book" aria-hidden="true"></i> Contact Page Settings</a>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-rss-square" aria-hidden="true"></i> Blog Settings</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="blog-all">All Blog Posts</a></li>
                                    <li><a href="blog-add">Add New Blog Post</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-cogs" aria-hidden="true"></i> Website Settings</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="social-media">General Settings</a></li>
                                    <li><a href="social-media">Top Bar Settings</a></li>
                                    <li><a href="social-media">Header Setings Settings</a></li>
                                    <li><a href="social-media">Footer Settings</a></li>
                                    <li><a href="social-media">Social Media Settings</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="login" target="_blank"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                        </li>
                    </ul>
                    <div class="collapsible-header">
                        <p align="center" style="color: #000; padding: 15px;">Developed By <a href="https://www.facebook.com/cmt.imran" style="color: #000;">Imran Hossain</a></p>
                    </div>
                </div>
            </div>
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Handed Over Projects Page Settings</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-1">
                    <h2>All Projects</h2>
                    <p></p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Project Title</th>
                                <th>Location</th>
                                <th>Project Tag</th>
                                <th>Image Link</th>
                                <th>ALT Tag</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Online Business</td>
                                <td>Online Business Directory in Port Blair, Andaman</td>
                                <td>Directory Business Directory in Po</td>
                                <td>http://wealthdevelopmentbd.com/</td>
                                <td>24 may, 2017</td>
                                <td><a href="project-edit" class="sb2-2-1-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                                <td><a href="#" class="sb2-2-1-edit"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Online Business</td>
                                <td>Online Business Directory in Port Blair, Andaman</td>
                                <td>Directory Business Directory in Po</td>
                                <td>http://wealthdevelopmentbd.com/</td>
                                <td>24 may, 2017</td>
                                <td><a href="project-edit" class="sb2-2-1-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                                <td><a href="#" class="sb2-2-1-edit"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Online Business</td>
                                <td>Online Business Directory in Port Blair, Andaman</td>
                                <td>Directory Business Directory in Po</td>
                                <td>http://wealthdevelopmentbd.com/</td>
                                <td>24 may, 2017</td>
                                <td><a href="project-edit" class="sb2-2-1-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                                <td><a href="#" class="sb2-2-1-edit"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Online Business</td>
                                <td>Online Business Directory in Port Blair, Andaman</td>
                                <td>Directory Business Directory in Po</td>
                                <td>http://wealthdevelopmentbd.com/</td>
                                <td>24 may, 2017</td>
                                <td><a href="project-edit" class="sb2-2-1-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                                <td><a href="#" class="sb2-2-1-edit"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                             <tr>
                                <td>1</td>
                                <td>Online Business</td>
                                <td>Online Business Directory in Port Blair, Andaman</td>
                                <td>Directory Business Directory in Po</td>
                                <td>http://wealthdevelopmentbd.com/</td>
                                <td>24 may, 2017</td>
                                <td><a href="project-edit" class="sb2-2-1-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                                <td><a href="#" class="sb2-2-1-edit"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                            </tr> 
                            <tr>
                                <td>2</td>
                                <td>Online Business</td>
                                <td>Online Business Directory in Port Blair, Andaman</td>
                                <td>Directory Business Directory in Po</td>
                                <td>http://wealthdevelopmentbd.com/</td>
                                <td>24 may, 2017</td>
                                <td><a href="project-edit" class="sb2-2-1-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                                <td><a href="#" class="sb2-2-1-edit"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                            </tr> 
                             <tr>
                                <td>1</td>
                                <td>Online Business</td>
                                <td>Online Business Directory in Port Blair, Andaman</td>
                                <td>Directory Business Directory in Po</td>
                                <td>http://wealthdevelopmentbd.com/</td>
                                <td>24 may, 2017</td>
                                <td><a href="project-edit" class="sb2-2-1-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                                <td><a href="#" class="sb2-2-1-edit"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                            </tr> 
                            <tr>
                                <td>2</td>
                                <td>Online Business</td>
                                <td>Online Business Directory in Port Blair, Andaman</td>
                                <td>Directory Business Directory in Po</td>
                                <td>http://wealthdevelopmentbd.com/</td>
                                <td>24 may, 2017</td>
                                <td><a href="project-edit" class="sb2-2-1-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                                <td><a href="#" class="sb2-2-1-edit"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                            </tr> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--== BOTTOM FLOAT ICON ==-->
    <section>
        <div class="fixed-action-btn vertical">
            <a href="project-add" class="btn-floating btn-large red pulse">
                <i class="large material-icons">mode_edit</i>
            </a>
        </div>
    </section>

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>