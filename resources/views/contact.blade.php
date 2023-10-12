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
      <a href="/" class="navbar-brand ms-4 ms-lg-0">
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
          <a href="#" class="nav-item nav-link active">Contact</a>
        </div>
        <div class="d-none d-lg-flex">
          <div
            class="flex-shrink-0 btn-lg-square border border-light rounded-circle"
          >
            <i class="fa fa-phone text-primary"></i>
          </div>
          <div class="ps-3">
            <small class="text-primary mb-0">Call Us</small>
            <p class="text-light fs-5 mb-0">+012 345 6789</p>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div
      class="container-fluid page-header-contact py-6 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container text-center pt-5 pb-3">
        <h1 class="display-4 text-white animated slideInDown mb-3">
          Contact Us
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Pages</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
              Contact
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-6">
      <div class="container">
        <div
          class="text-center mx-auto mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 500px"
        >
          <p class="text-primary text-uppercase mb-2"></p>
          <h1 class="display-6 mb-4">
            If You Have Any Query, Please Contact Us
          </h1>
        </div>
        <div class="row g-0 justify-content-center">
          <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
           
            <form>
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      placeholder="Your Name"
                    />
                    <label for="name">Your Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      placeholder="Your Email"
                    />
                    <label for="email">Your Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control"
                      id="subject"
                      placeholder="Subject"
                    />
                    <label for="subject">Subject</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea
                      class="form-control"
                      placeholder="Leave a message here"
                      id="message"
                      style="height: 200px"
                    ></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>
                <div class="col-12 text-center">
                  <button
                    class="btn btn-primary rounded-pill py-3 px-5"
                    type="submit"
                  >
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->

    <!-- Google Map Start -->
    <div class="container-xxl py-6 px-0 wow fadeInUp" data-wow-delay="0.1s">
      <iframe
        class="w-100 mb-n2"
        style="height: 450px"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31169.50760572066!2d38.7489455917927!3d9.010749520364538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1632bb5d6e8e6b2f%3A0xc4a6b1a8e1f9aba0!2sAddis%20Ababa%2C%20Ethiopia!5e0!3m2!1sen!2sus!4v1630391265063!5m2!1sen!2sus"
        frameborder="0"
        allowfullscreen=""
        aria-hidden="false"
        tabindex="0"
      ></iframe>
    </div>
    <!-- Google Map End -->

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
            &copy; <a href="#">Your Site Name</a>, All Right Reserved.
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