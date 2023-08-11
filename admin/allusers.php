<?php

include ("../user/connect.php");

$query = $conn->query("SELECT * FROM users");
$result = $query->fetch_all(MYSQLI_ASSOC);

$activeLib = [
    0 => 'Inactive',
    1 => 'Active'
];
?>
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
                        <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">All users                    <a href="../admin/adduser.php" class="btn btn-primary btn-sm ms-3 add-new-user">
                        Add New                    </a>
                </h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card animate__animated animate__bounceInRight">
                <div class="card-body">


    <div class="row">
    <form name="table-frm" id="table-frm-id" method="post" action="controller/users.php">
    <div class="table-responsive">
    <table id="user-datatable-id" class="table dt-responsive nowrap w-100" cellpadding="0" cellspacing="0" >
        <thead class="table-light">
            <tr>
                <th style="width: 20px;">
                    <input class="simple" type="checkbox" name="mark-all" id="mark-all-id" value="all"/>
                </th>
                <th>Image</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Status</th>
                <th style="width: 90px;">Edit</th>
            </tr>
        </thead>
        <tbody>
        <?php
                            foreach ($result as $key => $row) {
                            ?>
<tr>
                        <td></td>
                        <td><span class="table-avatar">
                            <img class="me-3 rounded-circle" src="../admin/images/login.jpg" />
                            </span>
                        </td>
                        <td>
                            <strong> <?=  $row['firstname']  ?> </strong>
                        </td>
                        <td>
                            <strong> <?=  $row['lastname']  ?> </strong>
                        </td>
                        <td><?=  $row['user_email']  ?></td>
                        <td><?= $activeLib[$row['is_active']] ?></td>
                        <td>
                            <a class="action-icon icon-edit" href="#&action=edit&id=1" data-id="1" >
                                <i class="mdi mdi-lead-pencil"></i>
                            </a>
                                                    </td>
                    </tr>
                            <?php 
                        }?>
                    
                            </tbody>
        <tfoot>
            <tr>
                <td colspan="6">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Action                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" id="delete-user-service-id" href="javascript:">Delete Selected</a>
                        </div>
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
</div>                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="dialogUserDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete this user?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <p>All user details will be deleted.</p>
            </div>
            <div class="modal-footer">
                <a href="javascript:" id="delete-btn-id" data-id="" class="btn btn-danger">Delete</a>
                <a href="javascript:" id="cancel-btn-id" class="btn btn-default" data-bs-dismiss="modal" aria-hidden="true">Cancel</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="dialogDeleteSelectedUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete this user?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <p>All user details will be deleted.</p>
            </div>
            <div class="modal-footer">
                <a href="javascript:" id="delete-btn-id" data-id="" class="btn btn-danger">delete</a>
                <a href="javascript:" id="cancel-btn-id" class="btn btn-default" data-bs-dismiss="modal" aria-hidden="true">Cancel</a>
            </div>
        </div>
    </div>
</div>                    </div>
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
        <script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/app.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/moment.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/moment-timezone.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/fullcalendar.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/scheduler.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/bootstrap-multiselect.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/jquery.validate.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/jquery.form.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/jquery.dataTables.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/dataTables.buttons.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/buttons.bootstrap4.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/buttons.html5.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/buttons.flash.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/buttons.print.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/apexcharts.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/pages/GzUser.js"></script>    </body>
</html>
