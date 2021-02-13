<!Doctype html>
<html>
    <head>
        <title>Portfolio</title>
        <?php include 'css/portfoliostyle.css'; ?>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
        <!-- Mobile view -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Font Awesome icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    </head>
    <body>
        <div class="bgimg">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
                <div class="container">
                    <a href="" class="navbar-brand text-warning font-weight-bold">Company</a>
                    
                    <button class="navbar-toggler" type = "button" data-toggle="collapse" data-target="#collapsenavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse text-center" id="collapsenavbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link text-white">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.php" class="nav-link text-white">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a href="portfolio.php" class="nav-link text-white">PORTFOLIO</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link text-white">CONTACT US</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            <div class="container text-center text-white headerset">
                <h2>Look at our beautiful works at one click!</h2>
                <h1>WELCOME TO OUR PORTFOLIO</h1>
                <button class="btn btn-warning text-white btn-lg">Call: +91-9007734205</button>
            </div>
        </div>
        <section class="container ourservices text-center">
            <h1>SERVICES</h1>
            <p>We are offering vast number of services. Starting from Web-development to Digital Marketing. More to that, Mobile application and Game development come as plus.</p>
            
            <!--First row-->
            <div class="row rowsetting">
                <!--First item-->
                <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
                    <div class="imgsetting d-block m-auto bg-warning">
                        <i class="fas fa-shopping-cart fa-3x text-white"></i>
                    </div>
                    <h2>E-commerce</h2>
                    <p>We build all types of buy/sell platforms using technologies like Woo-commerce, PHP core and frameworks like CI and Laravel</p>
                </div>
                <!--Second item-->
                <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
                    <div class="imgsetting d-block m-auto bg-warning">
                        <i class="fas fa-laptop-code fa-3x text-white"></i>
                    </div>
                    <h2>Web Design</h2>
                    <p>We design mobile and user-friendly interfaces for our Clients that are accepted globally and compliant of SEO rules. </p>
                </div>
                <!--Third item-->
                <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
                    <div class="imgsetting d-block m-auto bg-warning">
                        <i class="fas fa-ad fa-3x text-white"></i>
                    </div>
                    <h2>SEO / SMO</h2>
                    <p>Cpllectively said as Digital Marketing where we can create brand, generate leads, do promotions for FREE / paid Ads.</p>
                </div>
            </div>
            <!--First row ends here-->
        </section>
        <!--Portfolio section begins here-->
        <section class="portfolio bg-light">
            <div class="container text-center">
                <h1>PORTFOLIO</h1>
                <p>List of our works</p>
                
                <div class="row">
                    <!--First Item-->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
                        <div class="card">
                            <img src="https://i.pinimg.com/originals/c6/f6/32/c6f6326eaf98a219d264b4be08926cc7.jpg" class="card-img img-fluid">
                            <div class="card-body">
                                <h2 class="card-title">Website 1</h2>
                                <p class="card-text">This is a work of responsive website</p>
                            </div>
                        </div>
                    </div>
                    <!--Second Item-->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
                        <div class="card">
                            <img src="https://static-cse.canva.com/image/20872/youtube.jpg" class="card-img img-fluid">
                            <div class="card-body">
                                <h2 class="card-title">Website 2</h2>
                                <p class="card-text">This is a work of responsive website</p>
                            </div>
                        </div>
                    </div>
                    <!--Third Item-->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
                        <div class="card">
                            <img src="https://d33v4339jhl8k0.cloudfront.net/docs/assets/53580d70e4b07756fdcbdbb5/images/56993a38c69791436155f3d7/file-x4aS4sq1RE.png" class="card-img img-fluid">
                            <div class="card-body">
                                <h2 class="card-title">Website 3</h2>
                                <p class="card-text">This is a work of responsive website</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--First row ends here-->
                <div class="row">
                    <!--Fourth Item-->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
                        <div class="card">
                            <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/202004/youtube-2617510_1280__1_.jpeg?cBysZVc_1KFla8dHmLxXa5uu1UjxEGKC&size=770:433" class="card-img img-fluid">
                            <div class="card-body">
                                <h2 class="card-title">Website 1</h2>
                                <p class="card-text">This is a work of responsive website</p>
                            </div>
                        </div>
                    </div>
                    <!--Fifth Item-->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
                        <div class="card">
                            <img src="https://i.pinimg.com/originals/c6/f6/32/c6f6326eaf98a219d264b4be08926cc7.jpg" class="card-img img-fluid">
                            <div class="card-body">
                                <h2 class="card-title">Website 2</h2>
                                <p class="card-text">This is a work of responsive website</p>
                            </div>
                        </div>
                    </div>
                    <!--Sixth Item-->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
                        <div class="card">
                            <img src="https://i.pinimg.com/originals/c6/f6/32/c6f6326eaf98a219d264b4be08926cc7.jpg" class="card-img img-fluid">
                            <div class="card-body">
                                <h2 class="card-title">Website 3</h2>
                                <p class="card-text">This is a work of responsive website</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Second row ends here-->
            </div>
        </section>
        
        <!--Our Team section begins here-->
        <section class="ourteam">
            <div class="container text-center">
                <h1>OUR AMAZING TEAM</h1>
                <p>Our people complete our Company</p>
                <div class="row teamsetting">
                    <!--Item 1 starts-->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
                        <figure class="figure">
                            <img src="https://ssrc.mit.edu/wp-content/uploads/2019/09/NEWDIGS-Azhar-250x250.jpg" class="figure-img img-fluid rounded-circle" height="250px" width="250px">
                            <figcaption>
                                <h4>Shoby Maria</h4>
                                <p class="figure-caption">Marketing</p>
                            </figcaption>
                        </figure>
                    </div> 
                    <!--Item ends-->
                    <!--Item 1 starts-->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
                        <figure class="figure">
                            <img src="https://www.iit.it/files/peoplePhotos/f13b854122343a9a2ad6f2618451811e_250.jpg" class="figure-img img-fluid rounded-circle" height="250px" width="250px">
                            <figcaption>
                                <h4>Kay Garland</h4>
                                <p class="figure-caption">Manager</p>
                            </figcaption>
                        </figure>
                    </div> 
                    <!--Item ends-->
                    <!--Item 1 starts-->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
                        <figure class="figure">
                            <img src="https://sociology.ucdavis.edu/people/dbiale/image" class="figure-img img-fluid rounded-circle" height="250px" width="250px">
                            <figcaption>
                                <h4>Jose Hugh</h4>
                                <p class="figure-caption">CEO</p>
                            </figcaption>
                        </figure>
                    </div> 
                    <!--Item ends-->
                </div>
            </div>
        </section>
        <footer class="footer">
            <h6 class="text-center">Copyright@2020, Designed by Bops</h6>
        </footer>
    </body>
</html>