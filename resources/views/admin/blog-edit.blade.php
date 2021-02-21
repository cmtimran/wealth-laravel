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
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Edit Blog</a>
                        </li>
                        <li class="page-back"><a href="index.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-add-blog sb2-2-1">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Edit Post</h4> 
                        </div>
                        <div class="bor">
                            <form>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="list-title" type="text" value="Blog Post Name" class="validate">
                                        <label for="list-title">Post Name</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <div class="file-field">
                                            <div class="btn">
                                                <span>File</span>
                                                <input type="file">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Upload Blog Banner">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" class="materialize-textarea"> </textarea>
                                        <label for="textarea1">Blog Descriptions:</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select multiple>
                                            <option value="" disabled selected>Choose Category</option>
                                            <option value="1">Hotels</option>
                                            <option value="2">Educations</option>
                                            <option value="3">Medical</option>
                                            <option value="3">Health</option>
                                            <option value="3">Fitness</option>
                                            <option value="3">Tution</option>
                                            <option value="3">Software</option>
                                            <option value="3">Wedding</option>
                                            <option value="3">Party</option>
                                            <option value="3">Spa/Club</option>
                                        </select>
                                        <label>Select Category</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <select multiple>
                                            <option value="" disabled selected>Choose Category</option>
                                            <option value="1">Hotels</option>
                                            <option value="2">Educations</option>
                                            <option value="3">Medical</option>
                                            <option value="3">Health</option>
                                            <option value="3">Fitness</option>
                                            <option value="3">Tution</option>
                                            <option value="3">Software</option>
                                            <option value="3">Wedding</option>
                                            <option value="3">Party</option>
                                            <option value="3">Spa/Club</option>
                                        </select>
                                        <label>Select Sub Category</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="post-auth" type="text" value="David Villiam" class="validate">
                                        <label for="post-auth">Author Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--== BOTTOM FLOAT ICON ==-->
    <section>
        <div class="fixed-action-btn vertical">
            <a class="btn-floating btn-large red pulse">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
                </li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
                </li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a>
                </li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
                </li>
            </ul>
        </div>
    </section>

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/travelz/admin/blog-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Oct 2020 14:50:52 GMT -->
</html>