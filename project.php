<?php
include "projects_db.php"; // connects to your 'interior' database

// Fetch project logs along with category from projects table
$result = $conn->query("
    SELECT pl.id, pl.project_title, pl.action, pl.created_at, p.category 
    FROM project_logs pl
    LEFT JOIN projects p ON pl.project_title = p.title
    ORDER BY pl.created_at DESC
");
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
                        <a href="service1.php" class="nav-item nav-link">Service</a>
                        <a href="project.php" class="nav-item nav-link active">Project</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="single.html" class="dropdown-item">Blog Detail</a>
                            </div>
                        </div>
                        <a href="enquiries.php" class="nav-item nav-link ">Enquiries</a>
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
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Our Projects</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <!-- Carousel End -->
<div class="text-center my-4">
    <a href="all_projects.php" class="btn btn-primary btn-lg">View records</a>
</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->




<div class="container my-5">
  <h2 class="text-center mb-4">Add New Project</h2>
  <form action="upload.php" method="POST" enctype="multipart/form-data">
    <div class="form-group mb-3">
      <label>Project Title</label>
      <input type="text" class="form-control" name="title" required>
    </div>
    <div class="form-group mb-3">
      <label>Category</label>
      <select class="form-control" name="category" required>
        <option value="first">Complete</option>
        <option value="second">Running</option>
        <option value="third">Upcoming</option>
      </select>
    </div>
    <div class="form-group mb-3">
      <label>Image</label>
      <input type="file" class="form-control" name="image" accept="image/*" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Project</button>
  </form>
</div>

    
   <!-- Projects Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col text-center mb-4">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Projects</h6>
                <h1 class="mb-4">Some Of Our Awesome Interior Designing Projects</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center mb-2">
                <ul class="list-inline mb-4" id="portfolio-flters">
                    <li class="btn btn-outline-primary m-1 active"  data-filter="*">All</li>
                    <li class="btn btn-outline-primary m-1" data-filter=".first">Complete</li>
                    <li class="btn btn-outline-primary m-1" data-filter=".second">Running</li>
                    <li class="btn btn-outline-primary m-1" data-filter=".third">Upcoming</li>
                </ul>
            </div>
        </div>

        <!-- Dynamic Projects Start -->
        <div class="row mx-1 portfolio-container">
        <?php
        $result = $conn->query("SELECT * FROM projects");
        while ($row = $result->fetch_assoc()) {
            echo '
            <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item '.$row['category'].'">
                <div class="position-relative overflow-hidden">
                    <div class="portfolio-img d-flex align-items-center justify-content-center">
                        <img class="img-fluid" src="uploads/'.$row['image'].'" alt="">
                    </div>
                    <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                        <h4 class="text-white mb-4">'.$row['title'].'</h4>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn btn-outline-primary m-1" href="uploads/'.$row['image'].'" data-lightbox="portfolio" data-title="'.$row['title'].'">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a class="btn btn-danger m-1" href="delete.php?id='.$row['id'].'">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>';
        }
        ?>
        </div>
        <!-- Dynamic Projects End -->

    </div>
</div>
<!-- Projects End -->



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street,pune</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+91 9975234505</p>
                <p><i class="fa fa-envelope mr-2"></i>IDESIGN@gmail.com</p>
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
                <form id="newsletterForm">
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
                <div id="message" class="mt-3" style="display:none;"></div> <!-- Message Container -->
            </div>
            
            <script>
                document.getElementById('newsletterForm').addEventListener('submit', function(event) {
                    event.preventDefault(); // Prevent the default form submission
            
                    const name = event.target[0].value;
                    const email = event.target[1].value;
            
                    // AJAX request to the server
                    fetch('subscribe.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({ name, email })
                    })
                    .then(response => response.json())
                    .then(data => {
                        const messageDiv = document.getElementById('message');
                        messageDiv.style.display = 'block';
                        if (data.success) {
                            messageDiv.innerHTML = `Thank you, ${name}! You have subscribed with the email: ${email}`;
                            messageDiv.className = 'alert alert-success';
                        } else {
                            messageDiv.innerHTML = 'Subscription failed. Please try again.';
                            messageDiv.className = 'alert alert-danger';
                        }
                        event.target.reset(); // Clear the form
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        const messageDiv = document.getElementById('message');
                        messageDiv.style.display = 'block';
                        messageDiv.innerHTML = 'An error occurred. Please try again.';
                        messageDiv.className = 'alert alert-danger';
                    });
                });
            </script>
        
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
</body>

</html>