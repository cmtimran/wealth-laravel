<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Panel</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon-180x180.png">
    <link rel="manifest" href="assets/favicons/manifest.json">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mob.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/materialize.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
 
<body>
    <div class="blog-login">
        <div class="blog-login-in">
           <?php 
    //     if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //         $userid   =   $fm->validation($_POST['userid']);
    //         $pass    =   $fm->validation($_POST['password']);

    //         $userid   =   mysqli_real_escape_string($db->connect, $fm->validation($_POST['userid'])); 
    //         $pass    =   mysqli_real_escape_string($db->connect, $fm->validation($_POST['password'])); 

    //         $query = "select * from tbluser where userid='$userid' and password='$pass'";
    //         $result = $db->query($query);
    //         if ( $result->num_rows > 0 ){ 
    //             $getuser = $result->fetch_assoc(); 
    //             if ($getuser) {
    //                 $userId   = $getuser["id"];
    //                 $userName = $getuser["name"];
    //                 $userRule = $getuser["rule"];
                     
    //                 Session::set("login", true);
    //                 Session::set("userId", $userId);
    //                 Session::set("userName", $userName); 
    //                 echo "<script>window.location='index.php'</script>";
    //             }
    //         }else{
    //             $mess = "User not found.";
    //         }
    //     }
    // ?> 
            <form action="" method="POST">
                <img src="assets/images/logo-3.png" alt="" />
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" name="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div> 
                <div class="row">
                    <div class="input-field col s12 text-center">
                        <button class="waves-effect waves-light btn-large btn-log-in " name="submit" type="submit">  Submit </button>
                    </div>
                    <div class="input-field col s12">
                        <center style="margin: -15px 0px 10px 0px;">
                            <span>
                                @if (isset($mess))
                                    echo $mess; 
                                @endif
                            </span>
                        </center>
                    </div>
                </div>
                <a href="forgot" class="for-pass">Forgot Password?</a>
            </form>
        </div>
    </div>

    <!--======== SCRIPT FILES =========-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/materialize.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body> 
</html>