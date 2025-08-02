<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOON Hotel-Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/common.css">

    <style>
     

      
      * {
      font-family: "Poppins", sans-serif;
     }
     h-font{
      font-family: "Poppins",sans-serif;
      font:bold;
        }
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] {
      appearance: textfield;
    }
    .custom-bg{
      background-color: #2ec1ac;
      border: 1px solid #2ec1ac;
    }
    .custom-bg:hover{
      background-color: #2ec1ac;
      border-color: #2ec1ac;
    }
    .availability-form{
      margin-top: -50px;
    }

    
    .quote-box1 h1{
    
      font-family: 'Georgia', serif;
      font-size: 32px;
      color: #2c3e50;
    }
    .quote-box1{
      background-color:#ADD8E6;
      padding: 2px;
      border-radius: 15px;
      text-align: center;
      margin: 50px;

    }
    .quote-box2{
      background-color:#ADD8E6;
      padding: 2px;
      border-radius: 15px;
      text-align: center;
      margin: 50px;

    }
    

    
   
   
     
      </style>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">MOON Hotel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="Rooms.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2 " href="contact.php">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About</a>
        </li>
      </ul>
        
      <div class="d-flex">
        <button type="button" class="btn btn-outline-dark shadown-none me-lg-3 me-3" data-bs-toggle="modal" data-bs-target="#loginModel">
        Login
        </button>
        <button type="button" class="btn btn-outline-dark shadown-none " data-bs-toggle="modal" data-bs-target="#registerModel">
        Register
        </button>

    </div>
    </div>
  </div>
  
</nav>

<div class="modal fade" id="loginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <h5 class="modal-title d-flex align-item-center" >
          <i class="bi bi-person-circle fs-3 me-2"></i> User Login
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control shadow-none ">
          </div>
          <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control shadow-none ">
          </div>
          <div class="d-flex align-items-center- justify-content-between mb-2">
          <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
          <a href="javascript:(0)" class="text-secondary text-decoration-none ">Forgot Password</a>
      </div>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="registerModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <h5 class="modal-title d-flex align-item-center" >
          <i class="bi bi-person-lines-fill fs-3 me-2"></i> User Registration
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
       Note:Your details must match with your ID(NIC Card,Passport,Driving Licences,etc)
       that will be required during check-in.
      </span>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 ps-0 mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control shadow-none ">
            </div>
            <div class="col-md-6 ps-0 ">
            <label class="form-label">Email </label>
            <input type="email" class="form-control shadow-none ">
            </div>
            <div class="col-md-6 ps-0 mb-3">
            <label class="form-label">Phone Number</label>
            <input type="number" class="form-control shadow-none ">
            </div>
            <div class="col-md-6 ps-0 mb-3">
            <label class="form-label">Picture </label>
            <input type="file" class="form-control shadow-none ">
            </div>
            <div class="col-md-12 ps-0 mb-3">
            <label class="form-label">Address</label>
            <textarea class="form-control shadow-none"  rows="1"></textarea>
            </div>
            <div class="col-md-6 ps-0 mb-3">
            <label class="form-label">PIN Code</label>
            <input type="number" class="form-control shadow-none ">
            </div>
            <div class="col-md-6 ps-0 mb-3">
            <label class="form-label">Date of Birth </label>
            <input type="date" class="form-control shadow-none ">
            </div>
            <div class="col-md-6 ps-0 mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control shadow-none ">
            </div>
            <div class="col-md-6 ps-0 mb-3">
            <label class="form-label">Confirm Password </label>
            <input type="password" class="form-control shadow-none ">
            </div>
          </div>
        </div>
        <div class="text-center my-1">
        <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>

        </div>
          <!--div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control shadow-none ">
          </div>
          <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control shadow-none ">
          </div>
          <div class="d-flex align-items-center- justify-content-between mb-2">
          <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
          <a href="javascript:(0)" class="text-secondary text-decoration-none ">Forgot Password</a>
      </div-->
      </div>
      </form>
    </div>
  </div>
</div>

<div>
<div class="swiper-container mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="http://localhost/project/images/pictures/1.png" width="1400"  height="450">
        </div>
       
       
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>


    </div>



<!--check form-->
<div class="container availability-form">
  <div class="row">
      <div class= "quote-box1">
      <h1 class="text-center">"Experience Comfort,elegance,and unforgettable hospitality </h1>
      <h1 class="text-center">your perefect stay beagans here"</h1>
      
      <div class="hero-buttons" style="text-align:center;">
                <a href="aboutus.php" class="btn btn-secondary" >Learn More</a>
            </div>
          <div class="quote-box2" >  
      <div class="col-lg-10 bg-white shadow p-4 rounded" >
      <h5 class="text-center" >
        Check Booking Availability
      </h5>
      <form>
        <div class="row mb-3 justify-content-center">
          <div class="col-lg-3 md-4">
          <label class="form-label" style="font-weight:500;">Check-In </label>
          <input type="date" class="form-control shadow-none ">
          </div>
          
          <div class="col-lg-3 md-3">
          <label class="form-label" style="font-weight:500;">Check-Out </label>
          <input type="date" class="form-control shadow-none ">
          </div>
          
      <br>
        <div class="col-lg-1">
          <button type="submit" class="btn text-white shadow-none custom-bg ">Submit
          </button>
        </div>
        </div>
        </div>
      </form>
      </div>

    </div>
  </div>
</div>
<!-- our room--> 
 <h2 class="mt-5 pt-4 text-center fw-bold h-font">Our Rooms</h2>

<div class="container">
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
  <img src="http://localhost/project/images/rooms/r1.png" class="card-img-top" >
  <div class="card-body">
    <h5>Simple Room Name</h5>
    <h6>LKR2000 per night</h6>
    <div class="features mb-3">
      <h6 class="mb-1">Features</h6>
      <span class="badge bg-light text-dark  text-wrap">
      2 Rooms
      </span>
      <span class="badge bg-light text-dark  text-wrap">
      1 Bathrooms
      </span>
      <span class="badge bg-light text-dark  text-wrap">
      1 Balcony
      </span>
      <span class="badge bg-light text-dark  text-wrap">
      3 Sofa
      </span>
    </div>
    <div class="facilities mb-3">
    <h6 class="mb-1">Facilities</h6>
    <span class="badge bg-light text-dark  text-wrap">
      Wifi
      </span>
      <span class="badge bg-light text-dark  text-wrap">
      Television
      </span>
      <span class="badge bg-light text-dark  text-wrap">
      AC
      </span>
      <span class="badge bg-light text-dark  text-wrap">
      Room Heater
      </span> 
    </div>
    <div class="guests mb-3">
      <h6 class="mb-1">Guests</h6>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        5 Adults
      </span>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
        4 Children
      </span>
    </div>


    <div class="rating mb-3"></div>
    <h6 class="mb-1">Rating</h6>
    <span class="badge rounded-pill bg-light">
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    </span>
  </div>
  <div class=" d-flex justify-content-evenly mb-2">
    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Booking Now</a>
    
    </div>
  </div>
</div>

<div class="col-lg-4 col-md-6 mb-4">
<div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
  <img src="http://localhost/project/images/rooms/r1.png" class="card-img-top" >
  <div class="card-body">
    <h5>Simple Room Name</h5>
    <h6>LKR2000 per night</h6>
    <div class="features mb-3">
      <h6 class="mb-1">Features</h6>
      <span class="badge bg-light text-dark  text-wrap">
      2 Rooms
      </span>
      <span class="badge bg-light text-dark  text-wrap">
      1 Bathrooms
      </span>
      <span class="badge bg-light text-dark  text-wrap">
      1 Balcony
      </span>
      <span class="badge bg-light text-dark  text-wrap">
      3 Sofa
      </span>
    </div>
    <div class="facilities mb-3">
    <h6 class="mb-1">Facilities</h6>
    <span class="badge bg-light text-dark  text-wrap">
      Wifi
      </span>
      <span class="badge bg-light text-dark  text-wrap">
      Television
      </span>
      <span class="badge bg-light text-dark  text-wrap">
      AC
      </span>
      <span class="badge bg-light text-dark  text-wrap">
      Room Heater
      </span> 
    </div>
    <div class="guests mb-3">
      <h6 class="mb-1">Guests</h6>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        5 Adults
      </span>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
        4 Children
      </span>
    </div>
    <div class="rating mb-3"></div>
    <h6 class="mb-1">Rating</h6>
    <span class="badge rounded-pill bg-light">
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    </span>
  </div>
  <div class=" d-flex justify-content-evenly mb-2">
    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Booking Now</a>
    
    </div>
  </div>
  </div>
  <div class="col-lg-4 col-md-6 mb-4">
<div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
  <img src="http://localhost/project/images/rooms/r1.png" class="card-img-top" >
  <div class="card-body">
    <h5>Simple Room Name</h5>
    <h6>LKR2000 per night</h6>
    <div class="features mb-3">
      <h6 class="mb-1">Features</h6>
      <span class="badge bg-light text-dark  text-wrap">
      2 Rooms
      </span>
      <span class="badge bg-light text-dark  text-wrap">
      1 Bathrooms
      </span>
      <span class="badge bg-light text-dark  text-wrap">
      1 Balcony
      </span>
      <span class="badge bg-light text-dark  text-wrap">
      3 Sofa
      </span>
    </div>
    <div class="facilities mb-3">
    <h6 class="mb-1">Facilities</h6>
    <span class="badge bg-light text-dark  text-wrap">
      Wifi
      </span>
      <span class="badge bg-light text-dark  text-wrap">
      Television
      </span>
      <span class="badge bg-light text-dark  text-wrap">
      AC
      </span>
      <span class="badge bg-light text-dark  text-wrap">
      Room Heater
      </span> 
    </div>
    <div class="guests mb-3">
      <h6 class="mb-1">Guests</h6>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        5 Adults
      </span>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
        4 Children
      </span>
    </div>
    <div class="rating mb-3"></div>
    <h6 class="mb-1">Rating</h6>
    <span class="badge rounded-pill bg-light">
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    </span>
  </div>
  <div class=" d-flex justify-content-evenly mb-2">
    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Booking Now</a>
    
    </div>
  </div>
</div>
</div>

   
  <div class="col-lg-12 text-center mt-5">
 <a href="Rooms.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>></a>
</div>
</div>
</div>
<h2 class="mt-5 pt-4 text-center fw-bold h-font">Our Facilities</h2>
<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5 ">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="http://localhost/project/images/feautres/wifi.png" width="80px">
      <h5 class="mt-3 text-center fw-bold">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="http://localhost/project/images/feautres/food.png" width="80px">
      <h5 class="mt-3 text-center fw-bold">Food</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="http://localhost/project/images/feautres/air.png" width="80px">
      <h5 class="mt-3 text-center fw-bold">Air Condition</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="http://localhost/project/images/feautres/pool.png" width="80px">
      <h5 class="mt-3 text-center fw-bold">Pool</h5>
    </div>
     <div class="col-lg-12 text-center mt-5">
     <a href="facilities.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>>></a>
      </div>
     </div>
  </div>
</div>
<!--reach us-->
<h2 class="mt-5 pt-4 text-center fw-bold h-font">Reach Us</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
    <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253118.98539746748!2d79.53191222499999!3d7.576703800000012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2c9569155014f%3A0xc4199b4b6bd0f2e0!2sChilaw%20town!5e0!3m2!1sen!2slk!4v1745214002130!5m2!1sen!2slk"   ></iframe>

    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white">
        <h5> Call Us</h5>
        <a href="tel:+94770082290"class="d-inline-block mb-2 text-decoration-none text-dark">
        <i class="bi bi-telephone-fill"></i>+94470082290
        </a>
        <br>
        <a href="tel:+94770082290"class="d-inline-block text-decoration-none text-dark">
        <i class="bi bi-telephone-fill"></i>+94870082290
        </a>
      </div>
    <br>
      <div class="col-lg-4 col-md-4">
      <div class="bg-white">
        <h5> Follow Us</h5>
        <a href=""class="d-inline-block mb-3 ">
        <span class="badge bg-light text-dark fs-6 p-2">
        <i class="bi bi-twitter me-1"></i> Tiwtter</span>
        </a>
        <br>
        <a href=""class="d-inline-block mb-3 ">
        <span class="badge bg-light text-dark fs-6 p-2">
        <i class="bi bi-facebook me-1"></i>Facebook</span>
        </a>
        <br>
        <a href=""class="d-inline-block mb-3 ">
        <span class="badge bg-light text-dark fs-6 p-2">
        <i class="bi bi-instagram me-1"></i> Instagram</span>
        </a>
        </div>
          </div>
          </div>
            </div>

          <div class="container-fluid bg-white mt-5">
            <div class="row">
                <div class="col-lg-4 p-4">
                  <h3 class="h-font fw-bold fs-3 mb-2">MOON Hotel</h3>
                  Our luxury rooms blend timeless elegance with modern comfort,offering
                  spacious interiors,plush bedding and personlized services 
                  to ensure a truly indulgent experience.
                </div>
                <div class="col-lg-4 p-4">
                  <h5 class="mb-3">Links</h5>
                  <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none ">Home</a><br>
                  <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none ">Rooms</a><br>
                  <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none ">Facilities</a><br>
                  <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none ">Contact Us</a><br>
                  <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none ">About</a>
                </div>
                <div class="col-lg-4 p-4">
                <h5 class="mb-3">Follows Us</h5>
                <a href=""class="d-inline-block text-dark text-decoration-none mb-2">
                  <i class="bi bi-twitter me-1"></i> Tiwtter
                </a><br>
                <a href=""class="d-inline-block text-dark text-decoration-none mb-2">
                  <i class="bi bi-facebook me-1"></i> Facebok
                </a><br>
                <a href=""class="d-inline-block text-dark text-decoration-none mb-2">
                  <i class="bi bi-instagram me-1"></i> Instagram
                </a>
                </div>
            </div>
          </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>







  </body>
</html>