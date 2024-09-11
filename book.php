<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Grand consulting</title>
  <link rel="shortcut icon" href="src/images/grand_logo.png" type="image/x-icon">
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
  <?php include('navbar.php'); ?>
  <div class="banner_area">
    <div class="book_now">
      <div class="book_now_bg">
        <div class="book_heading heading_text">
          <h1>Book Now</h1>
          <h3>Start Your Journey with Us Today!</h3>
          <p>
            Secure your next adventure with just a few clicks—explore,
            experience, and enjoy unparalleled travel services at your
            convenience. And remember Our Job is Our Pride.
          </p>
          <div class="book_img">
            <img src="src/images/grand_about.png" alt="" />
          </div>
        </div>
      </div>
      <div class="book_bg">
        <form action="proc_book.php" method="post">
          <div class="radio">
            <input type="radio" name="trip_type" value="Return" id="" /><span>Return</span>
            <input type="radio" name="trip_type" value="One_way" id="" /><span>One-way</span>
            <input type="radio" name="trip_type" value="Multi_city" id="" /><span>Multi-city</span>
            <input type="radio" name="trip_type" value="Economy" id="" /><span>Economy</span>
          </div>

          <div class="date">
            <div class="">
              <label for="">Date</label><br />
              <input type="date" name="date" id="" />
            </div>
            <div>
              <label for="">Return Date</label> <br />
              <input type="date" name="return_date" id="" />
            </div>
          </div>
          <div class="form_book">
            <div class="each_input">
              <label for="" class="form_label">full Name</label><br />
              <input type="text" name="full_name" id="" />
            </div>
            <div class="each_input">
              <label for="" class="form_label">Phone</label><br />
              <input type="text" name="phone" id="" />
            </div>
            <div class="each_input">
              <label for="" class="form_label">From</label><br />
              <input type="text" name="from_location" id="" />
            </div>
            <div class="each_input">
              <label for="" class="form_label">To</label><br />
              <input type="text" name="to_location" id="" />
            </div>
            <div class="each_input">
              <label for="" class="form_label">Number of Travellers</label><br />
              <input type="number" name="number_of_travellers" id="" value="1" />
            </div>
            <div class="book_btn">
              <button>Book Now</button>
            </div>
          </div>
        </form>
      </div>
    </div>
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
  <script src="src/js/main.js"></script>
  <script src="src/js/script.js"></script>
</body>

</html>