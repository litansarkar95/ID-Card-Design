<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" ></script>
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
        html, body {
            min-height: 100%;
            padding: 0;
            margin: 0;
            font-family: Roboto, Arial, sans-serif;
            font-size: 14px;
            color: #666;
        }
        h1 {
            margin: 0 0 20px;
            font-weight: 400;
            color: #1c87c9;
            text-align:center;
        }
        p {
            margin: 0 0 5px;
        }
        .main-block {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #1c87c9;
        }
        form {
            padding: 25px;
            margin: 25px;
            box-shadow: 0 2px 5px #f5f5f5; 
            background: #f5f5f5; 
            border-radius: 8px;
        }
        .fas {
            margin: 25px 10px 0;
            font-size: 72px;
            color: #fff;
        }
        .fa-id-card {
            transform: rotate(-20deg);
        }
        .fa-users, .fa-mail-bulk {
            transform: rotate(10deg);
        }
        input, textarea, select {
            width: calc(100% - 18px);
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #1c87c9;
            outline: none;
            border-radius: 4px;
        }
        input::placeholder, select {
            color: #666;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
            display: block;
            color: #333;
        }
        button {
            width: 100%;
            padding: 10px;
            border: none;
            background: #1c87c9; 
            font-size: 16px;
            font-weight: 400;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background: #2371a0;
        } 
        @media (min-width: 568px) {
            .main-block {
                flex-direction: row;
            }
            .left-part, form {
                width: 50%;
            }
            .fa-id-card {
                margin-top: 0;
                margin-left: 20%;
            }
            .fa-users {
                margin-top: -10%;
                margin-left: 65%;
            }
            .fa-mail-bulk {
                margin-top: 2%;
                margin-left: 28%;
            }
        }
    </style>
</head>
<body>
<div class="main-block">
    <!-- <div class="left-part">
        <i class="fas fa-id-card"></i>
        <i class="fas fa-users"></i>
        <i class="fas fa-mail-bulk"></i>
    </div> -->
    <form action="<?php echo base_url()."userformsubmit/$pdt->org_slug?v=$pdt->id" ?>" method="post" enctype="multipart/form-data">
    <?php
        if(isset($allPdt)){
            foreach($allPdt as $pdt){
        
        ?>
        <h1><?php echo $pdt->title; ?></h1>
        <input  class="form-control" type="hidden" id="organization_id" name="organization_id" value="<?php echo $pdt->organization_id; ?>"  >
        <input  class="form-control" type="hidden" id="id" name="id" value="<?php echo $pdt->id; ?>"  >
        <div class="info">
            <?php
            if($pdt->is_name  == 1){
            ?>
            <label for="full_name">Full Name</label>
            <span class="text-red small"><?php echo form_error('full_name'); ?></span>
            <input  class="form-control" type="text" id="full_name" name="full_name" value="<?php echo set_value('full_name'); ?>" placeholder="Full name" >
           
           <?php
            }
            ?>
               <?php
            if($pdt->is_designation  == 1){
            ?>
            <label for="is_designation">Designation</label>
            <input  class="form-control" type="text" id="is_designation" name="is_designation" value="<?php echo set_value('is_designation'); ?>" >
            <?php
            }
            ?>

            <?php
            if($pdt->is_department  == 1){
            ?>
            <label for="is_department">Department</label>
            <input  class="form-control" type="text" id="is_department" name="is_department" value="<?php echo set_value('is_department'); ?>" >
            <?php
            }
            ?>
               <?php
            if($pdt->is_date_of_birth  == 1){
            ?>
            <label for="dob">Birthday</label>
            <input  class="form-control" type="text" id="dob" name="is_date_of_birth" value="<?php echo set_value('is_date_of_birth'); ?>"  >
            <?php
            }
            ?>
               <?php
            if($pdt->is_gender  == 1){
            ?>
              <label for="is_gender">Gender</label>
               <select class="form-control" type="text" id="is_gender" name="is_gender" value="<?php echo set_value('is_gender'); ?>" >
                <option value="">Select</option>
                <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
            </select>
          
            <?php
            }
            ?>

<?php
            if($pdt->is_marital_status  == 1){
            ?>
              <label for="is_marital_status">marital_status</label>
               <select class="form-control" type="text" id="is_marital_status" name="is_marital_status" value="<?php echo set_value('is_marital_status'); ?>" >
                <option value="">Select</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Widowed">Widowed</option>
                <option value="Separated">Separated</option>
                <option value="Not Specified">Not Specified</option>
            </select>
          
            <?php
            }
            ?>
               <?php
            if($pdt->is_present_address  == 1){
            ?>
            <label for="is_present_address">Present Address</label>
            <textarea rows="4"  id="is_present_address" name="is_present_address" ><?php echo set_value('is_present_address'); ?></textarea>
            <?php
            }
            ?>

              <?php
            if($pdt->is_permanent_address  == 1){
            ?>
            <label for="is_permanent_address">Permanent Address</label>
            <textarea rows="4"  id="is_permanent_address" name="is_permanent_address" ><?php echo set_value('is_permanent_address'); ?></textarea>
            <?php
            }
            ?>

            <?php
            if($pdt->is_blood_group  == 1){
            ?>
            <label for="is_blood_group">Blood Group</label>
            <select class="form-control" type="text" id="is_blood_group" name="is_blood_group" value="<?php echo set_value('is_blood_group'); ?>" >
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
              <?php
            }
            ?>


                <?php
            if($pdt->is_nationality  == 1){
            ?>
            <label for="is_nationality">Nationality</label>
            <input  class="form-control" type="text" id="is_nationality" name="is_nationality" value="<?php echo set_value('is_nationality'); ?>" >
            <?php
            }
            ?>


<?php
            if($pdt->is_mobile_no  == 1){
            ?>
            <label for="is_mobile_no">Mobile No</label>
            <input  class="form-control" type="text" id="is_mobile_no" name="is_mobile_no" value="<?php echo set_value('is_mobile_no'); ?>" >
            <?php
            }
            ?>


<?php
            if($pdt->is_email  == 1){
            ?>
            <label for="is_email">Email</label>
            <input  class="form-control" type="text" id="is_email" name="is_email" value="<?php echo set_value('is_email'); ?>" >
            <?php
            }
            ?>


<?php
            if($pdt->is_photo  == 1){
            ?>
            <label for="is_photo">Photo</label>
            <input  class="form-control" type="file" id="is_photo" name="pic" value="<?php echo set_value('pic'); ?>" >
            <?php
            }
            ?>


  
    

        <?php
            }
        }
        ?>
        <button type="submit">Submit</button>
    </form>
</div>
</body>
</html>
