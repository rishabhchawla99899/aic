<?php
$currentPage = 'contact';
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
        <h1><strong>Contact Us</strong></h1>
        <span>Get in touch</span>
      </div>
    </div>
  </section>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gmap" id="map" data-lat="26.8438552" data-lng="75.5652343" data-marker-icon="<?php echo $siteurl;?>/images/markar/red.png"></div>
                </div>
            </div>
            <div class="row m-t80">

                <div class="col-lg-5">
                    <h3 class="m-b10 text-uppercase">Get In Touch</h3>
                    <p class="text2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut hic voluptatibus unde quam veritatis quae velit aperiam. Voluptatem
                        laboriosam odio nulla, hic eius porro recusandae, nisi non quae nihil unde!
                    </p>
                    <hr>
                    <p class="m-b40 text">
                        Manipal University Jaipur
                        <br> Jaipur, Rajasthan
                        <br>India
                        <br>303007
                    </p>
                    <p class="text p-sm-b60">
                        <strong>E:</strong> aicmuj@Jaipur.manipal.edu
                        <br>
                        <strong>P:</strong> +9130331838138
                        <br>
                    </p>
                </div>
                <div class="col-lg-6  offset-lg-1">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="contact-form">
                                <form id="ajax-form" action="php/mail.php" method="POST" class="form">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="text-left m-b20">
                                                <div class="form-message"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Name *" name="name" type="text">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Email *" name="email" type="text">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Subject" name="subject" type="text">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Phone" name="phone" type="text">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea class="form-control " rows="4" name="message" placeholder="Text Here"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="text-right">
                                                    <button class="button button-dark" type="submit" name="submit">SEND MESSAGE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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
