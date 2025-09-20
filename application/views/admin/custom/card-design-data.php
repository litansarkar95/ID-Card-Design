
<style>
.form-check-input{
  border:2px solid #0033C4;
}
  </style>
  <?php
  if(isset($allPdt)){
    foreach($allPdt as $pdt){
     
  
  ?>


 <?php
            $fields = [
              'name_bn' => 'নাম',
              'father_name_en' => "Father's Name",
              'father_name_bn' => 'পিতার নাম',
              'father_mobile_no' => "Father's Mobile No",
              'mother_name_en' => 'Mother Name',
              'mother_name_bn' => 'মায়ের নাম',
              'mother_mobile_no' => "Mother Mobile No",
              'mobile_no' => 'Mobile No.',
              'email' => 'Email',
              'village_en' => 'Village',
              'village_bn' => 'গ্রাম',
              'post_office_en' => 'Post Office',
              'post_office_bn' => 'পোস্ট অফিস',
              'upazila_en' => 'Upazila',
              'upazila_bn' => 'উপজেলা',
              'zilla_en' => 'Zilla',
              'zilla_bn' => 'জেলা',
              'present_address_en' => 'Present Address English',
              'permanent_address_en' => 'Permanent Address English',
              'designation' => 'Designation',
              'department' => 'Department',
              'employee_id' => 'Employee ID',
              'index_no' => 'Index No',
              'class' => 'Class ',
              'class_roll' => 'Class Roll',
              'sections' => 'Sections',
              'sessions'      => 'Sessions',
              'date_of_birth' => 'Date of Birth',
              'id_number' => 'ID No',
              'nationality' => 'Nationality',
              'blood_group' => 'Blood Group',
              'signature' => 'Signature',
              
            ];
            ?>


<?php
foreach ($fields as $field => $label) {

 $flag = "is_$field";
      if (property_exists($pdt, $flag) && $pdt->$flag == 1) {
?>
<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="<?= $field ?>" name="fields[]" value="<?= $field ?>"> <?= $label ?>
<!-- <input type="checkbox" class="form-check-input" id="<?= $field ?>" name="<?= $field ?>" value="1"> <?= $label ?> -->
</div>
</div>
<?php
      }

}
?>

<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="expiry_date" name="fields[]" value="expiry_date"> Expiry Date
</div>
</div>


<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="terms_&_conditions" name="fields[]" value="terms_&_conditions"> Terms & Conditions
</div>
</div>

<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="signature_name" name="fields[]" value="signature_name"> Org Signature
</div>
</div>

<!-- <div class="col-md-6">
  
  <div class="form-group ">
  <input type="checkbox" class="form-check-input" id="is_id_no" name="is_id_no" value="1"> ID No
  </div>
  </div> -->
<!---End  Nationality-->




<!---End  Mother name english-->




                      

                       


                         <?php
                           }
                          }
                         ?>