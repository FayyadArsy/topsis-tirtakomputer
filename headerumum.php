<?php
    // ini_set("display_errors","Off");
    //hilangkan koma kalau sudah selese
    session_start();
    if (isset($_SESSION['username'])){
        header("Location:./dashboard.php");
        // header("Location:./login.php?msg=Silahkan Login Dahulu");
    }
?>
<style>
    .sticky-container{
    padding:0px;
    margin:0px;
    position:fixed;
    right:-130px;
    top:230px;
    
    width:210px;
    z-index: 1100;
}
.sticky li{
    list-style-type:none;
    background-color:#fff;
    color:#efefef;
    height:43px;
    opacity: 80%;
    padding:0px;
    margin:0px 0px 1px 0px;
    -webkit-transition:all 0.25s ease-in-out;
    -moz-transition:all 0.25s ease-in-out;
    -o-transition:all 0.25s ease-in-out;
    transition:all 0.25s ease-in-out;
    cursor:pointer;
}
.sticky li:hover{
    margin-left:-115px;
}
.sticky li img{
    float:left;
    margin:5px 4px;
    margin-right:5px;
}
.sticky li p{
    padding-top:5px;
    margin:0px;
    line-height:16px;
    font-size:11px;
}
.sticky li p a{
    text-decoration:none;
    color:#2C3539;
}
.sticky li p a:hover{
    text-decoration:underline;
}
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>TirtaKomputer</title>
    <!-- Bootstrap Core CSS -->
    
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet">
    
    <script src="js/jquery.min.js"></script>
    
    <script src="js/dataTables.bootstrap4.min.js"></script>
    
    <script src="js/jquery.dataTables.min.js"></script>    
    
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<script language="JavaScript" type="text/JavaScript">
    var newwindow;

    function KonfirmasiHapus(submodule,id) {
        var jawaban;
        jawaban=confirm("Anda Yakin record ini akan dihapus?");
        if(jawaban) 
        {
            location.href=""+submodule+"="+id;
        }
    }
</script>
<body class="fix-header fix-sidebar card-no-border">

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            
                            <!-- Light Logo icon -->
                            
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         
                         <!-- Light Logo text -->  
                         <label class="text-light" style="font-weight: bold; font-size: 120%; ">TIRTA KOMPUTER</label></h2> 
                         <!-- <img src="assets/images/logo-spk.png" class="light-logo" alt="homepage" /> -->
                        </span>
                        </a>
                </div>
                <!-- Sidebar sosmed -->
                <div class="sticky-container">
    <ul class="sticky">
        <li>
            <img src="images/wa.png" width="32" height="32">
            <p><a href="https://wa.me/6281266395168" target="_blank">Chat Us on<br>Whatsapp</a></p>
        </li>
        <li>
            <img src="images/mail.png" width="32" height="32">
            <p><a href="#" target="_blank">Contact Us on<br>Mail</a></p>
        </li>
        <li>
            <img src="images/maps.png" width="32" height="32">
            <p><a href="#" target="">Find Us on<br>Maps</a></p> 
           
        </li>
    </ul>
</div>
                <button class="btn btn-outline-success my-2 my-sm-0"><a href="login.php" class="text-light">Login</a></button>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    
                </div>
            </nav>
        </header>