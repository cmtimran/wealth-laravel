<?php 
    include ("config/config.php");  
    include ('config/Database.php');
    include ('config/Format.php');  
    $db = new Database();
    $fm = new Format(); 
    if (isset($_GET["action"]) && $_GET["action"] == "logout") {
        Session::sessionStop();
    }

    $query =  "select * from tblcompanyprofile";
    $result = $db->query($query);
    if($result) {
        while ($comprofile = $result->fetch_assoc()) {

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
                <div class="sb2-12"> </div>
                <!--== LEFT MENU ==-->
                <?php include ("left-menu.php"); ?>
            </div>
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="active-bre"><a href="#"> Company Profile Page Settings</a></li> 
                    </ul>
                </div>
                <div class="sb2-2-add-blog sb2-2-1">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Upload Company Profile</h4> 
                        </div>
                        <div class="bor">
                           <?php 
                            if($_SERVER["REQUEST_METHOD"] == "POST"){  
                                $image_ext_support  = array('pdf');
                                $file_name = $_FILES['image']['name'];
                                $file_size = $_FILES['image']['size'];
                                $file_temp = $_FILES['image']['tmp_name'];

                                $fil_var        = explode('.', $file_name);
                                $file_ext       = strtolower(end($fil_var));
                                $unique_image   = substr(md5(time()), 0, 10).'.'.$file_ext; 
                                $upload_image   = "uploads/Company-Profile/".$unique_image; 

                                if ($upload_image == "") {
                                    echo "Field Must Not Empty !";
                                }elseif($file_size > 1000000){
                                    echo "File is lasge than 10m.";
                                }elseif(in_array($file_ext, $image_ext_support) === false ){
                                    echo "Upload file type support only pdf";
                                }else{ 
                                    move_uploaded_file($file_temp, $upload_image);
                                    $u_query ="UPDATE tblcompanyprofile SET companyprofile='$upload_image' WHERE id='1'";
                                    
                                    $u_result = $db->query($u_query); 	 
                                    if ($u_result) {  
                                        echo "<div class='col s12 text-right' style='color:green'>Update Successfull.</div>";
                                    }else{  
                                        echo "<div class='col s12 text-right' style='color:red'>Not Successfull.</div>";
                                    }        
                                }
                            }                     
                            ?>
                           
                            <form method='post' action="?id=<?php echo $comprofile["id"];?>" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <div class="file-field">
                                            <div class="btn">
                                                <span>File</span><input type="file" name="image">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Upload Our Mission Banner" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 text-right">
                                        <input type="submit" class="waves-effect waves-light btn-large" value="Update">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <embed src="uploads/Company-Profile/bd3f082c2b.pdf" style="width:70%;height:500px; margin: 0 auto;">
                                    </div>
                                </div>
                            </form> 
                        </div> 
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