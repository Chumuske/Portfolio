<!DOCTYPE html>
<html lang="en">

<head>

  <title>Portfolio</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="css/mdb.min.css" />
  <link rel="stylesheet" href="assets/css/argon.css?v=1.1.0" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <script src="js/jquery.min.js"></script>

  <?php
  // session_start();
  // include("dbcon.php");
  // include("Email_API/email_function.php");
  // include("function.php");

  ?>
</head>

<body class="bg-darkest text-white">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="dashboard.html">
        <img src="img/pcas_logo.png" class="img-fluid">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="dashboard.html">
                <img src="img/pcas_logo.png" class="img-fluid">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav navbar-des">
          <li class="nav-item">
            <a href="#home" class="nav-link nav-des">
              <span class="nav-link-inner--text">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link nav-des">
              <span class="nav-link-inner--text">About</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#works" class="nav-link nav-des">
              <span class="nav-link-inner--text">Works</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link nav-des">
              <span class="nav-link-inner--text">Contact</span>
            </a>
          </li>
        </ul>
        <hr class="d-lg-none" />
      </div>
    </div>
  </nav>

  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-darkest pt-8 pb-7" id="home">
      <div class="container">
        <div class="header-body">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <div class="pr-5 text-center" data-aos="fade-up" data-aos-duration="2000">
                <img src="img/me.jpg" class="img-fluid profile-image">
              </div>
            </div>
            <div class="col-lg-7 mt-5">
              <div class="pr-5">
                <p class="text-muted introduction" data-aos="zoom-in-left" data-aos-duration="2500">- Introduction</p>
                <h1 class="text text-white text-left mt-4" data-aos="zoom-in-left" data-aos-duration="3000">Hello, <span class="typed-text text-danger display-3 text"></span><span class="cursor">&nbsp;</span></h1>
                <p class="text-white mt-4" data-aos="zoom-in-left" data-aos-duration="3000">This system will provide the community of having easy access to reporting crimes or blotters to the police department. It will make the process of reporting and interacting with the police officers easier.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="py-6 pb-9 bg-black mt-5" id="about">
      <div class="container col-xxl-8 px-4 py-5">
        <p class="text-muted introduction" data-aos="fade-right" data-aos-duration="1500" data-aos-anchor-placement="bottom-bottom">- About</p>
        <div class="row align-items-center text-white" data-aos="fade-right" data-aos-duration="1500" data-aos-anchor-placement="bottom-bottom">
          <div class="col-lg-7">
            <h3 class="display-5 text-white">About Me</h3>
            <p class="lead">Self-motivated person who likes to learn a lot of things by experience. A leader who is open minded about suggestions and advice in the team. Love to learn new things about tehcnology and can adopt quickly in the environment. Dedicated to work in any task and to finished the task in the right time.</p>
            <p class="text-danger display-2 resume mt-3">My Resume <a href="file/Resume-Christian.pdf" class="text-primary" target="__blank">Click here</a></p>
          </div>
          <div class="col-lg-5 mt-3">
            <h2 class="display-4 text-danger">Programming Language I Know</h2>
            <div class="row">
              <div class="col">
                <ul class="list-unstyled mt-3">
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-php"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white ">PHP</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-java"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">Java</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-js"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">JavaScript</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col">
                <ul class="list-unstyled mt-3">
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-python"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">Python</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-html5"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">HTML</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-css3-alt"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">CSS</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="section section-lg pt-lg-0 mt--7">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="bottom-bottom">
              <div class="card card-des card-lift--hover bg-dark-blue">
                <div class="card-body py-5">
                  <div class="icon icon-shape bg-gradient-primary text-white rounded-circle mb-4">
                    <i class="fas fa-user-clock"></i>
                  </div>
                  <h4 class="h3 text-primary text-uppercase">Time Management</h4>
                  <p class="description mt-3">I can finish my task in the right time. I manage my time efficiently to build up my skills and knowledge.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">
              <div class="card card-des card-lift--hover bg-dark-blue">
                <div class="card-body py-5">
                  <div class="icon icon-shape bg-gradient-success text-white rounded-circle mb-4">
                    <i class="fas fa-tasks"></i>
                  </div>
                  <h4 class="h3 text-success text-uppercase">Multitasking</h4>
                  <p class="description mt-3">I can multitask in any field. I can do designing using frameworks, backend programming, and also i can create an ERD.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-duration="3000" data-aos-anchor-placement="bottom-bottom">
              <div class="card card-des card-lift--hover bg-dark-blue">
                <div class="card-body py-5">
                  <div class="icon icon-shape bg-gradient-danger text-white rounded-circle mb-4">
                    <i class="far fa-lightbulb"></i>
                  </div>
                  <h4 class="h3 text-warning text-uppercase">Logical Thinking</h4>
                  <p class="description mt-3">I have some logics when it comes in algorithms. I know how the data flow and work in the system. I also create flowcharts and diagrams.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container px-4 py-5" id="works">
    <p class="text-muted introduction" data-aos="fade-right" data-aos-duration="1500" data-aos-anchor-placement="bottom-bottom">- Works</p>
    <div class="section">
    </div>
  </div>

  <section class="py-2">
    <div class="container">
      <div class="row row-grid align-items-center">
        <div class="col-md-6 order-md-2">
          <img src="img/works/work1.png" class="img-fluid" data-aos="zoom-in" data-aos-duration="1500" data-aos-anchor-placement="bottom-bottom">
        </div>
        <div class="col-md-6 order-md-1">
          <div class="pr-md-5">
            <h1 class="display-3 text-warning" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500" data-aos-anchor-placement="bottom-bottom">E-Commerce</h1>
            <p data-aos="fade-right" data-aos-easing="linear" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">This project is about e-commerce and the theme of the website or the product it sells is about games. It is like the other gaming website like DataBlitz.</p>
            <h3 class="text-danger text-underline" data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">Programming Language & Framework Used</h3>
            <div class="row" data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">
              <div class="col">
                <ul class="list-unstyled mt-3">
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-php"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white ">PHP</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-html5"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">HTML</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-css3-alt"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">CSS</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col">
                <ul class="list-unstyled mt-3">
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <img src="img/icon/mysql.png" class="img-fluid icon-des" />
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white ">MYSQL</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <img src="img/icon/jquery.png" class="img-fluid icon-des" />
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">JQuery</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-js"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">JavaScript</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col">
                <ul class="list-unstyled mt-3">
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-bootstrap"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">Bootstrap</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-sass"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">SCSS</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-6">
    <div class="container">
      <div class="row row-grid align-items-center">
        <div class="col-md-6">
          <img src="img/works/work2.png" class="img-fluid" data-aos="zoom-in" data-aos-duration="1500" data-aos-anchor-placement="bottom-bottom">
        </div>
        <div class="col-md-6">
          <div class="pr-md-5">
            <h1 class="display-3 text-warning" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500" data-aos-anchor-placement="bottom-bottom">Enrollment System</h1>
            <p data-aos="fade-right" data-aos-easing="linear" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">This project is only about the enrolling of subjects for the specific course. I make this for only enchance the design and functionality that the existing system in our school.</p>
            <h3 class="text-danger text-underline" data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">Programming Language / Framework</h3>
            <div class="row" data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">
              <div class="col">
                <ul class="list-unstyled mt-3">
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-php"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white ">PHP</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-html5"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">HTML</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-css3-alt"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">CSS</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col">
                <ul class="list-unstyled mt-3">
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <img src="img/icon/mysql.png" class="img-fluid icon-des" />
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white ">MYSQL</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <img src="img/icon/jquery.png" class="img-fluid icon-des" />
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">JQuery</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-js"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">JavaScript</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col">
                <ul class="list-unstyled mt-3">
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <img src="img/icon/argon.png" class="img-fluid icon-des" alt="">
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">Argon</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-sass"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">SCSS</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-6">
    <div class="container">
      <div class="row row-grid align-items-center">
        <div class="col-md-6 order-md-2">
          <img src="./img/works/work3.png" class="img-fluid" data-aos="zoom-in" data-aos-duration="1500" data-aos-anchor-placement="bottom-bottom">
        </div>
        <div class="col-md-6 order-md-1">
          <div class="pr-md-5">
            <h1 class="display-3 text-warning" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500" data-aos-anchor-placement="bottom-bottom">Company Porfolio</h1>
            <p data-aos="fade-right" data-aos-easing="linear" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">We love cards and everybody on the web seems to. We have gone above and beyond with options for you to organise your information. From cards designed for content, to pricing cards or user profiles, you will have many options to choose from.</p>
            <h3 class="text-danger text-underline" data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">Programming Language / Framework</h3>
            <div class="row" data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">
              <div class="col">
                <ul class="list-unstyled mt-3">
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-html5"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">HTML</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-css3-alt"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">CSS</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <img src="img/icon/jquery.png" class="img-fluid icon-des" />
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">JQuery</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col">
                <ul class="list-unstyled mt-3">
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-js"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">JavaScript</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-bootstrap"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">Bootstrap</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-sass"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">SCSS</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-6">
    <div class="container">
      <div class="row row-grid align-items-center">
        <div class="col-md-6">
          <img src="img/works/work4.png" class="img-fluid" data-aos="zoom-in" data-aos-duration="1500" data-aos-anchor-placement="bottom-bottom">
        </div>
        <div class="col-md-6">
          <div class="pr-md-5">
            <h1 class="display-3 text-warning" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500" data-aos-anchor-placement="bottom-bottom">Crime Reporting System <span>(Ongoing)</span></h1>
            <p data-aos="fade-right" data-aos-easing="linear" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">This is project is still ongoing. The purpose of this project is to make the crime reporting / blotter more efficient when it comes to reporting so the citizen's can easily access in reporting a crime and more.</p>
            <h3 class="text-danger text-underline" data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">Programming Language / Framework / API</h3>
            <div class="row" data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">
              <div class="col">
                <ul class="list-unstyled mt-3">
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-html5"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">HTML</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-css3-alt"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">CSS</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-sass"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">SCSS</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <img src="img/icon/argon.png" class="img-fluid icon-des" alt="argon">
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">Argon</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col">
                <ul class="list-unstyled mt-3">
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-js"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">JavaScript</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <img src="img/icon/jquery.png" class="img-fluid icon-des" alt="jquery">
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">JQuery</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <img src="img/icon/jquery.png" class="img-fluid icon-des" alt="jquery">
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">MYSQL</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <img src="img/icon/zoom.png" class="img-fluid icon-des" alt="jquery">
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">Zoom API</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col">
                <ul class="list-unstyled mt-3">
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-map-pin"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">Geoplugin</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-envelope"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">PHPMailer</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-mobile"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">Mobile Detect</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-6">
    <div class="container">
      <div class="row row-grid align-items-center">
        <div class="col-md-6 order-md-2">
          <img src="./img/works/work5.png" class="img-fluid" data-aos="zoom-in" data-aos-duration="1500" data-aos-anchor-placement="bottom-bottom">
        </div>
        <div class="col-md-6 order-md-1">
          <div class="pr-md-5">
            <h1 class="display-3 text-warning" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500" data-aos-anchor-placement="bottom-bottom">Octopath Web Design</h1>
            <p data-aos="fade-right" data-aos-easing="linear" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">This web is only for practice purposes only. I make this website because i like the game and also it's Square Enix which is famous for JRPG games which i like.</p>
            <h3 class="text-danger text-underline" data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">Programming Language / Framework</h3>
            <div class="row" data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">
              <div class="col">
                <ul class="list-unstyled mt-3">
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-html5"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">HTML</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-css3-alt"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">CSS</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col">
                <ul class="list-unstyled mt-3">
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-bootstrap"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">Bootstrap</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-js"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">JavaScript</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-6">
    <div class="container">
      <div class="row row-grid align-items-center">
        <div class="col-md-6">
          <img src="img/works/work6.png" class="img-fluid" data-aos="zoom-in" data-aos-duration="1500" data-aos-anchor-placement="bottom-bottom">
        </div>
        <div class="col-md-6">
          <div class="pr-md-5">
            <h1 class="display-3 text-warning" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500" data-aos-anchor-placement="bottom-bottom">Scott Pilgrim Vs The World: Web Design</h1>
            <p data-aos="fade-right" data-aos-easing="linear" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">This project is for practice purposes only. I make this website for the 10th anniversary of Scott Pilgrim Vs The World Game. I only make this because i was hyped and thinking of what theme i will design.</p>
            <h3 class="text-danger text-underline" data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">Programming Language / Framework</h3>
            <div class="row" data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">
              <div class="col">
                <ul class="list-unstyled mt-3">
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-html5"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">HTML</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-css3-alt"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">CSS</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col">
                <ul class="list-unstyled mt-3">
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-bootstrap"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">Bootstrap</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fab fa-js"></i>
                        </div>
                      </div>
                      <div>
                        <h4 class="mb-0 text-white">JavaScript</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  </div>
  <!-- Footer -->
  <footer class="py-7 bg-black" id="contact">
    <div class="py-6 pb-9 bg-black">
      <div class="container col-xxl-8 px-4 py-5">
        <p class="text-muted">- Contact</p>
        <div class="row align-items-center text-white">
          <div class="col-lg-7" data-aos="fade-right" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">
            <h1 class="display-1 text-white">@Contact Me</h1>
            <p class="display-6 text-warning">Lives: Quezon City, Philippines</p>
            <p class="display-6 text-warning">Email: istianseva26@gmail.com</p>
            <p class="display-6 text-warning">Contact #: 09369112067</p>
          </div>
          <div class="col-lg-5 mt-4">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" role="form" data-aos="fade-down" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                      </div>
                      <input class="form-control" placeholder="Name" name="name" type="text" required>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="form-control" placeholder="Email" name="email" type="email" required>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" name="message" placeholder="Message..." rows="5" required></textarea>
              </div>
              <div class="text-center">
                <button type="submit" name="btn-submit-contact" class="btn bg-gradient-danger text-black mt-4">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2021 <a href="#" class="font-weight-bold ml-1" target="_blank">Chrisitan Seva</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://facebook.com/christian.seva.16" target="_blank" data-toggle="tooltip" data-original-title="Check me on Facebook">
                <i class="fab fa-facebook-square"></i>
                <span class="nav-link-inner--text d-lg-none">Facebook</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://www.instagram.com/christianseva/" target="_blank" data-toggle="tooltip" data-original-title="Check me on Instagram">
                <i class="fab fa-instagram"></i>
                <span class="nav-link-inner--text d-lg-none">Instagram</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://linkedin.com/in/paul-christian-aseva-1172581b2" target="_blank" data-toggle="tooltip" data-original-title="Check me on LinkedIn">
                <i class="fab fa-linkedin"></i>
                <span class="nav-link-inner--text d-lg-none">LinkedIn</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Success Citizen Account Verification -->
  <div class="col-md-4">
    <div class="modal fade" id="contact-success-alert" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
      <div class="modal-dialog modal-success modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-success">

          <div class="modal-header">
            <h6 class="modal-title" id="modal-title-notification">Submission Status</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>

          <div class="modal-body">

            <div class="py-3 text-center">
              <i class="fas fa-check-circle fa-5x"></i>
              <h4 class="heading mt-4">Submission Success!</h4>
              <p>The form that you submitted has successfully notify Paul Christian A. Seva. Thank you for submitting a form. Have a good day.</p>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-white ml-auto" data-dismiss="modal">Ok, Got it</button>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Failed Citizen Account Verification -->
  <div class="col-md-4">
    <div class="modal fade" id="contact-failed-alert" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
      <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">

          <div class="modal-header">
            <h6 class="modal-title" id="modal-title-notification">submission Status</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>

          <div class="modal-body">

            <div class="py-3 text-center">
              <i class="fas fa-exclamation-circle fa-5x"></i>
              <h4 class="heading mt-4">Submission Failed!</h4>
              <p>The form that you submitted has unsuccessful to notify Paul Christian A. Seva. Try again later. Have a good day.</p>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-white ml-auto" data-dismiss="modal">Ok, Got it</button>
          </div>

        </div>
      </div>
    </div>
  </div>


  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="assets/vendor/select2/dist/js/select2.min.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="assets/vendor/nouislider/distribute/nouislider.min.js"></script>
  <script src="assets/vendor/quill/dist/quill.min.js"></script>
  <script src="assets/vendor/dropzone/dist/min/dropzone.min.js"></script>
  <script src="assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <script src="js/typing.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.1.0"></script>
  <script src="js/slider.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    AOS.init();
  </script>

</body>

</html>