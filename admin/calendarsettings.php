

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
                    <span> Calendars </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse " id="calendars-menu-id">
                    <ul class="side-nav-second-level">
                        <li class="">
                            <a href="allcalendar.php">All Calendars</a>
                        </li>
                        <li class="">
                            <a href="addcalendar.php">Add Calendar</a>
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
                <li class="side-nav-item ">
                    <a href="systemsettings.php" class="side-nav-link">
                        <i class="mdi mdi-hammer-wrench"></i>
                        <span> System Settings </span>
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
                                    <a href="edituser.php"  class="dropdown-item notify-item my-account-user" data-id="1">
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

<div id="main-container-settings-id" class="row mt-3">
    <div class="col-xxl-3 col-lg-6 order-lg-1 order-xxl-1">
    <div class="card">
        <div class="card-body p-2">
            <h4 class="header-title mb-1">Calendar Settings</h4>
            <div class="list-group list-group-flush my-2">
                <a id="menu-general-id" href="javascript:" class="list-group-item list-group-item-action border-0 active">
                    <figure><i class="mdi mdi-cogs"></i></figure>
                    General                </a>
                <a id="menu-appearance-id" href="javascript:" class="list-group-item list-group-item-action border-0">
                    <figure><i class="mdi mdi-calendar-edit"></i></figure>
                    Appearance                </a>
                <a id="menu-booking-id" href="javascript:" class="list-group-item list-group-item-action border-0">
                    <figure><i class="mdi mdi-application-cog"></i></figure> 
                    Booking                </a>
                <a id="menu-payment-id" href="javascript:" class="list-group-item list-group-item-action border-0">
                    <figure><i class="mdi mdi-cart-variant"></i></figure> 
                    Payment                </a>
                <a id="menu-email-id" href="javascript:" class="list-group-item list-group-item-action border-0">
                    <figure><i class="mdi mdi-bell-ring-outline"></i></figure>
                    Emails                </a>
            </div>
        </div>
    </div>
</div>
<div class="col-xxl-9 col-lg-9 order-lg-2 order-xxl-1">
    <div class="card card-bordeer-modal border-success border p-2 animate__animated animate__bounceInRight" id="settings-container-frm-id">
        <div class="card-header">
            <h4>General</h4>
        </div>
        <div class="card-body">
            <form id="settings-frm-id" name="settings-frm" method="post">
                <input type="hidden" name="update_option" value="1" />
                <input type="hidden" name="id" value="1" />
                        <div class="mb-2 row">
            <label class="col-sm-3 col-form-label col-form-label-sm" for="title">Email Notification:</label>
            <div class="col-sm-9">
                <input id="notify_email" class="form-control input-sm" type="text" name="notify_email" size="25" value="admin@adimin.com" title="Title" placeholder="title">
            </div>
        </div>
                <div class="mb-2 row">
            <label class="col-sm-3 col-form-label col-form-label-sm" for="date_format">Date format:</label>
            <div class="col-sm-9">
                <select name="date_format" id="date_format" class="form-select" >
                    <option value="Y-m-d|Y/m/d|Y.m.d|m-d-Y|m/d/Y|m.d.Y|d-m-Y|d/m/Y|d.m.Y::Y-m-d">Y-m-d (2014-10-08)</option><option value="Y-m-d|Y/m/d|Y.m.d|m-d-Y|m/d/Y|m.d.Y|d-m-Y|d/m/Y|d.m.Y::Y/m/d">Y/m/d (2014/10/08)</option><option value="Y-m-d|Y/m/d|Y.m.d|m-d-Y|m/d/Y|m.d.Y|d-m-Y|d/m/Y|d.m.Y::Y.m.d">Y.m.d (2014.10.08)</option><option value="Y-m-d|Y/m/d|Y.m.d|m-d-Y|m/d/Y|m.d.Y|d-m-Y|d/m/Y|d.m.Y::m-d-Y">m-d-Y (10-08-2014)</option><option value="Y-m-d|Y/m/d|Y.m.d|m-d-Y|m/d/Y|m.d.Y|d-m-Y|d/m/Y|d.m.Y::m/d/Y">m/d/Y (10/08/2014)</option><option value="Y-m-d|Y/m/d|Y.m.d|m-d-Y|m/d/Y|m.d.Y|d-m-Y|d/m/Y|d.m.Y::m.d.Y">m.d.Y (10.08.2014)</option><option value="Y-m-d|Y/m/d|Y.m.d|m-d-Y|m/d/Y|m.d.Y|d-m-Y|d/m/Y|d.m.Y::d-m-Y">d-m-Y (08-10-2014)</option><option value="Y-m-d|Y/m/d|Y.m.d|m-d-Y|m/d/Y|m.d.Y|d-m-Y|d/m/Y|d.m.Y::d/m/Y">d/m/Y (08/10/2014)</option><option value="Y-m-d|Y/m/d|Y.m.d|m-d-Y|m/d/Y|m.d.Y|d-m-Y|d/m/Y|d.m.Y::d.m.Y" selected="selected">d.m.Y (08.10.2014)</option>                </select>
            </div>
        </div>
                <div class="mb-2 row">
            <label class="col-sm-3 col-form-label col-form-label-sm" for="timezone">Time Zone:</label>
            <div class="col-sm-9">
                <select name="timezone" id="timezone" class="form-select" >
                    <option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::UTC" selected="selected">UTC/GMT +00:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Indian/Mayotte">UTC/GMT +03:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Europe/London">UTC/GMT +01:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Europe/Zurich">UTC/GMT +02:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Pacific/Gambier">UTC/GMT -09:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Pacific/Pitcairn">UTC/GMT -08:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::America/Tortola">UTC/GMT -04:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Atlantic/Stanley">UTC/GMT -03:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Pacific/Easter">UTC/GMT -05:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Pacific/Galapagos">UTC/GMT -06:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::America/Caracas">UTC/GMT -04:30</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::America/Whitehorse">UTC/GMT -07:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Atlantic/South_Georgia">UTC/GMT -02:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::America/St_Johns">UTC/GMT -02:30</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Australia/Perth">UTC/GMT +08:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Indian/Christmas">UTC/GMT +07:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Pacific/Saipan">UTC/GMT +10:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Pacific/Pohnpei">UTC/GMT +11:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Indian/Maldives">UTC/GMT +05:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Pacific/Tongatapu">UTC/GMT +13:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Indian/Chagos">UTC/GMT +06:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Pacific/Wallis">UTC/GMT +12:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Asia/Kolkata">UTC/GMT +05:30</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Pacific/Palau">UTC/GMT +09:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Indian/Reunion">UTC/GMT +04:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Asia/Kabul">UTC/GMT +04:30</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Asia/Kathmandu">UTC/GMT +05:45</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Indian/Cocos">UTC/GMT +06:30</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Asia/Tehran">UTC/GMT +03:30</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Atlantic/Cape_Verde">UTC/GMT -01:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Australia/Broken_Hill">UTC/GMT +10:30</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Australia/Darwin">UTC/GMT +09:30</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Australia/Eucla">UTC/GMT +08:45</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Pacific/Kiritimati">UTC/GMT +14:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Pacific/Chatham">UTC/GMT +13:45</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Pacific/Tahiti">UTC/GMT -10:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Pacific/Marquesas">UTC/GMT -09:30</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Pacific/Pago_Pago">UTC/GMT -11:00</option><option value="UTC|Indian/Mayotte|Europe/London|Europe/Zurich|Pacific/Gambier|Pacific/Pitcairn|America/Tortola|Atlantic/Stanley|Pacific/Easter|Pacific/Galapagos|America/Caracas|America/Whitehorse|Atlantic/South_Georgia|America/St_Johns|Australia/Perth|Indian/Christmas|Pacific/Saipan|Pacific/Pohnpei|Indian/Maldives|Pacific/Tongatapu|Indian/Chagos|Pacific/Wallis|Asia/Kolkata|Pacific/Palau|Indian/Reunion|Asia/Kabul|Asia/Kathmandu|Indian/Cocos|Asia/Tehran|Atlantic/Cape_Verde|Australia/Broken_Hill|Australia/Darwin|Australia/Eucla|Pacific/Kiritimati|Pacific/Chatham|Pacific/Tahiti|Pacific/Marquesas|Pacific/Pago_Pago|Pacific/Norfolk::Pacific/Norfolk">UTC/GMT +11:30 </option>                </select>
            </div>
        </div>
                <div class="mb-2 row">
            <label class="col-sm-3 col-form-label col-form-label-sm" for="week_first_day">First day of the week:</label>
            <div class="col-sm-9">
                <select name="week_first_day" id="week_first_day" class="form-select" >
                    <option value="1|2|3|4|5|6|7::1" selected="selected">Monday</option><option value="1|2|3|4|5|6|7::2">Tuesday</option><option value="1|2|3|4|5|6|7::3">Wednesday</option><option value="1|2|3|4|5|6|7::4">Thursday</option><option value="1|2|3|4|5|6|7::5">Friday</option><option value="1|2|3|4|5|6|7::6">Saturday</option><option value="1|2|3|4|5|6|7::7">Sunday</option>                </select>
            </div>
        </div>
                    </form>
        </div>
        <div class="card-footer">
            <a id="update-gerenal-id" class="btn btn-primary" href="javascript:">Save</a>
        </div>
    </div>
</div>

<div id="paypal-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="paypal-modalLabel">PayPal</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <form id="paypal-frm-id" name="stripe-frm" method="post">
                    <input type="hidden" name="update_option" value="1" />
                    <input type="hidden" name="paypal_option" value="1" />
                    <input type="hidden" name="id" value="1" />
                            <div class="mb-2 row   ">
            <label class="col-sm-2 col-form-label col-form-label-sm" style="width: 230px;">PayPal payment enable:</label>
            <input type="checkbox" id="switch-paypal_allow" data-switch="success" name="paypal_allow" checked=checked value="1" />
            <label for="switch-paypal_allow" data-on-label="Yes" data-off-label="No"></label>
        </div>
                <div class="mb-2 row">
            <label class="col-sm-12 col-form-label col-form-label-sm" for="title">PayPal Email:</label>
            <div class="col-sm-12">
                <input id="paypal_id" class="form-control input-sm" type="text" name="paypal_id" size="25" value="PayPal Email" title="Title" placeholder="title">
            </div>
        </div>
                        </form>
                <button type="button" class="btn btn-primary" id="paypal-settings-updated" data-bs-dismiss="modal" aria-hidden="true">Save</button>
            </div>
        </div>
    </div>
</div>
<div id="stripe-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="stripe-modalLabel">Stripe</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <form id="stripe-frm-id" name="stripe-frm" method="post">
                    <input type="hidden" name="update_option" value="1" />
                    <input type="hidden" name="stripe_option" value="1" />
                    <input type="hidden" name="id" value="1" />
                            <div class="mb-2 row   ">
            <label class="col-sm-2 col-form-label col-form-label-sm" style="width: 230px;">Stripe payment enable:</label>
            <input type="checkbox" id="switch-stripe_allow" data-switch="success" name="stripe_allow" checked=checked value="1" />
            <label for="switch-stripe_allow" data-on-label="Yes" data-off-label="No"></label>
        </div>
                <div class="mb-2 row">
            <label class="col-sm-12 col-form-label col-form-label-sm" for="title">Stripe API key:</label>
            <div class="col-sm-12">
                <input id="stripe_api_key" class="form-control input-sm" type="text" name="stripe_api_key" size="25" value="sk_test_h9LwYF7x3kArT9T1KRkiOFhI" title="Title" placeholder="title">
            </div>
        </div>
                <div class="mb-2 row">
            <label class="col-sm-12 col-form-label col-form-label-sm" for="title">Stripe API publishable key:</label>
            <div class="col-sm-12">
                <input id="stripe_publish_key" class="form-control input-sm" type="text" name="stripe_publish_key" size="25" value="pk_test_0OjvyHNeW4C38BGqsD3ygBhN" title="Title" placeholder="title">
            </div>
        </div>
                        </form>
                <button type="button" class="btn btn-primary" id="stripe-settings-updated" data-bs-dismiss="modal" aria-hidden="true">Save</button>
            </div>
        </div>
    </div>
</div>
<div id="authorize-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="authorize-modalLabel">Authorize.Net</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <form id="authorize-frm-id" name="authorize-frm" method="post">
                    <input type="hidden" name="update_option" value="1" />
                    <input type="hidden" name="authorize_option" value="1" />
                    <input type="hidden" name="id" value="1" />
                            <div class="mb-2 row   ">
            <label class="col-sm-2 col-form-label col-form-label-sm" style="width: 230px;">Authorize.Net payment enable:</label>
            <input type="checkbox" id="switch-authorize_allow" data-switch="success" name="authorize_allow" checked=checked value="1" />
            <label for="switch-authorize_allow" data-on-label="Yes" data-off-label="No"></label>
        </div>
                <div class="mb-2 row">
            <label class="col-sm-12 col-form-label col-form-label-sm" for="title">Authorize.Net API Login ID:</label>
            <div class="col-sm-12">
                <input id="authorize_loginid" class="form-control input-sm" type="text" name="authorize_loginid" size="25" value="Authorize.Net API Login ID" title="Title" placeholder="title">
            </div>
        </div>
                <div class="mb-2 row">
            <label class="col-sm-12 col-form-label col-form-label-sm" for="title">Authorize.Net MD5 Hash:</label>
            <div class="col-sm-12">
                <input id="authorize_md5hash" class="form-control input-sm" type="text" name="authorize_md5hash" size="25" value="Authorize.Net MD5 Hash" title="Title" placeholder="title">
            </div>
        </div>
                <div class="mb-2 row">
            <label class="col-sm-12 col-form-label col-form-label-sm" for="title">Authorize.Net Transaction Key:</label>
            <div class="col-sm-12">
                <input id="authorize_txnkey" class="form-control input-sm" type="text" name="authorize_txnkey" size="25" value="Authorize.Net Transaction Key" title="Title" placeholder="title">
            </div>
        </div>
                        </form>
                <button type="button" class="btn btn-primary" id="authorize-settings-updated" data-bs-dismiss="modal" aria-hidden="true">Save</button>
            </div>
        </div>
    </div>
</div>
<div id="checkout-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="2checkout-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="2checkout-modalLabel">2checkout</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <form id="2checkout-frm-id" name="2checkout-frm" method="post">
                    <input type="hidden" name="update_option" value="1" />
                    <input type="hidden" name="2checkout_option" value="1" />
                    <input type="hidden" name="id" value="1" />
                            <div class="mb-2 row   ">
            <label class="col-sm-2 col-form-label col-form-label-sm" style="width: 230px;">2Checkout payment enable:</label>
            <input type="checkbox" id="switch-2checkout_allow" data-switch="success" name="2checkout_allow" checked=checked value="1" />
            <label for="switch-2checkout_allow" data-on-label="Yes" data-off-label="No"></label>
        </div>
                <div class="mb-2 row">
            <label class="col-sm-12 col-form-label col-form-label-sm" for="title">2checkout Vendor Id:</label>
            <div class="col-sm-12">
                <input id="checkout_acc" class="form-control input-sm" type="text" name="checkout_acc" size="25" value="2checkout Vendor Id" title="Title" placeholder="title">
            </div>
        </div>
                <div class="mb-2 row">
            <label class="col-sm-12 col-form-label col-form-label-sm" for="title">2checkout Secret Word:</label>
            <div class="col-sm-12">
                <input id="checkout_SecretWord" class="form-control input-sm" type="text" name="checkout_SecretWord" size="25" value="2checkout Secret Word" title="Title" placeholder="title">
            </div>
        </div>
                        </form>
                <button type="button" class="btn btn-primary" id="2checkout-settings-updated" data-bs-dismiss="modal" aria-hidden="true">Save</button>
            </div>
        </div>
    </div>
</div>
<div id="cash-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="cash-modalLabel">Cash</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <form id="cash-frm-id" name="cash-frm" method="post">
                    <input type="hidden" name="update_option" value="1" />
                    <input type="hidden" name="cash_option" value="1" />
                    <input type="hidden" name="id" value="1" />
                            <div class="mb-2 row   ">
            <label class="col-sm-2 col-form-label col-form-label-sm" style="width: 230px;">Cash enable:</label>
            <input type="checkbox" id="switch-pay_arrival_allow" data-switch="success" name="pay_arrival_allow" checked=checked value="1" />
            <label for="switch-pay_arrival_allow" data-on-label="Yes" data-off-label="No"></label>
        </div>
                        </form>
                <button type="button" class="btn btn-primary" id="cash-settings-updated" data-bs-dismiss="modal" aria-hidden="true">Save</button>
            </div>
        </div>
    </div>
</div></div>                    </div>
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
        <script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/app.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/moment.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/moment-timezone.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/fullcalendar.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/scheduler.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/bootstrap-multiselect.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/jquery.validate.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/jquery.form.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/jquery.dataTables.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/dataTables.buttons.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/buttons.bootstrap4.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/buttons.html5.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/buttons.flash.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/buttons.print.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/apexcharts.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/bootstrap-colorpicker.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/plugins/tinymce/js/tinymce/tinymce.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/pages/GzSettings.js"></script>    </body>
</html>
