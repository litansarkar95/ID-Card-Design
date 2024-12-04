
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
              <h3 class="page-title">কোম্পানি</h3>
              <nav aria-label="breadcrumb">
              
              </nav>
            </div>
            <div class="row">

          
              <div class="col-md-12 grid-margin ">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">কোম্পানি তালিকা</h4>
                    <p class="card-description">
                    </p>
                    <div class="table-responsive">
                    <table id="tableData" class="table table-bordered table-striped table-hover display " style="width:100%">
                        <thead>
                          <tr>
                            <th>সিরিয়াল</th>
                            <th>কোম্পানি নাম</th>
                            <th>মোবাইল নম্বর (ব্যবহারকারীর নাম) </th>
                            <th>ইমেইল</th>
                            <th>লোগো</th>
                            <th>স্বাক্ষর নাম</th>
                            <th>স্বাক্ষর</th>
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
                          <td><?php echo $pdt->name;?></td>
                          <td><?php echo $pdt->mobile_no;?></td>
                          <td><?php echo $pdt->email;?></td>
                          <td>
                          <?php 
                             
                             if($pdt->picture != NULL){
                             ?>
                          <img src="<?php echo base_url()."public/static/images/organization/$pdt->picture"; ?>" width="80px" height="80px" alt="" class="img-circle">
                        <?php
                             }else{
                        ?>
                          <img src="<?php echo base_url()."public/static/images/organization/0.png"; ?>" width="80px" height="80px" alt="" class="img-circle">
                       
                        <?php
                             }
                        ?>
                          
                            </td>
                            <td><?php echo $pdt->signature;?></td>
                           <td>
                          <?php 
                             
                             if($pdt->signature_picture != NULL){
                             ?>
                          <img src="<?php echo base_url()."public/static/images/organization/$pdt->signature_picture"; ?>" width="80px" height="80px" alt="" class="img-circle">
                        <?php
                             }else{
                        ?>
                          <img src="<?php echo base_url()."public/static/images/organization/0.png"; ?>" width="80px" height="80px" alt="" class="img-circle">
                       
                        <?php
                             }
                        ?>
                          
                           <td>
                         
                              <a  class="btn btn-add btn-sm badge-primary text-white"  href="<?php echo base_url()."admin/organization?edit={$pdt->id}";?>"><i class="fa fa-pencil"></i></a>
                              <a  class="btn btn-add btn-sm badge-danger text-white"  href="<?php echo base_url()."admin/organization/delete/{$pdt->id}";?>"><i class="fa fa-trash-o"></i></a>
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
     