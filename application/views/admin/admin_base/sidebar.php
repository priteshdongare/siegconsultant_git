
<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars" aria-hidden="true" style="font-size:20px;"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url()?>admin/dashboard" class="nav-link"><i class="fa fa-home" aria-hidden="true"></i>
 &nbsp;Home
</a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <!-- <ul class="navbar-nav ml-auto space">
  <h5 class="mt-2 change-pass" style="float:left;">admin <?php echo $this->session->userdata('username'); ?></h5> 
     <li class="nav-item nav-profile">
            <a class="nav-link out" href="logout"> <img style="float:left;" src="<?=base_url();?>assets/admin/images/download.png" alt="admin" width="30px" height="30px" class="out"> 
            <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
          </li>
      
     
      </ul> -->

      <ul class="navbar-nav ml-auto space">
  <h5 class="mt-2 change-pass" style="float:left;"><?php echo $this->session->userdata('username'); ?></h5> 
     <li class="nav-item nav-profile dropdown">
            <a class="nav-link out" href="#"> <img style="float:left;" src="<?=base_url();?>assets/admin/images/download.png" alt="admin" width="30px" height="30px" class="out"> 
            <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
            <div class="profile-show">
              <a class="dropdown-item" href="<?=base_url();?>admin/changepass">
                <i  class="fa fa-lock" aria-hidden="true"></i> &nbsp;
                 change password
              </a>
              <a class="dropdown-item" href="<?=base_url();?>admin/logout">
                <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;
                Logout
              </a>
            </div>
          </li>
      
     
      </ul>
    </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url()?>admin/dashboard" class="brand-link">
    <h4>Admin Panel</h4>       
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class=" mt-3 pb-3 mb-3 d-flex">
  
      
        <!-- <div class="info">
          <a href="<?= base_url()?>admin/dashboard" class="d-block"><h5>Imfit</h5></a>
        </div> -->
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url()?>admin/dashboard" class="nav-link">
            <i class="fa fa-tachometer" aria-hidden="true" style="font-size:22px"></i> &nbsp;
              <p>
              Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url()?>admin/contactlist" class="nav-link">
            <i class="fa fa-list" aria-hidden="true" style="font-size:22px"></i> &nbsp;
              <p>
              Contact List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url()?>admin/jobpostlist" class="nav-link">
            <i class="fa fa-list" aria-hidden="true" style="font-size:22px"></i> &nbsp;
              <p>
              Job Post list
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url()?>admin/jobapplicationlist" class="nav-link">
            <i class="fa fa-list" aria-hidden="true" style="font-size:22px"></i> &nbsp;
              <p>
              Job Application list
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url()?>admin/careerlist" class="nav-link">
            <i class="fa fa-list" aria-hidden="true" style="font-size:22px"></i> &nbsp;
              <p>
              Career Application List
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url()?>admin/medialist" class="nav-link">
            <i class="fa fa-list" aria-hidden="true" style="font-size:22px"></i> &nbsp;
              <p>
              Gallery List
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url()?>admin/documentlist" class="nav-link">
            <i class="fa fa-list" aria-hidden="true" style="font-size:22px"></i> &nbsp;
              <p>
             Document List
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url()?>admin/videolist" class="nav-link">
            <i class="fa fa-list" aria-hidden="true" style="font-size:22px"></i> &nbsp;
              <p>
             Video List
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url()?>admin/jobpost" class="nav-link">
            <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:22px"></i> &nbsp;
              <p>
              Job Post Form
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url()?>admin/media" class="nav-link">
            <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:22px"></i> &nbsp;
              <p>
             ADD Gallery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url()?>admin/document" class="nav-link">
            <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:22px"></i> &nbsp;
              <p>
             ADD Documents
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url()?>admin/video" class="nav-link">
            <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:22px"></i> &nbsp;
              <p>
             ADD Video
              </p>
            </a>
          </li>
          
          <!-- <li class="nav-item">
            <a href="<?= base_url()?>admin/create_cusmtomer" class="nav-link">
            <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:22px"></i> &nbsp;
              <p>
              Add Customer
              </p>
            </a>
          </li> -->
         
         
</ul>            
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>