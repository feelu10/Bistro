<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bistro Alley KTV Restaurant</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Bistro Alley</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Service</a>
                        <a href="menu.php" class="nav-item nav-link">Menu</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="booking.php" class="dropdown-item active">Booking</a>
                                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="booking.php" class="btn btn-primary py-2 px-4">Book A Table</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Booking</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.facebook.com/100069532486904/videos/1580201115759726" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center" id="form">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                        <h1 class="text-white mb-4">Book A Table Online</h1>
                        <form method="post"  action="../sendMail.php">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                
                                 <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" name="email" class="form-control" required pattern="[a-zA-Z0-9._%+-]+@gmail\.com$" title="Valid GMAIL address" id="email" placeholder="Your Email" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="date" id="selectedDate" class="form-control" name="date" min="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>" required/>
                                        <label for="datetime">Date </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                    <select name="time" class="form-select" id="weekday">
                                            <?php
                                                for ($i = 7; $i <= 22; $i++) {
                                                if ($i < 12) {
                                                    $text = $i . ' AM';
                                                } elseif ($i == 12) {
                                                    $text = '12 PM';
                                                } else {
                                                    $text = ($i - 12) . ' PM';
                                                }
                                                printf('<option value="%02d:00">%s</option>', $i, $text);
                                                }
                                            ?>
                                    </select>
                                    <select name="time" class="form-select" id="weekend">
                                            <?php
                                                for ($i = 9; $i <= 22; $i++) {
                                                if ($i < 12) {
                                                    $text = $i . ' AM';
                                                } elseif ($i == 12) {
                                                    $text = '12 PM';
                                                } else {
                                                    $text = ($i - 12) . ' PM';
                                                }
                                                printf('<option value="%02d:00">%s</option>', $i, $text);
                                                }
                                            ?>
                                    </select>
                                        <label for="select1">Time</label>
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" name="numberOfPeople" id="select1" required>
                                          <option value="1">People 1-3</option>
                                          <option value="2">People 4-6</option>
                                          <option value="3">People 6-10</option>
                                          <option value="3">People 11 or more</option>
                                        </select>
                                        <label for="select1">No Of People</label>
                                      </div>
                                </div>
                               

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select name="categ" id="categ" class="form-control" >
                                                <option value="0">₱1600/2 Hours KTV Room </option>
                                                <option value="1">₱500/Hour Floor Table</option>
                                        </select>
                                        <label for="type">Select Category</label>
                                    </div>
                                </div>
                               
                                 <div class="col-md-12">
                                    <div class="form-floating ">
                                        <select name="available" id="available" class="form-control" >
                                                <option value="1">Room 1 </option>
                                                <option value="2">Room 2 </option>
                                        </select>
                                        <label for="type">Available</label>
                                    </div>
                                </div>
                               
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="request" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Facebook Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation End -->

        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Reservation</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>
                            Unit F, Eastwalk Commercial Center, Brgy Moras Dela Paz, Sto Tomas Pampanga, San Fernando, Philippines</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0966 446 3488</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>thebistroalley@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/profile.php?id=100069532486904"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Friday</h5>
                        <p>07AM - 10PM</p>
                        <h5 class="text-light fw-normal">Saturday & Sunday</h5>
                        <p>09AM - 10PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <p>Stay in the know, subscribe today!</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="https://www.facebook.com/profile.php?id=100069532486904">The Bistro Alley</a>, All Right Reserved. 
							
							Designed By <a class="border-bottom">MS</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FAQs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

<script>
     $(weekend).attr('disabled',true)
    $(weekend).hide()
    $(selectedDate).change(function(){
        day = getDay($(this).val())
        if(day=='0' || day == '6'){
            $(weekday).attr('disabled',true)
            $(weekday).hide()
            $(weekend).attr('disabled',false)
            $(weekend).show()
        }else{
            $(weekend).attr('disabled',true)
            $(weekend).hide()
            $(weekday).attr('disabled',false)
            $(weekday).show()
        }
    })
    $(categ).change(function(){
        selected=$(this).val()
        if(selected=='0'){

            let room = [
            { value: "Room 1", text: "Room 1" },
            { value: "Room 2", text: "Room 2" },
            ];
            addRemoveOption('available',room)

        }else if(selected=='1'){

            let table = [
            { value: "Table 1", text: "Table 1" },
            { value: "Table 2", text: "Table 2" },
            { value: "Table 3", text: "Table 3" },
            { value: "Table 4", text: "Table 4" },
            { value: "Table 5", text: "Table 5" },
            { value: "Table 6", text: "Table 6" },
            { value: "Table 7", text: "Table 7" },
            { value: "Table 8", text: "Table 8" },
            { value: "Table 9", text: "Table 9" },
            { value: "Table 10", text: "Table 10" },
            { value: "Table 11", text: "Table 11" },
            { value: "Table 12", text: "Table 12" },
            { value: "Table 13", text: "Table 13" },
            { value: "Table 14", text: "Table 14" },
            { value: "Table 15", text: "Table 15" },

            ];
            addRemoveOption('available',table)

        }
  

})
function getDay(date){
    // Create a new Date object with a specific date
var myDate = new Date(date);
// Get the day of the week (0 = Sunday, 1 = Monday, etc.)
var dayOfWeek = myDate.getDay();
return dayOfWeek
}
function addRemoveOption(id,options){

    // Remove all existing options
    $("#"+id).empty();

    // Loop through the options array and create option elements
    for (let i = 0; i < options.length; i++) {
        let option = $("<option>");

        // Set the value and text of the option
        option.val(options[i].value);
        option.text(options[i].text);

        // Add the option to the select element
        $("#"+id).append(option);
    }
}
</script>