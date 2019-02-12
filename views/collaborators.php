<?php
$currentPage = 'collaborators';
$currentSubPage = '';
?>
<!doctype html>
<html lang="zxx">
  <?php include("includes/head.php");?>

<body>
  <?php include("includes/preloader.php");?>
  <?php include("includes/header.php");?>
  <section class="page-title page-title-center page-title-dark">
    <div class="container clearfix">
      <div class="title-align">
        <h1><strong>Collaborators</strong></h1>
      </div>
    </div>
  </section>

  <section class="section-padding">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12">
          <div class="divider-1 m-b70" id="industries">
            <h1>Industries</h1>
          </div>
        </div>
        <div class="col-md-10 mx-auto">
          <!--clients List Grid 4-->
          <div class="clients-list clients-grid-4 m-b70">
            <ul>
              <li>
                <img class="img-fluid mx-auto" src="<?php echo $siteurl;?>\images\clients\1.png" alt="devkit"> </li>
              <li>
                <img class="img-fluid mx-auto" src="<?php echo $siteurl;?>\images\clients\2.png" alt="devkit"> </li>
              <li>
                <img class="img-fluid mx-auto" src="<?php echo $siteurl;?>\images\clients\3.png" alt="devkit"> </li>
              <li>
                <img class="img-fluid mx-auto" src="<?php echo $siteurl;?>\images\clients\4.png" alt="devkit"> </li>
              <li>
                <img class="img-fluid mx-auto" src="<?php echo $siteurl;?>\images\clients\5.png" alt="devkit"> </li>
              <li>
                <img class="img-fluid mx-auto" src="<?php echo $siteurl;?>\images\clients\6.png" alt="devkit"> </li>
              <li>
                <img class="img-fluid mx-auto" src="<?php echo $siteurl;?>\images\clients\7.png" alt="devkit"> </li>
              <li>
                <img class="img-fluid mx-auto" src="<?php echo $siteurl;?>\images\clients\8.png" alt="devkit"> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-padding">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12" id="companies">
          <div class="divider-1 m-b70">
            <h1>Companies</h1>
          </div>
        </div>
        <div class="col-12 p-b40">
          <!-- clients Carousel -->
          <div class="slider slider-center-focused slider-gap" data-autoplay="true" data-nav="true" data-slides-to-show="7" data-slick-center-mode="true">
            <div>
              <img src="<?php echo $siteurl;?>\images\clients\1.png" alt="slider">
            </div>
            <div>
              <img src="<?php echo $siteurl;?>\images\clients\2.png" alt="slider">
            </div>
            <div>
              <img src="<?php echo $siteurl;?>\images\clients\3.png" alt="slider">
            </div>
            <div>
              <img src="<?php echo $siteurl;?>\images\clients\4.png" alt="slider">
            </div>
            <div>
              <img src="<?php echo $siteurl;?>\images\clients\5.png" alt="slider">
            </div>
            <div>
              <img src="<?php echo $siteurl;?>\images\clients\6.png" alt="slider">
            </div>
            <div>
              <img src="<?php echo $siteurl;?>\images\clients\7.png" alt="slider">
            </div>
            <div>
              <img src="<?php echo $siteurl;?>\images\clients\8.png" alt="slider">
            </div>
            <div>
              <img src="<?php echo $siteurl;?>\images\clients\9.png" alt="slider">
            </div>
            <div>
              <img src="<?php echo $siteurl;?>\images\clients\10.png" alt="slider">
            </div>
          </div>
          <!-- clients Carousel -->
        </div>
      </div>
    </div>
  </section>
  <section class="section-padding">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12" id="partners">
          <div class="divider-1 m-b70">
            <h1>Partner Universities</h1>
          </div>
        </div>
        <div class="col-md-10 mx-auto">
          <!--clients List Grid 4-->
          <div class="clients-list clients-grid-5 m-b70">
            <ul>
              <li>
                <img class="img-fluid mx-auto" src="<?php echo $siteurl;?>\images\clients\1.png" alt="devkit"> </li>
              <li>
                <img class="img-fluid mx-auto" src="<?php echo $siteurl;?>\images\clients\2.png" alt="devkit"> </li>
              <li>
                <img class="img-fluid mx-auto" src="<?php echo $siteurl;?>\images\clients\3.png" alt="devkit"> </li>
              <li>
                <img class="img-fluid mx-auto" src="<?php echo $siteurl;?>\images\clients\4.png" alt="devkit"> </li>
              <li>
                <img class="img-fluid mx-auto" src="<?php echo $siteurl;?>\images\clients\5.png" alt="devkit"> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include("includes/footer.php");?>

  <!-- All Javascript -->
  <script src="<?php echo $siteurl;?>\js\plugins.js"></script>
  <script src="<?php echo $siteurl;?>\js\main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>

</html>
