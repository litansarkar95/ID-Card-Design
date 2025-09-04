<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>GDPR-Compliant Contact Form</title>
  <link rel="stylesheet" href="./style.css">

</head>
<style>
    :root {
            --primary: #4f46e5;
            --primary-dark: #4338ca;
            --gray: #6b7280;
            --error: #ef4444;
            --success: #22c55e;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: system-ui, -apple-system, sans-serif;
            background: #f3f4f6;
            color: #1f2937;
            line-height: 1.5;
            padding: 2rem;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
        }

        h1 {
            font-size: 1.5rem;
            
            color: #111827;
            text-align:center;
        }
    
p{
text-align:center;
}
        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        input, textarea , select{
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            font-size: 1rem;
            transition: all 0.15s ease;
        }

        input:focus, textarea:focus , select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .error-message {
            color: var(--error);
            font-size: 0.875rem;
            margin-top: 0.25rem;
            display: none;
        }

        .validation-icon {
            position: absolute;
            right: 1rem;
            top: 2.5rem;
            display: none;
        }

        .validation-icon.success {
            color: var(--success);
            display: block;
        }

        .validation-icon.error {
            color: var(--error);
            display: block;
        }

        input.success, textarea.success {
            border-color: var(--success);
        }

        input.error, textarea.error {
            border-color: var(--error);
        }

        .checkbox-group {
            display: flex;
            align-items: start;
            gap: 0.75rem;
            margin-top: 1rem;
        }

        .checkbox-group input[type="checkbox"] {
            width: auto;
            margin-top: 0.25rem;
        }

        .checkbox-group label {
            font-size: 0.875rem;
            color: var(--gray);
        }

        button {
            background: var(--primary);
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 0.5rem;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.15s ease;
        }

        button:hover {
            background: var(--primary-dark);
        }

        .privacy-notice {
            font-size: 0.875rem;
            color: var(--gray);
            margin-top: 2rem;
            padding-top: 1rem;
            border-top: 1px solid #e5e7eb;
        }

        .success-message {
            display: none;
            background: #dcfce7;
            color: #166534;
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }
    </style>
<body>

<body>
    <div class="form-container">
        <div class="success-message" id="successMessage">
            Thank you! Your form has been submitted successfully.
        </div>
        <?php
        if(isset($allPdt)){
            foreach($allPdt as $pdt){
        
        ?>
            
            <h1><?php echo $pdt->title; ?></h1>
        <p><?php echo $pdt->description; ?></p>
        <form id="gdprForm"  action="<?php echo base_url()."userformsubmit/$pdt->org_slug?v=$pdt->id" ?>" method="post" enctype="multipart/form-data">
            
        <input  class="form-control" type="hidden" id="organization_id" name="organization_id" value="<?php echo $pdt->organization_id; ?>"  >
            <input  class="form-control" type="hidden" id="agent_id" name="agent_id" value="<?php echo $pdt->agent_id; ?>"  >
            <input  class="form-control" type="hidden" id="id" name="id" value="<?php echo $pdt->id; ?>"  >
       
       


            <?php
            if($pdt->is_name_en  == 1){
            ?>
                <div class="col-md-10">
                <div class="form-group">
                <label for="name_en">Full Name</label>
                <input type="text" class="form-control" id="name_en" name="name_en" value="<?php echo set_value('name_en'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="name_bn">নাম</label>
                <input type="text" class="form-control" id="name_bn" name="name_bn" value="<?php echo set_value('name_bn'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="father_name_en">Father's Name</label>
                <input type="text" class="form-control" id="father_name_en" name="father_name_en" value="<?php echo set_value('father_name_en'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="father_name_bn">পিতার নাম</label>
                <input type="text" class="form-control" id="father_name_bn" name="father_name_bn" value="<?php echo set_value('father_name_bn'); ?>">
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->

              <!-- FORM -->
            <?php
            if($pdt->is_father_mobile_no == 1){
            ?>
                <div class="col-md-10">
                <div class="form-group">
                <label for="father_mobile_no">Father's Mobile No</label>
                <input type="text" class="form-control" id="father_mobile_no" name="father_mobile_no" value="<?php echo set_value('father_mobile_no'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="mother_name_en">Mother Name</label>
                <input type="text" class="form-control" id="mother_name_en" name="mother_name_en" value="<?php echo set_value('mother_name_en'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="mother_name_bn">মায়ের নাম</label>
                <input type="text" class="form-control" id="mother_name_bn" name="mother_name_bn" value="<?php echo set_value('mother_name_bn'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="mother_mobile_no">Mother Mobile No</label>
                <input type="text" class="form-control" id="mother_mobile_no" name="mother_mobile_no" value="<?php echo set_value('mother_mobile_no'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="mobile_no">Mobile No.</label>
                <span class="text-red small"><?php echo form_error('mobile_no'); ?></span>
                <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="<?php echo set_value('mobile_no'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="village_en">Village</label>
                <input type="text" class="form-control" id="village_en" name="village_en" value="<?php echo set_value('village_en'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="village_bn">গ্রাম</label>
                <input type="text" class="form-control" id="village_bn" name="village_bn" value="<?php echo set_value('village_bn'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="post_office_en">Post Office</label>
                <input type="text" class="form-control" id="post_office_en" name="post_office_en" value="<?php echo set_value('post_office_en'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="post_office_bn">পোস্ট অফিস</label>
                <input type="text" class="form-control" id="post_office_bn" name="post_office_bn" value="<?php echo set_value('post_office_bn'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="upazila_en">Upazila</label>
                <input type="text" class="form-control" id="upazila_en" name="upazila_en" value="<?php echo set_value('upazila_en'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="upazila_bn">উপজেলা</label>
                <input type="text" class="form-control" id="upazila_bn" name="upazila_bn" value="<?php echo set_value('upazila_bn'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="zilla_en">Zilla</label>
                <input type="text" class="form-control" id="zilla_en" name="zilla_en" value="<?php echo set_value('zilla_en'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="zilla_bn">জেলা</label>
                <input type="text" class="form-control" id="zilla_bn" name="zilla_bn" value="<?php echo set_value('zilla_bn'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="designation">Designation</label>
                <input type="text" class="form-control" id="designation" name="designation" value="<?php echo set_value('designation'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="department">Department</label>
                <input type="text" class="form-control" id="department" name="department" value="<?php echo set_value('department'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="employee_id">Employee ID</label>
                <input type="text" class="form-control" id="employee_id" name="employee_id" value="<?php echo set_value('employee_id'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="index_no">Index No</label>
                <input type="text" class="form-control" id="index_no" name="index_no" value="<?php echo set_value('index_no'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="class">Class</label>
                <select type="text" class="form-control select2" id="class"  name="class"   >
                      <option value="">Select</option>   
                      <?php
                                        foreach ($allClass as $cls){
                                       
                                                echo "<option value='{$cls->id}'>{$cls->name} </option>";
                                          
                                     
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="class_roll">Class Roll</label>
                <input type="text" class="form-control" id="class_roll" name="class_roll" value="<?php echo set_value('class_roll'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="class_roll">Sections</label>
                <select type="text" class="form-control select2" id="sections"  name="sections"   >
                      <option value="">Select</option>   
                      <?php
                                        foreach ($allSect as $sect){
                                       
                                                echo "<option value='{$sect->id}'>{$sect->name} </option>";
                                          
                                     
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="class_roll">Session</label>
                <select type="text" class="form-control select2" id="sessions"  name="sessions"   >
                      <option value="">Select</option>   
                      <?php
                                        foreach ($allSession as $session){
                                       
                                                echo "<option value='{$session->id}'>{$session->name} </option>";
                                          
                                     
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="full_name">Date of Birth</label>
                <input type="text" class="form-control" id="dob" name="date_of_birth" value="<?php echo set_value('date_of_birth'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" type="text" id="gender" name="gender" value="<?php echo set_value('gender'); ?>" >
                <option value="">Select</option>
                <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="id_number">ID No</label>
                <input type="text" class="form-control" id="id_number" name="id_number" value="<?php echo set_value('id_number'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="blood_group">Blood Group</label>
                <select class="form-control" type="text" id="blood_group" name="blood_group" value="<?php echo set_value('blood_group'); ?>" >
                <option value="">Select</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="marital_status">Marital Status</label>
                <select class="form-control" type="text" id="marital_status" name="marital_status" value="<?php echo set_value('marital_status'); ?>" >
                <option value="">Select</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Widowed">Widowed</option>
                <option value="Separated">Separated</option>
                <option value="Not Specified">Not Specified</option>
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="nationality">Nationality</label>
                <input type="text" class="form-control" id="nationality" name="nationality" value="<?php echo set_value('nationality'); ?>">
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="present_address_en">Present Address</label>
                <textarea class="form-control" id="present_address_en" name="present_address_en" rows="3" placeholder="Your Address"><?php echo set_value('present_address_en'); ?></textarea>
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="permanent_address_en">Permanent Address</label>
                <textarea class="form-control" id="permanent_address_en" name="permanent_address_en" rows="3" ><?php echo set_value('permanent_address_en'); ?></textarea>
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
                <div class="col-md-10">
                <div class="form-group">
                <label for="is_photo">Photo</label>
                <input  class="form-control" type="file" id="is_photo" name="pic" value="<?php echo set_value('pic'); ?>" >
                </div>

                </div>
                <?php
            }
            ?>
            <!-- END FORM -->

                <!-- FORM -->
                <?php
            if($pdt->is_signature  == 1){
            ?>
                <div class="col-md-10">
                <div class="form-group">
                <label for="signature">Signature</label>
                <input  class="form-control" type="file" id="signature" name="signature" accept="image/png" value="<?php echo set_value('signature'); ?>" >
                </div>

                </div>
                <?php
            }
            ?>

         

           

   

            <button type="submit">Submit </button>

            <div class="privacy-notice">
            <p>Design & Develop by: <span><a href="https://www.labibait.com" target="_blank">» Labiba IT</a></span></p>
            </div>
        </form>

        <?php
            }
        }
        ?>
    </div>
</body>


</body>
</html>
