<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title> <?php echo isset($title) ? $title : "ID Card Design"; ?> </title>

  <!-- Include Toastr CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/toastr/toastr.min.css">
      <!-- plugins:css -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/vendors/mdi/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/vendors/flag-icon-css/css/flag-icon.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/vendors/css/vendor.bundle.base.css">
      
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/vendors/jquery-bar-rating/css-stars.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/vendors/font-awesome/css/font-awesome.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/demo_2/style.css" />
        <!-- dataTables css -->
   <link href="<?php echo base_url(); ?>public/assets/datatables/dataTables.dataTables.css" rel="stylesheet" type="text/css"/>
    <!-- End layout styles -->
     
    <!-- <link rel="shortcut icon" href="<?php echo base_url(); ?>public/assets/images/favicon.png" /> -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <!-- Include Toastr JavaScript -->
         <script src="<?php echo base_url(); ?>public/toastr/toastr.min.js"></script>
          <!-- plugins:js -->
    <script src="<?php echo base_url(); ?>public/assets/vendors/js/vendor.bundle.base.js"></script>

  </head>
<style>
    /* Success */
    .toast-success {
        background-color: #28a745 !important; /* সবুজ */
        color: white !important;
    }

    /* Error */
    .toast-error {
        background-color: #dc3545 !important; /* লাল */
        color: white !important;
    }

    /* Warning */
    .toast-warning {
        background-color: #ffc107 !important; /* হলুদ */
        color: #212529 !important;
    }

    /* Info */
    .toast-info {
        background-color: #17a2b8 !important; /* নীল */
        color: white !important;
    }
</style>

<style>
  .nav-item{
    margin:0 !important;
    padding:0 !important;
  }
  </style>
  <body>
    <div class="container-scroller">
 
      <!-- partial:partials/_horizontal-navbar.html -->
      <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
          <div class="container">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo" href="<?php echo base_url(); ?>">
                <!-- <img src="<?php echo base_url(); ?>public/assets/images/rodasiit.png" alt="logo" /> -->
                <span class="font-12 d-block font-weight-light"> Master IT Solution </span>
              </a>
              <a class="navbar-brand brand-logo-mini" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>public/assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
              <ul class="navbar-nav mr-lg-2">
                <li class="nav-item nav-search d-none d-lg-block">
                  <!-- <div class="input-group">
                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                      <span class="input-group-text" id="search">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" id="navbar-search-input" placeholder="Search" aria-label="search" aria-describedby="search" />
                  </div> -->
                </li>
              </ul>
              <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="nav-profile-img">
                      <img src="<?php echo base_url(); ?>public/assets/images/0.png" alt="image" />
                    </div>
                    <div class="nav-profile-text">
                      <p class="text-black font-weight-semibold m-0"> <?php
                      echo $this->session->userdata('name');
                      ?> </p>
                      <span class="font-13 online-color">online <i class="mdi mdi-chevron-down"></i></span>
                    </div>
                  </a>
                  <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                  
                    <a class="dropdown-item" href="<?php echo base_url(); ?>logout">
                      <i class="mdi mdi-logout me-2 text-primary"></i> Logout </a>
                  </div>
                </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                <span class="mdi mdi-menu"></span>
              </button>
            </div>
          </div>
        </nav>
        <nav class="bottom-navbar">
          <div class="container">
            <ul class="nav page-navigation"  style="display: inline-flex !important;">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>dashboard">
                  <i class="mdi mdi-compass-outline menu-icon"></i>
                  <span class="menu-title">১ - ড্যাশবোর্ড</span>
                </a>
              </li>
           
              <?php
                      $loggedin_type =  $this->session->userdata('loggedin_type');
                      if($loggedin_type == 'superdamin'){
?>

              <li class="nav-item" style="float: left !important;">
                <a href="#" class="nav-link">
                  <i class="mdi mdi-monitor-dashboard menu-icon"></i>
                  <span class="menu-title">এজেন্ট</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                  <ul class="submenu-item">
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>admin/agents/create">নতুন এজেন্ট তৈরি করুন</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>admin/agents">এজেন্ট তালিকা</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
          
             
          </li><li class="nav-item">
          
             
          </li><li class="nav-item">
          
             
          </li><li class="nav-item">
          
             
          </li>
              <li class="nav-item">
          
             
              </li>
              <li class="nav-item" style="float: left !important;">
          
             
          </li>
          <li class="nav-item" style="float: left !important;">
          
             
          </li>
          <li class="nav-item" style="float: left !important;">
          
             
          </li>
          <li class="nav-item" style="float: left !important;">
          
             
          </li>

          <li class="nav-item" style="float: left !important;">
          
             
          </li>
          <li class="nav-item" style="float: left !important;">
          
             
          </li>
          <li class="nav-item" style="float: left !important;">
          
             
          </li>
          <li class="nav-item" style="float: left !important;">
          
             
          </li>

          <li class="nav-item" style="float: left !important;">
          
             
          </li>
          <li class="nav-item" style="float: left !important;">
          
             
          </li>
          <li class="nav-item" style="float: left !important;">
          
             
          </li>
              
<?php
                      }else if($loggedin_type == 'agent'){
                      ?>
          
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="mdi mdi-monitor-dashboard menu-icon"></i>
                  <span class="menu-title">২ -প্রাথমিক সেটাপ</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                  <ul class="submenu-item">
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>admin/organization">১ - নতুন কোম্পানি তৈরি করুন</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>admin/organization/list">২ - কোম্পানি তালিকা</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>admin/base/classes">৩ - ক্লাস  </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>admin/base/sections">৪ - সেকশন  </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>admin/base/sessions">৫ - সেশন  </a>
                    </li>
              
                  </ul>
                </div>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="mdi mdi-monitor-dashboard menu-icon"></i>
                  <span class="menu-title">৩ - আইডি কার্ড ফরম </span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                  <ul class="submenu-item">
                  
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>admin/customfields">১ - কোম্পানির  আইডি কার্ড তৈরী করুন </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>admin/customfields/list">২ - কোম্পানির  আইডি কার্ড লিস্ট </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="mdi mdi-monitor-dashboard menu-icon"></i>
                  <span class="menu-title">৪ - ইউজার </span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                  <ul class="submenu-item">
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>admin/organization/formlist">১ - ফরম ও ইউজার এর তালিকা  </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>admin/users/create">২ - নতুন  ইউজার তৈরি করুন </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>admin/users">৩ - ইউজার এর তালিকা</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>admin/users/reports">৪ - ইউজার রিপোর্ট </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="mdi mdi-clipboard-text menu-icon"></i>
                  <span class="menu-title">৫ - আইডি কার্ড</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                  <ul class="submenu-item">
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>admin/card/custom/design/">১ - আইডি কার্ড  জেনারেট করুন </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>admin/card/card_design">২ - আইডি কার্ড ডিজাইন দেখুন </a>
                    </li>
                   
                  </ul>
                </div>
              </li>
              
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="mdi mdi-clipboard-text menu-icon"></i>
                  <span class="menu-title">৬ - বাল্ক ডাটা ইম্পোর্ট</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                  <ul class="submenu-item">
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>admin/export/excel_import_org">১ - বাল্ক ডাটা ইম্পোর্ট</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>admin/export/excel_import_multipicture">২ - ছবির বাল্ক ডাটা ইম্পোর্ট</a>
                    </li>
                   
                  </ul>
                </div>
              </li>
        
              <li class="nav-item">
                <!-- <a class="nav-link" href="#">
                  <i class="mdi mdi-contacts menu-icon"></i>
                  <span class="menu-title">Visiting Card Design</span>
                </a> -->
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-chart-bar menu-icon"></i>
                  <span class="menu-title">Charts</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-table-large menu-icon"></i>
                  <span class="menu-title">Tables</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Docs</span></a>
              </li> -->
              <!-- <li class="nav-item">
                <div class="nav-link d-flex">
                  <button class="btn btn-sm bg-danger text-white"> Trailing </button>
                  <div class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle text-white font-weight-semibold" id="notificationDropdown" href="#" data-bs-toggle="dropdown"> English </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                      <a class="dropdown-item" href="#">
                        <i class="flag-icon flag-icon-bl me-3"></i> French </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">
                        <i class="flag-icon flag-icon-cn me-3"></i> Chinese </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">
                        <i class="flag-icon flag-icon-de me-3"></i> German </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">
                        <i class="flag-icon flag-icon-ru me-3"></i>Russian </a>
                    </div>
                  </div>
                  <a class="text-white" href="#"><i class="mdi mdi-home-circle"></i></a>
                </div>
              </li> -->

              <?php
                      }
              ?>
            </ul>
          </div>
        </nav>
      </div>
      <!-- partial -->

    
   

       <?php
       if(isset($content)){
        echo $content;
       }
       ?>

       <script>
    <?php if ($this->session->flashdata('success')): ?>
        toastr.success("<?= $this->session->flashdata('success'); ?>");
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')): ?>
        toastr.error("<?= $this->session->flashdata('error'); ?>");
    <?php endif; ?>

    <?php if ($this->session->flashdata('warning')): ?>
        toastr.warning("<?= $this->session->flashdata('warning'); ?>");
    <?php endif; ?>

    <?php if ($this->session->flashdata('info')): ?>
        toastr.info("<?= $this->session->flashdata('info'); ?>");
    <?php endif; ?>
</script>


        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="container">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2025 <a href="https://masteritsolution.com.bd/" target="_blank">Master IT Solution</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Master IT Solution & made with <i class="mdi mdi-heart text-danger"></i></span>
              </div>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>

      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo base_url(); ?>public/assets/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/vendors/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/vendors/flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
              <!-- Plugin js for this page -->
    <script src="<?php echo base_url(); ?>public/assets/vendors/select2/select2.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>

    <script src="<?php echo base_url(); ?>public/assets/js/select2.js"></script>
                 <!-- Plugin css for this page -->
                 <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/vendors/select2/select2.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css" />
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/demo_2/style.css" />
          <!-- dataTables js -->
          <script src="<?php echo base_url(); ?>public/assets/datatables/dataTables.js" type="text/javascript"></script>
          
    <!-- inject:js -->
    <script src="<?php echo base_url(); ?>public/assets/js/off-canvas.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/js/hoverable-collapse.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/js/misc.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/js/settings.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo base_url(); ?>public/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>

<script>
new DataTable('#tableData');       
</script>