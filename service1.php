<?php
include 'db.php';  // make sure db.php is in the same folder
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>iDESIGN - Interior Design HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
.service-image {
    width: 150px;
    height: 150px;
    object-fit: cover;
    margin: 0 auto 10px; /* center horizontally and add margin below */
    border-radius: 8px;   /* optional: rounded corners */
}
</style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container position-relative" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 display-5 text-white"><span class="text-primary">i</span>DESIGN</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="home.html" class="nav-item nav-link">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service1.php" class="nav-item nav-link active">Service</a>
                        <a href="project.php" class="nav-item nav-link">Project</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="single.html" class="dropdown-item">Blog Detail</a>
                            </div>
                        </div>
                        <a href="enquiries.php" class="nav-item nav-link active">Enquiries</a>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                        <a href="subscriber.php" class="nav-item nav-link">Our Clients</a>
                       
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Under Nav Start -->
    <div class="container-fluid bg-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-left mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Our Office</h5>
                            <p class="m-0">123 Street,pune</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-center mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-email font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Email Us</h5>
                            <p class="m-0">iDESIGN@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-right mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Call Us</h5>
                            <p class="m-0">+91 9975234505</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Under Nav End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Our Services</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                    
        
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                       <!-- Button to go to All Services -->
<div class="text-center my-4">
    <a href="all_services.php" class="btn btn-primary btn-lg">View records</a>
</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


<!-- Services Start -->
<div class="container-fluid py-5">
  <div class="container py-5">
    <div class="row">
      <!-- Left Side (Heading + Form) -->
      <div class="col-lg-6 pr-lg-5">
        <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Awesome Services</h6>
        <h1 class="mb-4 section-title">Awesome Interior Designing Services For Your Home</h1>
        <p>
         Control your services: add or delete
        </p>

        <!-- Add/Remove Form -->
        <div class="bg-light p-4 rounded shadow-sm mt-4">
          <h5 class="mb-3">Manage Services</h5>
        <form id="serviceForm" method="POST" action="add_service.php" enctype="multipart/form-data">
  <div class="form-group">
    <label>Image</label>
    <input type="file" class="form-control" name="image" accept="image/*" required />
  </div>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Service Title" required />
  </div>
  <div class="form-group">
    <label>Description</label>
    <textarea class="form-control" name="description" placeholder="Service Description" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary btn-sm">Add Service</button>
</form>

        </div>
      </div>

      <!-- Right Side (Carousel) -->
      <div class="col-lg-6">
        <div class="owl-carousel service-carousel position-relative" id="serviceCarousel">
          <!-- Services will load dynamically from DB -->
         <?php
          include "db.php";
          $result = $conn->query("SELECT * FROM services ORDER BY id DESC");
          if($result->num_rows > 0){
              while($service = $result->fetch_assoc()){
                  echo '<div class="service-item text-center p-4">';
                  echo '<img src="uploads/'.$service['image'].'" alt="'.$service['title'].'">';
                  echo '<h5>'.$service['title'].'</h5>';
                  echo '<p>'.$service['description'].'</p>';
                  echo '</div>';
              }
          }
          $conn->close();
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Services End -->

    <!-- Features Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5 py-5 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Why Choose Us?</h6>
                    <h1 class="mb-4 section-title">25+ Years Experience In The Interior Design Industry</h1>
                    <p class="mb-4">Emphasizing "25+ Years of Experience in the Interior Design Industry" can significantly enhance your credibility and appeal to potential clients. Here’s why this experience matters:</p>
                    <ul class="list-inline">
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>25+ Years Experience</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Best Interior Design</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Customer Satisfaction</h5></li>
                    </ul>
                    
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img class="h-100" src="img/feature.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Testimonial Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img class="h-100" src="img/testimonial.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-7 py-5 pl-md-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3 pt-5">Testimonial</h6>
                    <h1 class="mb-4 section-title">What Our Clients Say</h1>
                    <div class="owl-carousel testimonial-carousel position-relative pb-5 mb-md-5">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h5>RAJAT MALANI</h5>
                                    <i>BUSSINESS MAN</i>
                                </div>
                            </div>
                            <p>IDESIGN has made our flat into a home, a home which we always wanted. They understood us and gave us our dream home. The journey with them has been an amazing and smooth one for sure..</p>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h5>Olive tolli</h5>
                                    <i>officer</i>
                                </div>
                            </div>
                            <p class="m-0">I absolutely loved the work. I would definitely recommend IDESIGN to anyone. They are very professional and made the entire experience amazing. The best part is that they clearly understood our requirements and budget, and provided the best possible home...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street,pune</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+91 9975234505</p>
                <p><i class="fa fa-envelope mr-2"></i>ISESIGN@gmail.com</p>
                <div class="d-flex justify-content-start mt-4">
                   
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="home.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="about.html"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="service1.php"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                    <a class="text-white mb-2" href="project.php"><i class="fa fa-angle-right mr-2"></i>Our Projects</a>
                    <a class="text-white" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="home.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="about.html"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="service1.php"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                    <a class="text-white mb-2" href="project.php"><i class="fa fa-angle-right mr-2"></i>Our Projects</a>
                    <a class="text-white" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Newsletter</h4>
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control border-0" placeholder="Your Name" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0" placeholder="Your Email" required="required" />
                    </div>
                    <div>
                        <button class="btn btn-lg btn-primary btn-block border-0" type="submit">Submit Now</button>
                    </div>
                </form>
            </div>
        </div>
       
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
function loadServices() {
  $.get("load_services.php", function(data) {
    $("#serviceCarousel").html(data);
    $(".service-carousel").owlCarousel({
      autoplay: true,
      smartSpeed: 1500,
      dots: false,
      loop: true,
      responsive: {0:{items:1},768:{items:2},992:{items:3}}
    });
  });
}

function addService() {
  const form = $("#serviceForm")[0]; // get the form element
  const formData = new FormData(form); // use FormData to include file upload

  $.ajax({
    url: "add_service.php",
    type: "POST",
    data: formData,
    processData: false,  // prevent jQuery from converting the data
    contentType: false,  // let browser set content type
    success: function(response) {
      alert(response);
      loadServices(); // refresh the carousel
      form.reset();   // clear the form after successful submission
    },
    error: function(xhr, status, error) {
      alert("Error: " + error);
    }
  });
}

function removeService(id) {
  if (confirm("Are you sure you want to delete this service?")) {
    $.post("remove_service.php", { id }, function(response) {
      alert(response);
      loadServices();
    });
  }
}

$(document).ready(function() {
  loadServices();
});
</script>
    
</body>

</html>