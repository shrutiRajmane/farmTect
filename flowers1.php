<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FARM-TECH</title>
    <link rel="shortcut icon" type="image" href="./image/logo2.png">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>
<body>

    <!-- top navbar -->
    <div class="top-navbar">
        <div class="top-icons">
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-instagram"></i>
        </div>
        <div class="other-links">
            <button id="btn-login"><a href="login1.php">Login</a></button>
            <button id="btn-signup"><a href="signup1.php">Sign up</a></button>

            <i class="fa-solid fa-user"></i>
            <i class="fa-solid fa-cart-shopping"></i>
        </div>
    </div>
    <!-- top navbar -->

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="./image/logo.png" alt="" width="180px"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars" style="color: white;"></i></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pesticides1.php">Pesticides</a>
                  </li>
                   <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Crops
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #1c1c50;">
                      <li><a class="dropdown-item" href="fruits1.php">FRUITS</a></li>
                      <li><a class="dropdown-item" href="vegetables1.php">VEGGIES</a></li>
                      <li><a class="dropdown-item" href="flowers1.php">FLOWERS</a></li>
                      <li><a class="dropdown-item" href="seeds1.php">SEEDS</a></li>
                   
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about1.php">About Us</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact1.php">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="marketing1.php">Marketing</a>
                  </li>

                  
                </ul>
               
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit" id="search-btn">Search</button>
                </form>
              </div>
            </div>
          </nav>
        <!-- navbar -->



    <!-- pbanner -->
    <div class="pbanner">
    
        <div class="content2">
            <h1>FLOWERS</h1>
           
        </div>
    </div>
    <!-- pbanner -->

    <!-- product cards -->
    <div class="container" id="product-cards">
        <div class="row" style="margin-top: 30px;">
          
<h3 style="text-align:center;"><br></h3>
            <div class="col-md-4 py-4 py-md-0">
                <div class="card">
                    <img src="./image/f1.png" alt="abc">
                    <div class="card-body">
                        <p>Rose</p>
                        
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5><strike></strike> <span><i class=></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-4 py-md-0">
                <div class="card">
                    <img src="./image/f2.png" alt="">
                    <div class="card-body">
                        <p>Hibiscus</p>
                       
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5> <strike></strike> <span><i class=></i></span></h5>
                    </div>
                </div>
            </div>
            
           <div class="col-md-4 py-4 py-md-0">
                <div class="card">
                    <img src="./image/f3.png" alt="">
                    <div class="card-body">
                        <p>Jasmin</p>
                       
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5> <strike></strike> <span><i class=></i></span></h5>
                    </div>
                </div>
            </div>
           

          <h3 style="text-align:center;"><br></h3>
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-4 py-4 py-md-0">
                <div class="card">
                    <img src="./image/f4.png"alt="">
                    <div class="card-body">
                        <p>Jerberry</p>
                        
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5><strike></strike> <span><i class=></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-4 py-md-0">
                <div class="card">
                    <img src="./image/f5.png"alt="">
                    <div class="card-body">
                        <p>Gokarn</p>
                       
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5><strike></strike> <span><i class=></i></span></h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 py-4 py-md-0">
                <div class="card">
                    <img src="./image/f6.png"alt="">
                    <div class="card-body">
                        <p>Madhumalti</p>
                        
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5><strike></strike> <span><i class=></i></span></h5>
                    </div>
                </div>
            </div>
           
           <h3 style="text-align:center;"><br></h3>       
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-4 py-4 py-md-0">
                <div class="card">
                    <img src="./image/gulp.png"alt="">
                    <div class="card-body">
                        <p>Gulmohar</p>
                        
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5><strike></strike> <span><i class=></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-4 py-md-0">
                <div class="card">
                    <img src="./image/tp.png""alt="">
                    <div class="card-body">
                        <p>Tulip</p>
                       
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5><strike></strike> <span><i class=></i></span></h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 py-4 py-md-0">
                <div class="card">
                    <img src="./image/lotp.png"alt="">
                    <div class="card-body">
                        <p>Lotus</p>
                        
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5><strike></strike> <span><i class=></i></span></h5>
                    </div>
                </div>
            </div>
                
           
    <!-- product cards -->


<!-- offer -->
    <div class="container" id="offer">
        <div class="row">
            <div class="col-md-4 py-3 py-md-0">
                <i class=></i>
                <h5>Free Shipping</h5>
                <p></p>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <i class=></i>
                <h5>Fast Delivery</h5>
                <p></p>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <i class=></i>
                <h5></h5>
                <p></p>
            </div>
        </div>
    </div>
<!-- offer -->

<!-- footer -->
<footer id="footer" style="margin-top: 50px;">
<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 footer-content">
                <h3>Farm-tech</h3>
               
                <p>
                    khanapur <br>
                    road <br>
                    vita <br>
                </p>
                <strong><i class="fas fa-phone"></i> Phone: <strong>+9167893977</strong></strong><br>
                <strong><i class="fa-solid fa-envelope"></i> Email: <strong>Fashion@gmail.com</strong></strong>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Usefull Links</h4>
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Privacy policay</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <p>Home delivery <br>Easy to return</p>
                <ul>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Social Network</h4>
                <p></p>
                <div class="socail-links mt-3">
                    <a href="#" class="twiiter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-google-plus"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container py-4">
    <div class="copyright">
       
    </div>
    <div class="credits">
       
    </div>
</div>
</footer>
<!-- footer -->

<a href="#" class="arrow"><i><img src="./image/up-arrow.png" alt="" width="50px"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>