    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/vendors/select2/select2.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css" />
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/demo_2/style.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" ></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script> 
    

</head>
<script>
$(document).ready(function() {
    // Initialize the datepicker with year selection
    $("#dob, #date_of_joining, #date_of_leaving").datepicker({
        dateFormat: 'yy-mm-dd',
        changeYear: true,      // Enable year selection
        yearRange: "1900:2100" // Set the range of years available
    });

    // Set a default date (e.g., today's date)
  
});


    </script>
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
              <h3 class="page-title">Users</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                
                </ol>
              </nav>
            </div>
            <div class="row">
            <div class="col-md-12 grid-margin stretch-card ">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Users Create</h4>
                    <?php
        if(isset($allPdt)){
            foreach($allPdt as $pdt){

              if(isset($allStu)){
                foreach($allStu as $val){
              
        ?> 
                    <form class="forms-sample"  action="<?php echo base_url(); ?>admin/users/update" method="post" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $val->id; ?>">
                   
                    <div class="row">
               
                      <!-- END FORM -->
         
 <!-- FORM -->
 <?php
            if($pdt->is_name_en  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="name_en">Full Name</label>
                <input type="text" class="form-control" id="name_en" name="name_en" value="<?php echo $val->name_en; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
               <!-- FORM -->
            <?php
            if($pdt->is_name_bn  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="name_bn">নাম</label>
                <input type="text" class="form-control" id="name_bn" name="name_bn" value="<?php echo $val->name_bn; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
              <!-- FORM -->
            <?php
            if($pdt->is_father_name_en  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="father_name_en">Father's Name</label>
                <input type="text" class="form-control" id="father_name_en" name="father_name_en" value="<?php echo $val->father_name_en; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
               <!-- FORM -->
            <?php
            if($pdt->is_father_name_bn  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="father_name_bn">পিতার নাম</label>
                <input type="text" class="form-control" id="father_name_bn" name="father_name_bn" value="<?php echo $val->father_name_bn; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->

               <!-- FORM -->
            <?php
            if($pdt->is_father_mobile_no  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="father_mobile_no">Father's Mobile No</label>
                <input type="text" class="form-control" id="father_mobile_no" name="father_mobile_no" value="<?php echo $val->father_mobile_no; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
               <!-- FORM -->
            <?php
            if($pdt->is_mother_name_en  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="mother_name_en">Mother Name</label>
                <input type="text" class="form-control" id="mother_name_en" name="mother_name_en" value="<?php echo $val->mother_name_en; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
               <!-- FORM -->
            <?php
            if($pdt->is_mother_name_bn  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="mother_name_bn">মায়ের নাম</label>
                <input type="text" class="form-control" id="mother_name_bn" name="mother_name_bn" value="<?php echo $val->mother_name_bn; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->

             <!-- FORM -->
            <?php
            if($pdt->is_mother_mobile_no  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="mother_mobile_no">Mother Mobile No</label>
                <input type="text" class="form-control" id="mother_mobile_no" name="mother_mobile_no" value="<?php echo $val->mother_mobile_no; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
               <!-- FORM -->
            <?php
            if($pdt->is_mobile_no  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="mobile_no">Mobile No.</label>
                <span class="text-red small"><?php echo form_error('mobile_no'); ?></span>
                <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="<?php echo $val->mobile_no; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
               <!-- FORM -->
            <?php
            if($pdt->is_email  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $val->email; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
               <!-- FORM -->
            <?php
            if($pdt->is_village_en  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="village_en">Village</label>
                <input type="text" class="form-control" id="village_en" name="village_en" value="<?php echo $val->village_en; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
               <!-- FORM -->
            <?php
            if($pdt->is_village_bn  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="village_bn">গ্রাম</label>
                <input type="text" class="form-control" id="village_bn" name="village_bn" value="<?php echo $val->village_bn; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
               <!-- FORM -->
            <?php
            if($pdt->is_post_office_en  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="post_office_en">Post Office</label>
                <input type="text" class="form-control" id="post_office_en" name="post_office_en" value="<?php echo $val->post_office_en; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
               <!-- FORM -->
            <?php
            if($pdt->is_post_office_bn  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="post_office_bn">পোস্ট অফিস</label>
                <input type="text" class="form-control" id="post_office_bn" name="post_office_bn" value="<?php echo $val->post_office_bn; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
               <!-- FORM -->
            <?php
            if($pdt->is_upazila_en  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="upazila_en">Upazila</label>
                <input type="text" class="form-control" id="upazila_en" name="upazila_en" value="<?php echo $val->upazila_en; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
               <!-- FORM -->
            <?php
            if($pdt->is_upazila_bn  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="upazila_bn">উপজেলা</label>
                <input type="text" class="form-control" id="upazila_bn" name="upazila_bn" value="<?php echo $val->upazila_bn; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
               <!-- FORM -->
            <?php
            if($pdt->is_zilla_en  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="zilla_en">Zilla</label>
                <input type="text" class="form-control" id="zilla_en" name="zilla_en" value="<?php echo $val->zilla_en; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
               <!-- FORM -->
            <?php
            if($pdt->is_zilla_bn  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="zilla_bn">জেলা</label>
                <input type="text" class="form-control" id="zilla_bn" name="zilla_bn" value="<?php echo $val->zilla_bn; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
               <!-- FORM -->
            <?php
            if($pdt->is_designation  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="designation">Designation</label>
                <input type="text" class="form-control" id="designation" name="designation" value="<?php echo $val->designation; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
               <!-- FORM -->
            <?php
            if($pdt->is_department  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="department">Department</label>
                <input type="text" class="form-control" id="department" name="department" value="<?php echo $val->department; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
               <!-- FORM -->
            <?php
            if($pdt->is_employee_id  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="employee_id">Employee ID</label>
                <input type="text" class="form-control" id="employee_id" name="employee_id" value="<?php echo $val->employee_id; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
               <!-- FORM -->
            <?php
            if($pdt->is_index_no  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="index_no">Index No</label>
                <input type="text" class="form-control" id="index_no" name="index_no" value="<?php echo $val->index_no; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
               <!-- FORM -->
            <?php
            if($pdt->is_class  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="class">Class</label>
                <select type="text" class="form-control select2" id="class"  name="class"   >
                      <option value="">Select</option>   
                      <?php
                                        foreach ($allClass as $cls){
                                           if($cls->id == $val->class){
                                            echo "<option value='{$cls->id}' selected>{$cls->name} </option>";
                                           }else{
                                            echo "<option value='{$cls->id}'>{$cls->name} </option>";
                                           }
                                                
                                          
                                     
                                        }
                                    ?>
                       
                      </select> 

                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
       
               <!-- FORM -->
            <?php
            if($pdt->is_class_roll  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="class_roll">Class Roll</label>
                <input type="text" class="form-control" id="class_roll" name="class_roll" value="<?php echo $val->class_roll; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
                <!-- FORM -->
                <?php
            if($pdt->is_sections  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="class_roll">Sections</label>
                <select type="text" class="form-control select2" id="sections"  name="sections"   >
                      <option value="">Select</option>   
                      <?php
                                        foreach ($allSect as $sect){
                                            if($sect->id == $val->sections){
                                                echo "<option value='{$sect->id}' selected>{$sect->name} </option>";
                                            }else{
                                                echo "<option value='{$sect->id}'>{$sect->name} </option>";
                                            }
                                       
                                               
                                          
                                     
                                        }
                                    ?>
                       
                      </select> 
              
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
                <!-- FORM -->
            <?php
            if($pdt->is_sessions  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="class_roll">Session</label>
                <select type="text" class="form-control select2" id="sessions"  name="sessions"   >
                      <option value="">Select</option>   
                      <?php
                      
                                        foreach ($allSession as $session){
                                            if($session->id == $val->sessions){
                                                echo "<option value='{$session->id}' selected>{$session->name} </option>";
                                            }else{
                                                echo "<option value='{$session->id}'>{$session->name} </option>";
                                            }
                                             
                                          
                                     
                                        }
                                    ?>
                       
                      </select> 
              
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->

          
               <!-- FORM -->
            <?php
            if($pdt->is_date_of_birth  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="full_name">Date of Birth</label>
                <input type="text" class="form-control" id="dob" name="date_of_birth" value="<?php echo $val->date_of_birth; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
               <!-- FORM -->
            <?php
            if($pdt->is_gender  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" type="text" id="gender" name="gender" value="<?php echo set_value('gender'); ?>" >
                <option value="">Select</option>
                <option value="Male" <?php if($val->gender =="Male" ){ echo "selected"; }?>>Male</option>
                                    <option value="Female" <?php if($val->gender =="Female" ){ echo "selected"; }?>>Female</option>
                                    <option value="Others" <?php if($val->gender =="Others" ){ echo "selected"; }?>>Others</option>
            </select>
              
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
               <!-- FORM -->
            <?php
            if($pdt->is_id_number  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="id_number">ID No</label>
                <input type="text" class="form-control" id="id_number" name="id_number" value="<?php echo $val->id_number; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
               <!-- FORM -->
            <?php
            if($pdt->is_blood_group  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="blood_group">Blood Group</label>
                <select class="form-control" type="text" id="blood_group" name="blood_group" value="<?php echo set_value('blood_group'); ?>" >
                <option value="">Select</option>
                <option value="A+" <?php if($val->blood_group =="A+" ){ echo "selected"; }?>>A+</option>
                <option value="A-" <?php if($val->blood_group =="A-" ){ echo "selected"; }?>>A-</option>
                <option value="B+" <?php if($val->blood_group =="B+" ){ echo "selected"; }?>>B+</option>
                <option value="B-" <?php if($val->blood_group =="B-" ){ echo "selected"; }?>>B-</option>
                <option value="O+" <?php if($val->blood_group =="O+" ){ echo "selected"; }?>>O+</option>
                <option value="O-" <?php if($val->blood_group =="O-" ){ echo "selected"; }?>>O-</option>
                <option value="AB+" <?php if($val->blood_group =="AB+" ){ echo "selected"; }?>>AB+</option>
                <option value="AB-" <?php if($val->blood_group =="AB-" ){ echo "selected"; }?>>AB-</option>
            </select>
            </div>
                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
                       <!-- FORM -->
            <?php
            if($pdt->is_marital_status  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="marital_status">Marital Status</label>
                <select class="form-control" type="text" id="marital_status" name="marital_status" value="<?php echo set_value('marital_status'); ?>" >
                <option value="">Select</option>
                <option value="Single" <?php if($val->marital_status =="Single" ){ echo "selected"; }?>>Single</option>
                <option value="Married" <?php if($val->marital_status =="Married" ){ echo "selected"; }?>>Married</option>
                <option value="Widowed" <?php if($val->marital_status =="Widowed" ){ echo "selected"; }?>>Widowed</option>
                <option value="Separated" <?php if($val->marital_status =="Separated" ){ echo "selected"; }?>>Separated</option>
                <option value="Not Specified" <?php if($val->marital_status =="Not Specified" ){ echo "selected"; }?>>Not Specified</option>
            </select>
            
            </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
                    <!-- FORM -->
            <?php
            if($pdt->is_nationality  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="nationality">Nationality</label>
                <input type="text" class="form-control" id="nationality" name="nationality" value="<?php echo $val->nationality; ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
                     <!-- FORM -->
            <?php
            if($pdt->is_present_address_en  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="present_address_en">Present Address</label>
                <textarea class="form-control" id="present_address_en" rows="3" placeholder="Your Address"><?php echo $val->present_address_en; ?></textarea>
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->

                    <!-- FORM -->
                    <?php
            if($pdt->is_permanent_address_en  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="permanent_address_en">Permanent Address</label>
                <textarea class="form-control" id="permanent_address_en" rows="3" ><?php echo $val->permanent_address_en; ?></textarea>
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->
               <!-- FORM -->
            <?php
            if($pdt->is_photo  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="is_photo">Photo</label>
               
                <input  class="form-control" type="file" id="is_photo" name="pic" value="<?php echo set_value('pic'); ?>" >
                </div>
                <img src="<?php echo base_url()."public/static/images/users/$val->photo"; ?>" width="80px" height="80px" alt="" class="img-circle">
                </div>
                <?php
            }
            ?>
            <!-- END FORM -->

                <!-- FORM -->
                <?php
            if($pdt->is_signature  == 1){
            ?>
                <div class="col-md-4">
                <div class="form-group">
                <label for="signature">Signature</label>
                <input  class="form-control" type="file" id="signature" name="signature" accept="image/png" value="<?php echo set_value('signature'); ?>" >
                <img src="<?php echo base_url()."public/static/images/users/$val->signature"; ?>" width="80px" height="80px" alt="" class="img-circle">
            </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->

            <?php
            }
        }

      }
    }
        ?>




                     <!-- FORM -->
  <div class="row form-check-success" id="choose-filds">

 

</div>
<!-- END FORM -->

<?php $base_url = base_url(); // Get the base URL ?>
                   



                    </div>
                    
                     
                    
                     
                      <button type="submit" class="btn btn-primary me-2"> Update </button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
        
         
            </div>
          </div>
          <!-- content-wrapper ends -->
          <script>
        $(document).ready(function() {
          
            
            //select 
            $('#organization_id').change(function() {
                var category_id = $(this).val();
                
                if (category_id != '') {
                    $.ajax({
                        url: "<?php echo site_url('admin/export/excel_import_org/fetch_org_form'); ?>",
                        method: "POST",
                        data: { category_id: category_id },
                        dataType: "json",
                        success: function(data) {
                            $('#org_form_id').html('<option value="">Select Form</option>'); // Clear existing options
                            
                            $.each(data, function(index, subcategory) {
                                $('#org_form_id').append('<option value="'+subcategory.id+'">'+subcategory.code_no+ ' - '+subcategory.title+'</option>');
                            });
                        }
                    });
                } else {
                    $('#org_form_id').html('<option value="">Select Form</option>'); // Clear subcategories if no category is selected
                }
        });  
    
    
    });
    </script>




<script>

$(document).ready(function(){
  $('#org_form_id').change(function() {
            var categoryId = $(this).val();

            if (categoryId) {
                $.ajax({
                    url: '<?php echo site_url('admin/users/fetch_accounts'); ?>',
                    type: 'POST',
                    data: { payment_type_id: categoryId },
                    dataType: 'json',
                    success: function(data) {
                        // Check if data is an array or object
                        if (data.success) {
                            $('#choose-filds').html(data.html); // Assuming the server returns HTML
                        } else {
                            $('#choose-filds').html('<p>No accounts found.</p>');
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error('AJAX Error:', textStatus, errorThrown);
                        $('#choose-filds').html('<p>An error occurred while fetching accounts.</p>');
                    }
                });
            } else {
                $('#choose-filds').empty(); // Clear the output if no category is selected
            }
        });
});

       

</script>
