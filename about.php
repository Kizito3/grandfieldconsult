<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Grand consulting</title>
  <link rel="shortcut icon" href="src/images/grand_logo.png" type="image/x-icon">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="src/css/style.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link
    rel="stylesheet"
    href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
</head>

<body>
  <div class="loader-container">
    <span class="loader"></span>
  </div>
  <div class="about_bg">
    <?php include('navbar.php'); ?>
    <div class="container">
      <div class="about_us_flex">
        <div data-aos="fade-right"
          data-aos-offset="300"
          data-aos-easing="ease-in-sine" data-aos-duration="1500">
          <h1>ABOUT US</h1>
        </div>
        <div data-aos="fade-up"
          data-aos-offset="300"
          data-aos-easing="ease-in-sine" data-aos-duration="1500">
          <img src="src/images/grand_about.png" alt="" />
        </div>
      </div>

      <div class="about_us_content">
        <div class="content_about" data-aos="fade-right"
          data-aos-offset="300"
          data-aos-easing="ease-in-sine" data-aos-duration="1500">
          <h5>Grand Field Consult:</h5>
          <p>
            Started in 2021 is a consulting firm. Our Head office is located
            in Lagos and Abuja, commercial hub of Nigeria. It’s an
            Organization comprises of Teams and core professionals.
          </p>

          <p>
            We recruit and outsource for Organization , we deliver exceptional
            and quality Human resource training, ticketing, visa application,
            loan and investment , tour packages, conferences both Domestic and
            International, flight reservation, hotel bookings , consultation
            services
          </p>

          <h5>Core Values :</h5>
          <ul class="values">
            <li>SAFTY</li>
            <li>TRUST</li>
            <li>ACCOUNTABILITY</li>
            <li>GROWTH</li>
            <li>CREATIVITY</li>
            <li>EXCELLENCE</li>
          </ul>
        </div>
        <div class="content_about" data-aos="fade-up"
          data-aos-offset="300"
          data-aos-easing="ease-in-sine" data-aos-duration="1500">
          <h5>CORE VALUES:</h5>
          <p>
            We have an excellence culture building globally which serves as a
            guild to us in putting our teams together.
          </p>

          <h5>OUR TESTIMONY:</h5>
          <p>
            Grand Field Consult has a proven track record of delivering
            exceptional results. Our commitment to excellence and personalized
            service has earned us the trust of many satisfied clients.
            Experience the difference with Grand Field Consult today.
          </p>
        </div>
      </div>
    </div>
  </div>

  <section>
    <div class="container">
      <div class="about_us_sacremento">
        <p>”And Remember,
        <p>Our job is our pride”</p>
        </p>
      </div>
    </div>
  </section>

  <section class="">
    <div class="container">
      <div class="testimonial_heading">
        <h2>Testimonials</h2>
      </div>
      <div class="testimonials">
        <div class="testimonial_card">
          <div class="avatar">
            <img src="src/images/test2.png" alt="Avatar 1" />
          </div>
          <div class="center">
            <div class="name">
              <p>Grace</p>
            </div>
          </div>
          <div class="stars">
            <img src="src/images/stars.png" alt="" />
          </div>
          <div class="testimonial">
            <p>
              Finally my Husband and Daughters Visa has been Approved. Thanks
              to your Company, we were Provide Proof of Fund and we saw this
              Application come through. We are Truly Grateful.
            </p>
          </div>
        </div>
        <div class="testimonial_card active">
          <div class="avatar">
            <img src="src/images/test1.png" alt="Avatar 2" />
          </div>
          <div class="center">
            <div class="name">
              <p>Alexander</p>
            </div>
          </div>
          <div class="stars"><img src="src/images/stars.png" alt="" /></div>
          <div class="testimonial">
            <p>
              Me and my Friends all got our Visa thanks. I was ensured that we
              will get it and we did. We are really grateful for what they did
              for us.
            </p>
          </div>
        </div>
        <div class="testimonial_card">
          <div class="avatar">
            <img src="src/images/test3.png" alt="Avatar 3" />
          </div>
          <div class="center">
            <div class="name">
              <p>Joy</p>
            </div>
          </div>
          <div class="stars"><img src="src/images/stars.png" alt="" /></div>
          <div class="testimonial">
            <p>
              Me and my Family have finally gotten our Visa thanks to your
              company. We are Truly Grateful for seeing Us through. And with
              the Advice and Human Development training, I know this will go
              well for Us.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include('footer.php'); ?>
  <button id="scrollToTopButton"><i class="fa-solid fa-arrow-up"></i></button>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="src/js/main.js"></script>
  <script src="src/js/script.js"></script>
</body>

</html>