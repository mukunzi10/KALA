<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <div class="left-side-logo d-block d-lg-none">
        <div class="text-center">

            <a href="index.html" class="logo"><img src="/assets/images/log1.png" width="230" height="70" alt="logo"></a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft">

        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>

                <li>
                    <a href="{{ 'index' }}" class="waves-effect">
                        <i class="dripicons-meter"></i>
                        <span> Dashboard <span class="badge badge-success badge-pill float-right">3</span></span>
                    </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> Loyals </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{'layal'}}"> loyals Registration</a></li>
                        <li><a href="{{'loyal'}}">System loyals</a></li>

                        <li><a href="#">Loyals Activity</a></li>

                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-broadcast"></i> <span> Advanced UI </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="advanced-alertify.html">Alertify</a></li>
                        <li><a href="advanced-rating.html">Rating</a></li>
                        <li><a href="advanced-nestable.html">Nestable</a></li>
                        <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                        <li><a href="advanced-sweet-alert.html">Sweet-Alert</a></li>
                        <li><a href="advanced-lightbox.html">Lightbox</a></li>
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

                    <a href="index.html" class="logo"><img src="/assets/images/lo.jpg"  alt="logo" style="height: 4.5em; width:16em" ></a>
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
                                <span class="badge badge-danger float-right">4</span>
                                <h5>Messages</h5>
                            </div>
                            <div class="slimscroll" style="max-height: 230px;">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="/assets/images/users/user-2.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                    <p class="notify-details"><b>Jones Mutabazi</b><span class="text-muted">Application For Help.</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="/assets/images/users/user-3.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                    <p class="notify-details"><b>SHEMA Vierry</b><span class="text-muted">You have 2 unread messages Responses</span></p>
                                </a>

                            </div>

                        </div>
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell-outline noti-icon"></i>
                            <span class="badge badge-success badge-pill noti-icon-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <span class="badge badge-danger float-right">84</span>
                                <h5>Notification</h5>
                            </div>

                            <div class="slimscroll" style="max-height: 230px;">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Help Me please</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<span class="text-muted">You have 10 unread messages</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                    <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span></p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-all">
                                View All
                            </a>

                        </div>
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <img src="/assets/images/users/user-1.jpg" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                            <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                            <a class="dropdown-item" href="#"><span class="badge badge-success mt-1 float-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
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



<div style="width: 100%">
<x-app-layout>


<div class="py-12">

</div>
</div>
</x-app-layout>
