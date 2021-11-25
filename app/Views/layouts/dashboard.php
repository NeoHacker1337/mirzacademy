 <!DOCTYPE HTML>
<html>
<head>
<title>Dashboard an Admin Panel</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url('public/admin/css/bootstrap.css'); ?>" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="<?php echo base_url('public/admin/css/style.css'); ?>" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="<?php echo base_url('public/admin/css/font-awesome.css'); ?>" rel="stylesheet">
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='<?php echo base_url('public/admin/css/SidebarNav.min.css'); ?>' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->

 <!-- js-->
<script src="<?php echo base_url('public/admin/js/jquery-1.11.1.min.js'); ?>"></script>
<script src="<?php echo base_url('public/admin/js/modernizr.custom.js'); ?>"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->

<!-- Metis Menu -->
<script src="<?php echo base_url('public/admin/js/metisMenu.min.js'); ?>"></script>
<script src="<?php echo base_url('public/admin/js/custom.js'); ?>"></script>
<link href="<?php echo base_url('public/admin/css/custom.css'); ?>" rel="stylesheet">
<!--//Metis Menu -->

</head>


<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="<?php echo base_url('Admin/index'); ?>"><span class="fa fa-area-chart"></span> Mirza<span class="dashboard_text">Academy</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li class="treeview">
                <a href="<?php echo base_url('Admin/index'); ?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>

              <li class="treeview">
                <a href="#">
                <i class="fa fa-table"></i> <span>User</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="viewreview"><i class="fa fa-angle-right"></i>User Review</a></li>
                  <li><a href="subscriber"><i class="fa fa-angle-right"></i>Subscriber</a></li>
                </ul>
              </li>

              <li class="treeview">
                <a href="#">
                <i class="fa fa-folder"></i> <span>Settings</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="profile"><i class="fa fa-angle-right"></i> My Profile</a></li>
                  <li><a href="contactdetails"><i class="fa fa-angle-right"></i>Contact Details</a></li>
                </ul>
              </li>

            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->

		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">

				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<div class="profile_details_left"><!--notifications of menu start -->

					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">


				<div class="profile_details">
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">
									<span class="prfil-img"><img src="<?php echo base_url('public/admin/images/2.jpg');?>" alt=""> </span>
									<div class="user-name">
										<p>Admin Name</p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>
								</div>
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
								<li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li>
								<li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li>
								<li> <a href="logout"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //header-ends -->
		<!-- main content start-->

		</div>






<?= $this->renderSection('content') ?>



<!--footer-->
<div class="footer">
   <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
 </div>
    <!--//footer-->
</div>





	<!-- side nav js -->
	<script src='<?php echo base_url('public/admin/js/SidebarNav.min.js'); ?>' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->

	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="<?php echo base_url('public/admin/js/classie.js'); ?>"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;

			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->

	<!--scrolling js-->
	<script src="<?php echo base_url('public/admin/js/jquery.nicescroll.js'); ?>"></script>
	<script src="<?php echo base_url('public/admin/js/scripts.js'); ?>"></script>
	<!--//scrolling js-->

	<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url('public/admin/js/bootstrap.js'); ?>"> </script>

</body>
</html>
