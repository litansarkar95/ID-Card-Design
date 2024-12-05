
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
                    <h4 class="card-title">কোম্পানি  ফর্ম তালিকা</h4>
                    <p class="card-description">
                    </p> 
                    <div class="table-responsive">
                    <table id="tableData" class="table table-bordered table-striped table-hover display " style="width:100%">
                        <thead>
                          <tr>
                          <th>সিরিয়াল</th>
                          <th>কোম্পানি নাম</th>
                            <th>কোড</th>
                       
                            <th>ফর্ম শিরোনাম</th>
                            <th>মোট ফর্ম জমা দিছে</th>
                            <th>ইউজার দেখুন</th>
                            <th>তারিখ </th>
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
                          <td><?php echo $pdt->code_no;?>  </td>
                       
                          <td><?php echo $pdt->title;?></td>
                          <td><?php echo $pdt->total;?></td>
                          <td> <a  class="btn btn-add btn-sm badge-primary text-white"  href="<?php echo base_url()."admin/organization/userview/{$pdt->id}?v={$pdt->code_no}";?>"><i class="fa fa-eye"></i></a></td>
                          <td><?php echo date("d-m-Y",$pdt->create_date);?></td>
                    
                          <td>
                              <a  class="btn btn-add btn-sm badge-primary text-white"  href="<?php echo base_url()."admin/customfields/edit/{$pdt->id}?v={$pdt->code_no}";?>"><i class="fa fa-pencil"></i></a>
                              <a  class="btn btn-add btn-sm badge-danger text-white"  href="<?php echo base_url()."admin/customfields/delete/{$pdt->id}";?>"><i class="fa fa-trash-o"></i></a>
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
     