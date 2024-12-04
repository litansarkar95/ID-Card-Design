    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/vendors/select2/select2.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css" />
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/demo_2/style.css" />
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
              <h3 class="page-title">এজেন্ট</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                
                </ol>
              </nav>
            </div>
            <div class="row">
            <div class="col-md-10 col-md-offset-1 grid-margin stretch-card ">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">নতুন এজেন্ট তৈরি করুন</h4>
             
                    <form class="forms-sample"  action="<?php echo base_url(); ?>admin/agents/create" method="post" enctype="multipart/form-data">
                   <div class="row">
                    <div class="col-md-6">
                    
                    <div class="form-group">
                        <label for="agent_name">এজেন্ট নাম<code>*</code></label>
                        <input type="text" class="form-control" id="agent_name" value="<?php echo set_value('agent_name'); ?>" name="agent_name"   />
                        <span class="text-red small"><?php echo form_error('agent_name'); ?></span>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="agent_name_bn">এজেন্টের নাম বাংলায় <code></code></label>
                        <input type="text" class="form-control" id="agent_name_bn" value="<?php echo set_value('agent_name_bn'); ?>" name="agent_name_bn"   />
                        <span class="text-red small"><?php echo form_error('agent_name_bn'); ?></span>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="mobile_no">মোবাইল নম্বর (ব্যবহারকারীর নাম)<code>*</code></label>
                        <input type="text" class="form-control" id="mobile_no" value="<?php echo set_value('mobile_no'); ?>" name="mobile_no"   />
                        <span class="text-red small"><?php echo form_error('mobile_no'); ?></span>
                    </div>   </div>

                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">ইমেইল<code></code></label>
                        <input type="text" class="form-control" id="email" value="<?php echo set_value('email'); ?>" name="email"   />
                        <span class="text-red small"><?php echo form_error('email'); ?></span>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">পাসওয়ার্ড<code>*</code></label>
                        <input type="text" class="form-control" id="password"  name="password"   />
                        <span class="text-red small"><?php echo form_error('password'); ?></span>
                    </div>

                    </div>

                    <!-- <div class="col-md-6">
                          <div class="form-group ">
                     
                         <label for="role">Roles<code>*</code></label>
                        <select type="text" class="form-control select2" id="role" value="<?php echo set_value('role'); ?>" name="role"   >
                      <option value="">Select</option>   
                      <?php
                                        foreach ($allRole as $role){
                                      echo "<option value='{$role->id}'>{$role->name}</option>";
                                        }
                                    ?>
                       
                      </select> 
                        <span class="text-red small"><?php echo form_error('roles'); ?></span>
                            
                         </div>  
                         </div> -->
                      <!-- END FORM -->
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="address">ঠিকানা<code></code></label>
                        <textarea type="text" class="form-control" id="address" name="address"   ><?php echo set_value('address'); ?></textarea>
                        <span class="text-red small"><?php echo form_error('address'); ?></span>
                    </div> </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="pic">এজেন্ট লোগো<code></code></label>
                        <input type="file" class="form-control" id="pic" value="<?php echo set_value('pic'); ?>" name="pic"   />
                        <span class="text-red small"><?php echo form_error('pic'); ?></span>
                    </div> </div>



                    </div>
                    
                     
                    
                     
                      <button type="submit" class="btn btn-primary me-2"> জমা দিন </button>
                      <button class="btn btn-light">বাতিল করুন</button>
                    </form>
                  </div>
                </div>
              </div>
        
         
            </div>
          </div>
          <!-- content-wrapper ends -->
