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
             
                    <form class="forms-sample"  action="<?php echo base_url(); ?>admin/users/insert" method="post" enctype="multipart/form-data">
                   <div class="row">
                   <div class="col-md-4">
                          <div class="form-group ">
                     
                         <label for="organization_id">Organization<code>*</code></label>
                        <select type="text" class="form-control select2" id="organization_id" value="<?php echo set_value('organization_id'); ?>" name="organization_id"   >
                      <option value="">Select</option>   
                      <?php
                                        foreach ($allCat as $cat){
                                       
                                                echo "<option value='{$cat->id}'>{$cat->name} - {$cat->mobile_no}</option>";
                                       
                                     
                                        }
                                    ?>
                       
                      </select> 
                        <span class="text-red small"><?php echo form_error('organization_id'); ?></span>
                            
                         </div>  
                         </div>
                      <!-- END FORM -->
                      <div class="col-md-4">
                   <div class="form-group">
                        <label for="org_form_id">Form Name<code>*</code></label>
                        <select type="text" class="form-control select2" id="org_form_id"  name="org_form_id"   >
                        <option value="">Select Organition</option>   
                   
                       
                      </select> 
                        <span class="text-red small"><?php echo form_error('org_form_id'); ?></span>
                    </div>    </div>




                     <!-- FORM -->
  <div class="row form-check-success" id="choose-filds">

 

</div>
<!-- END FORM -->

<?php $base_url = base_url(); // Get the base URL ?>
                   



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
