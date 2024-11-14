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
              <h3 class="page-title">Import Users Information</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                
                </ol>
              </nav>
            </div>
            <div class="row">
            <div class="col-md-8 grid-margin stretch-card ">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Export Users Information</h4>
                    <?php echo form_open_multipart('admin/export/excel_import_multipicture/multiple_upload'); ?>
                  
                   <div class="row">
                   <div class="col-md-6">
                   <div class="form-group">
                        <label for="eorganization_name">Organization Name<code>*</code></label>
                        <select type="text" class="form-control select2" id="eorganization_name"  name="eorganization_name"   >
                      <option value="">Select</option>   
                      <?php
                                        foreach ($allCat as $cat){
                                       
                                                echo "<option value='{$cat->id}'>{$cat->name} - {$cat->mobile_no}</option>";
                                          
                                     
                                        }
                                    ?>
                       
                      </select> 
                        <span class="text-red small"><?php echo form_error('eorganization_name'); ?></span>
                    </div>    </div>

                    <div class="col-md-6">
                   <div class="form-group">
                        <label for="org_name_form_id">Form Name<code>*</code></label>
                        <select type="text" class="form-control select2" id="org_name_form_id"  name="org_name_form_id"   >
                        <option value="">Select Organition</option>   
                   
                       
                      </select> 
                        <span class="text-red small"><?php echo form_error('org_name_form_id'); ?></span>
                    </div>    </div>

                    <div class="col-md-6">
                   <div class="form-group">
                        <label for="class_id">Class Name<code>*</code></label>
                        <select type="text" class="form-control select2" id="class_id"  name="class_id"   >
                        <option value="">Select Organition</option>    
                  
                       
                      </select> 
                        <span class="text-red small"><?php echo form_error('class_id'); ?></span>
                    </div>    </div>
                    <div class="col-md-6">
                   <div class="form-group">
                        <label for="section_id">Section Name<code>*</code></label>
                        <select type="text" class="form-control select2" id="section_id"  name="section_id"   >
                      <option value="">Select Organition</option>   
                 
                       
                      </select> 
                        <span class="text-red small"><?php echo form_error('section_id'); ?></span>
                    </div>    </div>

                    <div class="col-md-6">
                   <div class="form-group">
                        <label for="session_id">Session Name<code>*</code></label>
                        <select type="text" class="form-control select2" id="session_id"  name="session_id"   >
                        <option value="">Select Organition</option>   
                   
                       
                      </select> 
                        <span class="text-red small"><?php echo form_error('session_id'); ?></span>
                    </div>    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="images[]">Picture<code>*</code></label>
                        <input type="file" class="form-control" name="images[]" multiple>
                        <span class="text-red small"><?php echo form_error('images[]'); ?></span>
                    </div> 
                  
                  </div>
                 <!-- END FORM -->
                 <div class="col-md-6">
                     <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="studnet_id">
                                <input type="radio" class="form-check-input" id="studnet_id" name="check_name" value="studnet_id">Student ID </label>
                            </div>
                    </div>
                    </div>

                        <!-- END FORM -->
                 <div class="col-md-6">
                     <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="class_roll">
                                <input type="radio" class="form-check-input" id="class_roll" name="check_name" value="class_roll">Class Roll</label>
                            </div>
                    </div>
                    </div>
                   
                   
                     <!-- END FORM -->
                     <div class="col-md-6">
                     <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="id">
                                <input type="radio" class="form-check-input" id="id" name="check_name" value="id"> ID </label>
                            </div>
                    </div>
                    </div>
                       <!-- END FORM -->
                       <div class="col-md-6">
                     <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="mobile_no">
                                <input type="radio" class="form-check-input" id="mobile_no" name="check_name" value="mobile_no"> Mobile No </label>
                            </div>
                    </div>
                    </div>
                       <!-- END FORM -->
                       <div class="col-md-6">
                     <div class="form-group">
                      <div class="form-check form-check-success">
                              <label class="form-check-label" for="registration_no">
                                <input type="radio" class="form-check-input" id="registration_no" name="check_name" value="registration_no"> Registration No </label>
                            </div>
                    </div>
                    </div>

                 
            

                    </div>
                    
                    <button type="submit" class="btn btn-primary me-2"><i class="fa fa-arrow-circle-up"></i> Upload </button>
                    
                      <button class="btn btn-light">Cancel</button>
                      <?php echo form_close(); ?>
                  </div>
                </div>
              </div>
        
             
           

     
          </div>
          <!-- content-wrapper ends -->
          <script>
        $(document).ready(function() {
            $('#eorganization_name').change(function() {
                var category_id = $(this).val();
                
                if (category_id != '') {
                    $.ajax({
                        url: "<?php echo site_url('admin/export/excel_import_multipicture/fetch_classes'); ?>",
                        method: "POST",
                        data: { category_id: category_id },
                        dataType: "json",
                        success: function(data) {
                            $('#class_id').html('<option value="">Select Class</option>'); // Clear existing options
                            
                            $.each(data, function(index, subcategory) {
                                $('#class_id').append('<option value="'+subcategory.id+'">'+subcategory.name+'</option>');
                            });
                        }
                    });
                } else {
                    $('#class_id').html('<option value="">Select Class</option>'); // Clear subcategories if no category is selected
                }

             
                if (category_id != '') {
                    $.ajax({
                        url: "<?php echo site_url('admin/export/excel_import_multipicture/fetch_sections'); ?>",
                        method: "POST",
                        data: { category_id: category_id },
                        dataType: "json",
                        success: function(data) {
                            $('#section_id').html('<option value="">Select Sections</option>'); // Clear existing options
                            
                            $.each(data, function(index, subcategory) {
                                $('#section_id').append('<option value="'+subcategory.id+'">'+subcategory.name+'</option>');
                            });
                        }
                    });
                } else {
                    $('#section_id').html('<option value="">Select Sections</option>'); // Clear subcategories if no category is selected
                }


                
                if (category_id != '') {
                    $.ajax({
                        url: "<?php echo site_url('admin/export/excel_import_multipicture/fetch_session'); ?>",
                        method: "POST",
                        data: { category_id: category_id },
                        dataType: "json",
                        success: function(data) {
                            $('#session_id').html('<option value="">Select Session</option>'); // Clear existing options
                            
                            $.each(data, function(index, subcategory) {
                                $('#session_id').append('<option value="'+subcategory.id+'">'+subcategory.name+'</option>');
                            });
                        }
                    });
                } else {
                    $('#session_id').html('<option value="">Select Session</option>'); // Clear subcategories if no category is selected
                }
     

            if (category_id != '') {
                    $.ajax({
                        url: "<?php echo site_url('admin/export/excel_import_multipicture/fetch_org_form'); ?>",
                        method: "POST",
                        data: { category_id: category_id },
                        dataType: "json",
                        success: function(data) {
                            $('#org_name_form_id').html('<option value="">Select Form</option>'); // Clear existing options
                            
                            $.each(data, function(index, subcategory) {
                                $('#org_name_form_id').append('<option value="'+subcategory.id+'">'+subcategory.code_no+ ' - '+subcategory.title+'</option>');
                            });
                        }
                    });
                } else {
                    $('#org_name_form_id').html('<option value="">Select Form</option>'); // Clear subcategories if no category is selected
                }
            });

            
            //select 
            $('#organization_id').change(function() {
                var category_id = $(this).val();
                
                if (category_id != '') {
                    $.ajax({
                        url: "<?php echo site_url('admin/export/excel_import_multipicture/fetch_org_form'); ?>",
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