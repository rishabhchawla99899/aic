<?php
$currentPage = 'events';
$currentSubPage = '';﻿﻿
?>
<!doctype html>
<html lang="zxx">
  <?php include("includes/head.php");?>

<body>
  <?php include("includes/preloader.php");?>
  <?php include("includes/header.php");?>

  <section class="full-height overlay parallax white-text text-left" data-speed="0.6" data-background="<?php echo $siteurl;?>/images/banner/coming-soon.jpg" data-overlay-color="gradient-5" data-overlay="9">
    <div class="container">
      <div class="row full-height align-items-center">
        <div class="col-lg-8 p-sm-y80">
          <div class="coming-soon-logo m-b20">
            <img src="<?php echo $siteurl;?>\images\logos\logo.png" alt="logo">
          </div>

          <div class="display-4 f-w-700 m-b10">
            We're Coming Soon !!
          </div>
          <p class="text m-b40">The Events page is currently under development. Thank
            you for your patience.</p>
          <ul class="countdown countdown-border m-b40 text-left" data-countdown-date="02/18/2019 18:00:00">
            <li>
              <span class="days">00</span>
              <p class="days_text ">Days</p>
            </li>
            <li>
              <span class="hours">00</span>
              <p class="hours_text ">Hours</p>
            </li>
            <li>
              <span class="minutes">00</span>
              <p class="minutes_text ">Minutes</p>
            </li>
            <li>
              <span class="seconds">00</span>
              <p class="seconds_text ">Seconds</p>
            </li>
          </ul>
          <div class="social-links social-links-light m-t20">
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="#">
              <i class="fa fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fa fa-google-plus"></i>
            </a>
            <a href="#">
              <i class="fa fa-youtube"></i>
            </a>
            <a href="#">
              <i class="fa fa-dribbble"></i>
            </a>
            <a href="#">
              <i class="fa fa-behance"></i>
            </a>

          </div>
          <!-- <a href="#" class="button button-glass">Sign Up Now</a> -->
        </div>
      </div>
    </div>
  </section>

  <!-- All Javascript -->
  <script src="<?php echo $siteurl;?>\js\plugins.js"></script>
  <script src="<?php echo $siteurl;?>\js\main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>

</html>
