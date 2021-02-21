<?php 
    include ('config/Session.php'); 
    Session::checklogin();
    include ("config/config.php"); 
    include ('config/Database.php');
    include ('config/Format.php');  
    $db = new Database();
    $fm = new Format();   

    if ( $_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET["id"]) ){
        $id = $_GET["id"]; 
        $delete_query =  "DELETE FROM tbluser WHERE id='$id'";
        $d_result = $db->query($delete_query);
        if ($d_result) {
            echo "<script> window.location.href = 'user-all.php';</script>";
        } 
    } 
 
    if (isset($_GET["action"]) && $_GET["action"] == "logout") {
        Session::sessionStop();
    }
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
                        <li><a href="index"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Manage Users</a></li>
                        <li class="active-bre"><a href="user-all"> View All Users</a></li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>User Details</h4>
                                    <p></p>

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th> 
                                                    <th>Name</th>
                                                    <th>User ID</th>
                                                    <th>Contact</th>
                                                    <th>Email</th>
                                                    <th>Address</th> 
                                                    <th>Action</th> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php 
                                                $query =  "select * from tbluser";
                                                $result = $db->query($query);
                                                if($result){
                                                    while($users = $result->fetch_assoc()){ 
                                                ?> 
                                                <tr> 
                                                    <td><span class="list-img"><img src="<?php echo $users["profilepic"]; ?>" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name"><?php echo $users["fname"]; echo " ".$users["lname"];?></span></a>  
                                                    <td><a href="#"><span class="list-enq-name"><?php echo $users["userid"]; ?></span></a>
                                                    </td>
                                                    <td><?php echo $users["mobail"]; ?></td>
                                                    <td><?php echo $users["email"]; ?></td>
                                                    <td><?php echo $users["address"]; ?></td> 
                                                    <td> 
                                                        <button>
                                                        <a href="user-edit.php?id=<?php echo $users["id"];?>"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                                        </button> 
                                                    </td>
                                                    <td>
                                                        <form action='user-all.php?id=<?php echo $users["id"]; ?>' method="POST"> 
                                                        <button type="submit"> <i class="fa fa-trash-o"></i> Delete </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <?php } } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== BOTTOM FLOAT ICON ==-->
    <section>
        <div class="fixed-action-btn vertical">
            <a href="user-add" class="btn-floating btn-large red pulse">
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