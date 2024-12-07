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
              <h3 class="page-title">ইউজার রিপোর্ট </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                
                </ol>
              </nav>
            </div>
            <div class="row">
       
        
             
           

            <div class="col-md-8 grid-margin stretch-card ">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ইউজার রিপোর্ট </h4>
                    <?php echo form_open_multipart('admin/users/reportspdf'); ?>
                    <!-- <?php //echo form_open_multipart('admin/export/excel_import_org/userreport_export'); ?> -->
                   <div class="row">
                   <div class="col-md-12">
                   <div class="form-group">
                        <label for="organization_id">কোম্পানির নাম<code>*</code></label>
                        <select type="text" class="form-control select2" id="organization_id"  name="organization_id"   >
                      <option value="">Select</option>   
                      <?php
                                        foreach ($allCat as $cat){
                                       
                                                echo "<option value='{$cat->id}'>{$cat->name} - {$cat->mobile_no}</option>";
                                       
                                     
                                        }
                                    ?>
                       
                      </select> 
                        <span class="text-red small"><?php echo form_error('eorganization_id'); ?></span>
                    </div>    </div>
                    <div class="col-md-12">
                   <div class="form-group">
                        <label for="org_form_id">ফর্ম নাম<code>*</code></label>
                        <select type="text" class="form-control select2" id="org_form_id"  name="org_form_id"   >
                        <option value="">Select Organition</option>   
                   
                       
                      </select> 
                        <span class="text-red small"><?php echo form_error('org_form_id'); ?></span>
                    </div>    </div>
                    <div class="col-md-12">
                    
                
                    
                    <button class="btn btn-add btn-sm badge-warning text-white quick-link" type="submit">
                    <i class="fa fa-arrow-circle-down"></i> পিডিএফ ডাউনলোড</button>

                  
                    </div>
                    </div>
            

                    </div>
        
                 
                    <?php echo form_close(); ?>
                   
                  </div>
                </div>
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
                        url: "<?php echo site_url('admin/export/excel_import_org/fetch_classes'); ?>",
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
                        url: "<?php echo site_url('admin/export/excel_import_org/fetch_sections'); ?>",
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
                        url: "<?php echo site_url('admin/export/excel_import_org/fetch_session'); ?>",
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
                        url: "<?php echo site_url('admin/export/excel_import_org/fetch_org_form'); ?>",
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