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
      <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
        <h1 class="text-primary m-0">MkCakery</h1>
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
          <a href="/service" class="nav-item nav-link">Services</a>
          <a href="/product" class="nav-item nav-link active">Products</a>
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
        <h1 class="display-4 text-white animated slideInDown mb-3">Products</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Pages</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
              Products
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Product Start -->
    <div class="container-xxl bg-light my-6 py-6 pt-0" style="margin: 12rem 0">
      <div class="container">
        <div
          class="bg-primary text-light rounded-bottom p-5 my-6 mt-0 wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="row g-4 align-items-center">
            <div class="col-lg-6">
              <h1 class="display-4 text-light mb-0">
                The Best Bakery In Addis
              </h1>
            </div>
            <div class="col-lg-6 text-lg-end">
              <div class="d-inline-flex align-items-center text-start">
                <i class="fa fa-phone-alt fa-4x flex-shrink-0"></i>
                <div class="ms-4">
                  <p class="fs-5 fw-bold mb-0">Call Us</p>
                  <p class="fs-1 fw-bold mb-0">+2519 2345 6789</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="text-center mx-auto mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 500px"
        >
          <p class="text-primary text-uppercase mb-2"></p>
          <h1 class="display-6 mb-4">
            Explore The Categories Of Our Products
          </h1>
        </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div
              class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100"
            >
              <div class="text-center p-4">
                <div
                  class="d-inline-block border border-primary rounded-pill px-3 mb-3"
                >
                  100ETB - 2000ETB
                </div>
                <h3 class="mb-3">cupcakes</h3>
                <span
                  >we make cupcakes with different flavours  both fasting and non-fasting </span
                >
              </div>
              <div class="position-relative mt-auto">
                <img class="img-fluid" src="{{ asset('img/product-1.jpg')}}" alt="" />
                <div class="product-overlay">
                  <a
                    class="btn btn-lg-square btn-outline-light rounded-circle"
                    href="/cupcakess"
                    ><i class="fa fa-eye text-primary"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div
              class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100"
            >
              <div class="text-center p-4">
                <div
                  class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3"
                >
                  120 ETB - 3000 ETB
                </div>
                <h3 class="mb-3">Large and Mini Cakes</h3>
                <span>
                  Sweet and attractive cakes are also our product.
                  </span>
              </div>
              <div class="position-relative mt-auto">
                <img class="img-fluid" src="{{ asset('img/creamCakes.jpg')}}"  style="height: 285px;width: 358px;" alt="" />
                <div class="product-overlay">
                  <a
                    class="btn btn-lg-square btn-outline-light rounded-circle"
                    href="/cakes"
                    ><i class="fa fa-eye text-primary"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div
              class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100"
            >
              <div class="text-center p-4">
                <div
                  class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3"
                >
                 
                350 ETB -1500 ETB
                </div>
                <h4 class="mb-3">Cookies</h4>
                <span>We deliver sweet but not sugary Cookie products for everyone.</span >
              </div>
              <div class="position-relative mt-auto">
                <img class="img-fluid" src="{{ asset('img/Normal.jpg')}}" style="height: 285px;width: 358px;" alt="" />
                <div class="product-overlay">
                  <a
                    class="btn btn-lg-square btn-outline-light rounded-circle"
                    href="/cookieshop"
                    ><i class="fa fa-eye text-primary"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Product End -->

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
              <i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA
            </p>
            <p class="mb-2">
              <i class="fa fa-phone-alt me-3"></i>+012 345 67890
            </p>
            <p class="mb-2">
              <i class="fa fa-envelope me-3"></i>info@example.com
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
                  src="{{ asset('img/product-1.jpg')}}"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light rounded p-1"
                  src="{{ asset('img/product-2.jpg')}}"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light rounded p-1"
                  src="{{ asset('img/product-3.jpg')}}"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light rounded p-1"
                  src="{{ asset('img/product-2.jpg')}}"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light rounded p-1"
                  src="{{ asset('img/product-3.jpg')}}"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light rounded p-1"
                  src="{{ asset('img/product-1.jpg')}}"
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
            &copy; <a href="#">MkCakery</a>, All Right Reserved.
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