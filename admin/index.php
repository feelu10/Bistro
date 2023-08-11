

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
        <link rel="shortcut icon" href="application/web/admin/images/favicon.ico">
        <title>Admin Dashboard</title>
        <link type="text/css" rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/css/vendor/dataTables.bootstrap4.css" /><link type="text/css" rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/css/vendor/responsive.bootstrap4.css" /><link type="text/css" rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/css/vendor/buttons.bootstrap4.css" /><link type="text/css" rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/css/vendor/select.bootstrap4.css" /><link type="text/css" rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/css/vendor/fullcalendar.min.css" /><link type="text/css" rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/css/vendor/scheduler.min.css" /><link type="text/css" rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/css/vendor/localappSetting.css" /><link type="text/css" rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/css/vendor/bootstrap-multiselect.css" /><link type="text/css" rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/css/icons.min.css" /><link type="text/css" rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/css/app.min.css" /><link type="text/css" rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/css/vendor/animate.min.css" /><link type="text/css" rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/css/admin.css" />
      </head>
    <body class="loading" data-layout-config='{"layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":true, "showRightSidebarOnStart": true}'>
        <div class="wrapper">
            <div class="leftside-menu">
    <a href="/AvailabilityBookingCalendarPHP/index.php" class="logo text-center logo-light">
        <span class="logo-lg">
            Admin Dashboard        </span>
        <span class="logo-sm">
            Admin Dashboard        </span>
    </a>

    <!-- Sidebar -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <ul class="side-nav">
            <li class="side-nav-item">
                <div class="row navbar-vertical-label mb-2">
                    <div class="col ">
                        <hr class="mb-0 mt-0 navbar-vertical-divider">
                    </div>
                </div>
            </li>
            <li class="side-nav-item menuitem-active">
                <a href="index.php" class="side-nav-link active">
                    <i class="uil-home-alt"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-item">
                <div class="row navbar-vertical-label mt-2 mb-2">
                    <div class="col ">
                        <hr class="mb-0 navbar-vertical-divider">
                    </div>
                </div>
            </li>

            <li class="side-nav-item ">
                <a data-bs-toggle="collapse" href="#calendars-menu-id" aria-expanded="false" aria-controls="Categories" class="side-nav-link ">
                    <i class="mdi mdi-calendar-account-outline"></i>
                    <span> Amenities </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse " id="calendars-menu-id">
                    <ul class="side-nav-second-level">
                        <li class="">
                            <a href="allamenities.php">All Amenities</a>
                        </li>
                        <li class="">
                            <a href="addamenities.php">Add Amenities</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item ">
                <a href="availability.php" class="side-nav-link">
                    <i class="mdi mdi-calendar-month-outline"></i>
                    <span> Availability </span>
                </a>
            </li>

            <li class="side-nav-item ">
                <a href="calendarblocking.php" class="side-nav-link">
                    <i class="mdi mdi-calendar-remove-outline"></i>
                    <span> Calendar Blocking </span>
                </a>
            </li>

            <li class="side-nav-item">
                <div class="row navbar-vertical-label mt-2 mb-2">
                    <div class="col ">
                        <hr class="mb-0 navbar-vertical-divider">
                    </div>
                </div>
            </li>

            <li class="side-nav-item ">
                <a data-bs-toggle="collapse" href="#bookings-menu-id" aria-expanded="false" aria-controls="post" class="side-nav-link">
                    <i class="uil uil-cart"></i>
                    <span> Bookings </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse " id="bookings-menu-id">
                    <ul class="side-nav-second-level">
                        <li class="">
                            <a href="allbookings.php">All Bookings</a>
                        </li>
                        <!-- <li class="">
                            <a href="addbooking.php">Add Booking</a>
                        </li> -->
                    </ul>
                </div>
            </li>
            <li class="side-nav-item ">
                <a data-bs-toggle="collapse" href="#invoices-menu-id" aria-expanded="false" aria-controls="post" class="side-nav-link">
                    <i class="mdi mdi-file-pdf-outline"></i>
                    <span> Invoices </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse " id="invoices-menu-id">
                    <ul class="side-nav-second-level">
                        <li class="">
                            <a href="allinvoices.php">All Invoices</a>
                        </li>
                        <li class="">
                            <a href="addinvoice.php">Add Invoice</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item ">
                <a data-bs-toggle="collapse" href="#statistics-menu-id" aria-expanded="false" aria-controls="post" class="side-nav-link">
                    <i class="mdi mdi-chart-bell-curve"></i>
                    <span> Statistics </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse " id="statistics-menu-id">
                    <ul class="side-nav-second-level">
                        <li class="">
                            <a href="bookingstatistics.php">Booking Statistics</a>
                        </li>
                        <li class="">
                            <a href="amountstatistics.php">Sales Statistics</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <div class="row navbar-vertical-label mt-2 mb-2">
                    <div class="col ">
                        <hr class="mb-0 navbar-vertical-divider">
                    </div>
                </div>
            </li>

                            <li class="side-nav-item ">
                    <a data-bs-toggle="collapse" href="#prices-menu-id" aria-expanded="false" aria-controls="post" class="side-nav-link">
                        <i class="mdi mdi-cash-multiple"></i>
                        <span> Price </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse " id="prices-menu-id">
                        <ul class="side-nav-second-level">

                            <li class="">
                                <a href="priceplan.php">
                                    Price Plan </a>
                            </li>
                            <li class="">
                                <a href="discount.php">
                                    Discount </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="side-nav-item">
                    <div class="row navbar-vertical-label mb-2">
                        <div class="col ">
                            <hr class="mb-0 navbar-vertical-divider">
                        </div>
                    </div>
                </li>

                <li class="side-nav-item ">
                    <a data-bs-toggle="collapse" href="#GzUser" aria-expanded="false" aria-controls="GzUser" class="side-nav-link">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span> Users </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse " id="GzUser">
                        <ul class="side-nav-second-level">
                            <li class="">
                                <a href="allusers.php">All users</a>
                            </li>
                            <li class="">
                                <a href="adduser.php">Add user</a>
                            </li>
                        </ul>
                    </div>
                </li>
                 
            <li class="side-nav-item">
                <div class="row navbar-vertical-label mb-2">
                    <div class="col ">
                        <hr class="mb-0 navbar-vertical-divider">
                    </div>
                </div>
            </li>

                            <li class="side-nav-item ">
                    <a href="calendarsettings.php" class="side-nav-link">
                        <i class="mdi mdi-cog-outline"></i>
                        <span> Calendar Settings </span>
                    </a>
                </li>
               
            
            <li class="side-nav-item">
                <div class="row navbar-vertical-label mb-2">
                    <div class="col ">
                        <hr class="mb-0 navbar-vertical-divider">
                    </div>
                </div>
            </li>

        </ul>
    </div>
</div>         
<!-- Sidebar end -->

<!-- Navbar -->
   <div class="content-page">
                <div id="page-content-id" class="content">
                    <div id="preloader">
                        <div id="status">
                            <div class="bouncing-loader"><div></div><div></div><div></div></div>
                        </div>
                    </div>
                    <div class="navbar-custom">
    <ul class="list-unstyled topbar-menu float-end mb-0">
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
               aria-expanded="false">
                <span class="account-user-avatar"> 
                                            <img class="rounded-circle" src="images/login.jpg" />
                                    </span>
                <span>
                    <span class="account-user-name"> </span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div>
                                    <a href="edituser.php" class="dropdown-item notify-item my-account-user" data-id="1">
                        <i class="mdi mdi-account-circle me-1"></i>
                        <span>My Account</span>
                    </a>
                                                        <a href="calendarsettings.php" class="dropdown-item notify-item nav-top-settings">
                        <i class="mdi mdi-account-edit me-1"></i>
                        <span>Calendar Settings</span>
                    </a>
                                    <a href="login.php" class="dropdown-item notify-item">
                    <i class="mdi mdi-logout me-1"></i>
                    <span>Logout</span>
                </a>
            </div>
        </li>
    </ul>
    <button class="button-menu-mobile open-left">
        <i class="mdi mdi-menu"></i>
    </button>
</div>            
<!-- Navbar end-->

<div id="page-container-id" class="container-fluid">
                        <div class="container-fluid">
    <div class="row animate__animated animate__bounceInRight">
        <div class="col-12">
            <div id="appt-calendar-contaier-id" class="row">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <i class="mdi mdi-account-multiple widget-icon"></i>
                                        </div>
                                        <h5 class="text-muted fw-normal mt-0" title="Available Calendars Today">
                                            Available Table Today                                        </h5>
                                        <h3 class="mt-3 mb-3">4</h3>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                            <div class="col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <i class="mdi mdi-account-multiple widget-icon"></i>
                                        </div>
                                        <h5 class="text-muted fw-normal mt-0" title="Today Resrvations">
                                           <br> Today Reservations                                        </h5>
                                        <h3 class="mt-3 mb-3">4</h3>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div> <!-- end row -->

                    </div>

                     </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 order-xl-1">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mt-2 mb-3">Availability</h4>
                                <div class="table-responsive">
                                    <div id="cal-container" class="dataTables_wrapper form-inline" role="grid">
                                        <div class="overlay"></div>
<div class="loading-img"></div>
<link rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/helpers/Calendar/css/style.css" />
<br />
<div class="gz-cal-head-row">
    <div class="float_right summary-nav">
        <a href="#" class="gz-summary-link-month action-icon" rel="30-3-2023-1"> <i class="mdi mdi-arrow-left-drop-circle-outline"></i> </a>  
        <a href="#" class="gz-summary-link-month action-icon" rel="30-5-2023-1"> <i class="mdi mdi-arrow-right-drop-circle-outline"></i> </a>
    </div>
</div>

<div class="gz-calendars">
    <div class="gz-calendars-head">
        &nbsp;
    </div>
            <div class="gz-cal-title">
            <a href="https://gzscripts.com/AvailabilityBookingCalendarPHP/index.php?controller=GzCalendar&action=edit&id=1">Tables</a>
        </div>
                <div class="gz-cal-title">
            <a href="https://gzscripts.com/AvailabilityBookingCalendarPHP/index.php?controller=GzCalendar&action=edit&id=2">Private Room</a>
        </div>
        </div>
<div class="gz-cal-dates">
    <div class="gz-cal-scroll" style="width: 2501px">
        <div class="gz-cal-head">
            <div class="gz-cal-head-row">
                <span class="month-head-span" style="width: 1229px">Apr 2023</span>
                                    <span class="month-head-span" style="width: 1270px">May 2023</span>
                                </div>
            <div class="gz-cal-head-row">
                                    <span>
                        01<br />
                        Sat                    </span>
                                        <span>
                        02<br />
                        Sun                    </span>
                                        <span>
                        03<br />
                        Mon                    </span>
                                        <span>
                        04<br />
                        Tue                    </span>
                                        <span>
                        05<br />
                        Wed                    </span>
                                        <span>
                        06<br />
                        Thu                    </span>
                                        <span>
                        07<br />
                        Fri                    </span>
                                        <span>
                        08<br />
                        Sat                    </span>
                                        <span>
                        09<br />
                        Sun                    </span>
                                        <span>
                        10<br />
                        Mon                    </span>
                                        <span>
                        11<br />
                        Tue                    </span>
                                        <span>
                        12<br />
                        Wed                    </span>
                                        <span>
                        13<br />
                        Thu                    </span>
                                        <span>
                        14<br />
                        Fri                    </span>
                                        <span>
                        15<br />
                        Sat                    </span>
                                        <span>
                        16<br />
                        Sun                    </span>
                                        <span>
                        17<br />
                        Mon                    </span>
                                        <span>
                        18<br />
                        Tue                    </span>
                                        <span>
                        19<br />
                        Wed                    </span>
                                        <span>
                        20<br />
                        Thu                    </span>
                                        <span>
                        21<br />
                        Fri                    </span>
                                        <span>
                        22<br />
                        Sat                    </span>
                                        <span>
                        23<br />
                        Sun                    </span>
                                        <span>
                        24<br />
                        Mon                    </span>
                                        <span>
                        25<br />
                        Tue                    </span>
                                        <span>
                        26<br />
                        Wed                    </span>
                                        <span>
                        27<br />
                        Thu                    </span>
                                        <span>
                        28<br />
                        Fri                    </span>
                                        <span>
                        29<br />
                        Sat                    </span>
                                        <span>
                        30<br />
                        Sun                    </span>
                                        <span>
                        01<br />
                        Mon                    </span>
                                        <span>
                        02<br />
                        Tue                    </span>
                                        <span>
                        03<br />
                        Wed                    </span>
                                        <span>
                        04<br />
                        Thu                    </span>
                                        <span>
                        05<br />
                        Fri                    </span>
                                        <span>
                        06<br />
                        Sat                    </span>
                                        <span>
                        07<br />
                        Sun                    </span>
                                        <span>
                        08<br />
                        Mon                    </span>
                                        <span>
                        09<br />
                        Tue                    </span>
                                        <span>
                        10<br />
                        Wed                    </span>
                                        <span>
                        11<br />
                        Thu                    </span>
                                        <span>
                        12<br />
                        Fri                    </span>
                                        <span>
                        13<br />
                        Sat                    </span>
                                        <span>
                        14<br />
                        Sun                    </span>
                                        <span>
                        15<br />
                        Mon                    </span>
                                        <span>
                        16<br />
                        Tue                    </span>
                                        <span>
                        17<br />
                        Wed                    </span>
                                        <span>
                        18<br />
                        Thu                    </span>
                                        <span>
                        19<br />
                        Fri                    </span>
                                        <span>
                        20<br />
                        Sat                    </span>
                                        <span>
                        21<br />
                        Sun                    </span>
                                        <span>
                        22<br />
                        Mon                    </span>
                                        <span>
                        23<br />
                        Tue                    </span>
                                        <span>
                        24<br />
                        Wed                    </span>
                                        <span>
                        25<br />
                        Thu                    </span>
                                        <span>
                        26<br />
                        Fri                    </span>
                                        <span>
                        27<br />
                        Sat                    </span>
                                        <span>
                        28<br />
                        Sun                    </span>
                                        <span>
                        29<br />
                        Mon                    </span>
                                        <span>
                        30<br />
                        Tue                    </span>
                                        <span>
                        31<br />
                        Wed                    </span>
                                </div>
        </div>
                    <div class="gz-cal-program" id="gz-cal-program-1">
                                    <a href="" class="calendar" rev="1680307200" rel="1">
                                                01                    </a>
                                        <a href="" class="calendar" rev="1680393600" rel="1">
                                                02                    </a>
                                        <a href="" class="calendar" rev="1680480000" rel="1">
                                                03                    </a>
                                        <a href="" class="calendar" rev="1680566400" rel="1">
                                                04                    </a>
                                        <a href="" class="calendar" rev="1680652800" rel="1">
                                                05                    </a>
                                        <a href="" class="calendar" rev="1680739200" rel="1">
                                                06                    </a>
                                        <a href="" class="calendarPendingNightsStart" rev="1680825600" rel="1">
                                                07                    </a>
                                        <a href="" class="calendarPending" rev="1680912000" rel="1">
                                                08                    </a>
                                        <a href="" class="calendarPending" rev="1680998400" rel="1">
                                                09                    </a>
                                        <a href="" class="calendarPending" rev="1681084800" rel="1">
                                                10                    </a>
                                        <a href="" class="calendarPending" rev="1681171200" rel="1">
                                                11                    </a>
                                        <a href="" class="calendarPending" rev="1681257600" rel="1">
                                                12                    </a>
                                        <a href="" class="calendarPending" rev="1681344000" rel="1">
                                                13                    </a>
                                        <a href="" class="calendarPendingNightsEnd" rev="1681430400" rel="1">
                                                14                    </a>
                                        <a href="" class="calendar" rev="1681516800" rel="1">
                                                15                    </a>
                                        <a href="" class="calendar" rev="1681603200" rel="1">
                                                16                    </a>
                                        <a href="" class="calendar" rev="1681689600" rel="1">
                                                17                    </a>
                                        <a href="" class="calendar" rev="1681776000" rel="1">
                                                18                    </a>
                                        <a href="" class="calendar" rev="1681862400" rel="1">
                                                19                    </a>
                                        <a href="" class="calendar" rev="1681948800" rel="1">
                                                20                    </a>
                                        <a href="" class="calendar" rev="1682035200" rel="1">
                                                21                    </a>
                                        <a href="" class="calendar" rev="1682121600" rel="1">
                                                22                    </a>
                                        <a href="" class="calendar" rev="1682208000" rel="1">
                                                23                    </a>
                                        <a href="" class="calendar" rev="1682294400" rel="1">
                                                24                    </a>
                                        <a href="" class="calendar" rev="1682380800" rel="1">
                                                25                    </a>
                                        <a href="" class="calendar" rev="1682467200" rel="1">
                                                26                    </a>
                                        <a href="" class="calendar" rev="1682553600" rel="1">
                                                27                    </a>
                                        <a href="" class="calendar" rev="1682640000" rel="1">
                                                28                    </a>
                                        <a href="" class="calendar" rev="1682726400" rel="1">
                                                29                    </a>
                                        <a href="" class="calendar" rev="1682812800" rel="1">
                                                30                    </a>
                                        <a href="" class="calendar" rev="1682899200" rel="1">
                                                01                    </a>
                                        <a href="" class="calendar" rev="1682985600" rel="1">
                                                02                    </a>
                                        <a href="" class="calendar" rev="1683072000" rel="1">
                                                03                    </a>
                                        <a href="" class="calendar" rev="1683158400" rel="1">
                                                04                    </a>
                                        <a href="" class="calendar" rev="1683244800" rel="1">
                                                05                    </a>
                                        <a href="" class="calendar" rev="1683331200" rel="1">
                                                06                    </a>
                                        <a href="" class="calendar" rev="1683417600" rel="1">
                                                07                    </a>
                                        <a href="" class="calendar" rev="1683504000" rel="1">
                                                08                    </a>
                                        <a href="" class="calendar" rev="1683590400" rel="1">
                                                09                    </a>
                                        <a href="" class="calendarReservedNightsStart" rev="1683676800" rel="1">
                                                10                    </a>
                                        <a href="" class="calendarReserved" rev="1683763200" rel="1">
                                                11                    </a>
                                        <a href="" class="calendarReserved" rev="1683849600" rel="1">
                                                12                    </a>
                                        <a href="" class="calendarReserved" rev="1683936000" rel="1">
                                                13                    </a>
                                        <a href="" class="calendarReserved" rev="1684022400" rel="1">
                                                14                    </a>
                                        <a href="" class="calendarReserved" rev="1684108800" rel="1">
                                                15                    </a>
                                        <a href="" class="calendarReserved" rev="1684195200" rel="1">
                                                16                    </a>
                                        <a href="" class="calendarReserved" rev="1684281600" rel="1">
                                                17                    </a>
                                        <a href="" class="calendarReserved" rev="1684368000" rel="1">
                                                18                    </a>
                                        <a href="" class="calendarReserved" rev="1684454400" rel="1">
                                                19                    </a>
                                        <a href="" class="calendarReserved" rev="1684540800" rel="1">
                                                20                    </a>
                                        <a href="" class="calendarReserved" rev="1684627200" rel="1">
                                                21                    </a>
                                        <a href="" class="calendarReserved" rev="1684713600" rel="1">
                                                22                    </a>
                                        <a href="" class="calendarReserved" rev="1684800000" rel="1">
                                                23                    </a>
                                        <a href="" class="calendarReservedNightsEnd" rev="1684886400" rel="1">
                                                24                    </a>
                                        <a href="" class="calendar" rev="1684972800" rel="1">
                                                25                    </a>
                                        <a href="" class="calendar" rev="1685059200" rel="1">
                                                26                    </a>
                                        <a href="" class="calendar" rev="1685145600" rel="1">
                                                27                    </a>
                                        <a href="" class="calendar" rev="1685232000" rel="1">
                                                28                    </a>
                                        <a href="" class="calendar" rev="1685318400" rel="1">
                                                29                    </a>
                                        <a href="" class="calendar" rev="1685404800" rel="1">
                                                30                    </a>
                                        <a href="" class="calendar" rev="1685491200" rel="1">
                                                31                    </a>
                                </div>
                        <div class="gz-cal-program" id="gz-cal-program-2">
                                    <a href="" class="calendar" rev="1680307200" rel="2">
                                                01                    </a>
                                        <a href="" class="calendar" rev="1680393600" rel="2">
                                                02                    </a>
                                        <a href="" class="calendar" rev="1680480000" rel="2">
                                                03                    </a>
                                        <a href="" class="calendar" rev="1680566400" rel="2">
                                                04                    </a>
                                        <a href="" class="calendar" rev="1680652800" rel="2">
                                                05                    </a>
                                        <a href="" class="calendar" rev="1680739200" rel="2">
                                                06                    </a>
                                        <a href="" class="calendar" rev="1680825600" rel="2">
                                                07                    </a>
                                        <a href="" class="calendar" rev="1680912000" rel="2">
                                                08                    </a>
                                        <a href="" class="calendar" rev="1680998400" rel="2">
                                                09                    </a>
                                        <a href="" class="calendar" rev="1681084800" rel="2">
                                                10                    </a>
                                        <a href="" class="calendar" rev="1681171200" rel="2">
                                                11                    </a>
                                        <a href="" class="calendar" rev="1681257600" rel="2">
                                                12                    </a>
                                        <a href="" class="calendar" rev="1681344000" rel="2">
                                                13                    </a>
                                        <a href="" class="calendar" rev="1681430400" rel="2">
                                                14                    </a>
                                        <a href="" class="calendar" rev="1681516800" rel="2">
                                                15                    </a>
                                        <a href="" class="calendar" rev="1681603200" rel="2">
                                                16                    </a>
                                        <a href="" class="calendar" rev="1681689600" rel="2">
                                                17                    </a>
                                        <a href="" class="calendar" rev="1681776000" rel="2">
                                                18                    </a>
                                        <a href="" class="calendar" rev="1681862400" rel="2">
                                                19                    </a>
                                        <a href="" class="calendar" rev="1681948800" rel="2">
                                                20                    </a>
                                        <a href="" class="calendar" rev="1682035200" rel="2">
                                                21                    </a>
                                        <a href="" class="calendar" rev="1682121600" rel="2">
                                                22                    </a>
                                        <a href="" class="calendar" rev="1682208000" rel="2">
                                                23                    </a>
                                        <a href="" class="calendar" rev="1682294400" rel="2">
                                                24                    </a>
                                        <a href="" class="calendar" rev="1682380800" rel="2">
                                                25                    </a>
                                        <a href="" class="calendar" rev="1682467200" rel="2">
                                                26                    </a>
                                        <a href="" class="calendar" rev="1682553600" rel="2">
                                                27                    </a>
                                        <a href="" class="calendar" rev="1682640000" rel="2">
                                                28                    </a>
                                        <a href="" class="calendar" rev="1682726400" rel="2">
                                                29                    </a>
                                        <a href="" class="calendar" rev="1682812800" rel="2">
                                                30                    </a>
                                        <a href="" class="calendar" rev="1682899200" rel="2">
                                                01                    </a>
                                        <a href="" class="calendar" rev="1682985600" rel="2">
                                                02                    </a>
                                        <a href="" class="calendar" rev="1683072000" rel="2">
                                                03                    </a>
                                        <a href="" class="calendar" rev="1683158400" rel="2">
                                                04                    </a>
                                        <a href="" class="calendar" rev="1683244800" rel="2">
                                                05                    </a>
                                        <a href="" class="calendar" rev="1683331200" rel="2">
                                                06                    </a>
                                        <a href="" class="calendar" rev="1683417600" rel="2">
                                                07                    </a>
                                        <a href="" class="calendar" rev="1683504000" rel="2">
                                                08                    </a>
                                        <a href="" class="calendar" rev="1683590400" rel="2">
                                                09                    </a>
                                        <a href="" class="calendar" rev="1683676800" rel="2">
                                                10                    </a>
                                        <a href="" class="calendar" rev="1683763200" rel="2">
                                                11                    </a>
                                        <a href="" class="calendar" rev="1683849600" rel="2">
                                                12                    </a>
                                        <a href="" class="calendar" rev="1683936000" rel="2">
                                                13                    </a>
                                        <a href="" class="calendar" rev="1684022400" rel="2">
                                                14                    </a>
                                        <a href="" class="calendar" rev="1684108800" rel="2">
                                                15                    </a>
                                        <a href="" class="calendar" rev="1684195200" rel="2">
                                                16                    </a>
                                        <a href="" class="calendar" rev="1684281600" rel="2">
                                                17                    </a>
                                        <a href="" class="calendar" rev="1684368000" rel="2">
                                                18                    </a>
                                        <a href="" class="calendar" rev="1684454400" rel="2">
                                                19                    </a>
                                        <a href="" class="calendar" rev="1684540800" rel="2">
                                                20                    </a>
                                        <a href="" class="calendar" rev="1684627200" rel="2">
                                                21                    </a>
                                        <a href="" class="calendar" rev="1684713600" rel="2">
                                                22                    </a>
                                        <a href="" class="calendar" rev="1684800000" rel="2">
                                                23                    </a>
                                        <a href="" class="calendar" rev="1684886400" rel="2">
                                                24                    </a>
                                        <a href="" class="calendar" rev="1684972800" rel="2">
                                                25                    </a>
                                        <a href="" class="calendar" rev="1685059200" rel="2">
                                                26                    </a>
                                        <a href="" class="calendar" rev="1685145600" rel="2">
                                                27                    </a>
                                        <a href="" class="calendar" rev="1685232000" rel="2">
                                                28                    </a>
                                        <a href="" class="calendar" rev="1685318400" rel="2">
                                                29                    </a>
                                        <a href="" class="calendar" rev="1685404800" rel="2">
                                                30                    </a>
                                        <a href="" class="calendar" rev="1685491200" rel="2">
                                                31                    </a>
                                </div>
                </div>
</div>                                    </div>
                                    <form name="table-frm" id="table-frm-id" method="post" action="availability.php">
                                        <div id="booking_container"></div>
                                    </form>
                                </div> 
                            </div> 
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="week-chart" style="display: none;" data-y="1" data-a="0"></div>
    <div class="week-chart" style="display: none;" data-y="2" data-a="0"></div>
    <div class="week-chart" style="display: none;" data-y="3" data-a="0"></div>
    <div class="week-chart" style="display: none;" data-y="4" data-a="0"></div>
    <div class="week-chart" style="display: none;" data-y="5" data-a="0"></div>
    <div class="week-chart" style="display: none;" data-y="6" data-a="0"></div>
    <div class="week-chart" style="display: none;" data-y="7" data-a="0"></div>
    <div class="last-week-chart" style="display: none;" data-y="1" data-a="0"></div>
    <div class="last-week-chart" style="display: none;" data-y="2" data-a="0"></div>
    <div class="last-week-chart" style="display: none;" data-y="3" data-a="0"></div>
    <div class="last-week-chart" style="display: none;" data-y="4" data-a="0"></div>
    <div class="last-week-chart" style="display: none;" data-y="5" data-a="0"></div>
    <div class="last-week-chart" style="display: none;" data-y="6" data-a="0"></div>
    <div class="last-week-chart" style="display: none;" data-y="7" data-a="0"></div>
                    </div>
                </div>

                <!-- Footer-->
                <footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                Copyright © 2023
                <a target="_blank" href="#">MS</a>
            </div>
        </div>
    </div>
</footer>            </div>
        </div>
       
       <script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/app.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/moment.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/moment-timezone.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/fullcalendar.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/scheduler.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/bootstrap-multiselect.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/jquery.validate.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/jquery.form.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/jquery.dataTables.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/dataTables.buttons.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/buttons.bootstrap4.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/buttons.html5.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/buttons.flash.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/buttons.print.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/apexcharts.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/plugins/tinymce/js/tinymce/tinymce.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/pages/GzAdmin.js"></script>


     </body>
</html>
