<?php
session_start(); // Start session at the beginning of the file
?>

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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> <!-- jQuery is required by Toastr -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</head>

<body>
  <div class="loader-container">
    <span class="loader"></span>
  </div>
  <div class="contact__bg">
    <?php include('navbar.php'); ?>

    <div class="contact_flex">
      <div class="contact_form_location" data-aos="fade-up"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine" data-aos-duration="1500">
        <div class="contact_info">
          <h4>CONTACT US</h4>
          <div>
            <h5><i class="fa-regular fa-envelope"></i> Email</h5>
            <a href="mailto:Annenaconsultingenterprise@Gmail.Com">Annenaconsultingenterprise@Gmail.Com</a>
            <br />
            <a href="mailto:Grandfieldconsult1212@Gmail.Com">Grandfieldconsult1212@Gmail.Com</a>
            <br />
            <a href="mailto:Annufu2016@Gmail.com">Annufu2016@Gmail.com</a>
          </div>
          <br />
          <div>
            <h5><i class="fa-solid fa-location-dot"></i> Address</h5>
            <p>Abuja Address:</p>
            <p>Surge Plaza Opp. American Plaza, C2 Phase4.</p>
            <br />

            <p>Lagos Address:</p>
            <p>
              116, Lagos Abeokuta Express Way, Beside Polaris Bank, Ade Alu
              Bus-Stop, Iyana Ipaja
            </p>
            <br />
          </div>

          <div>
            <h5><i class="fa-solid fa-phone"></i> Phone</h5>
            <a href="tel:+234816301539">+234816301539</a>
            <a href="tel:+234805842470">+234805842470</a>
          </div>
          <!-- <div class="icon1">
            <i class="fa-solid fa-angle-right"></i>
          </div> -->
        </div>

      </div>
      <div>
        <div class="container">
          <div class="contact_form">
            <h4>CONTACT FORM</h4>
            <form action="proc2_contact.php" method="post">
              <div>
                <label for="">Name</label>
                <input type="text" placeholder="Enter your name" name="name" />
              </div>
              <div>
                <label for="">Email</label>
                <input type="email" placeholder="Enter your Email" name="email" />
              </div>
              <div>
                <label for="">Message</label>
                <textarea
                  cols='30'
                  id=""
                  placeholder="Enter your message..."
                  name="message"></textarea>
              </div>
              <div>
                <button type="submit">SEND A MESSAGE</button>
              </div>
              <!-- <div class="icon">
                <i class="fa-solid fa-angle-left"></i>
              </div> -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div
    style="
        overflow: hidden;
        resize: none;
        max-width: 100%;
        width: 100%;
        height: 500px;
      ">
    <div
      id="embed-map-canvas"
      style="height: 100%; width: 100%; max-width: 100%">
      <iframe
        style="height: 100%; width: 100%; border: 0"
        frameborder="0"
        src="https://www.google.com/maps/embed/v1/place?q=116,+Lagos+Abeokuta+Express+Way,+Beside+Polaris+Bank,+Ade+Alu+Bus-Stop,+Iyana+Ipaja&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
    </div>
    <a
      class="from-embedmap-code"
      rel="nofollow"
      href="https://www.bootstrapskins.com/themes"
      id="authorize-maps-data">premium bootstrap themes</a>
    <style>
      #embed-map-canvas img {
        max-width: none !important;
        background: none !important;
        font-size: inherit;
        font-weight: inherit;
      }
    </style>
  </div>

  <?php include('footer.php'); ?>

  <button id="scrollToTopButton"><i class="fa-solid fa-arrow-up"></i></button>
  <script>
    <?php
    // Embed the PHP variable inside the script tag
    if (isset($_SESSION['error_message'])) {
      // Echo the toastr notification in a way that it is treated as JavaScript
      echo "toastr.error('" . addslashes($_SESSION['error_message']) . "');";
      unset($_SESSION['error_message']); // Clear the message after displaying it
    }
    if (isset($_SESSION['success_message'])) {
      // Echo the toastr notification in a way that it is treated as JavaScript
      echo "toastr.success('" . addslashes($_SESSION['success_message']) . "');";
      unset($_SESSION['success_message']); // Clear the message after displaying it
    }
    ?>
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="src/js/main.js"></script>
  <script src="src/js/script.js"></script>
</body>

</html>