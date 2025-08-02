<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOON Hotel-about</title>
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
  p{
    
      font-family: 'Georgia', serif;
      font-size: 20px;
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
<!--header-->



<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">About Us</h2>
    <div class="h-line bg-dark">
    </div>
    <p class="text-center mt-3">
    We are committed to making your stay exceptional.From high-speed 
    Wifi and enjoy well appointed rooms<br>
    Our facilitiesare designed to ensure your stay comfortable and memorable. 
    <br>
     Experience luxury and comfort at Moon Hotel
</p>
</div>

<div class= "container">
  <div class="row">
    <div class="col-lg-6 col-md-5 mb-4">
     <h3 class="mb-3">Welcome To Moon hotel site</h3>
     <p class="text-center mt-3">
     
     
     Welcome to moon hotel, your perfect home away from home. Nestled in the heart of,
      our hotel combines modern comfort with warm hospitality to offer an unforgettable stay. Whether you're here for business or leisure, 
      we provide exceptional service, stylish rooms, and convenient amenities to make every moment special.
</p>
    </div>
    <div class="col-lg-5 col-md-5mb-4">
      <img src="http://localhost/project/images/about/about.jpg" class="w-75">
  </div>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
      <div class="col-lg-3 col-md-3 mb-5 ">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark;">
          <div class="d-flex align-items-center mb-2 ">
       <img src="http://localhost/project/images/about/hotel.jpg" width="75px">
         <br> <h5 class="mt-3">
          100+ROOMS</h5>
          </div> 
         </div>
  </div>
         <div class="col-lg-3 col-md-3 mb-5 ">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark;">
          <div class="d-flex align-items-center mb-2 ">
       <img src="http://localhost/project/images/about/people.jpg" width="75px">
         <br> <h6 class="mt-3" >
          200+VISTERS</h6>
          </div> 
         </div>
  </div>
  <div class="col-lg-3 col-md-3 mb-5 ">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark;">
          <div class="d-flex align-items-center mb-2 ">
       <img src="http://localhost/project/images/about/review.jpg" width="75px">
         <br> <h5 class="mt-3">
          100+REVIEWS</h5>
          </div> 
         </div>
  </div>
         <div class="col-lg-3 col-md-3 mb-5 ">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark;">
          <div class="d-flex align-items-center mb-2 ">
       <img src="http://localhost/project/images/about/staff.jpg" width="75px">
         <br> <h5 class="mt-3">
          200+STAFFS</h5>
          </div> 
         </div>
  </div> 
          
         

    
      

    
</div>

<h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>











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
