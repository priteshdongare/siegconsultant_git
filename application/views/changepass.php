<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/metisMenu.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/typography.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/default-css.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/styles.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form action="<?= base_url('user/changepass') ?>" method="post">
                    <div class="login-form-head">
                        <h4>Change Password</h4>
                    </div>
                    <div class="login-form-body">
                    <?php if($this->session->flashdata('success')): ?>
								<div class="alert alert-success">
									<i class="fa fa-remove-sign"></i><?php echo $this->session->flashdata('success'); ?>
								</div>
							<?php elseif($this->session->flashdata('error')): ?>
								<!-- <div class="alert alert-danger"> -->
									<i class="fa fa-remove-sign"></i><?php echo $this->session->flashdata('error'); ?>
								<!-- </div> -->
							<?php endif; ?>
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text"  name="admin" autocomplete="off">
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id ="newpass" name="new_password" autocomplete="off">
                            <i class="ti-lock" showpass('newpass')></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Conform Password</label>
                            <input type="password" id="Confirm" name="confirm_password" autocomplete="off">
                            <i class="ti-lock" onclick="showpass('Confirm')"></i>
                            <div class="text-danger"></div>
                        </div><br>
                        <span id="message"></span>
                        
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">change password <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    
    <script src="<?= base_url();?>assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="<?= base_url()?>assets/admin/js/admin.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?= base_url();?>assets/js/popper.min.js"></script>
    <script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url();?>assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url();?>assets/js/metisMenu.min.js"></script>
    <script src="<?= base_url();?>assets/js/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url();?>assets/js/jquery.slicknav.min.js"></script>
    
    <!-- others plugins -->
    <script src="<?= base_url();?>assets/js/plugins.js"></script>
    <script src="<?= base_url();?>assets/js/scripts.js"></script>
</body>

</html