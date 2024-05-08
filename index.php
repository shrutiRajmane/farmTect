

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


        <!-- home content -->
        <section class="home">
            <div class="content">
                <h3>FARM-TECH </h3>
                <p><strong><b>The future of world!</b></strong>
                <br><i>Farming becoming increasingly technical and</i><br><i> high-tech machines allow farmers to be more accurate</i><br><i>decrease wastage and boost productivity and their profit<br>margins,which are increasingly light these days</i></p>
  
            </div>
            <div class="img">
                <img src="./image/b2.png" alt="">

            </div>
        </section> 

		<br><br>
        <!-- home content -->
    </div>
<h1 class="text-center"><br>EXPLORE</h1>
    <!-- top cards -->
    <div class="container" id="top-cards">
        <div class="row">
            <div class="col-md-4 py-4 py-md-0">
                <div class="card" style="background-color: #a9a9a926;">
                    <img src="./image/topcard1.png" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Crops</h5>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-4 py-md-0">
                <div class="card" style="background-color: #a9a9a926;">
                    <img src="./image/topcard2.png" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Pesticides</h5>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-4 py-md-0">
                <div class="card" style="background-color: #a9a9a926;">
                    <img src="./image/marketing.png" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Marketing</h5>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top cards -->
    

    <!-- banner -->
    <div class="banner">
        <div class="content">
            <h1></h1>
            
            <div id="bannerbtn"><button></button></div>
        </div>
    </div>
    <!-- banner -->

    <!-- product cards -->
    <div class="container" id="product-cards">
        <h1 class="text-center">PRODUCT</h1>

         

    <div class="row" style="margin-top: 50px;">
        <div class="col-md-6 py-3 py-md-0">
            <div class="card">
                <img src="./image/product1.png" alt="">
            </div>
        </div>
        <div class="col-md-6 py-3 py-md-0">
            <p>Modern agriculture is driven by continuous improvements in digital tools and data as well as collaborations among farmers and researchers across the public and private sectors.
During the Green Revolution in the 1960s, India could achieve self-sufficiency in food grain production by using modern methods of agriculture like better quality of seeds, proper irrigation, chemical fertilisers and pesticides.
As time passed, more technological advances appeared in agriculture. The tractor was introduced, followed by new tillage and harvesting equipment, irrigation and air seeding technology, all leading to higher yields and improved quality of the food and fibre that was grown.
It is possible for farmers to utilise scientific data and technology to improve crop yields and keep themselves up-to-date with cutting edge methods of farming.
    </div> </div>





              <div class="row" style="margin-top: 50px;">
        <div class="col-md-6 py-3 py-md-0">
            <div class="card">
                <img src="./image/product2.png" alt="">
            </div>
        </div>
        <div class="col-md-6 py-3 py-md-0">
            <p> Pesticides are chemical substances that are meant to kill pests. In general, a pesticide is a chemical or a biological agent such as a virus, bacterium, antimicrobial, or disinfectant that deters, incapacitates, kills, pests.

This use of pesticides is so common that the term pesticide is often treated as synonymous with plant protection product. It is commonly used to eliminate or control a variety of agricultural pests that can damage crops and livestock and reduce farm productivity. The most commonly applied pesticides are insecticides to kill insects, herbicides to kill weeds, rodenticides to kill rodents, and fungicides to control fungi, mould, and mildew.</p>
</div>
    </div>

   







              
             <!-- end messagebox -->
               </div>
               <!-- end col -->
               <div class="col-md-6">
                  <div class="post-media wow fadeIn">
                     <img src="images/about_03.jpg" alt="" class="img-responsive">
                     <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                  </div>
                  <!-- end media -->
               </div>
               <!-- end col -->
            </div>

       

            
        <a href="pesticides.html" id="viewmorebtn">View More</a>
    </div>
    <!-- product cards -->


<!-- offer -->
    <div class="container" id="offer">
        <div class="row">
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-cart-shopping"></i>
                <h5>Free Shipping</h5>
                <p>On order over $100</p>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-truck"></i>
                <h5>Fast Delivery</h5>
                <p>World wide</p>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-thumbs-up"></i>
                <h5>Big Choice</h5>
                <p>Of product</p>
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

     