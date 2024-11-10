
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
            <div class="row">
          
              <div class="col-md-12 grid-margin ">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Users  List</h4>
                    <p class="card-description">
                    </p> 
                    <div class="table-responsive">
                    <table id="tableData" class="table table-bordered table-striped table-hover display " style="width:100%">
                        <thead>
                          <tr>
                            <th>SL</th>
                            <th>Org Name</th>
                            <th>Registration No </th>
                            <th>Name </th>
                            <th>Mobile</th>
                            <th>ID CARD</th>
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
                          <td><?php echo $pdt->org_name;?>
                        <p>Mob ::<?php echo $pdt->org_mobile_no;?></P>
                        </td>
                          <td><?php echo $pdt->registration_no;?></td>
                          <td><?php echo $pdt->name_en;?></td>
                          <td><?php echo $pdt->mobile_no;?></td>
                          <td>

                              <!-- <a  class="btn btn-add btn-sm badge-primary text-white"  target="_blank"  href="<?php echo base_url()."admin/users/design/{$pdt->id}";?>"><i class=" mdi mdi-link "></i></a>
                                -->

                              <!-- <a  class="btn btn-add btn-sm badge-primary text-white"  target="_blank"  href="<?php echo base_url()."admin/card/custom/designchoose/{$pdt->id}?v={$pdt->org_fields_id}";?>"><i class=" mdi mdi-link "></i></a>
                             -->
                         
                            </td>
                    
                          <td>
                              <a  class="btn btn-add btn-sm badge-primary text-white"  href="<?php echo base_url()."admin/users/edit/{$pdt->id}";?>"><i class="fa fa-pencil"></i></a>
                              <a  class="btn btn-add btn-sm badge-danger text-white"  href="<?php echo base_url()."admin/users/delete/{$pdt->id}";?>"><i class="fa fa-trash-o"></i></a>
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
     