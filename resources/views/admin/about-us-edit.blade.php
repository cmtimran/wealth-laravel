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
                        <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="active-bre"><a href="#"> About Us Page Settings</a></li> 
                        <li class="active-bre"><a href="contact-edit"> Edit About Us Section</a></li> 
                    </ul>
                </div>
                <div class="sb2-2-add-blog sb2-2-1">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Edit About Us Section</h4> 
                        </div>
                        <div class="bor">
                            <form>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="list-title" type="text"  placeholder="Who we are" class="validate" value="Who we are?"> 
                                        <label for="list-title">Section Title</label>
                                    </div> 
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" class="materialize-textarea" placeholder="About First Paragraph" spellcheck="true">Wealth Development and Management Ltd is a leading property developer of modern luxury buildings that are representation of architecture at its best. We have relentlessly pursued "Putting Quality first" without compromise. After more than decade of thriving achievements , Wealth Development and Management Ltd is now an established name in the world of real estate and construction in Bangladesh.</textarea>
                                        <label for="textarea1">About First Paragraph</label> 
                                    </div> 
                                    <div class="input-field col s12">
                                        <textarea id="textarea2" class="materialize-textarea" placeholder="About Second Paragraph" spellcheck="true">Wealth Development and Management Ltd is a leading property developer of modern luxury buildings that are representation of architecture at its best. We have relentlessly pursued "Putting Quality first" without compromise. After more than decade of thriving achievements , Wealth Development and Management Ltd is now an established name in the world of real estate and construction in Bangladesh.</textarea>
                                        <label for="textarea2">About Second Paragraph</label> 
                                    </div> 
                                </div>  
                                <div class="row">
                                    <div class="input-field col s12 text-right">
                                        <input type="submit" class="waves-effect waves-light btn-large" value="Update">
                                    </div>
                                </div>
                            </form>
                        </div> 
                    </div>
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Edit Our Mission Section</h4> 
                        </div>
                        <div class="bor">
                            <form>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="list-title" type="text"  placeholder="Our Mission" class="validate" value="Our Mission"> 
                                        <label for="list-title">Section Title</label>
                                    </div> 
                                    <div class="input-field col s12">
                                        <textarea id="textarea3" class="materialize-textarea" placeholder="About First Paragraph" spellcheck="true">Wealth Development and Management Ltd aims to look beyond the physical and geographical domains and its scope extends way beyond just building four concrete walls. We address the ever changing trend and need of a transitional urban city. Our commitment to the society and country is to shape up a community that knows and acknowledges a lifestyle that is not limited to only living but a lifestyle that solely concentrates on superior standard of living. Our motto is to put quality and design at the very first and prioritise the needs of modern living standards. We promise to be at best in the real estate game.</textarea>
                                        <label for="textarea3">Our Mission Paragraph</label> 
                                    </div> 
                                    <div class="input-field col s12">
                                        <input id="list-title" type="text"  placeholder="Our History" class="validate" value="Our History"> 
                                        <label for="list-title">Section Title</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <textarea id="textarea4" class="materialize-textarea" placeholder="Our History Paragraph" spellcheck="true">Wealth Development and Management Ltd began as a real-estate developer since 2008. Over the years the company has undertaken many challenging projects and accumulated skills, knowledge and experiences in design, build solutions, project management, apartment trades. Today, Wealth Development & Management has earned its place as one of the fastest project delivering companies in the country with putting quality first. We also provide interior solutions to flatowners as added services upon request.</textarea>
                                        <label for="textarea4">Our History Paragraph</label> 
                                    </div> 
                                </div>  
                                <div class="row">
                                    <div class="input-field col s12">
                                        <div class="file-field">
                                            <div class="btn">
                                                <span>File</span><input type="file">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Upload Our Mission Banner">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 text-right">
                                        <input type="submit" class="waves-effect waves-light btn-large" value="Update">
                                    </div>
                                </div>
                            </form>
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