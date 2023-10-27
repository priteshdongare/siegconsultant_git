<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SIEG Consultant - Reputed International Manpower Consultants</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description" content="We are one of the reputed international manpower consultants for gulf,middle east,dubai,qatar,oman,saudi arabia,Overseas manpower Agency in India" >

        <!-- Favicon -->
        <link href="<?= base_url(); ?>assets/img/fcon.png" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="<?= base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/lib/slick/slick.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/lib/slick/slick-theme.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/Carousel-min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/default-css.css" rel="stylesheet">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Template Stylesheet -->
        <link href="<?= base_url(); ?>assets/usercss/style.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/usercss/main.css" rel="stylesheet">

      <style>
            .section-header::after{
                    position: absolute;
                    content: "";
                    width: 120px;
                    height: 2px;
                    left: calc(50% - 50px);
                    bottom: -1px;
                    background: #009ee3;
            }
        </style>
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-10">
                            <div class="logo">
                                <a href="<?= base_url(); ?>">
                                    
                                     <img src="<?= base_url(); ?>assets/img/WhatsApp-Image-2022-06-27-at-8.32.40-PM-_1_.png" alt="Logo"> 
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 d-none d-lg-block">
                            <div class="row">
                                <div class="col-4">
                                    <div class="top-bar-item">
                                    <!--    <div class="top-bar-icon">
                                            <i class="flaticon-calendar"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Opening Hour</h3>
                                            <p>Mon - Fri, 8:00 - 9:00</p>
                                        </div>-->
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item" >
                                        <div class="top-bar-icon" >
                                            <i class="flaticon-call" ></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <p>+91 22 66655666</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-send-mail"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <p>admin@siegconsultant.in</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

             <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <?php if($active_tab == 'home'){ ?>
                                <a href="<?= base_url();?>" class="nav-item nav-link active">Home</a>
                                <?php }else{ ?>
                                <a href="<?= base_url();?>" class="nav-item nav-link">Home</a>
                                <?php }?>
                                 <?php if($active_tab == 'our'){ ?>
                                  <div class="nav-item dropdown">
                                    <a href="" class="nav-link dropdown-toggle active" data-toggle="dropdown">About</a>
                                    <div class="dropdown-menu">                                      
                                        <a href="<?= base_url();?>user/about" class="dropdown-item" style="font-family:'Poppins', sans-serif; font-size:14px;">About Us</a>
										<a href="<?= base_url();?>user/team" class="dropdown-item" style="font-family:'Poppins', sans-serif; font-size:14px;">Our Team</a>
											<a href="<?= base_url();?>user/ourbranches" class="dropdown-item" style="font-family:'Poppins', sans-serif; font-size:14px;">Our Branches</a>
                                    </div>
                                </div>      
                                <?php }else{ ?>
                                <div class="nav-item dropdown">
                                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">About</a>
                                    <div class="dropdown-menu">                                      
                                        <a href="<?= base_url();?>user/about" class="dropdown-item" style="font-family:'Poppins', sans-serif; font-size:14px;">About Us</a>
										<a href="<?= base_url();?>user/team" class="dropdown-item" style="font-family:'Poppins', sans-serif; font-size:14px;">Our Team</a>
											<a href="<?= base_url();?>user/ourbranches" class="dropdown-item" style="font-family:'Poppins', sans-serif; font-size:14px;">Our Branches</a>
                                    </div>
                                </div>    
                                <?php }?>
                                
                                 <?php if($active_tab == 'Services'){ ?>
                                 <div class="nav-item dropdown">
                                    <a href="" class="nav-link dropdown-toggle active" data-toggle="dropdown">Services </a>
                                    <div class="dropdown-menu">                                      
                                        <a href="<?= base_url();?>user/manpower" class="dropdown-item" style="font-family:'Poppins', sans-serif; font-size:14px;">Recruitment Services</a>
										<a href="<?= base_url();?>user/employmentvisaprocessing" class="dropdown-item" style="font-family:'Poppins', sans-serif; font-size:14px;">Visa & Air Ticketing</a>
                                    </div>
                                </div> 
                                <?php }else{ ?>
                                 <div class="nav-item dropdown">
                                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Services </a>
                                    <div class="dropdown-menu">                                      
                                        <a href="<?= base_url();?>user/manpower" class="dropdown-item" style="font-family:'Poppins', sans-serif; font-size:14px;">Recruitment Services</a>
										<a href="<?= base_url();?>user/employmentvisaprocessing" class="dropdown-item" style="font-family:'Poppins', sans-serif; font-size:14px;">Visa & Air Ticketing</a>
                                    </div>
                                </div> 
                                <?php }?>
                                        <?php if($active_tab == 'Industries'){ ?>
                                        <a href="<?= base_url();?>user/Industries" class="nav-item nav-link active">Industries</a> 
                                    <?php }else{ ?>
                                     <a href="<?= base_url();?>user/Industries" class="nav-item nav-link">Industries</a>
                                    <?php }?>               
								
                                     <?php if($active_tab == 'job'){ ?>
                                     <a href="<?= base_url();?>user/job" class="nav-item nav-link active">Jobs</a>
                                    <?php }else{ ?>
                                    <a href="<?= base_url();?>user/job" class="nav-item nav-link">Jobs</a>
                                    <?php }?>
                                     <?php if($active_tab == 'Work'){ ?>
                                      <a href="<?= base_url();?>user/career" class="nav-item nav-link active">Work with Us</a>
                                    <?php }else{ ?>
                                     <a href="<?= base_url();?>user/career" class="nav-item nav-link">Work with Us</a>
                                    <?php }?>
                                     <?php if($active_tab == 'contact'){ ?>
                                      <a href="<?= base_url();?>user/contact" class="nav-item nav-link active">Contact Us</a>
                                    <?php }else{ ?>
                                    <a href="<?= base_url();?>user/contact" class="nav-item nav-link">Contact Us</a>
                                    <?php }?>
                                     <?php if($active_tab == 'Media'){ ?>
                                     <a href="<?= base_url();?>user/Gallery" class="nav-item nav-link active">Media & Download</a>
                                    <?php }else{ ?>
                                    <a href="<?= base_url();?>user/Gallery" class="nav-item nav-link">Media & Download</a>
                                    <?php }?>
                                   

                                   
                                    
                                    

                            </div>
                           
                            
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->