
<style>
  @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
   /* Custom Styling */
.page-title{
    font-family: "Bebas Neue", sans-serif;
  font-weight: 400;
  font-style: italic;
  font-size:30px;
}

.card-title{
    font-family: "Oswald", serif;
  font-weight: 300;
  font-style: italic;
  font-size:18px;
  padding:0 0 10px;
}

.form-group{
    font-family: "Poppins", serif;
  font-weight: 400;
 
}
.label{
  margin-bottom:5px;
}
input[type="text"],
input[type="file"],
textarea[type="text"] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc; /* Adds a light border */
    border-radius: 4px;
    margin-bottom: 10px;
    outline: none; /* Prevents the default outline when focused */
}
.text-red{
  color:red;
}
  </style>
<div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Organization</h3>
              <nav aria-label="breadcrumb">
              
              </nav>
            </div>
            <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Organization Create</h4>
             
                    <form class="forms-sample"  action="<?php echo base_url(); ?>admin/organization" method="post" enctype="multipart/form-data">
             
                      
                       
                      <!-- END FORM -->
                    <div class="form-group">
                        <label for="company_name">Company Name<code>*</code></label>
                        <input type="text" class="form-control" id="company_name" value="<?php echo set_value('company_name'); ?>" name="company_name"   />
                        <span class="text-red small"><?php echo form_error('company_name'); ?></span>
                    </div>
                    <div class="form-group">
                        <label for="company_name_bn">Company Name Bangla<code>*</code></label>
                        <input type="text" class="form-control" id="company_name_bn" value="<?php echo set_value('company_name_bn'); ?>" name="company_name_bn"   />
                        <span class="text-red small"><?php echo form_error('company_name_bn'); ?></span>
                    </div>
                      <div class="form-group">
                        <label for="mobile_no">Mobile Number<code>*</code></label>
                        <input type="text" class="form-control" id="mobile_no" value="<?php echo set_value('mobile_no'); ?>" name="mobile_no"   />
                        <span class="text-red small"><?php echo form_error('mobile_no'); ?></span>
                    </div>
                      <div class="form-group">
                        <label for="email">Email<code></code></label>
                        <input type="text" class="form-control" id="email" value="<?php echo set_value('email'); ?>" name="email"   />
                        <span class="text-red small"><?php echo form_error('email'); ?></span>
                    </div>
                      <div class="form-group">
                        <label for="address">Address<code></code></label>
                        <textarea type="text" class="form-control" id="address" name="address"   ><?php echo set_value('address'); ?></textarea>
                        <span class="text-red small"><?php echo form_error('address'); ?></span>
                    </div>
                      <div class="form-group">
                        <label for="pic">Logo<code></code></label>
                        <input type="file" class="form-control" id="pic" value="<?php echo set_value('pic'); ?>" name="pic"   />
                        <span class="text-red small"><?php echo form_error('pic'); ?></span>
                    </div>
                      <button type="submit" class="btn btn-primary me-2"> Submit </button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-8 grid-margin ">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Organization List</h4>
                    <p class="card-description">
                    </p>
                    <div class="table-responsive">
                    <table id="tableData" class="table table-bordered table-striped table-hover display " style="width:100%">
                        <thead>
                          <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Mobile </th>
                            <th>Email</th>
                            <th>Picture</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                                        $i=1;
                                        if(isset($allPdt)){
                                        foreach ($allPdt as $pdt){
                                        ?>
                          <tr>
                          <td><?php  echo $i; $i++;?></td>
                          <td><?php echo $pdt->name;?></td>
                          <td><?php echo $pdt->mobile_no;?></td>
                          <td><?php echo $pdt->email;?></td>
                          <td>
                          <?php 
                             
                             if($pdt->picture != NULL){
                             ?>
                          <img src="<?php echo base_url()."public/static/images/organization/$pdt->picture"; ?>" width="80px" height="80px" alt="" class="img-circle">
                        <?php
                             }else{
                        ?>
                          <img src="<?php echo base_url()."public/static/images/organization/0.png"; ?>" width="80px" height="80px" alt="" class="img-circle">
                       
                        <?php
                             }
                        ?>
                          
                           <td>
                         
                              <a  class="btn btn-add btn-sm badge-primary text-white"  href="<?php echo base_url()."admin/organization?edit={$pdt->id}";?>"><i class="fa fa-pencil"></i></a>
                              <a  class="btn btn-add btn-sm badge-danger text-white"  href="<?php echo base_url()."admin/organization/delete/{$pdt->id}";?>"><i class="fa fa-trash-o"></i></a>
                            </td>
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
          </div>
          <!-- content-wrapper ends -->
     