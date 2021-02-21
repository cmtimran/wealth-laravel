<?php 
    include ("config/config.php"); 
    include ('config/Database.php');
    include ('config/Format.php');  
    $db = new Database();
    $fm = new Format(); 
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){  
        if($_POST['call-us']!='' || $_POST['mail-us']!='' || $_POST['address']!=''){
            $call=$_POST['call-us']; 
            $mail=$_POST['mail-us']; 
            $address=$_POST['address'];    
            
            $u_query ="UPDATE tblheadersetting SET callus='$call', mail='$mail', address='$address' WHERE id='1'";
            $u_result = $db->query($u_query); 
            if ($u_result) {
                echo "<script> window.location.href = 'header.php';</script>";
            } else{
                 echo "<script> window.location.href = '404.php';</script>";
            }
        } 
    }
    if (isset($_GET["action"]) && $_GET["action"] == "logout") {
        Session::sessionStop();
    }
    $query =  "select * from tblheadersetting";
    $result = $db->query($query);
    if($result) {
        while ($header = $result->fetch_assoc()) {

?>
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
                    <li><a href="#" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
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
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active"><a href="#">/ General Settings /</a></li>
                        <li class="active"><a href="#"> Header Settings</a></li>
                    </ul>
                </div>
                <div class="sb2-2-add-blog sb2-2-1">
                    <div class="inn-title">
                        <h4>Update Header Setting</h4>
                        <p> </p>
                    </div>
                    <div class="bor">
                        <form action="" method="post"> 
                            <div class="form-group">
                                <label for="call-us">Call Us At</label>
                                <input type="text" class="form-control" name="call-us" id="call-us" placeholder="+8801400334422" value="<?php echo $header["callus"];?>">
                            </div>
                            <div class="form-group">
                                <label for="email-us">Mail Us</label>
                                <input type="text" class="form-control" name="mail-us" id="email-us" placeholder="info@wealthdevelopmentbd.com" value="<?php echo $header["mail"];?>">
                            </div> 
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="20/A INDIRA ROAD, SHERE BANGLA NAGAR, DHAKA-1215, BANGLADESH" value="<?php echo $header["address"];?>">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }} ?>

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>