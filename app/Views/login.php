<!DOCTYPE html>
<html lang="en">
<head>

    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('public/assets/css/bootstrap.min.css');?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('public/assets/fonts/font-awesome/css/font-awesome.min.css');?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('public/assets/fonts/flaticon/font/flaticon.css');?>">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="<?php echo base_url('public/assets/img/favicon.ico');?>" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('public/assets/css/style.css');?>">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="<?php echo base_url('public/assets/css/skins/default.css');?>">

</head>
<body id="top">


<!-- Login 4 start -->
<div class="login-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-section">
                    <div class="logo-2">
                        <a href="<?php echo base_url('/');?>">
                            <img src="<?php echo base_url('public/images/logo-dark.png');?>" alt="logo">
                        </a>
                    </div>
                    <h3>Sign into your account</h3>
                    <form method="post" action="<?php echo base_url('Admin/logged'); ?>">
                        <div class="form-group form-box">
                            <input type="email" name="email" class="input-text" placeholder="Email Address" required>
                        </div>
                        <div class="form-group form-box">
                            <input type="password"  name="pass" class="input-text" placeholder="Password">
                        </div>
                        <div class="form-group mb-0 clearfix">
                            <button type="submit" class="btn-md btn-theme float-left">Login</button>
                            <a href="forgot-password-4.html" class="forgot-password">Forgot Password</a>
                        </div>
                        <div class="extra-login clearfix">
                            <span>Or Login With</span>
                        </div>
                        <div class="clearfix"></div>
                        <ul class="social-list">
                            <li><a href="#" class="facebook-color"><i class="fa fa-facebook facebook-i"></i><span>Facebook</span></a></li>
                            <li><a href="#" class="twitter-color"><i class="fa fa-twitter twitter-i"></i><span>Twitter</span></a></li>
                            <li><a href="#" class="google-color"><i class="fa fa-google google-i"></i><span>Google</span></a></li>
                        </ul>
                    </form>
                    <?php if(session()->getFlashdata('msg')):?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                    <?php endif;?>
                    <p>Don't have an account? <a href="register-4.html" class="thembo"> Register here</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 4 end -->

<!-- External JS libraries -->
<script src="<?php echo base_url('public/assets/js/jquery-2.2.0.min.js');?>"></script>
<script src="<?php echo base_url('public/assets/js/popper.min.js');?>"></script>
<script src="<?php echo base_url('public/assets/js/bootstrap.min.js');?>"></script>
<!-- Custom JS Script -->

</body>
</html>
