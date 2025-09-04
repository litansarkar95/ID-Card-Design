
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script> 
    
<script>
$(document).ready(function() {
    // Initialize the datepicker with year selection
    $("#dob, #date_of_joining, #date_of_leaving").datepicker({
        dateFormat: 'dd-mm-yy',
        changeYear: true,      // Enable year selection
        yearRange: "1900:2100" // Set the range of years available
    });

    // Set a default date (e.g., today's date)
    var today = $.datepicker.formatDate('dd-mm-yy', new Date());
    $("#dob, #date_of_joining, #date_of_leaving").val(today);
});


    </script>

<style>

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
.design-card img{
  width:200px;
}
.label{
 

  font-size: 18px !important;
}
.form-group ,option ,.select2-selection{
    font-family: "Oswald", serif;
  font-weight: 500;
  font-size:18px;



}
.card-title{
    font-family: "Bebas Neue", sans-serif;
  font-weight: 400;
  font-style: italic;
  font-size:30px;
}
  </style>
<div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
           

            <div class="page-header flex-wrap">
              <div class="header-left">
            
              </div>
              <div class="header-right d-flex flex-wrap mt-md-2 mt-lg-0">
               
        
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 offset-md-2 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">কোম্পানির  কাস্টম ফরম তৈরী করুন</h4>
                    <hr style="border: 1px solid #0033C4;">
                    <form class="forms-sample"  action="<?php echo base_url(); ?>admin/customfields" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="company_name">কোম্পানির নাম<code>*</code></label>
                        <select type="text" class="form-control select2" id="company_name" value="<?php echo set_value('company_name'); ?>" name="company_name"   >
                      <option value="">Select</option>   
                      <?php
                                        foreach ($allCat as $cat){
                                      echo "<option value='{$cat->id}'>{$cat->name} - {$cat->mobile_no}</option>";
                                        }
                                    ?>
                       
                      </select> 
                        <span class="text-red small"><?php echo form_error('company_name'); ?></span>
                    </div>
                      <div class="form-group">
                        <label for="title">শিরোনাম<code>*</code></label>
                        <input type="text" class="form-control" id="title" value="<?php echo set_value('title'); ?>" name="title"   />
                        <span class="text-red small"><?php echo form_error('title'); ?></span>
                    </div>
                    <div class="form-group">
                        <label for="description">বর্ণনা<code>*</code></label>
                        <textarea type="text" class="form-control" id="description"  name="description"   ><?php echo set_value('description'); ?></textarea>
                        <span class="text-red small"><?php echo form_error('description'); ?></span>
                    </div>
                  <div class="form-group">
                        <label for="terms_conditions_name">Terms & Conditions Value<code>*</code></label>
                        <input type="text" class="form-control" id="terms_conditions_name" value="<?php echo set_value('terms_conditions_name'); ?>" name="terms_conditions_name"   />
                        <span class="text-red small"><?php echo form_error('terms_conditions_name'); ?></span>
                    </div>
                    <div class="form-group">
                        <label for="terms_conditions">Terms & Conditions Description<code>*</code></label>
                        <textarea type="text" class="form-control" id="terms_conditions"  name="terms_conditions"   ><?php echo set_value('terms_conditions'); ?></textarea>
                        <span class="text-red small"><?php echo form_error('terms_conditions'); ?></span>
                    </div>
                    <div class="row">
                          <!-- FORM -->
                          <div class="col-md-6">
                          <div class="form-group ">
                         <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_name_en">
                                <input type="checkbox" class="form-check-input" id="is_name_en" name="is_name_en" value="1"> Name English</label>
                            </div>
                         </div>  
                         </div>
                      <!-- END FORM -->
                            <!-- FORM -->
                            <div class="col-md-6">
                      <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_name_bn">
                                <input type="checkbox" class="form-check-input" id="is_name_bn" name="is_name_bn" value="1"> Name Bangla</label>
                            </div>
                    </div>   </div>
                <!-- END FORM -->

                           <!-- FORM -->
                           <div class="col-md-6">
                           <div class="form-group">
                         <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_father_name_en">
                                <input type="checkbox" class="form-check-input" id="is_father_name_en" name="is_father_name_en" value="1"> Father's Name English</label>
                            </div>
                         </div>   </div>
                      <!-- END FORM -->
                        <!-- FORM -->
                        <div class="col-md-6">
                     <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_father_name_bn">
                                <input type="checkbox" class="form-check-input" id="is_father_name_bn" name="is_father_name_bn" value="1"> Father's Name Bangla</label>
                            </div>
                         </div>  </div>
                      <!-- END FORM -->

                        <!-- FORM -->
                        <div class="col-md-6">
                     <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_father_mobile_no">
                                <input type="checkbox" class="form-check-input" id="is_father_mobile_no" name="is_father_mobile_no" value="1"> Father's Mobile No</label>
                            </div>
                         </div>  </div>
                      <!-- END FORM --> 

                             <!-- FORM -->
                             <div class="col-md-6">
                             <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_mother_name_en">
                                <input type="checkbox" class="form-check-input" id="is_mother_name_en" name="is_mother_name_en" value="1"> Mother Name English</label>
                            </div>
                         </div>   </div>
                      <!-- END FORM -->
                      <!-- FORM -->
                      <div class="col-md-6">
                      <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_mother_name_bn">
                                <input type="checkbox" class="form-check-input" id="is_mother_name_bn" name="is_mother_name_bn" value="1">Mother Name Bangla</label>
                            </div>
                         </div>
                         </div>
                      <!-- END FORM -->

                        <!-- FORM -->
                      <div class="col-md-6">
                      <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_mother_mobile_no">
                                <input type="checkbox" class="form-check-input" id="is_mother_mobile_no" name="is_mother_mobile_no" value="1">Mother Mobile No</label>
                            </div>
                         </div>
                         </div>
                      <!-- END FORM -->


                           <!-- FORM -->
                           <div class="col-md-6">
                           <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_mobile_no">
                                <input type="checkbox" class="form-check-input" id="is_mobile_no" name="is_mobile_no" value="1"> Mobile No</label>
                            </div>
                         </div>      </div>
                      <!-- END FORM -->

                        <!-- FORM -->
                        <div class="col-md-6">
                        <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_email">
                                <input type="checkbox" class="form-check-input" id="is_email" name="is_email" value="1"> Email</label>
                            </div>
                         </div>      </div>
                      <!-- END FORM -->

                          <!-- FORM -->
                          <div class="col-md-6">
                          <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_village_en">
                                <input type="checkbox" class="form-check-input" id="is_village_en" name="is_village_en" value="1"> Village English</label>
                            </div>
                         </div>
                         </div>
                      <!-- END FORM -->
                          <!-- FORM -->
                          <div class="col-md-6">
                          <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_village_bn">
                                <input type="checkbox" class="form-check-input" id="is_village_bn" name="is_village_bn" value="1"> Village Bangla</label>
                            </div>
                         </div>  
                          </div>
                      <!-- END FORM -->

                      <!-- FORM -->
                      <div class="col-md-6">
                      <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_post_office_en">
                                <input type="checkbox" class="form-check-input" id="is_post_office_en" name="is_post_office_en" value="1"> Post Office English</label>
                            </div>
                         </div>
                         </div>
                      <!-- END FORM -->

                             <!-- FORM -->
                             <div class="col-md-6">
                             <div class="form-group">
                             <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_post_office_bn">
                                <input type="checkbox" class="form-check-input" id="is_post_office_bn" name="is_post_office_bn" value="1"> Post Office Bangla</label>
                            </div>
                         </div>
                         </div>

                      <!-- END FORM -->

                         <!-- FORM -->
                         <div class="col-md-6">
                         <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_upazila_en">
                                <input type="checkbox" class="form-check-input" id="is_upazila_en" name="is_upazila_en" value="1">Upazila English</label>
                            </div>
                         </div>
                         </div>
                      <!-- END FORM -->

                           <!-- FORM -->
                           <div class="col-md-6">
                           <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_upazila_bn">
                                <input type="checkbox" class="form-check-input" id="is_upazila_bn" name="is_upazila_bn" value="1"> Upazila Bangla</label>
                            </div>
                         </div>
                         </div>
                      <!-- END FORM -->

                          <!-- FORM -->
                          <div class="col-md-6">
                          <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_zilla_en">
                                <input type="checkbox" class="form-check-input" id="is_zilla_en" name="is_zilla_en" value="1"> Zilla English</label>
                            </div>
                         </div>
                         </div>
                      <!-- END FORM -->

                        <!-- FORM -->
                        <div class="col-md-6">
                        <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_zilla_bn">
                                <input type="checkbox" class="form-check-input" id="is_zilla_bn" name="is_zilla_bn" value="1"> Zilla Bangla</label>
                            </div>
                         </div>
                         </div>
                      <!-- END FORM -->
                        <!-- FORM -->
                        <div class="col-md-6">
                      <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_present_address_en">
                                <input type="checkbox" class="form-check-input" id="is_present_address_en" name="is_present_address_en" value="1"> Present Address English</label>
                            </div>
                       </div>
                        </div>
                          <!-- END FORM -->
                             <!-- FORM -->
                        <div class="col-md-6">
                      <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_present_address_bn">
                                <input type="checkbox" class="form-check-input" id="is_present_address_bn" name="is_present_address_bn" value="1"> Present Address Bangla</label>
                            </div>
                       </div>
                        </div>
                          <!-- END FORM -->
                        <!-- FORM -->
                        <div class="col-md-6">
                       <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_permanent_address_en">
                                <input type="checkbox" class="form-check-input" id="is_permanent_address_en" name="is_permanent_address_en" value="1"> Permanent Address English</label>
                            </div>
                       </div>
                       </div>
                <!-- END FORM -->
                    <!-- FORM -->
                    <div class="col-md-6">
                       <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_permanent_address_bn">
                                <input type="checkbox" class="form-check-input" id="is_permanent_address_bn" name="is_permanent_address_bn" value="1"> Permanent Address Bangla</label>
                            </div>
                       </div>
                       </div>
                <!-- END FORM -->
                        <!-- FORM -->
                        <div class="col-md-6">
                        <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_designation">
                                <input type="checkbox" class="form-check-input" id="is_designation" name="is_designation" value="1">Designation</label>
                            </div>
                         </div>
                         </div>
                      <!-- END FORM -->

                        <!-- FORM -->
                        <div class="col-md-6">
                        <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_department">
                                <input type="checkbox" class="form-check-input" id="is_department" name="is_department" value="1">Department</label>
                            </div>
                         </div>
                         </div>
                      <!-- END FORM -->

                   <!-- FORM -->
                   <div class="col-md-6">
                   <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_employee_id">
                                <input type="checkbox" class="form-check-input" id="is_employee_id" name="is_employee_id" value="1">Employee ID</label>
                            </div>
                    </div>
                    </div>
                <!-- END FORM -->

                   <!-- FORM -->
                   <div class="col-md-6">
                   <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_index_no">
                                <input type="checkbox" class="form-check-input" id="is_index_no" name="is_index_no" value="1">Index No</label>
                            </div>
                    </div>
                    </div>
                      <!-- END FORM -->
                <div class="col-md-6">
                <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_class">
                                <input type="checkbox" class="form-check-input" id="is_class" name="is_class" value="1"> Class   ( Dropdown)</label>
                            </div>
                    </div>
                    </div>
                <!-- END FORM -->
                <div class="col-md-6">
                <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_class_roll">
                                <input type="checkbox" class="form-check-input" id="is_class_roll" name="is_class_roll" value="1"> Class Roll </label>
                            </div>
                    </div>
                    </div>
                          <!-- END FORM -->
                          <div class="col-md-6">
                     <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_section">
                                <input type="checkbox" class="form-check-input" id="is_section" name="is_section" value="1"> Section ( Dropdown)</label>
                            </div>
                    </div>
                    </div>
                          <!-- END FORM -->
                          <div class="col-md-6">
                     <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_sessions">
                                <input type="checkbox" class="form-check-input" id="is_sessions" name="is_sessions" value="1"> Session ( Dropdown)</label>
                            </div>
                    </div>
                    </div>
                          <!-- END FORM -->
                          <div class="col-md-6">
                          <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_date_of_birth">
                                <input type="checkbox" class="form-check-input" id="is_date_of_birth" name="is_date_of_birth" value="1"> Birthday </label>
                            </div>
                    </div>
                    </div>
                <!-- END FORM -->
                <div class="col-md-6">
                <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_gender">
                                <input type="checkbox" class="form-check-input" id="is_gender" name="is_gender" value="1"> Gender ( Dropdown)</label>
                            </div>
                       </div>
                       </div>
                       <!-- END FORM -->
                       <div class="col-md-6">
                     <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_id_number">
                                <input type="checkbox" class="form-check-input" id="is_id_number" name="is_id_number" value="1"> ID Number </label>
                            </div>
                       </div>
                       </div>
                      <!-- END FORM -->
                      <div class="col-md-6">
                      <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_blood_group">
                                <input type="checkbox" class="form-check-input" id="is_blood_group" name="is_blood_group" value="1">Blood Group ( Dropdown)</label>
                            </div>
                       </div>   </div>
                    <!-- END FORM -->
                    <div class="col-md-6">
                      <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_marital_status">
                                <input type="checkbox" class="form-check-input" id="is_marital_status" name="is_marital_status" value="1">Marital Status</label>
                            </div>
                       </div>   </div>
                      <!-- END FORM -->
                      <div class="col-md-6">
                      <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_photo">
                                <input type="checkbox" class="form-check-input" id="is_photo" name="is_photo" value="1">Photo</label>
                            </div>
                       </div>
                      </div>

                         <!-- END FORM -->
                         <div class="col-md-6">
                      <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_signature">
                                <input type="checkbox" class="form-check-input" id="is_signature" name="is_signature" value="1">Signature</label>
                            </div>
                       </div>
                      </div>
                      <!-- END FORM -->
                      <div class="col-md-6">
                      <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="is_nationality">
                                <input type="checkbox" class="form-check-input" id="is_nationality" name="is_nationality" value="1">Nationality</label>
                            </div>
                       </div>    </div>
                         <!-- END FORM -->
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
     