<style>
.card-design {
  text-align: center;
  padding: 15px;
  transition: transform 0.3s ease;
  margin-bottom: 20px;
}

.card-design:hover {
  transform: translateY(-5px);
}

.card-design img {
  width: 100%;
  height: auto;
  max-height: 300px;
  object-fit: contain;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.card-design h5 {
  margin-top: 12px;
  font-size: 16px;
  color: #333;
  font-weight: 600;
}

.design-code {
  display: inline-block;
  background: #f5f5f5;
  padding: 4px 8px;
  border-radius: 4px;
  font-family: monospace;
  margin-top: 8px;
}
</style>

<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <h2 class="mb-4">Card Designs</h2>
        </div>
        
        <div class="card">
          <div class="card-body">
            <div class="row">
              <?php if(isset($allPdt)): ?>
                <?php foreach($allPdt as $pdt): ?>
                  <div class="col-md-4 col-sm-6 col-12 card-design">
                    <div class="design-card-inner">
                      <img src="<?php echo base_url()."public/static/assets/images/card_design/{$pdt->picture}"; ?>" 
                           alt="Design <?php echo $pdt->code; ?> - <?php echo $pdt->name; ?>">
                      <div class="design-code"><?php echo $pdt->code; ?></div>
                      <?php if(isset($pdt->name)): ?>
                        <h5><?php echo $pdt->name; ?></h5>
                      <?php endif; ?>
                    </div>
                  </div>
                <?php endforeach; ?>
              <?php else: ?>
                <div class="col-12 text-center py-5">
                  <p>No designs available</p>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>