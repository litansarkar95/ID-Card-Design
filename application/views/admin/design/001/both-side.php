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

.tagline_part {
    text-align: center;
    width: 100%;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

/* default বড় font */
.tagline_part .tagline {
    font-size: 18px;
    font-weight: bold;
    margin: 0;
    line-height: 1.2;
    white-space: normal; /* একাধিক লাইন allow */
}

/* যদি দুই লাইনে যায় তাহলে font ছোট হবে */
.tagline_part .tagline:has(br),
.tagline_part .tagline:has(span) {
    font-size: 20px;
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
if(isset($allPdt)){
    foreach($allPdt  as $qr){

       
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
							<h4 class="tagline fit-text"><?php echo $qr->org_name; ?></h4>
<p class="fit-text"><?php echo $qr->website; ?></p>
							</div>
						</div>
						<span class="user_logo">
							<img src="<?php echo base_url()."public/static/images/users/".$qr->photo; ?>" alt="" class="user_img">
						</span>


						<span class="shape_1"></span>
					</section>
					<section class="body_part">
						<span class="shape_2"></span>
						<div class="user_title">
							<h3 class="title"><?php echo $qr->name_en; ?></h3> 
							<h4 class="designation">Student</h4> 
							<h4 class="designation"><?php echo $qr->designation; ?></h4> 
							<h5>ID : <?php echo $qr->employee_id; ?></h3> 
					
						</div> 
					</section> 
					<section class="footer_part"> 

						<img src="<?php echo base_url($qr->qr_code_image); ?>" alt="" class="bar_code">  
						<span class="ftr_shape"></span>
					</section> 
				</div>

				<div class="back_part card-design-break">
					<section class="header_part3">
						<span class="header_shape3"></span>
					</section>
					<section class="body_part">
						<h3 class="bac_title"><?php echo $qr->terms_conditions_name; ?></h3>
						<p class="terms_3"><?php echo $qr->terms_conditions; ?></p>
						<h5>ID : <?php echo $qr->employee_id; ?></h3>
						<h4 class="valid_till">Valid Thru: <?php echo  $this->input->post('dob') ; ?></h4>
						<p class="signature"><?php echo $qr->name; ?></p>
						<span class="closing_txt"><?php echo $qr->name; ?></span>
					</section>
					<section class="footer_part">

						<div class="ftr_content">
							<div class="footer_left3">
								<table align="center">
									<tr>
										<td>
											<span class="social_part"><img src="<?php echo base_url(); ?>public/assets/card/012/imgs/img_3_6.png" alt=""></span> <span class="ftr_txt"><?php echo $qr->org_email; ?></span>
										</td>
									
									</tr>
									<tr>
									
										<td>
											<span class="social_part"><img src="<?php echo base_url(); ?>public/assets/card/012/imgs/img_3_9.png" alt=""></span> <span class="ftr_txt"><?php echo $qr->website; ?></span>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<span class="ftr_shape3"></span>
					</section>
					<!-- <section class="footer_part">

						<div class="ftr_content">
							<div class="footer_left3">
								<ul>
									<li><span class="social_part"><img src="imgs/img_3_6.png" alt=""></span> <span class="ftr_txt">demo@email.com</span></li>
									<li><span class="social_part"><img src="imgs/img_3_8.png" alt=""></span> <span class="ftr_txt">House, Road, Area</span></li>
								</ul>
							</div>
							<div class="footer_right3">
								<ul>
									<li><span class="social_part"><img src="imgs/img_3_7.png" alt=""></span> <span class="ftr_txt">000 - 000 - 0000</span></li>
									<li><span class="social_part"><img src="imgs/img_3_9.png" alt=""></span> <span class="ftr_txt">www.mysite.com</span></li>
								</ul>
							</div>
						</div>
						<span class="ftr_shape3"></span>
					</section> -->
				</div>


                     <?php
 if ($i % 4 == 0 || $i == 12) {
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/FitText.js/1.2.0/jquery.fittext.min.js"></script>
<script>
  $(".fit-text").fitText(1.2, {
    minFontSize: '14px',
    maxFontSize: '32px'
  });
</script>