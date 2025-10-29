
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script> 
    
<script>
$(document).ready(function() {
    // Initialize the datepicker with year selection
    $("#valid_date, #date_of_joining, #date_of_leaving").datepicker({
        dateFormat: 'dd-mm-yy',
        changeMonth: true,      // Enable year selection
        changeYear: true,      // Enable year selection
        yearRange: "1900:2100" // Set the range of years available
    });

    // Set a default date (e.g., today's date)
    var today = $.datepicker.formatDate('dd-mm-yy', new Date());
    $("#valid_date, #date_of_joining, #date_of_leaving").val(today);
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
              <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form  id="fieldForm"  action="<?php echo base_url(); ?>admin/card/custom/printdesign" method="post" >
                    <h4 class="card-title">আইডি কার্ড ডিজাইন করুন</h4>
                    <hr style="border: 1px solid #0033C4;">
                    <div class="row">

                        <!-- FORM -->
                          <div class="col-md-6">
                          <div class="form-group ">
                         <div class="form-check form-check-success">
                         <label for="template_id">কার্ড ডিজাইন<code>*</code></label>
                         <select type="text" class="form-control " id="template_id" value="<?php echo set_value('template_id'); ?>" name="template_id"   >
                      <option value="" data-id="no-image.png">Select</option>   
                    
                      <?php
                                        foreach ($allTemp as $temp){
                                          ?>
                                          <option value="<?php echo $temp->code ?>" data-id="<?php echo $temp->code ?>"data-picture="<?php echo $temp->picture ?>" ><?php echo $temp->name; ?></option>
                       
                                      <?php
                                        }
                                    ?>
                       
                      </select> 
                        <span class="text-red small"><?php echo form_error('template_id'); ?></span>
                            
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
                    <div class="row form-check-success" id="choose-filds">   </div>   
                      <!-- END FORM -->
                         
                      <?php $base_url = base_url(); // Get the base URL ?>
    


 
                          
                      <!-- END FORM -->

                             <input type="hidden" name="ordered_fields" id="orderedFields">
                      

                        <!-- FORM -->
                        <div class="col-md-6">
                          <div class="form-group ">
                         <div class="form-check form-check-success">
                         <label for="qr_tpye">Type of Selection<code>*</code></label>
                         <select type="text" class="form-control select2" id="type"  name="type"   >
                                <option value="">-- All Type --</option>
                    <option value="id">By ID</option>
                    <!-- <option value="position">By Position</option>
                    <option value="range">By Range</option> -->
                    
                       
                      </select> 
                        <span class="text-red small"><?php echo form_error('type'); ?></span>
                            
                              </div>
                         </div>  
                         </div>
                      <!-- END FORM -->

                        <!-- FORM -->
                        <div class="col-md-6 " id="input_id">
                          <div class="form-group ">
                         <div class="form-check form-check-success">
                         <label for="qr_tpye">Enter ID</label>
                         <input  type="text" class="form-control " id="" value="<?php echo set_value('input_id'); ?>" name="input_id"   >
                        <span class="text-red small"><?php echo form_error('qr_tpye'); ?></span>
                            
                              </div>
                         </div>  
                         </div>
                      <!-- END FORM -->
                       <!-- FORM -->
                        <div class="col-md-6 " id="input_position">
                          <div class="form-group ">
                         <div class="form-check form-check-success">
                         <label for="qr_tpye">Enter Position (Offset)</label>
                         <input  type="number" class="form-control " id="" value="<?php echo set_value('input_position'); ?>" name="input_position"  placeholder="Enter Position" >
                        <span class="text-red small"><?php echo form_error('input_position'); ?></span>
                            
                              </div>
                         </div>  
                         </div>
                      <!-- END FORM -->

                      <!-- FORM -->
                        <div class="col-md-6" id="input_range">
                        
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <div class="form-check form-check-success">
                                <label>Enter Offset:</label>
                                    <input type="number" class="form-control " name="input1" placeholder="Offset">
                                </div>
                              </div>
                              </div>

                              <div class="col-md-6">
                                  <div class="form-group ">
                                    <div class="form-check form-check-success">
                                   <label>Enter Limit:</label>
                                    <input type="number" class="form-control " name="input2" placeholder="Limit">
                                </div>
                              </div>
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

                               <div class="form-group col-md-6">
                                 <label for="header_title">প্রতিষ্ঠানের সাইজ </label>
                                 <input type="text" id="header_title" class="form-control " name="header_title"  value="20" >
                                 <span class="text-red small"><?php echo form_error('header_title'); ?></span>
                              </div>

                              <div class="form-group col-md-6">
                                 <label for="footer_title">প্রতিষ্ঠানের সাইজ ফুটারে </label>
                                 <input type="text" id="footer_title" class="form-control " name="footer_title"  value="10" >
                                 <span class="text-red small"><?php echo form_error('footer_title'); ?></span>
                              </div>
                      <!-- END FORM -->
                      <div class="col-md-6">
  
                  <div class="form-group ">
                  <input type="checkbox" class="form-check-input" id="is_valid" name="is_valid" value="1"> Is Valid until Date
                  </div>
                  </div>
                  <div id="hiddenDiv" style="display:none;">
                      <div class="form-group col-md-6">
                                 <label for="valid_date">Valid until Date</label>
                                 <input type="text" id="valid_date" class="form-control Date" name="valid_date"  value="<?php echo set_value('valid_date'); ?>" >
                                 <span class="text-red small"><?php echo form_error('valid_date'); ?></span>
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


                                      <div class="col-md-5 grid-margin stretch-card">
                              <div class="card">
                                <div class="card-body">
                                <div class="design-card">
                                <img id="myImage" src="<?php echo $base_url; ?>public/static/assets/images/card_design/no-image.png" alt="Selected Image" width="300">

                            </div> 
                  <!-- Load HTML -->
                  <div id="designHtmlContainer" style="margin-top: 20px;"></div>

                                      </div> 
            </div>  </div>
          
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
     









  
<script>
    const selectedFieldsOrder = [];

    // Checkbox selection tracking
    document.querySelectorAll('#choose-filds input[type="checkbox"]').forEach(checkbox => {
        checkbox.addEventListener('change', function () {
            const fieldId = this.id;

            if (this.checked) {
                if (!selectedFieldsOrder.includes(fieldId)) {
                    selectedFieldsOrder.push(fieldId);
                }
            } else {
                const index = selectedFieldsOrder.indexOf(fieldId);
                if (index > -1) {
                    selectedFieldsOrder.splice(index, 1);
                }
            }

            loadTemplateDesign(); // ডিজাইন রি-লোড
        });
    });

    document.getElementById('template_id').addEventListener('change', function () {
        const selectedOption = this.options[this.selectedIndex];
        const picture = selectedOption.getAttribute('data-picture');
        document.getElementById('myImage').src = "<?php echo $base_url; ?>public/static/assets/images/card_design/" + picture;
        loadTemplateDesign(); // ডিজাইন লোড
    });

function loadTemplateDesign() {
    const templateSelector = document.getElementById('template_id');
    const templateId = templateSelector.options[templateSelector.selectedIndex].getAttribute('data-id');

    // যদি টেমপ্লেট সিলেক্ট না করা থাকে
    if (!templateId || templateId === 'no-image.png') {
        document.getElementById('designHtmlContainer').innerHTML = '<em>⚠️ কোনো টেমপ্লেট সিলেক্ট করা হয়নি।</em>';
        return;
    }

    // Encode data properly
    const postData = new URLSearchParams();
    postData.append('id', templateId);
    postData.append('fields', JSON.stringify(selectedFieldsOrder));

    fetch("<?php echo site_url('admin/design/get_template_html'); ?>", {
        method: "POST",
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: postData.toString()
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('designHtmlContainer').innerHTML = data;
    })
    .catch(error => {
        console.error('Error loading design HTML:', error);
    });
}

</script>


  

    <script>

$(document).ready(function(){
    // Ajax code
    $('#fields_code').change(function() {
        var categoryId = $(this).val();

        if (categoryId) {
            $.ajax({
                url: '<?php echo site_url('admin/card/custom/fetch_accounts'); ?>',
                type: 'POST',
                data: { payment_type_id: categoryId },
                dataType: 'json',
                success: function(data) {
                    if (data.success) {
                        $('#choose-filds').html(data.html);
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
            $('#choose-filds').empty();
        }
    });

    // ✅ Checkbox change event using event delegation
    $('#choose-filds').on('change', 'input[type="checkbox"]', function () {
        const fieldId = $(this).attr('id');

        if (this.checked) {
            if (!selectedFieldsOrder.includes(fieldId)) {
                selectedFieldsOrder.push(fieldId);
            }
        } else {
            const index = selectedFieldsOrder.indexOf(fieldId);
            if (index > -1) {
                selectedFieldsOrder.splice(index, 1);
            }
        }

        // Call template reload or preview render
        loadTemplateDesign();
    });
});

       

</script>

<script>
    $(document).ready(function() {
      $("#is_valid").change(function() {
        if ($(this).is(":checked")) {
          $("#hiddenDiv").fadeIn(); // Show 
        } else {
          $("#hiddenDiv").fadeOut(); // Hide 
        }
      });
    });
  </script>




 <script>
    $(document).ready(function() {
       
        $('#input_id').hide();
        $('#input_position').hide();
        $('#input_range').hide();

        $('select[name="type"]').on('change', function() {
            let selected = $(this).val();

            $('#input_id, #input_position, #input_range').hide();

            if (selected === 'id') {
                $('#input_id').show();
            } else if (selected === 'position') {
                $('#input_position').show();
            } else if (selected === 'range') {
                $('#input_range').show();
            }
        });
    });
    </script>



<script>
document.addEventListener('DOMContentLoaded', function () {
  const selectedOrder = [];
  const container = document.getElementById('choose-filds');
  const hiddenInput = document.getElementById('orderedFields');

  // Event delegation for dynamic checkboxes (Ajax loaded)
  container.addEventListener('change', function (e) {
    if (e.target && e.target.matches('input[type="checkbox"]')) {
      const value = e.target.value;

      if (e.target.checked) {
        if (!selectedOrder.includes(value)) {
          selectedOrder.push(value);
        }
      } else {
        const index = selectedOrder.indexOf(value);
        if (index !== -1) {
          selectedOrder.splice(index, 1);
        }
      }

      hiddenInput.value = selectedOrder.join(',');
    }
  });

  // Optional: on submit, make sure value is synced
  document.getElementById('fieldForm').addEventListener('submit', function () {
    hiddenInput.value = selectedOrder.join(',');
  });
});
</script>
