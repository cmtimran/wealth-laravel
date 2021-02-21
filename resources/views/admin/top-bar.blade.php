<?php 
    include ("config/config.php"); 
    include ('config/Database.php');
    include ('config/Format.php');  
    $db = new Database();
    $fm = new Format(); 
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){  
        if($_POST['question']!='' || $_POST['fb']!='' || $_POST['link']!='' || $_POST['wp']!='' || $_POST['tw']!=''){
            $question=$_POST['question']; 
            $fb=$_POST['fb']; 
            $tw=$_POST['tw']; 
            $link=$_POST['link']; 
            $wp=$_POST['wp'];   
            $u_query ="UPDATE tbltopbarsetting SET question='$question', fb='$fb', tw='$tw', link='$link', wp='$wp'  WHERE id='1'";
            $u_result = $db->query($u_query); 
            if ($u_result) {
                echo "<script> window.location.href = 'top-bar.php';</script>";
            } else{
                 echo "<script> window.location.href = '404.php';</script>";
            }
        } 
    }
    if (isset($_GET["action"]) && $_GET["action"] == "logout") {
        Session::sessionStop();
    }
    $query =  "select * from tbltopbarsetting";
    $result = $db->query($query);
    if($result) {
        while ($topbar = $result->fetch_assoc()) {

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
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active"><a href="#">/ General Settings /</a></li>
                        <li class="active"><a href="#"> Top Bar Settings</a></li>
                    </ul>
                </div>
                <div class="sb2-2-add-blog sb2-2-1">
                    <div class="inn-title">
                        <h4>Update Top Bar Settings</h4>
                        <p> </p>
                    </div>
                    <div class="bor">
                        <form action="" method="post" >
                            <div class="form-group">
                                <label for="have-question">Have any question? +8801400334422</label>
                                <input type="text" class="form-control" name="question" id="have-question" placeholder="Have any question? +8801400334422" value="<?php echo $topbar["question"];?>">
                            </div>
                            <div class="form-group">
                                <label for="email1">Facebook:</label>
                                <input type="text" class="form-control" name="fb" id="email1" placeholder="" value="<?php echo $topbar["fb"];?>">
                            </div>
                            <div class="form-group">
                                <label for="tw">Twitter:</label>
                                <input type="text" class="form-control" name="tw" id="tw" placeholder="" value="<?php echo $topbar["tw"];?>">
                            </div>
                            <div class="form-group">
                                <label for="link">Linked In:</label>
                                <input type="text" class="form-control" name="link" id="link" placeholder="" value="<?php echo $topbar["link"];?>">
                            </div>
                            <div class="form-group">
                                <label for="wp">Whats App:</label>
                                <input type="text" class="form-control" name="wp" id="wp" placeholder="" value="<?php echo $topbar["wp"];?>">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } } ?>
    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>