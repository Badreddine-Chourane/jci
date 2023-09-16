<?php
$con = mysqli_connect('127.0.0.1', 'root', '', 'JCI') or die(mysqli_error($con));

// Query for categories table
$query1 = "SELECT * FROM category";
$result1 = mysqli_query($con, $query1) or die(mysqli_error($con));
$rows1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);

// Query for upcoming events table
$query2 = "SELECT * FROM UpcomingEvent";
$result2 = mysqli_query($con, $query2) or die(mysqli_error($con));
$rows2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);

// Query for members table
$query3 = "SELECT * FROM members";
$result3 = mysqli_query($con, $query3) or die(mysqli_error($con));
$rows3 = mysqli_fetch_all($result3, MYSQLI_ASSOC);
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>JCI CASAIMPACT</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
		<link rel="stylesheet" href="css/style.css">
         <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="assets/img/logos/JCI Casa Impact.png" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#page-top">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#JCI">JCI</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pole">Pole</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Upcoming=events">Upcoming Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Our Teame</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead imgg">
  <div class="container">
    <div class="masthead-heading text-uppercase">JCI <span class="typed" data-typed-items="CasaImpact"></span></div>
    <p>Organisation locale membre du premier réseau mondial des jeunes citoyens actifs</p>
    <a class="btn btn-dark btn-xl text-uppercase" href="#JCI">Devenir membre</a>
  </div>
</header> 
    <!-- Services-->
    <section class="page-section" id="JCI">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">JCI Network</h2>
            <br>
            <div class="row text-center">
                <div class="col-md-4 portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#JCI-Monde">
                        <img class="img-fluid" src="assets/img/portfolio/1.jpg" alt="JCI Monde" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">
                            <h4>JCI Monde</h4>
                        </div>
                        <div class="portfolio-caption-subheading text-muted">Illustration</div>
                    </div>
                </div>
                <div class="col-md-4 portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#JCI-Morocco">
                        <img class="img-fluid" src="assets/img/portfolio/1.jpg" alt="JCI Morocco" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">
                            <h4>JCI Morocco</h4>
                        </div>
                        <div class="portfolio-caption-subheading text-muted">Illustration</div>
                    </div>
                </div>
                <div class="col-md-4 portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#JCI-CasaImpact">
                        <img class="img-fluid" src="assets/img/portfolio/1.jpg" alt="JCI CasaImpact" />
                    </a>
                    <div class="JCI-CasaImpact-caption">
                        <div class="portfolio-caption-heading">
                            <h4>JCI CasaImpact</h4>
                        </div>
                        <div class="portfolio-caption-subheading text-muted">Illustration</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Poles Section -->
<section class="page-section bg-light" id="poles">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Nos Poles</h2>
        </div>
        <div class="row justify-content-center">
            <?php foreach ($rows1 as $row) {?>
                <div class="col-md-4 mb-5">
                    <div class="card">
                        <img class="card-img-top" src="<?=$row['img']?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?=$row['category']?></h5>
                            <p class="card-text"><?=$row['C_text']?></p>
                            <a href="project.php?id=<?=$row['C_id']?>" class="btn btn-dark">Voir les projets</a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</section>
    <!-- About-->
    <section id="Upcoming=events"  class="ftco-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">
                <h2 class="section-heading text-uppercase">Upcoming-events</h2>

                </div>
                <div class="col-md-12">
                    <div class="featured-carousel owl-carousel">

                        <?php foreach ($rows2 as $row) {?>
                        <div class="item">
                            <div class="blog-entry">
                                <a href="#" class="block-20 d-flex align-items-start"
                                    style="background-image: url('<?=$row['E_img']?>');">
                                    <div class="meta-date text-center p-2">

                                        <span class="yr"><?=$row['E_date']?></span>
                                    </div>
                                </a>
                                <div class="text border border-top-0 p-4">
                                    <h3 class="heading"><?=$row['E_nom']?></h3>
                                    <p><?=$row['E_text']?></p>

                                </div>
                            </div>
                        </div>
                        <?php }?>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row">
                <?php foreach ($rows3 as $row) {?>
                <div class="col-lg-12">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?=$row['image']?>" alt="..." />
                        <h4><?=$row['nom']?> <?=$row['prenom']?></h4>
                        <p class="text-muted"><?=$row['role']?></p>

                        <a class="btn btn-dark btn-social mx-2" href="<?=$row['Linkdin']?>" aria-label="Larry Parker LinkedIn Profile"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <?php }?>

        </div>
    </section>

    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Join Us</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->

            <form method="post" id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" name="Full_name"   type="text" placeholder="Your Name *"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" name="email"  type="email" placeholder="Your Email *"
                                data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" name="phone"  type="tel" placeholder="Your Phone *"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" name="message"  placeholder="Your Message *"
                                data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                            </div>
                        </div>
                    </div>
                    
                </div>

                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Submited </div>

                        <br />
                          </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
                <!-- Submit Button-->
                <div class="text-center">
                <button name="submit" class="btn btn-light btn-xl text-uppercase " value="submit">save</button>

                   

                </div>
                <?php if (isset($_POST['submit'])) {

                        extract($_POST);

                        $query = "INSERT INTO contact VALUES (null,'$Full_name','$email','$phone','$message')";
                        mysqli_query($con, $query) or die(mysqli_error($con));
                        header("location:index.php");
}
?>
            </form>
        </div>
    </section>
    
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
     <!-- jci Monde -->
     <div class="portfolio-modal modal fade" id="JCI-Monde" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal">
                <img src="assets/img/close-icon.svg" alt="Close modal" />
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <h2 class="text-uppercase">JCI Monde</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Client:</strong> Threads
                                </li>
                                <li>
                                    <strong>Category:</strong> Illustration
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-xmark me-1"></i> Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
     <!-- jci Maroc -->
    <div class="portfolio-modal modal fade" id="JCI-Morocco" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">JCI Maroc</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>


                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Threads
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Illustration
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jci CasaImpact -->
    <div class="portfolio-modal modal fade" id="JCI-CasaImpact" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">JCI CasaImpact</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <section class="page-section" id="Upcoming=events">
                                    <div class="container">
                                        <div class="text-center">
                                            <h2 class="section-heading text-uppercase">About</h2>
                                            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet
                                                consectetur.</h3>
                                        </div>
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-image"><img class="rounded-circle img-fluid"
                                                        src="assets/img/about/1.jpg" alt="..." /></div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading">
                                                        <h4>2009-2011</h4>
                                                        <h4 class="subheading">Our Humble Beginnings</h4>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Sunt ut voluptatum eius sapiente, totam
                                                            reiciendis temporibus qui quibusdam, recusandae sit vero
                                                            unde, sed, incidunt et ea quo dolore laudantium consectetur!
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="timeline-inverted">
                                                <div class="timeline-image"><img class="rounded-circle img-fluid"
                                                        src="assets/img/about/2.jpg" alt="..." /></div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading">
                                                        <h4>March 2011</h4>
                                                        <h4 class="subheading">An Agency is Born</h4>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Sunt ut voluptatum eius sapiente, totam
                                                            reiciendis temporibus qui quibusdam, recusandae sit vero
                                                            unde, sed, incidunt et ea quo dolore laudantium consectetur!
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-image"><img class="rounded-circle img-fluid"
                                                        src="assets/img/about/3.jpg" alt="..." /></div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading">
                                                        <h4>December 2015</h4>
                                                        <h4 class="subheading">Transition to Full Service</h4>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Sunt ut voluptatum eius sapiente, totam
                                                            reiciendis temporibus qui quibusdam, recusandae sit vero
                                                            unde, sed, incidunt et ea quo dolore laudantium consectetur!
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="timeline-inverted">
                                                <div class="timeline-image"><img class="rounded-circle img-fluid"
                                                        src="assets/img/about/4.jpg" alt="..." /></div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading">
                                                        <h4>July 2020</h4>
                                                        <h4 class="subheading">Phase Two Expansion</h4>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Sunt ut voluptatum eius sapiente, totam
                                                            reiciendis temporibus qui quibusdam, recusandae sit vero
                                                            unde, sed, incidunt et ea quo dolore laudantium consectetur!
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="timeline-inverted">
                                                <div class="timeline-image">
                                                    <h4>
                                                        Be Part
                                                        <br />
                                                        Of Our
                                                        <br />
                                                        Story!
                                                    </h4>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </section>

                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Threads
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Illustration
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Explore
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Graphic Design
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3 modal popup-->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
