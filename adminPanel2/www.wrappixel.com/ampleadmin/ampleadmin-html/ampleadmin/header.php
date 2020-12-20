
<?php
    include "session.php";
    $con=mysqli_connect("localhost","root","","bookshare_db");
    $name=$_SESSION['user'];
    $q="select * from tbl_login where email='$name'";
    $c=mysqli_query($con,$q);
    $r=mysqli_fetch_array($c);

    $q1="select * from tbl_bookdetails where postadder='$name'";
    $c1=mysqli_query($con,$q1);
    $num=mysqli_num_rows($c1);

    $q9="select * from tbl_stationarydetails where stnadder='$name'";
    $c9=mysqli_query($con,$q9);
    $num1=mysqli_num_rows($c9);

    $srnumber=1;
    $srnumber1=1;
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from www.wrappixel.com/ampleadmin/ampleadmin-html/ampleadmin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2019 07:08:12 GMT -->
<head>


        <!-- Slider -->
            <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Slicebox - 3D Image Slider with Fallback" />
        <meta name="keywords" content="jquery, css3, 3d, webkit, fallback, slider, css3, 3d transforms, slices, rotate, box, automatic" />
        <meta name="author" content="Pedro Botelho for Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="Slicebox/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="Slicebox/css/slicebox.css" />
        <link rel="stylesheet" type="text/css" href="Slicebox/css/custom.css" />
        <script type="text/javascript" src="Slicebox/js/modernizr.custom.46884.js"></script>
        <!-- Slider over -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700" rel="stylesheet">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../ampleadmin-html/ampleadmin/img/logo-icon.png">
    <title>Book Sharing</title>
	<link rel="canonical" href="https://www.wrappixel.com/templates/ampleadmin/" />
    <!-- chartist CSS -->
    <link href="../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="../../assets/libs/morris.js/morris.css" rel="stylesheet">
    <link href="../../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="../../assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
    <!-- needed css -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" style="background: #90ee90;">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand d-block d-md-none" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="img/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="img/logo-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        
                    </a>
                    <div class="d-none d-md-block text-center">
                        <a class="sidebartoggler waves-effect waves-light d-flex align-items-center side-start" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                            <i class="mdi mdi-menu"></i>
                            <span class="navigation-text ml-3"> Navigation</span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" style="background: #90ee90;">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <!-- ============================================================== -->
                        <!-- Logo -->
                        <!-- ============================================================== -->
                        <li class="nav-item border-right">
                            <a class="nav-link navbar-brand d-none d-md-block" href="index.php">
                                <!-- Logo icon -->
                                <b class="logo-icon">
                                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                    <!-- Dark Logo icon -->
                                    <img src="img/logo-icon.png" alt="" class="dark-logo" />
                                    <!-- Light Logo icon -->
                                    <img src="img/logo-icon.png" alt="Book Sharing" class="light-logo" />
                                </b>
                                <!--End Logo icon -->
                                <!-- Logo text -->
                                <span class="logo-text">
                                     <!-- dark Logo text -->
                                     <img src="img/logo-icon.png" alt="Book Sharing" class="dark-logo" />
                                     <!-- Light Logo text -->    
                                     <img src="" class="light-logo" alt="" />
                                </span>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="img/<?php echo $r['img'] ?>" alt="user" class="rounded-circle" width="31">
                                <span class="ml-2 user-text font-medium" style="text-transform: capitalize;" 
                                ><?php echo $r['fname'] ?></span><span class="fas fa-angle-down ml-2 user-text"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <div class="d-flex no-block align-items-center p-3 mb-2 border-bottom">
                                    <div class=""><img src="img/<?php echo $r['img'] ?>" alt="user" class="rounded" width="80"></div>
                                    <div class="ml-2">
                                        <h4 class="mb-0" style="text-transform: capitalize;"><?php echo $r['fname']?>&nbsp<?php echo $r['lname'] ?></h4>
                                        <p class=" mb-0 text-muted"><?php echo $r['email'] ?></p>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="updateprofile.php"><i class="ti-user mr-1 ml-1"></i> Update Profile</a>
                                <a class="dropdown-item" href="logout.php"><i class="fa fa-power-off mr-1 ml-1"></i> Logout</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" style="overflow: auto;">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark profile-dd" href="javascript:void(0)" aria-expanded="false">
                                <img src="img/<?php echo $r['img'] ?>" class="rounded-circle ml-2" width="30">
                                <span class="hide-menu" style="text-transform: capitalize;"><?php echo $r['fname'] ?>&nbsp<?php echo $r['lname'] ?> </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link " href="index.php" aria-expanded="false">
                                <i class="mdi mdi-home"></i>
                                <span class="hide-menu">Dashboard</span>
                                <span class="badge badge-inverse badge-pill ml-auto mr-3 font-medium px-2 py-1"></span>
                            </a>
                            
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link  " href="myprofile.php" aria-expanded="false">
                                <i class="mdi mdi-account-circle"></i>
                                <span class="hide-menu">My Profile</span>
                            </a>
                            <ul aria-expanded="false" class="collapse second-level">
                               
                                
                                
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="fas fa-plus-circle"></i>
                                <span class="hide-menu">Add Item </span>
                              
                            </a>
                            <ul aria-expanded="false" class="collapse second-level">
                                <li class="sidebar-item">
                                    <a href="addbook.php" class="sidebar-link">
                                        <i class="mdi mdi-cart-plus"></i>
                                        <span class="hide-menu">Add Book</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="addstationary.php" class="sidebar-link">
                                        <i class="mdi mdi-cart-plus"></i>
                                        <span class="hide-menu">Add Stationary</span>
                                    </a>
                                </li>
                                                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="search.php" aria-expanded="false">
                                <i class="fas fa-search"></i>
                                <span class="hide-menu">Search Item </span>
                              
                            </a>
                            <ul aria-expanded="false" class="collapse second-level">
                                                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link  " href="chat.php" aria-expanded="false">
                                <i class="mdi mdi-message-text"></i>
                                <span class="hide-menu">Chat</span>
                                
                            </a>
                            <ul aria-expanded="false" class="collapse second-level">
                                     </ul>
                                </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link  " href="deal.php" aria-expanded="false">
                                <i class="fas fa-handshake"></i>
                                <span class="hide-menu">Deal</span>
                                
                            </a>
                            <ul aria-expanded="false" class="collapse second-level">
                                     </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a class=" sidebar-link" href="contact.php" aria-expanded="false">
                                        <i class="fas fa-address-card"></i>
                                        <span class="hide-menu">Feadback </span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                      
                                    </ul>
                                </li>
                               
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="logout.php" aria-expanded="false">
                                <i class="mdi mdi-exit-to-app"></i>
                                <span class="hide-menu">Log Out</span>
                            </a>
                        </li>
                      
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>