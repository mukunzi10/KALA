
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

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="{{ URL::asset('assets/plugins/morris/morris.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">

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

            <div class="left-side-log1 d-block d-lg-none">
                <div class="text-center">

                    <a href="index.html" class="log1"><img src="/assets/images/log1.png" width="230" height="70" alt="log1"></a>
                </div>
            </div>

            <div class="sidebar-inner slimscrollleft">

                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li>
                            <a href="{{ 'dashboard' }}" class="waves-effect">
                                <i class="dripicons-meter"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> Loyals </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{'layal'}}"> loyals Registration</a></li>
                                <li><a href="{{'report'}}">System loyals</a></li>

                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-human-male-female "></i> <span> Citizen Data </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{'citizen'}}">Citizen Registration</a></li>
                                <li><a href="{{'citizn'}}">Citizen Report</a></li>


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

                                <a href="#" class="log"><img src="/assets/images/log1.png"  alt="log" style="height: 5.8em; width:19.8em" ></a>
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
                                        <a class="dropdown-item" href="{{route('logout')}}"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
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
                                    <h5 class="page-title"><b>KALA</b></h5>
                                </div>
                            </div>
                            <!-- end row -->


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Product</h2>

            </div>

            <div class="pull-right">

                {{-- <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a> --}}

            </div>

        </div>

    </div>



    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn</strong>




            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="btn btn-primary" href="{{ 'dashboard' }}"> Back</a>

            <div class="form-group bg-primary">

                <strong>Details:nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn</strong>
                <h3>{{ $citizen->lname }}</h3>

            </div>


        </div>

    </div>

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


<!-- jQuery  -->
<script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/modernizr.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/detect.js')}}"></script>
<script src="{{ URL::asset('assets/js/fastclick.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.blockUI.js')}}"></script>
<script src="{{ URL::asset('assets/js/waves.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.scrollTo.min.js')}}"></script>

<!-- skycons -->
<script src="{{ URL::asset('assets/plugins/skycons/skycons.min.js')}}"></script>

<!-- skycons -->
<script src="{{ URL::asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>

<!--Morris Chart-->
<script src="{{ URL::asset('assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/raphael/raphael-min.js')}}"></script>

<!-- dashboard -->
<script src="{{ URL::asset('assets/pages/dashboard.js')}}"></script>

<!-- App js -->
<script src="{{ URL::asset('assets/js/app.js')}}"></script>


