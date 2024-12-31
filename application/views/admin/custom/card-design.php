
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
            <div class="row">
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form  action="<?php echo base_url(); ?>admin/card/custom/printdesign" method="post" >
                    <h4 class="card-title">আইডি কার্ড ডিজাইন করুন</h4>
                    <hr style="border: 1px solid #0033C4;">
                    <div class="row">
                          <!-- FORM -->
                          <div class="col-md-6">
                          <div class="form-group ">
                         <div class="form-check form-check-success">
                         <label for="fields_code">শিরোনাম<code>*</code></label>
                        <select type="text" class="form-control select2" id="fields_code" value="<?php echo set_value('fields_code'); ?>" name="fields_code"   >
                      <option value="">Select</option>   
                      <?php
                                        foreach ($allCat as $cat){
                                      echo "<option value='{$cat->id}'>{$cat->code_no} - {$cat->title}</option>";
                                        }
                                    ?>
                       
                      </select> 
                        <span class="text-red small"><?php echo form_error('fields_code'); ?></span>
                            
                              </div>
                         </div>  
                         </div>
                      <!-- END FORM -->

                  

                      


 <!-- FORM -->
  <div class="row form-check-success" id="choose-filds">

 

                         </div>
                      <!-- END FORM -->
                         
                      <?php $base_url = base_url(); // Get the base URL ?>
    
 

   
 
                          
                      <!-- END FORM -->

                           
                          <!-- FORM -->
                          <div class="col-md-6">
                          <div class="form-group ">
                         <div class="form-check form-check-success">
                         <label for="template_id">কার্ড ডিজাইন<code>*</code></label>
                         <select type="text" class="form-control " id="template_id" value="<?php echo set_value('side_id'); ?>" name="template_id"   >
                      <option value="" data-id="no-image.png">Select</option>   
                    
                      <?php
                                        foreach ($allTemp as $temp){
                                          ?>
                                          <option value="<?php echo $temp->id ?>" data-id="<?php echo $temp->picture ?>"><?php echo "{$temp->code} - {$temp->name}"; ?></option>
                       
                                      <?php
                                        }
                                    ?>
                       
                      </select> 
                        <span class="text-red small"><?php echo form_error('side_id'); ?></span>
                            
                              </div>
                         </div>  
                         </div>
                      <!-- END FORM -->

                         <!-- FORM -->
                         <div class="col-md-6">
                          <div class="form-group ">
                         <div class="form-check form-check-success">
                         <label for="side_id">সাইড<code>*</code></label>
                         <select type="text" class="form-control select2" id="side_id" value="<?php echo set_value('side_id'); ?>" name="side_id"   >
                      <option value="">Select</option>   
                      <option value="front_side">ফ্রন্ট সাইড</option>  
                      <option value="back_side">ব্যাক সাইড</option>  
                      <option value="both_side">ফুল সাইড</option>  
                       
                      </select> 
                        <span class="text-red small"><?php echo form_error('side_id'); ?></span>
                            
                              </div>
                         </div>  
                         </div>
                      <!-- END FORM -->

                        <!-- FORM -->
                        <div class="col-md-6">
                          <div class="form-group ">
                         <div class="form-check form-check-success">
                         <label for="qr_tpye">কিউ আর কোড টাইপ<code>*</code></label>
                         <select type="text" class="form-control select2" id="qr_tpye" value="<?php echo set_value('qr_tpye'); ?>" name="qr_tpye"   >
                      <option value="">Select</option>   
                      <option value="front_side">কিউ আর কোড</option>  
                      <option value="back_side">বার কোড</option>  
                    
                       
                      </select> 
                        <span class="text-red small"><?php echo form_error('qr_tpye'); ?></span>
                            
                              </div>
                         </div>  
                         </div>
                      <!-- END FORM -->
                                   <!-- FORM -->
                                   <div class="col-md-6">
                          <div class="form-group ">
                         <div class="form-check form-check-success">
                         <label for="qr_system">কিউ আর/বার নাম<code>*</code></label>
                         <select type="text" class="form-control select2" id="qr_system"  name="qr_system"   >
                      <option value="">Select</option>   
                      <option value="online">অনলাইন</option>  
                      <option value="offline">অফলাইন</option>  
                    
                       
                      </select> 
                        <span class="text-red small"><?php echo form_error('qr_system'); ?></span>
                            
                              </div>
                         </div>  
                         </div>

                         <div class="form-group col-md-6">
                                 <label for="staff_or_student">Student / Staff</label>
                                 <input type="text" id="staff_or_student" class="form-control " name="staff_or_student"  value="Student" >
                                 <span class="text-red small"><?php echo form_error('staff_or_student'); ?></span>
                              </div>
                      <!-- END FORM -->
                      <div class="col-md-6">
  
            <div class="form-group ">
            <input type="checkbox" class="form-check-input" id="is_valid" name="is_valid" value="1"> Is Valid until Date
            </div>
            </div>
            <div id="hiddenDiv" style="display:none;">
                      <div class="form-group col-md-6">
                                 <label for="dob">Valid until Date</label>
                                 <input type="text" id="dob" class="form-control Date" name="dob"  value="<?php echo set_value('dob'); ?>" >
                                 <span class="text-red small"><?php echo form_error('dob'); ?></span>
                              </div>
                              </div>
         <!-- END FORM -->
                      </div>
                   
              


                   

              
                    
                     
                      
                     
                       

                 
                      <button type="submit" class="btn btn-primary me-2"> Print ID Card </button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                                      </div>
                                      </div>


                                      <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <div class="design-card">
                  <img id="myImage" src="<?php echo $base_url; ?>public/static/assets/images/card_design/no-image.png" alt="Selected Image" width="300">

              </div> 
                                      </div> 
            </div>  </div>
          
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
     









  
    <script>
         function value() {
            const selector = document.getElementById('template_id');
            return selector.options[selector.selectedIndex].getAttribute('data-id'); // Get data-id
        }

        // Event listener for dropdown changes
        document.getElementById('template_id').addEventListener('change', function() {
            const imgElement = document.getElementById('myImage');
            imgElement.src = "<?php echo $base_url; ?>public/static/assets/images/card_design/" + value(); // Set the src using PHP base URL and data-id
        });
    </script>
  

    <script>

$(document).ready(function(){
  $('#fields_code').change(function() {
            var categoryId = $(this).val();

            if (categoryId) {
                $.ajax({
                    url: '<?php echo site_url('admin/card/custom/fetch_accounts'); ?>',
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


<script>
    $(document).ready(function() {
      // Listen for checkbox click event
      $("#is_valid").change(function() {
        // Toggle the visibility of the div based on the checkbox state
        if ($(this).is(":checked")) {
          $("#hiddenDiv").fadeIn(); // Show div with a fade-in effect
        } else {
          $("#hiddenDiv").fadeOut(); // Hide div with a fade-out effect
        }
      });
    });
  </script>