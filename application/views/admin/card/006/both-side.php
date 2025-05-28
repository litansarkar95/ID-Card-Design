<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ID Card design 001</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/card/006/css/style.css">
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
						<span class="header_shape1">
						</span>
						<span class="green_shape"></span>
						<span class="white_line"></span>
						<span class="orange_shape"></span>
					</section>
					<section class="body_part">
						<!-- <img src="<?php echo base_url()."public/static/images/organization/".$qr['picture']; ?>" alt="" class="brand_logo"> -->
						<h4 class="tagline"><?php echo $qr['org_name']; ?></h4>
						<span class="user_logo">
							<img src="<?php echo base_url()."public/static/images/users/".$qr['photo']; ?>" alt="" class="user_img">
						</span>
						<h3 class="title"><?php echo $qr['name']; ?></h3>
						<h4 class="designation"><?php echo $qr['designation']; ?></h4>
						<table class="user_info">
							<tr>
								<td class="left_col">
									<p>emp id</p>
								</td>
								<td class="right_col">
									<p>: <?php echo $qr['employee_id']; ?></p>
								</td>
							</tr>
							<tr>
								<td>
									<p>blood</p>
								</td>
								<td>
									<p>: <?php echo $qr['blood_group']; ?></p>
								</td>
							</tr>
							<tr>
								<td>
									<p>mail</p>
								</td>
								<td>
									<p>: <?php echo $qr['email']; ?></p>
								</td>
							</tr>
							<tr>
								<td>
									<p>phone</p>
								</td>
								<td>
									<p>: <?php echo $qr['phone']; ?></p>
								</td>
							</tr>
						</table>
					</section>
					<section class="footer_part">
						<div class="footer_inner">
							<span class="header_shape1">
							</span>
							<span class="green_shape"></span>
							<span class="white_line"></span>
							<span class="orange_shape"></span>
						</div>
					</section>
				</div>
				<div class="back_part card-design-break">
					<section class="header_part">
						<span class="header_shape1">
						</span>
						<span class="green_shape"></span>
						<span class="white_line"></span>
						<span class="orange_shape"></span>
					</section>
					<section class="body_part">
						<img src="<?php echo base_url()."public/static/images/organization/".$qr['picture']; ?>" alt="" class="brand_logo">
						<h4 class="tagline"><?php echo $qr['org_name']; ?></h4>
						<table class="user_info2">
							<tr>
								<td class="left_col">
									<p>Address </p>
								</td>
								<td class="right_col">
									<p>: <?php echo $qr['org_address']; ?></p>
								</td>
							</tr>
							<tr>
								<td>
									<p>E-mail </p>
								</td>
								<td>
									<p>: <?php echo $qr['org_email']; ?></p>
								</td>
							</tr>
							<tr>
								<td>
									<p>contact </p>
								</td>
								<td>
									<p>: <?php echo $qr['org_mobile_no']; ?></p>
								</td>
							</tr>
							<tr>
								<td>
									<p>joined date</p>
								</td>
								<td>
									<p>:  <?php echo  date("d-m-Y") ; ?></p>
								</td>
							</tr>
							<tr>
								<td>
									<p>expire date</p>
								</td>
								<td>
									<p>: <?php echo  $this->input->post('dob') ; ?></p>
								</td>
							</tr>
						</table>
						<span class="closing_txt">Your sincerely</span>
					</section>
					<section class="footer_part">
						<div class="footer_inner">
							<span class="header_shape1">
							</span>
							<span class="green_shape"></span>
							<span class="white_line"></span>
							<span class="orange_shape"></span>
						</div>
					</section>
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