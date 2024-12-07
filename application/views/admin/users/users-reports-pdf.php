
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="images/favicon.png" rel="icon" />
<title>General Invoice -4 - Koice</title>
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
======================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
======================= -->
    <!-- Bootstrap -->

        <?php foreach ($css as $css_file): ?>
                    <link rel="stylesheet" href="<?php echo $css_file; ?>" type="text/css" />
                <?php endforeach; ?>
</head>
<body>
    <style>

        </style>
<!-- Container -->
<div class="container-fluid invoice-container">
  <!-- Main Content -->
  <main>
	  <div class="table-responsive">
		<table class="table table-bordered border border-secondary mb-0">
			<tbody>
                <?php
                if(isset($allCat)){
                    foreach($allCat as $cat){
                
                ?>
				<tr>
				  <td colspan="2" class="bg-light text-center"><h3 class="mb-0"><?php  echo $cat->name; ?></h3></td>
				</tr>
				<tr>
				  <td colspan="2" class="text-center text-uppercase"><?php  echo $cat->mobile_no; ?><br><?php  echo $cat->address; ?>.</td>
				</tr>
                <?php
                    }
                }
                ?>
				<tr>
				  <td colspan="2" class="py-1">
					<div class="row">
						<div class="col"></div>
						<div class="col text-center fw-600 text-3 text-uppercase">Invoice</div>
						<div class="col text-end"></div>
					</div>
				  </td>
				</tr>
				
				<tr>
					<td colspan="2" class="p-0">
						<table class="table table-sm mb-0">
							<thead>
							  <tr class="bg-light">
								<td class="col-1 text-center"><strong>SrNo</strong></td>
								<td class="col-2 "><strong> Name</strong></td>
								<td class="col-2 text-center"><strong>Mobile</strong></td>
								<td class="col-2 text-end"><strong>Email</strong></td>
								<td class="col-2 text-end"><strong>Amount</strong></td>
                                <td class="col-3 text-end"><strong>Picture</strong></td>
							  </tr>
							</thead>
							<tbody>
                                <?php
                                $i=1;
                                if(isset($allPdt)){
                                    foreach($allPdt as $pdt){
                                
                                ?>
								<tr>
								  <td class="col-1 text-center"><?php echo $i; $i++;?></td>
								  <td class="col-6">STYLE KERATIN SH. 250ML</td>
								  <td class="col-1 text-center">3</td>
								  <td class="col-2 text-end">$25.75</td>
								  <td class="col-2 text-end">$77.25</td>
								</tr>
                                <?php
                                    }
                                }
                                ?>
							</tbody>
						</table>
					</td>
				</tr>
			
			
				<tr>
					<td class="col-7 text-1">Note :</td>
					<td class="col-5 pe-1 bg-light fw-600">
						Grand Total:<span class="float-end">285.55</span>
					</td>
				</tr>
			
			</tbody>
		</table>
		</div>
  </main>
  <footer class="text-center mt-4">
	<div class="btn-group btn-group-sm d-print-none"> <a href="javascript:window.print()" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Print & Download</a> </div>
  </footer>
</div>
</body>
</html>