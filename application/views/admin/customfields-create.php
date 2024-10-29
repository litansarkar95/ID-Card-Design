
<style>
.label{
  margin-bottom:5px;
}
input[type="text"],
input[type="file"],
textarea[type="text"] ,
select[type="text"]{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc; /* Adds a light border */
    border-radius: 4px;
    margin-bottom: 10px;
    outline: none; /* Prevents the default outline when focused */
}


  </style>
<div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
           

            <div class="page-header flex-wrap">
              <div class="header-left">
            
              </div>
              <div class="header-right d-flex flex-wrap mt-md-2 mt-lg-0">
                <div class="d-flex align-items-center">
                  <a href="#">
                    <p class="m-0 pe-3">Custom Fields</p>
                  </a>
                  <a class="ps-3 me-4" href="#">
                
                  </a>
                </div>
                <a href="<?php echo base_url(); ?>admin/customfields/list" type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                  <i class="mdi mdi-table-large"></i> Custom Fields List</a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 offset-md-2 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Custom Fields Create</h4>
                    <hr style="border: 1px solid #0033C4;">
                    <form class="forms-sample"  action="<?php echo base_url(); ?>admin/customfields" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="company_name">Company Name<code>*</code></label>
                        <select type="text" class="form-control" id="company_name" value="<?php echo set_value('company_name'); ?>" name="company_name"   >
                      <option value="">Select</option>   
                      <?php
                                        foreach ($allCat as $cat){
                                      echo "<option value='{$cat->id}'>{$cat->name}</option>";
                                        }
                                    ?>
                       
                      </select> 
                        <span class="text-red small"><?php echo form_error('company_name'); ?></span>
                    </div>
                      <div class="form-group">
                        <label for="title">Title<code>*</code></label>
                        <input type="text" class="form-control" id="title" value="<?php echo set_value('title'); ?>" name="title"   />
                        <span class="text-red small"><?php echo form_error('title'); ?></span>
                    </div>
                    <div class="form-group">
                        <label for="description">Description<code>*</code></label>
                        <textarea type="text" class="form-control" id="description"  name="description"   ><?php echo set_value('description'); ?></textarea>
                        <span class="text-red small"><?php echo form_error('description'); ?></span>
                    </div>
                      <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_name">
                                <input type="checkbox" class="form-check-input" id="is_name" name="is_name" value="1"> Name </label>
                            </div>
                    </div>

                    <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_date_of_birth">
                                <input type="checkbox" class="form-check-input" id="is_date_of_birth" name="is_date_of_birth" value="1"> Birthday </label>
                            </div>
                    </div>

                    <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_gender">
                                <input type="checkbox" class="form-check-input" id="is_gender" name="is_gender" value="1"> Gender </label>
                            </div>
                       </div>

                       <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_present_address">
                                <input type="checkbox" class="form-check-input" id="is_present_address" name="is_present_address" value="1"> Present Address </label>
                            </div>
                       </div>

                       <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_permanent_address">
                                <input type="checkbox" class="form-check-input" id="is_permanent_address" name="is_permanent_address" value="1"> Permanent Address </label>
                            </div>
                       </div>


                       <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_id_number">
                                <input type="checkbox" class="form-check-input" id="is_id_number" name="is_id_number" value="1"> ID Number </label>
                            </div>
                       </div>
                       <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_blood_group">
                                <input type="checkbox" class="form-check-input" id="is_blood_group" name="is_blood_group" value="1">Blood Group</label>
                            </div>
                       </div>
                       <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_photo">
                                <input type="checkbox" class="form-check-input" id="is_photo" name="is_photo" value="1">Photo</label>
                            </div>
                       </div>
                       <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_nationality">
                                <input type="checkbox" class="form-check-input" id="is_nationality" name="is_nationality" value="1">Nationality</label>
                            </div>
                       </div>
                       <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_mobile_no">
                                <input type="checkbox" class="form-check-input" id="is_mobile_no" name="is_mobile_no" value="1">Mobile No</label>
                            </div>
                       </div>
                       <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_email">
                                <input type="checkbox" class="form-check-input" id="is_email" name="is_email" value="1">Email</label>
                            </div>
                       </div>

                 
                      <button type="submit" class="btn btn-primary me-2"> Submit </button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
          
         
            </div>
          </div>
          <!-- content-wrapper ends -->
     