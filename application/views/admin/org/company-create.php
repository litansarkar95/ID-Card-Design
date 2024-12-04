
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

.col-md-6 form-group{
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
              <h3 class="page-title">কোম্পানি</h3>
              <nav aria-label="breadcrumb">
              
              </nav>
            </div>
            <div class="row">

            <?php
            if(isset($_GET['edit'])){
            
              if(isset($allPdt)){
                foreach ($allPdt as $val){
              
                  if( $_GET['edit'] == $val->id){
            
            ?>
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">কোম্পানি এডিট</h4>
             
                    <form class="forms-sample"  action="<?php echo base_url(); ?>admin/organization/update" method="post" enctype="multipart/form-data">
             
                    <input type="hidden" class="form-control" id="id" value="<?php echo $val->id; ?>" name="id"   />
                       <div class="row">
                      <!-- END FORM -->
                    <div class="col-md-6 form-group">
                        <label for="ecompany_name">কোম্পানির নাম<code>*</code></label>
                        <input type="text" class="form-control" id="ecompany_name" value="<?php echo $val->name; ?>" name="ecompany_name"   />
                        <span class="text-red small"><?php echo form_error('ecompany_name'); ?></span>
                    </div>
                    <div class="col-md-6 form-group">
                    <label for="company_name_bn">কোম্পানির নাম বাংলায়<code></code></label>
                        <input type="text" class="form-control" id="ecompany_name_bn" value="<?php echo $val->name_bn; ?>" name="ecompany_name_bn"   />
                        <span class="text-red small"><?php echo form_error('ecompany_name_bn'); ?></span>
                    </div>
                      <div class="col-md-6 form-group">
                      <label for="mobile_no">মোবাইল নম্বর<code>*</code></label>
                        <input type="text" class="form-control" id="emobile_no" value="<?php echo $val->mobile_no; ?>" name="emobile_no"   />
                        <span class="text-red small"><?php echo form_error('emobile_no'); ?></span>
                    </div>
                      <div class="col-md-6 form-group">
                      <label for="email">ই-মেইল<code></code></label>
                        <input type="text" class="form-control" id="eemail" value="<?php echo $val->email; ?>" name="eemail"   />
                        <span class="text-red small"><?php echo form_error('eemail'); ?></span>
                    </div>
                    <div class="col-md-6 form-group">
                    <label for="website">ওয়েবসাইট<code></code></label>
                        <input type="text" class="form-control" id="ewebsite" value="<?php echo $val->website; ?>" name="ewebsite"   />
                        <span class="text-red small"><?php echo form_error('ewebsite'); ?></span>
                    </div>
                    <div class="col-md-6 form-group">
                    <label for="signature_name">স্বাক্ষরের নাম<code></code></label>
                        <input type="text" class="form-control" id="esignature_name" value="<?php echo $val->signature_name; ?>" name="esignature_name"   />
                        <span class="text-red small"><?php echo form_error('esignature_name'); ?></span>
                    </div>
                      <div class="col-md-6 form-group">
                      <label for="address">ঠিকানা<code></code></label>
                        <textarea type="text" class="form-control" id="eaddress" name="eaddress"   ><?php echo $val->address; ?></textarea>
                        <span class="text-red small"><?php echo form_error('eaddress'); ?></span>
                    </div>
               
                          <div class="col-md-6 form-group ">
                     
                         <label for="status">স্ট্যাটাস<code>*</code></label>
                        <select type="text" class="form-control select2" id="status"  name="status"   >
                      <option value="">Select</option>   
                      <option value="1" <?php if($val->is_active == 1){ echo "selected"; } ?>>Active</option> 
                      <option value="0" <?php if($val->is_active == 0){ echo "selected"; } ?>>Deactive</option> 
                       
                      </select> 
                        <span class="text-red small"><?php echo form_error('status'); ?></span>
                            
                         </div>  
                       
                      <div class="col-md-6 form-group">
                      <label for="pic">কোম্পানির লোগো<code></code></label>
                        <input type="file" class="form-control" id="epic"  name="epic"   />
                        <span class="text-red small"><?php echo form_error('epic'); ?></span>
                    </div>
                    <div class="col-md-6 form-group">
                    <label for="signature_picture">স্বাক্ষর এর ছবি<code></code></label>
                        <input type="file" class="form-control" id="esignature_picture"  name="esignature_picture"   />
                        <span class="text-red small"><?php echo form_error('esignature_picture'); ?></span>
                    </div>
                    </div>
                      <button type="submit" class="btn btn-primary me-2"> Update </button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              <?php
                  }
                }
              }
              }else{



              ?>
  <div class="col-md-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">নতুন কোম্পানি তৈরি করুন</h4>
             
                    <form class="forms-sample"  action="<?php echo base_url(); ?>admin/organization" method="post" enctype="multipart/form-data">
             
                      <div class="row">
                       
                      <!-- END FORM -->
                    <div class="col-md-6 form-group">
                        <label for="company_name">কোম্পানির নাম<code>*</code></label>
                        <input type="text" class="form-control" id="company_name" value="<?php echo set_value('company_name'); ?>" name="company_name"   />
                        <span class="text-red small"><?php echo form_error('company_name'); ?></span>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="company_name_bn">কোম্পানির নাম বাংলায়<code></code></label>
                        <input type="text" class="form-control" id="company_name_bn" value="<?php echo set_value('company_name_bn'); ?>" name="company_name_bn"   />
                        <span class="text-red small"><?php echo form_error('company_name_bn'); ?></span>
                    </div>
                      <div class="col-md-6 form-group">
                        <label for="mobile_no">মোবাইল নম্বর<code>*</code></label>
                        <input type="text" class="form-control" id="mobile_no" value="<?php echo set_value('mobile_no'); ?>" name="mobile_no"   />
                        <span class="text-red small"><?php echo form_error('mobile_no'); ?></span>
                    </div>
                      <div class="col-md-6 form-group">
                        <label for="email">ই-মেইল<code></code></label>
                        <input type="text" class="form-control" id="email" value="<?php echo set_value('email'); ?>" name="email"   />
                        <span class="text-red small"><?php echo form_error('email'); ?></span>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="website">ওয়েবসাইট<code></code></label>
                        <input type="text" class="form-control" id="website" value="<?php echo set_value('website'); ?>" name="website"   />
                        <span class="text-red small"><?php echo form_error('website'); ?></span>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="signature_name">স্বাক্ষরের নাম<code></code></label>
                        <input type="text" class="form-control" id="signature_name" value="<?php echo set_value('signature_name'); ?>" name="signature_name"   />
                        <span class="text-red small"><?php echo form_error('signature_name'); ?></span>
                    </div>
                      <div class="col-md-6 form-group">
                        <label for="address">ঠিকানা<code></code></label>
                        <textarea type="text" class="form-control" id="address" name="address"   ><?php echo set_value('address'); ?></textarea>
                        <span class="text-red small"><?php echo form_error('address'); ?></span>
                    </div>
                      <div class="col-md-6 form-group">
                        <label for="pic">কোম্পানির লোগো<code></code></label>
                        <input type="file" class="form-control" id="pic" value="<?php echo set_value('pic'); ?>" name="pic"   />
                        <span class="text-red small"><?php echo form_error('pic'); ?></span>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="signature_picture">স্বাক্ষর এর ছবি<code></code></label>
                        <input type="file" class="form-control" id="signature_picture" value="<?php echo set_value('signature_picture'); ?>" name="signature_picture"   />
                        <span class="text-red small"><?php echo form_error('signature_picture'); ?></span>
                    </div>
                     
                      </div>
                      <button type="submit" class="btn btn-primary me-2"> সাবমিট </button>
                      <button class="btn btn-light">ক্যানসেল</button>
                    </form>
                  </div>
                </div>
              </div>
              <?php
              }
              ?>
             
         
            </div>
          </div>
          <!-- content-wrapper ends -->
     