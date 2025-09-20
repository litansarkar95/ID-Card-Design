
<style>
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

  </style>
<div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
        
          <div class="page-header flex-wrap">
              <div class="header-left">
            
              </div>
              <div class="header-right d-flex flex-wrap mt-md-2 mt-lg-0">
            
              </div>
            </div>
              <form method="post"  action="<?= base_url()."admin/users" ?>">

                <div class="row filter-row">

                <div class="col-sm-6 col-md-3">
            <span class="text-red small"><?php echo form_error('org_id'); ?></span>
            <div class="input-group time">
               <select class="form-control floating select2" name="org_id">
                              <option value="0">Select Company</option>
                                  <?php
                                     foreach($allOrg as $org){
                                        if($org_id == $org->id){
                                 echo "<option value='{$org->id}' selected>$org->name - $org->mobile_no </option>";
                                        }else{
                                     echo "<option value='{$org->id}'>$org->name - $org->mobile_no </option>";
                                        }
                                
                                                    }
                                                    ?>
                            </select>
                     </div>  
                    
                    </div>

                     <div class="col-sm-6 col-md-3">
            <span class="text-red small"><?php echo form_error('fields_id'); ?></span>
            <div class="input-group time">
               <select class="form-control floating select2" name="fields_id">
                              
                                <option value="0">Select Fields</option>
                                  <?php
                                     foreach($allOrgfields as $orgfiels){
                                        if($fields_id == $orgfiels->id){
                                       echo "<option value='{$orgfiels->id}' selected> $orgfiels->title</option>";
                                        }else{
                                      echo "<option value='{$orgfiels->id}'>$orgfiels->title</option>";
                                        }
                                  }
                                     ?>
                            </select>
                     </div>  
                    
                    </div>


                     <div class="col-sm-6 col-md-3">
            <span class="text-red small"><?php echo form_error('users_id'); ?></span>
            <div class="input-group time">
               <select class="form-control floating select2" name="users_id">
                              
                                <option value="0">Select Users</option>
                                  <?php
                                     foreach($allStu as $stu){
                                        if($users_id == $stu->id){
                                            echo "<option value='{$stu->id}' selected>$stu->registration_no - $stu->name_en </option>";
                                        }else{
                                            echo "<option value='{$stu->id}'>$stu->registration_no - $stu->name_en  </option>";
                                        }
                                
                                         }
                                        ?>
                            </select>
                     </div>  
                    
                    </div>

                     <div class="col-sm-6 col-md-3">
            <span class="text-red small"><?php echo form_error('blood_group'); ?></span>
            <div class="input-group time">
               <select class="form-control floating select2" name="blood_group">
                              
                                <option value="0">Select Blood Group</option>
                                <option value="A+" <?php if($blood_group == 'A+'){ echo "selected"; } ?>>A+</option>
                                <option value="A-" <?php if($blood_group == 'A-'){ echo "selected"; } ?> >A-</option>
                                <option value="O+"<?php if($blood_group == 'O+'){ echo "selected"; } ?> >O+</option>
                                <option value="B+" <?php if($blood_group == 'B+'){ echo "selected"; } ?> >B+</option>
                                <option value="B-" <?php if($blood_group == 'B-'){ echo "selected"; } ?> >B-</option>
                                <option value="AB+" <?php if($blood_group == 'AB+'){ echo "selected"; } ?> >AB+</option>
                                  
                            </select>
                     </div>  
                    
                    </div>

                     <div class="col-sm-6 col-md-3 mt-2">
            <span class="text-red small"><?php echo form_error('gender_id'); ?></span>
            <div class="input-group time">
               <select class="form-control floating select2" name="gender_id">
                              
                                <option value="0">Select Gender</option>
                                  <option value="Male" <?php if($gender_id == 'Male'){ echo "selected"; } ?> >Male</option>
                                <option value="Female" <?php if($gender_id == 'Female'){ echo "selected"; } ?> >Female</option>
                                    </select>
                            </div>  
                            
                            </div>

                            

                    
                
                    
                    
                    <div class="col-sm-6 col-md-3 mt-2">
                            <button type="submit" class="btn btn-success w-100">
                    <i class="fas fa-search"></i> Search
                </button>
                    
                    </div>
   

                </div>
        </form>
            <div class="row">
          
              <div class="col-md-12 grid-margin ">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ইউজার  তালিকা</h4>
                    <p class="card-description">
                    </p> 
                    <div class="table-responsive">
                    <table id="tableData" class="table table-bordered table-striped table-hover display " style="width:100%">
                        <thead>
                          <tr>
                          <th>সিরিয়াল</th>
                            <th>কোম্পানির নাম</th>
                            <th>আইডি</th>   
                       
                            <th>রেজিস্ট্রেশন নং </th>
                            <th>নাম </th>
                            <th>মোবাইল</th>
                            <th>ছবি</th>
                            <th>অ্যাকশন</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                                        $i=1;
                                        if(isset($allPdt)){
                                        foreach ($allPdt as $pdt){
                                        ?>
                          <tr>
                          <td><?php  echo $i; $i++;?></td>
                          <td><?php echo $pdt->org_name;?>  </td>
                          <td><?php echo $pdt->id;?>  </td>
                       
                          <td><?php echo $pdt->registration_no;?></td>
                          <td><?php echo $pdt->name_en ;?><span><?php echo $pdt->name_bn ;?></span></td>
                          <td><?php echo $pdt->mobile_no;?></td>
                          <td>
                          <?php 
                             
                             if($pdt->photo != NULL){
                             ?>
                          <img src="<?php echo base_url()."public/static/images/users/$pdt->photo"; ?>" width="80px" height="80px" alt="" class="img-circle">
                        <?php
                             }else{
                        ?>
                          <img src="<?php echo base_url()."public/static/images/agents/0.png"; ?>" width="80px" height="80px" alt="" class="img-circle">
                       
                        <?php
                             }
                        ?>
                              <!-- <a  class="btn btn-add btn-sm badge-primary text-white"  target="_blank"  href="<?php echo base_url()."admin/users/design/{$pdt->id}";?>"><i class=" mdi mdi-link "></i></a>
                                -->

                              <!-- <a  class="btn btn-add btn-sm badge-primary text-white"  target="_blank"  href="<?php echo base_url()."admin/card/custom/designchoose/{$pdt->id}?v={$pdt->org_fields_id}";?>"><i class=" mdi mdi-link "></i></a>
                             -->
                         
                            </td>
                    
                          <td>
                              <a  class="btn btn-add btn-sm badge-primary text-white"  href="<?php echo base_url()."admin/users/edit/{$pdt->id}?v={$pdt->org_fields_id}";?>"><i class="fa fa-pencil"></i></a>
                             <a class="btn btn-add btn-sm badge-danger text-white" 
                              href="<?php echo base_url()."admin/users/delete/{$pdt->id}";?>" 
                              onclick="return confirm('আপনি কি নিশ্চিতভাবে এটি ডিলিট করতে চান?');">
                              <i class="fa fa-trash-o"></i>
                            </a>

                            </td>
                          </tr>
                   
                          <?php
                                        }
                                       }
                                        ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
           
              </div>
         
            </div>
          </div>
     