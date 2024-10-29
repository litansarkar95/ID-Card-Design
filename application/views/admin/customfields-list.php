
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
                <div class="d-flex align-items-center">
                  <a href="#">
                    <p class="m-0 pe-3">Custom Fields List</p>
                  </a>
                  <a class="ps-3 me-4" href="#">
                
                  </a>
                </div>
                <a href="<?php echo base_url(); ?>admin/customfields" type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                  <i class="mdi mdi-plus-circle"></i> Custom Fields Create</a>
              </div>
            </div>
            <div class="row">
          
              <div class="col-md-12 grid-margin ">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Custom Fields List</h4>
                    <p class="card-description">
                    </p> 
                    <div class="table-responsive">
                    <table id="tableData" class="table table-bordered table-striped table-hover display " style="width:100%">
                        <thead>
                          <tr>
                            <th>SL</th>
                            <th>Org Name</th>
                            <th>Title </th>
                            <th>URL</th>
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
                          <td><?php echo $pdt->title;?></td>
                          <td>
                          <input type="hidden" id="linkToCopy<?php echo $pdt->id ?>" value="<?php echo base_url()."userform/{$pdt->org_slug}?v={$pdt->id}";?>" readonly class="form-control">
                              <a  class="btn btn-add btn-sm badge-primary text-white"  target="_blank"  href="<?php echo base_url()."userform/{$pdt->org_slug}?v={$pdt->id}";?>"><i class=" mdi mdi-link "></i></a>
                              <button  onclick="copyLink(<?php echo $pdt->id;?>)" title="Copy" class="btn btn-add btn-sm badge-danger text-white"  ><i class=" mdi mdi-content-copy"></i></button>
                            </td>
                    
                          <td>
                              <a  class="btn btn-add btn-sm badge-primary text-white"  href="<?php echo base_url()."admin/organization/edit/{$pdt->id}";?>"><i class="fa fa-pencil"></i></a>
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