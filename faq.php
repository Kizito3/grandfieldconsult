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
  <div class="faq_bg">
    <?php include('navbar.php'); ?>
    <div class="container">
      <section class="faq">
        <div
          data-aos="fade-right"
          data-aos-offset="300"
          data-aos-easing="ease-in-sine" data-aos-duration="1500">
          <div>
            <div class="heading">
              <h2>Frequently Asked Questions</h2>
              <h5>Your Questions, Answered.</h5>
            </div>
          </div>
        </div>

        <div class="faq-button" data-aos="fade-up"
          data-aos-offset="300"
          data-aos-easing="ease-in-sine" data-aos-duration="1500">
          <div>
            <button class="question">
              Do you offer sponsorship account and also what other document
              comes with the sponsorship account?
            </button>
            <div class="answer center2">
              Yes, we offer sponsorship account & it comes with a letter of
              sponsor
            </div>
          </div>
          <div>
            <button class="question">
              How can i obtain Canada Permanent Residency from my country?
            </button>
            <div class="answer center2">
              You need to apply for canada express entry program through, 1.
              federal skilled worker & trade, 2. canada exp. class
            </div>
          </div>
          <div>
            <button class="question">
              I would like to know what kind of tour packages you do, and do
              you also do daycation tour?
            </button>
            <div class="answer center2">
              We definitely offer Daycation tours tailored to your request
            </div>
          </div>
          <div>
            <button class="question">
              Hello, please do you offer Resident Permit as part of your
              Service & can you advice me on which is the best?
            </button>
            <div class="answer center2">
              Yes, we do & we currently have resident in the european
              countries.
            </div>
          </div>
          <div>
            <button class="question">
              I need Statement of Purpose(SOP) to back my Visa Application, is
              it possible that you render such services?
            </button>
            <div class="answer center2">
              Yes, we write excellent SOP tailored to suit your visa process
              in order to get your study permit.
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

  <?php include('footer.php'); ?>
  <button id="scrollToTopButton"><i class="fa-solid fa-arrow-up"></i></button>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="src/js/main.js"></script>
  <script src="src/js/script.js"></script>
</body>

</html>