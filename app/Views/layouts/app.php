<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Mirza Academy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mirza Academy" />
    <meta name="keywords" content="Mirza Academy" />
    <meta content="Themesdesign" name="author"/>
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- css -->
    <link href="<?php echo base_url('public/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('public/css/materialdesignicons.min.css');?>" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url('public/css/style.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('public/css/gallery.css');?>" rel="stylesheet" type="text/css" />
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

</head>
<body data-spy="scroll" data-target="#navbarCollapse">

    <!--Navbar Start-->
    <div class="container">
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo text-uppercase" href="<?php echo base_url('/');?>">
                <img src="<?php echo base_url('public/images/logo-dark.png');?>" alt="" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">

                    <li class="nav-item">
                        <a href="<?php echo base_url('/');?>" class="nav-link smoothlink">Home</a>
                    </li>
                    <li class="nav-item">
                      <a href="#aboutus" class="nav-link smoothlink">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a href="#gallery" class="nav-link smoothlink">Gallery</a>
                    </li>
                    <li class="nav-item">
                      <a href="review" class="nav-link smoothlink">Student Review</a>
                    </li>
                    <li class="nav-item">
                        <a href="#footer" class="nav-link smoothlink">Contact</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    </div>
    <!-- Navbar End -->
<?= $this->renderSection('content') ?>

<!-- START FOOTER -->
<section class="section bg-light bg-footer pb-5" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-info mt-4">
                    <img src="<?php echo base_url('public/images/logo-dark.png');?>" alt="" height="50">
                    <p class="text-muted mt-4 mb-2"> The Toppest Learning Center in the City</p>
                    <button type="button" class="btn btn-primary mr-3"> <a href="enquiryform" target="_blank">For Enquiry</a> </button>
                    <!--<div class="team-social mt-4 pt-2">-->
                    <!--    <ul class="list-inline mb-0">-->
                    <!--        <li class="list-inline-item">-->
                    <!--            <a href="" class="text-reset"><i class="mdi mdi-facebook"></i></a>-->
                    <!--        </li>-->
                    <!--        <li class="list-inline-item">-->
                    <!--            <a href="" class="text-reset"><i class="mdi mdi-twitter"></i></a>-->
                    <!--        </li>-->
                    <!--        <li class="list-inline-item">-->
                    <!--            <a href="" class="text-reset"><i class="mdi mdi-google"></i></a>-->
                    <!--        </li>-->
                    <!--        <li class="list-inline-item">-->
                    <!--            <a href="" class="text-reset"><i class="mdi mdi-pinterest"></i></a>-->
                    <!--        </li>-->
                    <!--    </ul>-->
                    <!--</div>-->

                </div>
            </div>

            <div class="col-lg-4">
                <div class="row  pl-0 md-lg-5">
                    <div class="col-lg-6">
                        <div class="mt-4">
                            <h5 class="f-20">Classes</h5>
                            <ul class="list-unstyled footer-link mt-3">
                                <li><a href="">IIT Classes</a></li>
                                <li><a href="">11th Class</a></li>
                                <li><a href="">12th Classs</a></li>
                                <li><a href="">B.Sc.</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mt-4">
                            <h5 class="f-20">Mirza Academy</h5>
                            <ul class="list-unstyled footer-link mt-3">
                                <li><a href="#aboutus" class="nav-link smoothlink">About Us</a></li>
                                <li><a href="#gallery" class="nav-link smoothlink">Gallery</a></li>
                                <li><a href="tel:+919785769323" class="nav-link smoothlink">Contact us</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="mt-4">
                    <h5 class="f-20">Address</h5>

                    <div class="subscribe mt-4 pt-1">
                        <!--<form action="#">-->
                        <!--    <input placeholder="Enter Email" type="text">-->
                        <!--    <button type="submit" class="btn btn-primary"><i class="mdi mdi-send"></i></button>-->
                        <!--</form>-->
                        <div class="container">
                             <p>Mirza Academy : Palace Road Dholpur Rajasthan Pin Code - 328001</p>
                             <p><a href="tel:+919785769323">Contact : +91 - 9785769323 </a></p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="subscribe col-12">
                  <form action="Home/subscribe" method="POST">
                        <input placeholder="Enter Email" type="text" name="email">
                        <button type="submit" class="btn btn-primary"><i class="mdi mdi-send"></i></button>
                    </form>
        </div>
        <?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-success"><?= session()->getFlashdata('msg') ?></div>
        <?php endif;?>

        <script type="text/javascript">
            $(".alert").delay(5000).slideUp(200, function () {
                $(this).alert('close');
            });
        </script>
        <hr class="my-5">

        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <p class="text-muted mb-0"> Copyright &#169; 2021 LeetShield Pvt. Ltd. All Rights Reserved.</p>
                </div>
            </div>
        </div>


    </div>
</section>

<!-- javascript -->
<script src="<?php echo base_url('public/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('public/js/bootstrap.bundle.min.js');?>"></script>
<script src="<?php echo base_url('public/js/jquery.easing.min.js');?>"></script>
<script src="<?php echo base_url('public/js/jquery.mb.YTPlayer.js');?>"></script>
 <!--flex slider plugin-->
 <script src="<?php echo base_url('public/js/jquery.flexslider-min.js');?>"></script>
<!-- Portfolio -->
<script src="<?php echo base_url('public/js/jquery.magnific-popup.min.js');?>"></script>
<!-- contact init -->
<script src="<?php echo base_url('public/js/contact.init.js');?>"></script>
<!-- counter init -->
<script src="<?php echo base_url('public/js/counter.init.js');?>"></script>
<!-- Owl Carousel -->
<script src="<?php echo base_url('public/js/owl.carousel.min.js');?>"></script>
<script src="<?php echo base_url('public/js/app.js');?>"></script>

</body>

</html>
