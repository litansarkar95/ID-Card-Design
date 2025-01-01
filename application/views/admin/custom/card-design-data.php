
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
  if($pdt->is_name_en == 1){
  ?>
<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="name_en" name="name_en" value="1"> Name English
</div>
</div>
<?php
  }
?>
<!--- name Bangla-->
<?php
  if($pdt->is_name_bn == 1){
  ?>
<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="name_bn" name="name_bn" value="1">  Name Bangla
</div>
</div>
<?php
  }
?>

<!---End   Bangla-->

<!--- Father name english-->
<?php
  if($pdt->is_father_name_en == 1){
  ?>
<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="father_name_en" name="father_name_en" value="1"> Father Name English
</div>
</div>
<?php
  }
?>

<!---End  Father name english-->


<!--- Father name bangla-->
<?php
  if($pdt->is_father_name_bn == 1){
  ?>
<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="father_name_bn" name="father_name_bn" value="1"> Father Name Bangla
</div>
</div>
<?php
  }
?>

<!---End  Mother name english-->


<!--- Mother name english-->
<?php
  if($pdt->is_mother_name_en == 1){
  ?>
<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="mother_name_en" name="mother_name_en" value="1"> Mother Name English
</div>
</div>
<?php
  }
?>

<!---End  Mother name english-->


<!--- Mother name english-->
<?php
  if($pdt->is_mother_name_bn == 1){
  ?>
<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="mother_name_bn" name="mother_name_bn" value="1"> Mother Name Bangla
</div>
</div>
<?php
  }
?>

<!---End  Mother name english-->


<!--- Mobile No-->
<?php
  if($pdt->is_mobile_no == 1){
  ?>
<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="mobile_no" name="mobile_no" value="1"> Mobile No
</div>
</div>
<?php
  }
?>

<!---End  Mobile No-->

<!--- Email-->
<?php
  if($pdt->is_email == 1){
  ?>
<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="email" name="email" value="1"> Email
</div>
</div>
<?php
  }
?>

<!---End  Email-->

<!--- village en-->
<?php
  if($pdt->is_village_en == 1){
  ?>
<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="village_en" name="village_en" value="1"> Village
</div>
</div>
<?php
  }
?>

<!---End  village-->


<!--- post office -->
<?php
  if($pdt->is_post_office_en== 1){
  ?>
<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="post_office_en" name="post_office_en" value="1"> Post Office
</div>
</div>
<?php
  }
?>

<!---End  Post Office-->


<!--- Upazila English-->
<?php
  if($pdt->is_upazila_en == 1){
  ?>
<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="upazila_en" name="upazila_en" value="1"> Upazila English
</div>
</div>
<?php
  }
?>

<!---End  Upazila English-->

<!--- Zilla English-->
<?php
  if($pdt->is_zilla_en == 1){
  ?>
<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="zilla_en" name="zilla_en" value="1"> Zilla English
</div>
</div>
<?php
  }
?>

<!---End  Zilla English-->


<!--- Class -->
<?php
  if($pdt->is_class == 1){
  ?>
<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="class" name="class" value="1"> Class
</div>
</div>
<?php
  }
?>

<!---End  Class-->
<!--- Class -->
<?php
  if($pdt->is_class_roll == 1){
  ?>
<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="class_roll" name="class_roll" value="1"> Class Roll
</div>
</div>
<?php
  }
?>

<!---End  Class-->

<!--- Class -->
<?php
  if($pdt->is_sessions == 1){
  ?>
<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="sessions" name="sessions" value="1"> Session
</div>
</div>
<?php
  }
?>

<!---End  Class-->

<!--- Date of Birth -->
<?php
  if($pdt->is_date_of_birth == 1){
  ?>
<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="date_of_birth" name="date_of_birth" value="1"> Date of Birth
</div>
</div>
<?php
  }
?>

<!---End  Date of Birth-->

<!--- Marital Status-->
<?php
  if($pdt->is_marital_status == 1){
  ?>
<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="marital_status" name="marital_status" value="1"> Marital Status
</div>
</div>
<?php
  }
?>

<!---End  Marital Status-->

<!--- Photo-->
<?php
  if($pdt->is_photo == 1){
  ?>
<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="photo" name="photo" value="1"> Photo
</div>
</div>
<?php
  }
?>

<!---End  Photo -->

<!--- Signature-->
<?php
  if($pdt->	is_signature == 1){
  ?>
<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="signature" name="signature" value="1"> Signature
</div>
</div>
<?php
  }
?>

<!---End  Signature-->

<!---Nationality-->
<?php
  if($pdt->is_nationality == 1){
  ?>
<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="nationality" name="nationality" value="1"> Nationality
</div>
</div>
<?php
  }
?>

<!---Nationality-->
<?php
  if($pdt->id_number == 1){
  ?>
<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="id_number" name="id_number" value="1"> ID NO
</div>
</div>
<?php
  }
?>

<!---Blood-->
<?php
  if($pdt->is_blood_group == 1){
  ?>
<div class="col-md-6">
  
<div class="form-group ">
<input type="checkbox" class="form-check-input" id="is_blood_group" name="is_blood_group" value="1"> Blood Group
</div>
</div>
<?php
  }
?>
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