
<style>

.card-design{
  text-align:center;
  padding:10px;
}

.card-design img{
  width:250px;
  height:300px;
}
  </style>
<div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
           
            <div class="row">

            <div class="col-md-12 grid-margin stretch-card">
<h2>Card Design</h2>
</div>
             
                <div class="card">
                  <div class="card-body">
                    <div class="row">

               <?php
               if(isset($allPdt)){
                foreach($allPdt as $pdt){
               
               ?>
                  <div class="col-md-4 card-design">
				  <img src="<?php echo base_url()."public/static/assets/images/card_design/{$pdt->picture}"; ?>"  alt="<?php echo $pdt->name; ?>">
          <h5>CODE ::   <?php echo $pdt->code; ?></h5>
               
                  </div>

                  <?php
                }
              }
                  ?>

               
                  </div>
                </div>
              </div>
         
         
            </div>
          </div>
          <!-- content-wrapper ends -->
     