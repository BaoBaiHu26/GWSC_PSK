<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;1,100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>GWSC Home</title>
</head>

<body>
    <section>
        <div class="container">
            <div class="row  mt-2">
                <div class="col-md-4">
                    <img class="navbar-brand" src="images/slider3.jpeg" id="logo_custom" width="30%"  alt="logo">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="col-md-5 text-right">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 w-50" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-info" type="submit">Create Account</button>
                    <button class="btn btn-success ms-2" type="submit">Sign In</button>
                </div>
                    
            </div> 
        </div>
    </section>

    <section>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="destinations.php">Destinations</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#">Become a Member</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
                    <!-- <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div>
            </div>
        </nav>
    </section>

    <section>
        <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/slider1.png" class="d-block h-auto w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
            <div class="carousel-item">
                <img src="images/slider2.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
            </div>
            <div class="carousel-item">
                <img src="images/slider3.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <h1 class="text-center">Choose Your Adventure</h1>
                    <div class="row mt-5">
                        <div class="col-md-1"></div>
                        <div class="col-md-6">
                            <h3 class="text-center">Wild Swimming?</h3>
                            <p class="w-100 mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut aspernatur fugit minima et a suscipit rerum exercitationem culpa ullam. Aperiam repellat omnis placeat ex error suscipit repudiandae odio pariatur sequi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eligendi, facere debitis veniam nulla excepturi itaque voluptatem atque molestiae quas, possimus cum deleniti dolores mollitia praesentium ab quam dicta libero?</p>
                        </div>
                        <div class="col-md-4">
                        <img src="images/ws1.jpeg" class="w-100" alt="">
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                        <img src="images/ws1.jpeg" class="w-100" alt="">
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-center">Wild Swimming?</h3>
                            <p class="w-100 mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut aspernatur fugit minima et a suscipit rerum exercitationem culpa ullam. Aperiam repellat omnis placeat ex error suscipit repudiandae odio pariatur sequi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eligendi, facere debitis veniam nulla excepturi itaque voluptatem atque molestiae quas, possimus cum deleniti dolores mollitia praesentium ab quam dicta libero?</p>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-1"></div>
                        <div class="col-md-6">
                            <h3 class="text-center">Wild Swimming?</h3>
                            <p class="w-100 mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut aspernatur fugit minima et a suscipit rerum exercitationem culpa ullam. Aperiam repellat omnis placeat ex error suscipit repudiandae odio pariatur sequi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eligendi, facere debitis veniam nulla excepturi itaque voluptatem atque molestiae quas, possimus cum deleniti dolores mollitia praesentium ab quam dicta libero?</p>
                        </div>
                        <div class="col-md-4">
                        <img src="images/ws1.jpeg" class="w-100" alt="">
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="container">
            <div class="row mt-4">
                    <div class="col-md-4">
                        <h2>View Counter</h2>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-7">
                        <h3>FAQ --- </h3>
                        <a href="" class="text-decoration-none text-reset"><h4>What? >>>> </h4></a>
                        <a href="" class="text-decoration-none text-reset"><h4>When? >>>> </h4></a>
                        <a href="" class="text-decoration-none text-reset"><h4>How? >>>> </h4></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-4">
                    <h1>GWSC</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident sapiente voluptates excepturi, perferendis officia dolorem odio reiciendis architecto vel quis commodi? Omnis obcaecati beatae neque totam nostrum veniam ipsum dolorem.Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident sapiente voluptates excepturi, perferendis officia dolorem odio reiciendis architecto vel quis commodi? Omnis obcaecati beatae neque totam nostrum veniam ipsum dolorem.</p>
                        <div class="row">
                            <div class="col-md-2 ms-2">
                            <a href="https://www.facebook.com/" class="text-decoration-none text-reset"><i class="bi bi-facebook"></i></a>
                            </div>
                            <div class="col-md-2 ms-2">
                            <a href="https://www.pinterest.com/" class="text-decoration-none text-reset"><i class="bi bi-pinterest"></i></a>
                            </div>
                            <div class="col-md-2 ms-2">
                            <a href="https://www.twitter.com/" class="text-decoration-none text-reset"><i class="bi bi-twitter"></i></a>
                            </div>
                            <div class="col-md-2 ms-2">
                            <a href="https://www.instagram.com/" class="text-decoration-none text-reset"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                        <h6 class="ms-2 mt-3">&#169; 2022-2023 GWSC.AllRightsReserved.</h6>
                </div>
                <div class="col-md-4 mt-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15276.075342106958!2d96.15539101907959!3d16.825421655655465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ecac632808fd%3A0x139668e8b99df9f3!2sThe%20District%20Coffee%20Lounge!5e0!3m2!1sen!2smm!4v1673339340239!5m2!1sen!2smm" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-4">
                    <!-- strong ma phyit -->
                    <h3 class="mt-3"><strong>Info Session</strong></h3> 
                    <ul class="list-unstyled">
                        <li><a href="blog.php" class="text-decoration-none text-reset"><h6>Blog</h6></a></li>
                        <li><a href="destinations.php" class="text-decoration-none text-reset"><h6>Availability</h6></a></li>
                        <li><a href="#" class="text-decoration-none text-reset"><h6>Newsletter</h6></a></li>
                    </ul>  
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-5">
                <div class="col-md-4">
                    <h3>Subscribe</h3>
                    <h5>Get Up-to-date Info</h5>
                    <input class="form-control  w-55" type="email" placeholder="Email Address" aria-label="Email">
                    <p class="mt-2">Subscribe to GWSC Newsletters.</p>
                    <p>Read our <a href="#">Privacy and Policy.</a></p>
                    <button class="btn btn-outline-success" type="submit">Sign Up</button>
                </div>  
                <div class="col-md-4">
                    <h3>More About Us</h3>
                    <ul class="list-unstyled">
                        <li><a href="https://www.apple.com/app-store/" class="text-decoration-none text-reset">IOS App</a></li>
                        <li><a href="https://play.google.com/" class="text-decoration-none text-reset">Android App</a></li>
                        <!-- <li><a href="#" class="text-decoration-none text-reset">Partners</a></li> -->
                    </ul>
                </div>  
                <div class="col-md-3">
                    <h3>Help</h3>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-decoration-none text-reset">Help Center</a></li>
                            <li><a href="#" class="text-decoration-none text-reset">FAQs</a></li>
                            <li><a href="#" class="text-decoration-none text-reset">Privacy Policy</a></li>
                            <li><a href="#" class="text-decoration-none text-reset">Cookie Policy</a></li>
                            <li><a href="#" class="text-decoration-none text-reset">Term of Use</a></li>
                        </ul>
                </div>    
            </div>
            
        </div>
    </footer>

    <br/>
    <br/>
    <br/>

    <script src="js/js/bootstrap.js"></script>
</body>
</html>