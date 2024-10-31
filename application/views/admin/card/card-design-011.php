<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <!-- https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP -->
  <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self'" />
  <meta http-equiv="X-Content-Security-Policy" content="default-src 'self'; script-src 'self'" />
  <title>ID Card Printer</title>
  <link rel="stylesheet" href="<?php echo base_url();?>public/static/assets/css/main.css" type="text/css" />
</head>

<body>
  <!-- // Navbar  -->
  <div class="navbar">
    <h2>ID Card Printer</h2>
  </div>
  <div class="outer_container">
    <h2>Select the Card layout :-</h2>
    <div class="flexed_all_cards_outer">
      <!-- // Card 1 -->
      <a href="#" class="card-box-main-outer">
        <div class="card-1-header-bg"></div>
        <div class="card-1-header-flexed">
          <img id="logo_image" class="card-1-school-logo" width="40" src="<?php echo base_url();?>public/static/assets/images/logo.png" alt="Logo" />
          <div class="card-1-header-details-box">
            <h5 class="fw-bold text-center card-1-school-name mt-2">
              M Hasan High School
            </h5>
            <h6 class="fw-bolder card-1-sub-header-text text-center">
              12/A Green Road, Dhaka
            </h6>
            <h6 class="fw-bolder card-1-sub-header-text text-center">
              Green Road, Panthpath, Dhaka, Ph No. 01829107469
            </h6>
          </div>
        </div>
        <div class="card-1-body">
          <h6>Class: VII</h6>
          <h5 style="font-size: 14px">Md Litan Sarkar</h5>
          <h6>Sr No : 0932</h6>
        </div>
        <div class="card-1-second-body">
          <div>
            <h6 class="card-1-list-flexed">
              <span class="card-1-s-content-label">Father's Name </span>: Mr.
              Sample Name
            </h6>
            <h6 class="card-1-list-flexed">
              <span class="card-1-s-content-label">Address </span>:
              Dehrrakhas Tea - Estate, Banjarawala
            </h6>
            <h6 class="card-1-list-flexed">
              <span class="card-1-s-content-label">Date of Birth </span> :
              12-09-2012
            </h6>
            <h6 class="card-1-list-flexed">
              <span class="card-1-s-content-label">Contact No. </span>:
              01829107469
            </h6>
          </div>
          <img class="card-1-student-image" src="<?php echo base_url();?>public/static/assets/images/b36bda80eacedd48bf3d460d0298c25d.JPG" alt="Image" />
        </div>
        <!-- // Prinipal Sign  -->
        <img class="card-1-p-sign-img" src="<?php echo base_url();?>public/static/assets/images/signature.png" alt="Sign" />
        <!-- // Card 1 Footer  -->
        <div class="card-1-footer">
          <h6 class="">Session: 2019-20</h6>
          <h6 class="">Principal Signature</h6>
        </div>
      </a>
      <!-- // Card 2 -->
      <div class="card-box-main-outer">
        <div class="card-2-header-bg"></div>
        <div class="card-2-header-img-bg"></div>
        <div class="card-2-header-container">
          <img width="40" src="<?php echo base_url();?>public/static/assets/images/logo.png" alt="Logo" />
          <div class="card-2-header-details-container">
            <h4 class="fw-bold text-center">M Hasan High School</h4>
            <h6 class="card-2-header-sub-text">   12/A Green Road, Dhaka</h6>
            <h6 class="card-2-header-sub-text"> Panthpath, Dhaka, Ph No. 01829107469</h6>
          </div>
        </div>
        <div class="card-2-body">
          <img src="<?php echo base_url();?>public/static/assets/images/b36bda80eacedd48bf3d460d0298c25d.JPG" />
          <div class="card-2-body-detials-holder">
            <div class="card-2-name-flexed">
              <h4>Md Litan Sarkar</h4>
              <h6>Nursery</h6>
            </div>
            <div class="card-2-ul"></div>
            <div>
              <h6 class="card-2-list-flexed">
                <span class="card-2-s-content-label">Father's Name </span>:
                Mr. Sample Name
              </h6>
              <h6 class="card-2-list-flexed">
                <span class="card-2-s-content-label">Address </span>: Upper
                Nehru Colony , Dehradun
              </h6>
              <h6 class="card-2-list-flexed">
                <span class="card-2-s-content-label">Date of Birth </span>:
                31-11-2015
              </h6>
              <h6 class="card-2-list-flexed">
                <span class="card-2-s-content-label">Contact No.</span>:
                01829107469
              </h6>
            </div>
          </div>
        </div>
        <img class="card-2-p-sign-img" src="<?php echo base_url();?>public/static/assets/images/signature.png" alt="Sign" />
        <div class="card-2-footer">
          <h6 class="card-2-footer-session">Session: 2019-20</h6>
          <h6 class="card-2-p-sign">Principal Signature</h6>
        </div>
      </div>
    </div>
  </div>
</body>

</html>