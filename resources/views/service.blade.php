@extends('layouts.front')
@section('content')
<!-- Spinner Start -->
<div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div
      class="container-fluid top-bar bg-dark text-light px-0 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
              <a class="small text-light" href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a class="small text-light" href="#">Career</a>
            </li>
            <li class="breadcrumb-item">
              <a class="small text-light" href="#">Terms</a>
            </li>
            <li class="breadcrumb-item">
              <a class="small text-light" href="#">Privacy</a>
            </li>
          </ol>
        </div>
        <div class="col-lg-6 px-5 text-end">
          <small>Follow us:</small>
          <div class="h-100 d-inline-flex align-items-center">
            <a class="btn-lg-square text-primary border-end rounded-0" href=""
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a class="btn-lg-square text-primary border-end rounded-0" href=""
              ><i class="fab fa-twitter"></i
            ></a>
            <a class="btn-lg-square text-primary border-end rounded-0" href=""
              ><i class="fab fa-linkedin-in"></i
            ></a>
            <a class="btn-lg-square text-primary pe-0" href=""
              ><i class="fab fa-instagram"></i
            ></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <a href="/index" class="navbar-brand ms-4 ms-lg-0">
        <h1 class="text-primary m-0">MK Cakery</h1>
      </a>
      <button
        type="button"
        class="navbar-toggler me-4"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto p-4 p-lg-0">
          <a href="/" class="nav-item nav-link">Home</a>
          <a href="/about" class="nav-item nav-link">About</a>
          <a href="/service" class="nav-item nav-link active">Services</a>
          <a href="/product" class="nav-item nav-link">Products</a>
          <div class="nav-item dropdown">
            <a
            href="#"
            class="nav-link dropdown-toggle"
            data-bs-toggle="dropdown"
            >Courses</a
          >
          <div class="dropdown-menu m-0">
            <a href="/cakePre" class="dropdown-item">Cake Preparation</a>
            <a href="/cookies" class="dropdown-item"
              >Cookie Preparation</a
            >
          </div>
          </div>

          <a href="/contact" class="nav-item nav-link">Contact</a>
        </div>
        <div class="d-none d-lg-flex">
          <div
            class="flex-shrink-0 btn-lg-square border border-light rounded-circle"
          >
            <i class="fa fa-phone text-primary"></i>
          </div>
          <div class="ps-3">
            <small class="text-primary mb-0">Call Us</small>
            <p class="text-light fs-5 mb-0">+2519 2345 6789</p>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div
      class="container-fluid page-header-Products py-6 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container text-center pt-5 pb-3">
        <h1 class="display-4 text-white animated slideInDown mb-3">Services</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Pages</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
              Services
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Facts Start -->
    <div class="container-xxl py-6">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.1s">
            <div class="fact-item bg-light rounded text-center h-100 p-5">
              <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
              <p class="mb-2">Years Experience</p>
              <h1 class="display-5 mb-0" data-toggle="counter-up">12</h1>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.3s">
            <div class="fact-item bg-light rounded text-center h-100 p-5">
              <i class="fa fa-users fa-4x text-primary mb-4"></i>
              <p class="mb-2">Skilled Professionals</p>
              <h1 class="display-5 mb-0" data-toggle="counter-up">5</h1>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="fact-item bg-light rounded text-center h-100 p-5">
              <i class="fa fa-bread-slice fa-4x text-primary mb-4"></i>
              <p class="mb-2">Total Products</p>
              <h1 class="display-5 mb-0" data-toggle="counter-up">50</h1>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.7s">
            <div class="fact-item bg-light rounded text-center h-100 p-5">
              <i class="fa fa-cart-plus fa-4x text-primary mb-4"></i>
              <p class="mb-2">Order Everyday</p>
              <h1 class="display-5 mb-0" data-toggle="counter-up">20</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Facts End -->

    <!-- Service Start -->
    <div class="container-xxl py-6">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <p class="text-primary text-uppercase mb-2"></p>
            <h1 class="display-6 mb-4">What Do We Offer For You?</h1>
            <p class="mb-5">
              Mk cakery is one of the best cakery in addis that provides quality
              Cakes that are enjoyed by most of our customers. We also provide
              an online courses so that anyone interested can easily learn how
              to make cakes and cookies.
            </p>
            <div class="row gy-5 gx-4">
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex align-items-center mb-3">
                  <div
                    class="flex-shrink-0 btn-square bg-primary rounded-circle me-3"
                  >
                    <i class="fa fa-bread-slice text-white"></i>
                  </div>
                  <h5 class="mb-0">Quality and custom Products</h5>
                </div>
                <span
                  >we provide high quality custom designed cakes, capcakes,
                  minicakes and cookies.</span
                >
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="d-flex align-items-center mb-3">
                  <div
                    class="flex-shrink-0 btn-square bg-primary rounded-circle me-3"
                  >
                    <i class="fa fa-birthday-cake text-white"></i>
                  </div>
                  <h5 class="mb-0">Deliver courses</h5>
                </div>
                <span
                  >
                  We provide courses by our skilled bakery professionals for everyone who is interested with fair price.
              
                </span>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center mb-3">
                  <div
                    class="flex-shrink-0 btn-square bg-primary rounded-circle me-3"
                  >
                    <i class="fa fa-cart-plus text-white"></i>
                  </div>
                  <h5 class="mb-0">Online Order</h5>
                </div>
                <span>
                  We let our customers order the products they want where ever they are with out consuming their time.
                  </span>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                <div class="d-flex align-items-center mb-3">
                  <div
                    class="flex-shrink-0 btn-square bg-primary rounded-circle me-3"
                  >
                    <i class="fa fa-truck text-white"></i>
                  </div>
                  <h5 class="mb-0">Home Delivery</h5>
                </div>
                <span>
                  We also provide delivery services for our dear customers.
              </span>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="row img-twice position-relative h-100">
              <div class="col-6">
                <img class="img-fluid rounded" src=" {{ asset('img/service-1.jpg ')}}" alt="" />
              </div>
              <div class="col-6 align-self-end">
                <img class="img-fluid rounded" src=" {{ asset('img/CoffeeCookie.jpg ')}}" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- Footer Start -->
    <div
      class="container-fluid bg-dark text-light footer my-6 mb-0 py-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Office Address</h4>
            <p class="mb-2">
              <i class="fa fa-map-marker-alt me-3"></i>123 Megenagna,
              AddisAbaba, Ethiopia
            </p>
            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+251 9654839</p>
            <p class="mb-2">
              <i class="fa fa-envelope me-3"></i>MkcakeryInfo@gmail.com
            </p>
            <div class="d-flex pt-2">
              <a
                class="btn btn-square btn-outline-light rounded-circle me-1"
                href=""
                ><i class="fab fa-twitter"></i
              ></a>
              <a
                class="btn btn-square btn-outline-light rounded-circle me-1"
                href=""
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a
                class="btn btn-square btn-outline-light rounded-circle me-1"
                href=""
                ><i class="fab fa-youtube"></i
              ></a>
              <a
                class="btn btn-square btn-outline-light rounded-circle me-0"
                href=""
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Quick Links</h4>
            <a class="btn btn-link" href="">About Us</a>
            <a class="btn btn-link" href="">Contact Us</a>
            <a class="btn btn-link" href="">Our Services</a>
            <a class="btn btn-link" href="">Terms & Condition</a>
            <a class="btn btn-link" href="">Support</a>
          </div>
        
          <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Photo Gallery</h4>
            <div class="row g-2">
              <div class="col-4">
                <img
                  class="img-fluid bg-light rounded p-1"
                  src=" {{ asset('img/product-1.jpg ')}}"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light rounded p-1"
                  src=" {{ asset('img/cake.jpeg ')}}"
                  style="height: 62px;"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light rounded p-1"
                  src=" {{ asset('img/cc12.jpg ')}}"
                  
                  style="height: 62px;"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light rounded p-1"
                  src=" {{ asset('img/creamCakes.jpg ')}}"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light rounded p-1"
                  src=" {{ asset('img/Occasional.jpg ')}}"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light rounded p-1"
                  src=" {{ asset('img/CoffeeCookie.jpg ')}}" style="height: 110px;"
                  alt="Image"
                />
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div
      class="container-fluid copyright text-light py-4 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            &copy; <a href="/index">Mkcakery</a>, All Right Reserved.
          </div>
        </div>
      </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a
      href="#"
      class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

@endsection