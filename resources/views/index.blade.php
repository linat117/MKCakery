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
              <a class="small text-light" href="#">Our Courses</a>
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
      <a href="/" class="navbar-brand ms-4 ms-lg-0">
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
          <a href="#" class="nav-item nav-link active">Home</a>
          <a href="/about" class="nav-item nav-link">About</a>
          <a href="/service" class="nav-item nav-link">Services</a>
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
            <p class="text-light fs-5 mb-0">+251 9575763</p>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
          <img class="img-fluid" src="{{ asset('img/front.jpg ')}}" alt="" />
          <div class="owl-carousel-inner">
            <div class="container">
              <div class="row justify-content-start">
                <div class="col-lg-8">
                  <p class="text-primary text-uppercase fw-bold mb-2">
                    // The Best Bakery
                  </p>
                  <h1 class="display-1 text-light mb-4 animated slideInDown">
                    We Bake With Passion
                  </h1>
                  <p class="text-light fs-5 mb-4 pb-3">
                   Our Aim is to be the best Bakery and to increase the number of Professionals in the industry.
                  </p>
                  <a href="" class="btn btn-primary rounded-pill py-3 px-5"
                    >Read More</a
                  >
                  <a href="/login" class="btn btn-primary rounded-pill py-3 px-5"
                  >Enroll Now</a
                >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="owl-carousel-item position-relative">
          <img class="img-fluid" src="{{ asset('img/carousel-2.jpg ')}}" alt="" />
          <div class="owl-carousel-inner">
            <div class="container">
              <div class="row justify-content-start">
                <div class="col-lg-8">
                  <p class="text-primary text-uppercase fw-bold mb-2"></p>
                  <h1 class="display-1 text-light mb-4 animated slideInDown">
                    We Bake With Passion
                  </h1>
                  <p class="text-light fs-5 mb-4 pb-3">
                    Our main vision is to have Professionals in the process of making Cakes and Cookie.
                  </p>
                  <a href="" class="btn btn-primary rounded-pill py-3 px-5"
                    >Read More</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Carousel End -->

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
              <h1 class="display-5 mb-0" data-toggle="counter-up">30</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Facts End -->

    <!-- About Start -->
    <div class="container-xxl py-6">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row img-twice position-relative h-100">
              <div class="col-6">
                <img class="img-fluid rounded" src="{{ asset('img/cup cakes.jpg ')}}" style="height: 275px;width: 260px;" alt="" />
              </div>
              <div class="col-6 align-self-end">
                <img class="img-fluid rounded" src="{{ asset('img/CoffeeCookie.jpg ')}}" style="height: 275px; width: 260px;" alt="" />
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="h-100">
              <p class="text-primary text-uppercase mb-2"></p>
              <h1 class="display-6 mb-4">Baking with Love</h1>
              <p>
                Mk Cakery is a Bakery Company located in AddisAbaba. We make
                Customly designed cakes and cookies. Have served for different
                programs with packages that include cupcakes, cream cakes, and
                different sweets. In addition we provide online courses to share
                our skill for those who have desire to make Cakes and cookies.
                The courses are simple to understand and very clear. It guides
                you in every detail and at the end you will be professional in
                the industry.
              </p>
              <p>
               
              </p>
              <div class="row g-2 mb-4">
                <div class="col-sm-6">
                  <i class="fa fa-check text-primary me-2"></i>Quality and custom Products
                </div>
                <div class="col-sm-6">
                  <i class="fa fa-check text-primary me-2"></i>Deliver Courses 
                </div>
                <div class="col-sm-6">
                  <i class="fa fa-check text-primary me-2"></i>Online Order
                </div>
                <div class="col-sm-6">
                  <i class="fa fa-check text-primary me-2"></i>Home Delivery
                </div>
              </div>
              <a class="btn btn-primary rounded-pill py-3 px-5" href=""
                >Read More</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Product Start -->
    <div class="container-xxl bg-light my-6 py-6 pt-0">
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
                  <p class="fs-1 fw-bold mb-0">+251965570242</p>
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
          <p class="text-primary text-uppercase mb-2">// Bakery Products</p>
          <h1 class="display-6 mb-4">
            Explore The Categories Of Our Bakery Products
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
                  100 ETB- 2000 ETB
                </div>
                <h3 class="mb-3">CupCakes</h3>
                <span>We provide cup cakes in any flavour you want </span>
              </div>
              <div class="position-relative mt-auto">
                <img class="img-fluid" src="{{ asset('img/product-1.jpg ')}}" alt="" />
                <div class="product-overlay">
                  <a
                    class="btn btn-lg-square btn-outline-light rounded-circle"
                    href=""
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
                <h3 class="mb-3">Large and Mini cakes</h3>
                <span>
                  Sweet and attractive cakes are also our product.
                  </span
                >
              </div>
              <div class="position-relative mt-auto">
                <img class="img-fluid" src="{{ asset('img/creamCakes.jpg ')}}"  style="height: 285px;width: 358px;" alt="" />
                <div class="product-overlay">
                  <a
                    class="btn btn-lg-square btn-outline-light rounded-circle"
                    href=""
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
                <span>
                  We deliver sweet but not sugary Cookie products for everyone.
                  </span
                >
              </div>
              <div class="position-relative mt-auto">
                <img class="img-fluid" src="{{ asset('img/Normal.jpg ')}}" style="height: 285px;width: 358px;" alt="" />
                <div class="product-overlay">
                  <a
                    class="btn btn-lg-square btn-outline-light rounded-circle"
                    href=""
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
                  <h5 class="mb-0">Deliver Courses</h5>
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
                <span
                  >We let our customers order the products they want where ever they are with out consuming their time.</span
                >
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
                <span
                  >
                  We also provide delivery services for our dear customers.
                  </span
                >
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="row img-twice position-relative h-100">
              <div class="col-6">
                <img class="img-fluid rounded" src="{{ asset('img/service-1.jpg ')}}" alt="" />
              </div>
              <div class="col-6 align-self-end">
                <img class="img-fluid rounded" src="{{ asset('img/CoffeeCookie.jpg ')}}" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- Team Start -->
    <div class="container-xxl py-6">
      <div class="container">
        <div
          class="text-center mx-auto mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 500px"
        >
          <p class="text-primary text-uppercase mb-2">// Our Instructors</p>
          <h1 class="display-6 mb-4">We're Super Professional At Our Skills</h1>
        </div>
        <div class="row g-4">
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item text-center rounded overflow-hidden">
              <img class="img-fluid" src="{{ asset('img/team-1.jpg ')}}" alt="" />
              <div class="team-text">
                <div class="team-title">
                  <h5>Full Name</h5>
                  <span>Designation</span>
                </div>
                <div class="team-social">
                  <a class="btn btn-square btn-light rounded-circle" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-light rounded-circle" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-light rounded-circle" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="team-item text-center rounded overflow-hidden">
              <img class="img-fluid" src="{{ asset('img/team-2.jpg ')}}" alt="" />
              <div class="team-text">
                <div class="team-title">
                  <h5>Full Name</h5>
                  <span>Designation</span>
                </div>
                <div class="team-social">
                  <a class="btn btn-square btn-light rounded-circle" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-light rounded-circle" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-light rounded-circle" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="team-item text-center rounded overflow-hidden">
              <img class="img-fluid" src="{{ asset('img/team-3.jpg ')}}" alt="" />
              <div class="team-text">
                <div class="team-title">
                  <h5>Full Name</h5>
                  <span>Designation</span>
                </div>
                <div class="team-social">
                  <a class="btn btn-square btn-light rounded-circle" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-light rounded-circle" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-light rounded-circle" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="team-item text-center rounded overflow-hidden">
              <img class="img-fluid" src="{{ asset('img/team-4.jpg ')}}" alt="" />
              <div class="team-text">
                <div class="team-title">
                  <h5>Full Name</h5>
                  <span>Designation</span>
                </div>
                <div class="team-social">
                  <a class="btn btn-square btn-light rounded-circle" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-light rounded-circle" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-light rounded-circle" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-xxl bg-light my-6 py-6 pb-0">
      <div class="container">
        <div
          class="text-center mx-auto mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 500px"
        >
          <p class="text-primary text-uppercase mb-2">// Client's Review</p>
          <h1 class="display-6 mb-4">Many Customers Trusted Us</h1>
        </div>
        <div
          class="owl-carousel testimonial-carousel wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="testimonial-item bg-white rounded p-4">
            <div class="d-flex align-items-center mb-4">
              <img
                class="flex-shrink-0 rounded-circle border p-1"
                src="{{ asset('img/testimonial-1.jpg ')}}"
                alt=""
              />
              <div class="ms-4">
                <h5 class="mb-1">Client Name</h5>
                <span>Profession</span>
              </div>
            </div>
            <p class="mb-0">
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam
              amet diam et eos. Clita erat ipsum et lorem et sit.
            </p>
          </div>
          <div class="testimonial-item bg-white rounded p-4">
            <div class="d-flex align-items-center mb-4">
              <img
                class="flex-shrink-0 rounded-circle border p-1"
                src="{{ asset('img/testimonial-2.jpg ')}}"
                alt=""
              />
              <div class="ms-4">
                <h5 class="mb-1">Client Name</h5>
                <span>Profession</span>
              </div>
            </div>
            <p class="mb-0">
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam
              amet diam et eos. Clita erat ipsum et lorem et sit.
            </p>
          </div>
          <div class="testimonial-item bg-white rounded p-4">
            <div class="d-flex align-items-center mb-4">
              <img
                class="flex-shrink-0 rounded-circle border p-1"
                src="{{ asset('img/testimonial-3.jpg ')}}"
                alt=""
              />
              <div class="ms-4">
                <h5 class="mb-1">Client Name</h5>
                <span>Profession</span>
              </div>
            </div>
            <p class="mb-0">
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam
              amet diam et eos. Clita erat ipsum et lorem et sit.
            </p>
          </div>
          <div class="testimonial-item bg-white rounded p-4">
            <div class="d-flex align-items-center mb-4">
              <img
                class="flex-shrink-0 rounded-circle border p-1"
                src="{{ asset('img/testimonial-4.jpg ')}}"
                alt=""
              />
              <div class="ms-4">
                <h5 class="mb-1">Client Name</h5>
                <span>Profession</span>
              </div>
            </div>
            <p class="mb-0">
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam
              amet diam et eos. Clita erat ipsum et lorem et sit.
            </p>
          </div>
        </div>
        <div
          class="bg-primary text-light rounded-top p-5 my-6 mb-0 wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="row align-items-center">
            <div class="col-md-6">
              <h1 class="display-4 text-light mb-0">
                Subscribe Our Newsletter
              </h1>
            </div>
            <div class="col-md-6 text-md-end">
              <div class="position-relative">
                <input
                  class="form-control bg-transparent border-light w-100 py-3 ps-4 pe-5"
                  type="text"
                  placeholder="Your email"
                />
                <button
                  type="button"
                  class="btn btn-dark py-2 px-3 position-absolute top-0 end-0 mt-2 me-2"
                >
                  SignUp
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->

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
              <i class="fa fa-map-marker-alt me-3"></i>Megenagna, AddisAbaba,
              Ethiopia
            </p>
            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+25196434213</p>
            <p class="mb-2">
              <i class="fa fa-envelope me-3"></i>MKBakeryinfo@gmail.com
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
                  src="{{ asset('img/product-1.jpg ')}}"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light rounded p-1"
                  src="{{ asset('img/cake.jpeg ')}}"
                  style="height: 62px;"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light rounded p-1"
                  src="{{ asset('img/cc12.jpg ')}}"
                  
                  style="height: 62px;"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light rounded p-1"
                  src="{{ asset('img/creamCakes.jpg')}}"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light rounded p-1"
                  src="{{ asset('img/Occasional.jpg ')}}"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light rounded p-1"
                  src="{{ asset('img/CoffeeCookie.jpg')}} " style="height: 110px;"
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
            &copy; <a href="/index">MK Cakery</a>, All Right Reserved.
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