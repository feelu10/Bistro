

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/css/vendor/dataTables.bootstrap4.css" /><link type="text/css" rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/css/vendor/responsive.bootstrap4.css" /><link type="text/css" rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/css/vendor/buttons.bootstrap4.css" /><link type="text/css" rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/css/vendor/select.bootstrap4.css" /><link type="text/css" rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/css/vendor/fullcalendar.min.css" /><link type="text/css" rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/css/vendor/scheduler.min.css" /><link type="text/css" rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/css/vendor/localappSetting.css" /><link type="text/css" rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/css/vendor/bootstrap-multiselect.css" /><link type="text/css" rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/css/icons.min.css" /><link type="text/css" rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/css/app.min.css" /><link type="text/css" rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/css/vendor/animate.min.css" /><link type="text/css" rel="stylesheet" href="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/css/admin.css" /><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/app.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/moment.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/moment-timezone.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/fullcalendar.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/scheduler.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/bootstrap-multiselect.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/jquery.validate.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/jquery.form.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/jquery.dataTables.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/dataTables.buttons.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/buttons.bootstrap4.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/buttons.html5.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/buttons.flash.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/buttons.print.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/vendor/apexcharts.min.js"></script><script type="text/javascript" src="https://gzscripts.com/AvailabilityBookingCalendarPHP/application/web/admin/js/pages/login.js"></script>    </head>
    
            <body class="loading authentication-bg">
        <div id="error-status" class="error-signup"></div>
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
    <div class="card">
        <div id="login-page-header" class="card-header pt-4 pb-4 text-center bg-primary">
            <div class="text-center col-sm-12 m-auto">
                <h4 class="text-dark-50 text-center mt-0 fw-bold">Sign In</h4>
                <p class="text-muted">Enter your email address and password to access admin panel.</p>
            </div>
        </div>
        <div class="card-body p-4">

            <form name="login_form" method="POST" action="controller/logins.php" id="login-frm-id">
                <input type="hidden" name="login_user" value="1" />
                <div class="form-floating mb-3">
                    <input class="form-control" type="email" id="floatingInput" name="user_email" placeholder="Enter your email">
                    <label for="floatingInput" class="form-label">Email address</label>
                    <span class="invalid-feedback"></span>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" id="floatingPassword" class="form-control" name="user_password" placeholder="Enter your password">
                    <label for="floatingPassword">Password</label>
                    <span class="invalid-feedback"></span>
                </div>
                <div class="mb-3 mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                        <label class="form-check-label" for="checkbox-signin">Remember Me</label>
                    </div>
                </div>
                <div class="mb-3 mb-0 text-center">
                    <button class="btn btn-primary" type="submit" value=Login> Log In </button>
                </div>

                <!--  -->

                <?php 
                if (isset($_GET["newpwd"])){
                    if ($_GET["newpwd"] == "passwordupdated"){
                        echo '<p class="signupsuccess">Your password has been reset! </p>';
                    }
                }
                
                ?>


                <a href="forgot.php" class="text-muted text-center row">
                    <small>Forgot your password?</small>
                </a>
            </form>
        </div>
    </div>
</div>                </div>
                <footer class="footer footer-alt">
                    <strong>Copyright ©  2023 <a href="#">MS</a>.</strong> All rights
                    reserved.
                </footer>
            </div>
    </body>
</html>