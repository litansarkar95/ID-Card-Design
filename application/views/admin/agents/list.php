 
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
            
            </div>
            <div class="row">
          
              <div class="col-md-12 grid-margin ">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Agent List</h4>
                    <p class="card-description">
                    </p> 
                    <div class="table-responsive">
                    <table id="tableData" class="table table-bordered table-striped table-hover display " style="width:100%">
                        <thead>
                          <tr>
                            <th>SL</th>
                            <th> Name</th>
                            <th>Mobile </th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Picture</th>
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
                          <td><?php echo $pdt->name;?>   </td>
                          <td><?php echo $pdt->mobile_no;?></td>
                          <td><?php echo $pdt->email;?></td>
                          <td><?php echo $pdt->address;?></td>
                          <td>
                             <?php 
                             
                             if($pdt->picture != NULL){
                             ?>
                          <img src="<?php echo base_url()."public/static/images/agent/$pdt->picture"; ?>" width="80px" height="80px" alt="" class="img-circle">
                        <?php
                             }else{
                        ?>
                          <img src="<?php echo base_url()."public/static/images/agent/0.png"; ?>" width="80px" height="80px" alt="" class="img-circle">
                       
                        <?php
                             }
                        ?>
                        </td>
                    
                          <td>
                              <a  class="btn btn-add btn-sm badge-primary text-white"  href="<?php echo base_url()."admin/agents/edit/{$pdt->id}";?>"><i class="fa fa-pencil"></i></a>
                              <a  class="btn btn-add btn-sm badge-danger text-white"  href="<?php echo base_url()."admin/agents/delete/{$pdt->id}";?>"><i class="fa fa-trash-o"></i></a>
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
          
          <script>
    function copyLink(ID) {
      const linkInput = document.getElementById('linkToCopy'+ID);

// Copy the text inside the input
navigator.clipboard.writeText(linkInput.value).then(() => {
    // Show success message
   
}).catch(err => {
    // Show error message
  
});
    }
</script>


