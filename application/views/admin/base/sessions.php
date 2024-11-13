
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

.form-group ,option ,.select2-selection{
    font-family: "Oswald", serif;
  font-weight: 500;
  font-size:18px;



}
  </style>
<div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Sessions</h3>
              <nav aria-label="breadcrumb">
              
              </nav>
            </div>
            <div class="row">

            <?php
            if(isset($_GET['edit'])){
                foreach($allPdt as $val){
                    if($val->id == $_GET['edit']){
                
?>
 <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Sessions Create</h4>
             
                    <form class="forms-sample"  action="<?php echo base_url(); ?>admin/base/sessions/update" method="post" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" id="id" value="<?php echo $val->id; ?>" name="id"   />
                    <div class="form-group">
                        <label for="eorganization_name">Organization Name<code>*</code></label>
                        <select type="text" class="form-control select2" id="eorganization_name"  name="eorganization_name"   >
                      <option value="">Select</option>   
                      <?php
                                        foreach ($allCat as $cat){
                                            if($cat->id ==  $val->organization_id){
                                                echo "<option value='{$cat->id}' selected>{$cat->name} - {$cat->mobile_no}</option>";
                                            }else{
                                                echo "<option value='{$cat->id}'>{$cat->name} - {$cat->mobile_no}</option>";
                                            }
                                     
                                        }
                                    ?>
                       
                      </select> 
                        <span class="text-red small"><?php echo form_error('eorganization_name'); ?></span>
                    </div>
                       
                      <!-- END FORM -->
                    <div class="form-group">
                        <label for="eclass_id">Sessions Name<code>*</code></label>
                        <input type="text" class="form-control" id="eclass_id" value="<?php echo $val->name; ?>" name="eclass_id"   />
                        <span class="text-red small"><?php echo form_error('eclass_id'); ?></span>
                    </div>

                    <div class="form-group">
                        <label for="is_active">Is Active<code>*</code></label>
                        <select type="text" class="form-control select2" id="is_active"  name="is_active"   >
                      <option value="">Select</option>   
                      <option value="1" <?php if($val->is_active == 1) { echo "selected"; }?>>Active</option>   
                      <option value="0" <?php if($val->is_active == 0) { echo "selected"; }?>>Inactive</option>   
                    
                       
                      </select> 
                        <span class="text-red small"><?php echo form_error('is_active'); ?></span>
                    </div>
                   
                      <button type="submit" class="btn btn-primary me-2"> Update </button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
<?php
                    }
                }
            }else{
            ?>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Sessions Create</h4>
             
                    <form class="forms-sample"  action="<?php echo base_url(); ?>admin/base/sessions" method="post" enctype="multipart/form-data">
             
                    <div class="form-group">
                        <label for="organization_name">Organization Name<code>*</code></label>
                        <select type="text" class="form-control select2" id="organization_name" value="<?php echo set_value('organization_name'); ?>" name="organization_name"   >
                      <option value="">Select</option>   
                      <?php
                                        foreach ($allCat as $cat){
                                      echo "<option value='{$cat->id}'>{$cat->name} - {$cat->mobile_no}</option>";
                                        }
                                    ?>
                       
                      </select> 
                        <span class="text-red small"><?php echo form_error('organization_name'); ?></span>
                    </div>
                       
                      <!-- END FORM -->
                    <div class="form-group">
                        <label for="class_id">Sessions Name<code>*</code></label>
                        <input type="text" class="form-control" id="class_id" value="<?php echo set_value('class_id'); ?>" name="class_id"   />
                        <span class="text-red small"><?php echo form_error('class_id'); ?></span>
                    </div>
                   
                      <button type="submit" class="btn btn-primary me-2"> Submit </button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              <?php
            }
              ?>
              <div class="col-md-8 grid-margin ">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Sessions  List</h4>
                    <p class="card-description">
                    </p>
                    <div class="table-responsive">
                    <table id="tableData" class="table table-bordered table-striped table-hover display " style="width:100%">
                        <thead>
                          <tr>
                            <th>SL</th>
                            <th>Org Name</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
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
                          <td><?php echo $pdt->org_name;?></td>
                          <td><?php echo $pdt->name;?></td>
                          <td>
<?php
if($pdt->is_active == 1){
    echo "Active";
}else{
    echo "Inactive";
}
?>

                          </td>
                          <td>
                              <a  class="btn btn-add btn-sm badge-primary text-white"  href="<?php echo base_url()."admin/base/sessions?edit={$pdt->id}";?>"><i class="fa fa-pencil"></i></a>
                              <a  class="btn btn-add btn-sm badge-danger text-white"  href="<?php echo base_url()."admin/base/sessions/delete/{$pdt->id}";?>"><i class="fa fa-trash-o"></i></a>
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
          <!-- content-wrapper ends -->
     