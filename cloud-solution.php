
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>LifeSprint</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Spartan"
    />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <link href="assets/css/main.css" rel="stylesheet" />
  </head>

  <body>
    <header id="header" class="header d-flex align-items-center">
      <div
        class="container-fluid container-xl d-flex align-items-center justify-content-between header-container"
      >
        <a href="/" class="logo d-flex align-items-center">
          <div class="d-flex align-items-center">
            <i
              class="bi bi-geo-alt"
              style="color: white; opacity: 60%; margin-right: 5px"
            ></i>
            <h1>229 Murray Street Ottawa, Ontario K1N 5M9</h1>
          </div>
        </a>
        <nav class="navbar">
          <ul>
            <li>
              <a href="#"><i class="bi bi-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="bi bi-twitter-x"></i></a>
            </li>
            <li>
              <a href="#"><i class="bi bi-skype"></i></a>
            </li>
            <li>
              <a href="#"><i class="bi bi-telegram"></i></a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <div class="main-header-container">
      <div
        class="main-header container-fluid container-xl d-flex align-items-center"
      >
        <img src="assets/img/logo.png" class="logo-sprint" alt="sprint-logo" />
        <div class="d-flex main-header-nav">
          <span>Home</span>
          <span>Solutions</span>
          <span>Careers</span>
          <span style="margin-right: 0 !important">Contact</span>
        </div>
        <i
          class="bi bi-list"
          id="submenuIcon"
          onclick="handleSubmenu()"
          style="color: black; font-size: 25px; display: none"
        ></i>
      </div>
    </div>
    <div class="submenu" id="submenu">
      <i
        class="bi bi-x-lg"
        id="closeIcon"
        onclick="handleCloseSub()"
        style="color: black; font-size: 25px"
      ></i>
      <span><a href="/">Home</a></span>
      <span><a href="/">Solutions</a></span>
      <span><a href="/">Careers</a></span>
      <span><a href="/">Contact</a></span>
    </div>
    <section id="hero" class="hero">
      <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
          <div
            class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start"
          >
            <h2>Welcome to <span>LifeSprint</span></h2>
            <h2>Care Solution</h2>
            <p>
              Contributes to the recruitment of the most skilled professionals
            </p>
            <div class="d-flex justify-content-center justify-content-lg-start">
              <a href="#about" class="btn-get-started">Learn More</a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2">
            <img
              src="assets/img/hero-img.svg"
              class="img-fluid"
              alt=""
              data-aos="zoom-out"
              data-aos-delay="100"
            />
          </div>
        </div>
      </div>
    </section>

    <div class="portfolio-header text-center">
      <h3>Our solutions</h3>
    </div>
    <div id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div
            class="col-lg-6 col-sm-12 d-flex flex-column justify-content-center"
          >
            <h3>Mission-critical IT that transforms business</h3>
            <h4>
              Navigate the challenges and capitalize on the opportunities ahead
              to achieve greater performance, scale and competitiveness.
            </h4>
            <a href="#about" class="btn-get-started">Learn About LifeSprint</a>
          </div>
          <div class="col-lg-6 col-sm-12 img-container">
            <img src="assets/img/portfolio/app-1.jpg" alt="" />
          </div>
        </div>
      </div>
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 col-sm-12 img-container">
            <img src="assets/img/portfolio/app-1.jpg" alt="" />
          </div>
          <div
            class="col-lg-6 col-sm-12 d-flex flex-column justify-content-center"
          >
            <h3>Mission-critical IT that transforms business</h3>
            <h4>
              Navigate the challenges and capitalize on the opportunities ahead
              to achieve greater performance, scale and competitiveness.
            </h4>
            <a href="#about" class="btn-get-started">Learn About LifeSprint</a>
          </div>
        </div>
      </div>
    </div>

    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Our Partners</h2>
          <div class="d-flex justify-content-center gap-2">
            <img
              class="active"
              id="microsoftTab"
              onclick="handleTab(false)"
              src="assets/img/microsoft.png"
              alt="microsoft-cloud"
            />
            <img
              id="googleTab"
              onclick="handleTab(true)"
              src="assets/img/GoogleCloud.png"
              alt="google-cloud"
            />
          </div>
        </div>

        <div
          class="row gy-4"
          data-aos="fade-up"
          data-aos-delay="100"
          id="microsoftContent"
        >
          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <h3>Mirosoft License</h3>
              <p>
                Provident nihil minus qui consequatur non omnis maiores. Eos
                accusantium minus dolores iure perferendis tempore et
                consequatur.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <h3>Modern work</h3>
              <p>
                Ut autem aut autem non a. Sint sint sit facilis nam iusto sint.
                Libero corrupti neque eum hic non ut nesciunt dolorem.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <h3>Cloud Infrastructure</h3>
              <p>
                Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus
                ea aut. Vel qui id voluptas adipisci eos earum corrupti.
              </p>
            </div>
          </div>
        <div
          class="row gy-4"
          data-aos="fade-up"
          data-aos-delay="100"
          id="googleContent"
        ></div>
      </div>
    </section>

    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-6">
            <img src="assets/img/stats-img.svg" alt="" class="img-fluid" />
          </div>

          <div class="col-lg-6">
            <div class="stats-item d-flex align-items-center">
              <span
                data-purecounter-start="0"
                data-purecounter-end="232"
                data-purecounter-duration="1"
                class="purecounter"
              ></span>
              <p>
                <strong>Happy Clients</strong> consequuntur quae diredo para
                mesta
              </p>
            </div>
            <!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span
                data-purecounter-start="0"
                data-purecounter-end="521"
                data-purecounter-duration="1"
                class="purecounter"
              ></span>
              <p><strong>Projects</strong> adipisci atque cum quia aut</p>
            </div>
            <!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span
                data-purecounter-start="0"
                data-purecounter-end="453"
                data-purecounter-duration="1"
                class="purecounter"
              ></span>
              <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
            </div>
            <!-- End Stats Item -->
          </div>
        </div>
      </div>
    </section>

    <!-- <main id="main">
      <section id="contact" class="contact">
        <div
          class="container d-flex justify-content-between contact-section"
          data-aos="fade-up"
        >
          <div style="border-left: 4px solid white; padding-left: 20px">
            <h3>Join Our Mailing List</h3>
            <h6>For receiving our news and updates in your inbox directly</h6>
          </div>
          <div class="d-flex contact-btn-container" style="height: 60px">
            <div class="contact-btn">
              Contact<span style="padding-left: 5px"></span>US
            </div>
          </div>
        </div>
      </section>
    </main> -->

    <section id="contact" class="contact sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>
                    229 Murray Street Ottawa, Ontario K1N 5M9</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Open Hours:</h4>
                  <p>Mon-Sat: 11AM - 23PM</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section>

    <div class="footer container container-xl">
      <div class="row footer-content">
        <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
          <img
            src="assets/img/logo.png"
            class="logo-sprint"
            alt="footer-logo"
          />
        </div>
        <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
          <span>Company</span>
          <div class="d-flex flex-column">
            <span>About</span>
            <span>Solutions</span>
            <span>Careers</span>
            <span>Contact</span>
          </div>
        </div>
        <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
          <span>Contact</span>
          <div class="d-flex flex-column">
            <span>Phone : 1 613-707-2989</span>
          </div>
        </div>
        <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
          <span>Address</span>
          <div class="d-flex flex-column">
            <span>229 Murray Street Ottawa</span>
            <span>Ontario K1N 5M9</span>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-between right-footer">
        <span style="font-size: 13px">
          Copyright © 2023 LifeSprint. All Rights Reserved.ed.
        </span>
        <div class="footer-navbar">
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-twitter-x"></i></a>
          <a href="#"><i class="bi bi-skype"></i></a>
          <a href="#"><i class="bi bi-telegram"></i></a>
        </div>
      </div>
    </div>

    <a
      href="#"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <div id="preloader"></div>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <script src="assets/js/main.js"></script>
  </body>
</html>