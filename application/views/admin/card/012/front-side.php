<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ID Card design 001</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/card/012/css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
</head>
   <style>
    .card-design-break {
    float:left;
}
@media print {
  .card-design-break {
    page-break-inside: avoid;
    break-inside: avoid;
  }

  .page {
    page-break-after: always;
    break-after: page;
  }

  /* Optional: Clean layout for print */
  .main_container {
    width: 100%;
  }

  body {
    margin: 0;
    padding: 0;
  }
}

/* Center the main container on screen and print */
.main_container {
  width: 297 mm;
  margin: 0 auto;
}
 .print-container {
          
        }
/* Style the print button */
.print-button {
  margin: 20px auto;
  display: block;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;  display: flex;
}

/* Hide the print button when printing */
@media print {
  .print-button {
    display: none;
  }

  .main_container {
    margin: 0 auto;
    page-break-after: avoid;
  }

  .page {
    page-break-after: always;
    break-after: page;
  }

  .card-design-break {
    page-break-inside: avoid;
    break-inside: avoid;
  }
}
        </style>
<body id="bodyPart">
             <div class="print-container">
    <button onclick="window.print()" class="print-button"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-5h8v5zm3-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1-9H6v4h12V3z"/>
            </svg>Print</button>
            </div>
	<div class="main_container" id="data">
		<div id="">
                    <?php
$i=1;
if(isset($qr_images)){
    foreach($qr_images  as $qr){

       
            if (($i - 1) % 4 == 0) {
                echo '<div class="page">';
            }
        ?>
			<div class="front_part card-design-break">
					<section class="header_part">
						<div class="branding_part">
							<!-- <div class="logo_part">
								<img src="imgs/img_3_1.png" alt="" class="header_logo">
							</div> -->
							<div class="tagline_part">
								<h4 class="tagline"><?php echo $qr['org_name']; ?></h4>
								<p><?php echo $qr['website']; ?></p>
							</div>
						</div>
						<span class="user_logo">
							<img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>" alt="" class="user_img">
						</span>


						<span class="shape_1"></span>
					</section>
					<section class="body_part">
						<span class="shape_2"></span>
						<div class="user_title">
							<h3 class="title"><?php echo $qr['name']; ?></h3> 
							<h4 class="designation"><?php echo $qr['designation']; ?></h4> 
							<h5>ID : <?php echo $qr['employee_id']; ?></h3> 
					
						</div> 
					</section> 
					<section class="footer_part"> 

						<img src="<?php echo base_url($qr['qr_code_image']); ?>" alt="" class="bar_code">  
						<span class="ftr_shape"></span>
					</section> 
				</div>

	


                     <?php
 if ($i % 8 == 0 || $i == 12) {
                echo '</div>'; // close .page
            }
            $i++;
        }

    }
    ?>
		</div>
	
	</div>
	
</body>

</html>