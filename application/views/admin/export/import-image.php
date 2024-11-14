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
        
            <div class="row">
            <div class="col-md-12 grid-margin stretch-card ">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Multi Image Upload</h4>
             
                    <form action="<?= base_url('admin/export/import_image/multiple_upload') ?>" method="post" enctype="multipart/form-data">
                   <div class="row">
                   <div class="col-md-7">
                          <div class="form-group ">
                     
                         <label for="role">Picture Name Select<code>*</code></label>
                     
                            
                         </div>  
                         </div>
                   
                     <!-- END FORM -->
                     <div class="col-md-7">
                     <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="id">
                                <input type="radio" class="form-check-input" id="id" name="check_name" value="id"> ID </label>
                            </div>
                    </div>
                    </div>
                       <!-- END FORM -->
                       <div class="col-md-7">
                     <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="mobile_no">
                                <input type="radio" class="form-check-input" id="mobile_no" name="check_name" value="mobile_no"> Mobile No </label>
                            </div>
                    </div>
                    </div>
                       <!-- END FORM -->
                       <div class="col-md-7">
                     <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="registration_no">
                                <input type="radio" class="form-check-input" id="registration_no" name="check_name" value="registration_no"> Registration No </label>
                            </div>
                    </div>
                    </div>

          
                      <!-- END FORM -->
                    <div class="col-md-7">
                    <div class="form-group">
                        <label for="images[]">Picture<code>*</code></label>
                        <input type="file" class="form-control" name="images[]" multiple>
                        <span class="text-red small"><?php echo form_error('images[]'); ?></span>
                    </div> 
                  </div>
                    



                    </div>
                    
                     
                    
                     
                      <button type="submit" class="btn btn-primary me-2">  <i class="fa fa-arrow-circle-up"></i> Upload </button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
        
         
            </div>
          </div>
          <!-- content-wrapper ends -->
