<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOON Hotel-room</title>
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
      font-family: "Merienda",cursive;
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
        .h-line{
            width:150px;
            margin:0 auto;
            height:1.7px;

        }

    .availability-form{
      margin-top: -50px;
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

<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">Our Rooms</h2>
    <div class="h-line bg-dark">
    </div>
<div class="container">
  <div class="row">
    <div class="col-lg-3">
      <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white rounded shadow">
  <div class="container-fluid flex-lg-column align-items-stretch">
    <h4 class="mt-2">FILTERS</h4>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="filterDropdown">
      <div class="broder bg-light p-3 rounded mb-3">
        <h6 class="mb-3">CHECK AVAILABILITY</h6>
        <label class="form-label">Check-In </label>
          <input type="date" class="form-control shadow-none mb-3">
          <label class="form-label" >Check-Out </label>
          <input type="date" class="form-control shadow-none mb-3">
      </div>
  </div>
  <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
      <div class="broder bg-light p-3 rounded mb-3">
        <h6 class="mb-3">FACILITIES</h6>
        <div>
          <input type="checkbox"id="f1" class="form-check-input shadow-none me-1">
          <label class="form-check-label"for="f1">Food </label>
        </div>
        <div>
          <input type="checkbox"id="f2" class="form-check-input shadow-none me-1">
          <label class="form-check-label"for="f2">Pool </label>
        </div>
       <div class="mb-2">
          <input type="checkbox"id="f3" class="form-check-input shadow-none me-1">
          <label class="form-check-label"for="f3">Free wifi </label>
        </div>
      </div>
      <div class="broder bg-light p-3 rounded mb-3">
        <h6 class="mb-3">GUESTS</h6>
        <div class="d-flex">
          <div class="me-2">
          <label class="form-label">Adults </label>
          <input type="number" class="form-control shadow-none mb-3">
        </div>
        <div>
          <label class="form-label">Children </label>
          <input type="number" class="form-control shadow-none mb-3">
        </div>
        </div>
        
        
  </div>
    </div>
  </div>
  </nav>
 </div>

<div class="col-lg-9 col-md-12 px-4" style="margin-top:30px;">
  <div class="card mb-4 broder-0 shadow" >
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5  mt-4">
      <img src="http://localhost/project/images/rooms/r1.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3">
      <h5 class="mb-1">Simple Room Name</h5>
       <div class="features mb-3">
      <h6 class="mb-3">Features</h6>
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
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-3">LKR2000 night</h6>
      <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Booking Now</a>
   
    
    </div>
  </div>
   
  
</div>

  <div class="card mb-4 broder-0 shadow" >
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5  mt-4">
      <img src="http://localhost/project/images/rooms/r1.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3">
      <h5 class="mb-1">Simple Room Name</h5>
       <div class="features mb-3">
      <h6 class="mb-3">Features</h6>
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
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-3">LKR2000 night</h6>
      <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Booking Now</a>
 
    
    </div>
  </div>
  </div>  
  
</div>


</div>
 </div>
</div>








<<!--footer-->
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
