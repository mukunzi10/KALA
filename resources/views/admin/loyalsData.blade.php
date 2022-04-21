
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>KIVU LITERACY LEGAL ADVOCACY</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/icon.png" '>

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="/assets/plugins/morris/morris.css">

        <!-- DataTables -->
        <link href="/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/style.css" rel="stylesheet" type="text/css">
    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <div class="left-side-logo d-block d-lg-none">
                    <div class="text-center">

                        <a href="#" class="logo"><img src="/assets/images/log2.png" width="230" height="70" alt="logo"></a>
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">

                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="{{ 'dashboardee' }}" class="waves-effect">
                                    <i class="dripicons-meter"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> Loyals </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{'layal'}}"> loyals Registration</a></li>
                                    <li><a href="{{'report'}}">All loyals</a></li>
                                    <li><a href="{{'loyalss'}}">Edit loyals Information</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-human-male-female "></i> <span> Citizen Data </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{'citizen'}}">Citizen Registration</a></li>

                                    </ul>

                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-file "></i> <span> Testmony Records </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{'testmony'}}">Testmony Report</a></li>

                                </ul>
                            </li>


                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <div class="topbar-left	d-none d-lg-block">
                            <div class="text-center">

                                <a href="{{'dashboardee'}}" class="logo"><img src="/assets/images/log2.png"  alt="logo" style="height: 5.5em; width:22em" ></a>
                            </div>
                        </div>

                        <nav class="navbar-custom">

                            <ul class="list-inline float-right mb-0">
                                <li class="list-inline-item notification-list dropdown d-none d-sm-inline-block">
                                    <form role="search" class="app-search">
                                        <div class="form-group mb-0">
                                            <input type="text" class="form-control" placeholder="Search..">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </li>
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="mdi mdi-email-outline noti-icon"></i>
                                        <span class="badge badge-danger badge-pill noti-icon-badge">5</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <span class="badge badge-danger float-right">2</span>
                                            <h5>Messages</h5>
                                        </div>
                                        <div class="slimscroll" style="max-height: 230px;">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon"><img src="assets/images/users/user-2.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                                <p class="notify-details"><b>Shema Vierry </b><span class="text-muted">You have 2 unread messages</span></p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon"><img src="assets/images/users/user-3.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                                <p class="notify-details"><b>Mukunzi M </b><span class="text-muted">You have 2 unread messages</span></p>
                                            </a>


                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-all">
                                            View All
                                        </a>

                                    </div>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="mdi mdi-bell-outline noti-icon"></i>
                                        <span class="badge badge-success badge-pill noti-icon-badge">3</span>
                                    </a>

                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="assets/images/users/user-1.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success mt-1 float-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                        <a class="dropdown-item" href="{{'l0gout'}}"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>
                                </li>

                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->


                    <div class="page-content-wrapper ">

                        <div class="container-fluid">
                            <div class="row ">
                                <div class="col-sm-12">
                                    <div class="float-right page-breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">KIVU LITERACY LEGAL ADVOCACY</a></li>
                                            <li class="breadcrumb-item active">SHEMA Vierry</li>
                                        </ol>
                                    </div>
                                    <h5 class="page-title"><b>KALA Admin:</b>{{$LoggedUserInfo['name']}}</h7>
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row" style="padding-top:1em">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">

                                            @if ($message = Session::get('success'))

                                                <div class="alert alert-success">

                                                    <p>{{ $message }}</p>

                                                </div>

                                            @endif

                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0;">
                                                <thead>
                                                <tr>
                                                    <th>Fname</th>
                                                    <th>Lname</th>
                                                    <th>Birth Date</th>
                                                    <th>Qualification</th>
                                                    <th>Idno</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>

                                                </tr>

                                                </thead>
                                                <tbody>

                                                    <?php

                                                    foreach ($loyal as $key => $value) {
                                                        ?>
                                                    <tr>
                                                        <td>{{$value->fname}}</td>
                                                        <td>{{$value->lname}}</td>
                                                        <td>{{$value->date}}</td>
                                                        <td>{{$value->qualification}}</td>
                                                        <td>{{$value->idno}}</td>
                                                        <td>{{$value->phone}}</td>
                                                        <td>{{$value->email}}</td>
                                                    </tr>
                                                        <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div><!-- container fluid -->

                    </div> <!-- Page content Wrapper -->

                    </div> <!-- content -->

                    <footer class="footer">
                    © <b><?php echo date('Y')?></b> <span class="d-none d-sm-inline-block"> - Crafted   by<i class="mdi mdi-heart text-primary"></i> Cloud9</span>
                    </footer>

                    </div>
                    <!-- End Right content here -->

                    </div>
                    <!-- END wrapper -->
                    <!-- END wrapper -->



                        <!--  Modal content for the above example -->
                        <div class="  modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Large modal</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="model-body">
                                        <div class="p-2" >
                                            rrrrr</div>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->







                            <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- Required datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>



