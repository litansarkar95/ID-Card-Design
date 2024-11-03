<div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
              <div class="header-left">
          Quick Link
              </div>
              <div class="header-right d-flex flex-wrap mt-md-2 mt-lg-0">
                <div class="d-flex align-items-center">
                  <a href="#">
                    <p class="m-0 pe-3">Dashboard</p>
                  </a>
                  <a class="ps-3 me-4" href="#">
               
                  </a>
                </div>
                <a type="button" href="<?php echo base_url(); ?>admin/organization" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                  <i class="mdi mdi-plus-circle"></i> Add Organization </a>
              </div>
            </div>
            <!-- first row starts here -->
            <div class="row">
              <div class="col-xl-12 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">

                  <a href="<?php echo base_url(); ?>admin/organization" class="btn btn-primary mb-2 mb-md-2 me-2"> Create new Organization </a>
                  <a href="<?php echo base_url(); ?>admin/organization" class="btn btn-outline-primary mb-2 mb-md-2 me-2"> Organization List</a>
                  
                  <a href="<?php echo base_url(); ?>admin/customfields" class="btn btn-success mb-2 mb-md-2 me-2">  Create new Customfields</a>
                  <a href="<?php echo base_url(); ?>admin/customfields/list" class="btn btn-outline-success mb-2 mb-md-2 me-2"> Customfields List</a>
                  <a href="<?php echo base_url(); ?>admin/users" class="btn btn-primary mb-2 mb-md-2 me-2"> Users List</a>
                  <a href="<?php echo base_url(); ?>admin/card/card_design" class="btn btn-danger mb-2 mb-md-2 me-2"> Card Design</a>

         

              
                  
               
                  </div>
                </div>
              </div>
         
            </div>
   
            <div class="col-xl-12 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body pb-0">
                    <h4 class="card-title">Last Data List</h4>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table custom-table text-dark">
                        <thead>
                          <tr>
                          <th>Picture</th>
                            <th>Registration No</th>
                            <th>Name</th>
                            <th>Father's Name</th>
                            <th>Mobile No</th>
                            <th>Email</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          if(isset($allCus)){
                            foreach($allCus as $cus){
                          
                          ?>
                          <tr>
                            <td>
                              <img src="../assets/images/faces/face2.jpg" class="mr-2" alt="image" /> Jacob Jensen </td>
                            <td>
                              <div class="d-flex">
                                <span class="pr-2 d-flex align-items-center">85%</span>
                                <select id="star-1" name="rating" autocomplete="off">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                </select>
                              </div>
                            </td>
                            <td>32,435</td>
                            <td>40,234</td>
                          </tr>
                          <?php
                            }
                          }
                          ?>
                   </tbody>
                      </table>
                    </div>
               
                  </div>
                </div>
              </div>
         
          </div>
          <!-- content-wrapper ends -->
     
          