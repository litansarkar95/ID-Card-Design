<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Smart ID Card Design </title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>3public/assets/card/006/css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
</head>
<style>
	* {
    margin: 0;
    padding: 0;
    overflow: 0;
}

body {
    background: transparent;
    font-family: arial;
}

.main_container {
    width: 8.27in;
    max-height: 11.69in;
    display: flex;
    flex-wrap: wrap;
}

#wrapper {
    width: 8.27in;
    max-height: 11.69in;
    display: flex;
    flex-wrap: wrap;
}

.front_part {
    background: transparent;
    width: 2.125in;
    height: 3.375in;
    margin: 10px;
    display: flex;
    flex-direction: column;
    overflow: hidden;
}

.front_part .header_part {
    background: transparent;
    text-align: center;
    height: 30px;
    max-height: 30px;
    position: relative;
    overflow: hidden;
}

.front_part .header_shape1 {
    position: absolute;
    height: 200px;
    width: 247px;
    border-radius: 50%;
    background: #008836;
    right: -46px;
    top: -180px;
}

.front_part .green_shape {
    position: absolute;
    height: 169px;
    width: 280px;
    border-radius: 50%;
    top: -193px;
    border-bottom: 26px solid #7ec51b;
    left: -50px;
    transform: rotate(51deg);
    z-index: 1;
}

.front_part .green_shape::after {
    content: "";
    position: absolute;
    background: #7ec51b;
    z-index: 1;
    height: 200px;
    width: 315px;
    border-radius: 50%;
    bottom: -89px;
    left: -86px;
    transform: rotate(-16deg);
}

.front_part .white_line {
    position: absolute;
    height: 189px;
    width: 193px;
    border-radius: 50%;
    background: #008836;
    right: -46px;
    top: -180px;
    border: 8px solid #fff;
    z-index: 99;
}

.front_part .orange_shape {
    position: absolute;
    background: #fff;
    height: 200px;
    width: 319px;
    border-top: 49px solid #ff8000;
    left: -103px;
    top: -32px;
    border-radius: 50%;
    transform: rotate(0deg);
}

.front_part .orange_shape::after {
    content: "";
    position: absolute;
    background: #fff;
    height: 150px;
    width: 177px;
    left: 219px;
    top: -78px;
}

.front_part .body_part {
    background: transparent;
    padding: 0 20px 20px;
    height: 264px;
    box-sizing: border-box;
    text-align: center;
}

.front_part .brand_logo {
    width: 60px;
    margin-top: 5px;
}

.front_part .tagline {
    text-transform: uppercase;
    font-size: 11px;
    text-align: center;
}

.front_part .user_logo {
    display: inline-block;
    width: 80px;
    height: 80px;
    background: #fff;
    border-radius: 20px;
    border: 2px solid #008836;
    overflow: hidden;
    position: relative;
    margin-top: 10px;
}

.front_part .user_img {
    width: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    top: 0;
    height: 100%;
}

.front_part .body_part .title {
    text-align: center;
    color: #fa8b31;
    font-size: 14px;
    text-transform: capitalize;
    margin-top: 5px;
}

.front_part .body_part .title span {
    color: #1d7f34;
}
.employee-info {
    display: flex;
    gap: 1px; 
    flex-wrap: wrap; 
}
.front_part .body_part .designation {
     color: #008836;
    font-size: 12px;
    line-height: 1.4; 
    text-transform: capitalize;
    text-align: left;
    margin: 2px 0; 
    font-weight: normal; 
}

.front_part .user_info {
    font-family: "Roboto", sans-serif;
    border: none;
    font-size: 12px;
    margin: 0 auto;
    margin-top: 10px;
    text-align: left;
    font-weight: bold;
}

.front_part .user_info td:first-child {
    text-transform: capitalize;
    color: #1d7f34;
   
}

.front_part .user_info tr:first-child td:first-child {
    text-transform: capitalize;
}

.front_part .footer_part {
    height: 30px;
}

.footer_inner {
    background: #fff;
    text-align: center;
    height: 30px;
    max-height: 30px;
    position: relative;
    overflow: hidden;
    transform: rotate(180deg);
}

.front_part .footer_inner .header_shape1 {
    position: absolute;
    height: 200px;
    width: 247px;
    border-radius: 50%;
    background: #008836;
    right: -46px;
    top: -180px;
}

.front_part .footer_inner .green_shape {
    position: absolute;
    height: 169px;
    width: 280px;
    border-radius: 50%;
    top: -193px;
    border-bottom: 26px solid #7ec51b;
    left: -50px;
    transform: rotate(51deg);
    z-index: 1;
}

.front_part .footer_inner .green_shape::after {
    content: "";
    position: absolute;
    background: #7ec51b;
    z-index: 1;
    height: 200px;
    width: 315px;
    border-radius: 50%;
    bottom: -89px;
    left: -86px;
    transform: rotate(-16deg);
}

.front_part .footer_inner .white_line {
    position: absolute;
    height: 189px;
    width: 193px;
    border-radius: 50%;
    background: #008836;
    right: -46px;
    top: -180px;
    border: 8px solid #fff;
    z-index: 99;
}

.front_part .footer_inner .orange_shape {
    position: absolute;
    background: #fff;
    height: 200px;
    width: 319px;
    border-top: 49px solid #ff8000;
    left: -103px;
    top: -32px;
    border-radius: 50%;
    transform: rotate(0deg);
}

.front_part .footer_inner .orange_shape::after {
    content: "";
    position: absolute;
    background: #fff;
    height: 150px;
    width: 177px;
    left: 219px;
    top: -78px;
}






.back_part {
    background: transparent;
    width: 2.125in;
    height: 3.375in;
    margin: 10px;
    display: flex;
    flex-direction: column;
    overflow: hidden;
}

.back_part .header_part {
    background: transparent;
    text-align: center;
    height: 30px;
    max-height: 30px;
    position: relative;
    overflow: hidden;
}

.back_part .header_shape1 {
    position: absolute;
    height: 200px;
    width: 247px;
    border-radius: 50%;
    background: #008836;
    right: -46px;
    top: -180px;
}

.back_part .green_shape {
    position: absolute;
    height: 169px;
    width: 280px;
    border-radius: 50%;
    top: -193px;
    border-bottom: 26px solid #7ec51b;
    left: -50px;
    transform: rotate(51deg);
    z-index: 1;
}

.back_part .green_shape::after {
    content: "";
    position: absolute;
    background: #7ec51b;
    z-index: 1;
    height: 200px;
    width: 315px;
    border-radius: 50%;
    bottom: -89px;
    left: -86px;
    transform: rotate(-16deg);
}

.back_part .white_line {
    position: absolute;
    height: 189px;
    width: 193px;
    border-radius: 50%;
    background: #008836;
    right: -46px;
    top: -180px;
    border: 8px solid #fff;
    z-index: 99;
}

.back_part .orange_shape {
    position: absolute;
    background: #fff;
    height: 200px;
    width: 319px;
    border-top: 49px solid #ff8000;
    left: -103px;
    top: -32px;
    border-radius: 50%;
    transform: rotate(0deg);
}

.back_part .orange_shape::after {
    content: "";
    position: absolute;
    background: #fff;
    height: 150px;
    width: 177px;
    left: 219px;
    top: -78px;
}

.back_part .body_part {
    background: transparent;
    padding: 0 20px 20px;
    height: 264px;
    box-sizing: border-box;
    text-align: center;
    position: relative;
}
.back_part .body_part .designation {
     color: #000;
    font-size: 11px;
    line-height: 1.4; 
    text-transform: capitalize;
    text-align: left;
    font-weight: normal; 
}
.back_part .brand_logo {
    width: 60px;
    margin-top: 5px;
    filter: grayscale(100%);
}
.back_part .bac_title {
    text-align: center;
    font-size: 12px;
    margin: 10px 0px;
	 font-weight:bold;
	 color: #727272;
}
.back_part .terms_3 {
    margin-top: 10px;
    font-size: 9px;
    text-align: center;
    color: #727272;
}
.back_part .tagline {
    text-transform: uppercase;
    font-size: 8px;
    text-align: center;
}

.back_part .header_logo {
    filter: grayscale(100%);
}

.back_part .user_info2 {
    border: none;
    font-size: 12px;
    margin: 0 auto;
    margin-top: 30px;
    text-align: left;
    font-weight: normal;
    text-transform: capitalize;
}

.back_part .user_info2 tr:nth-child(4) p {
    margin-top: 20px;
}

.back_part .user_info2 tr:nth-child(4) td:first-child {
    color: #1d7f34;
}

.back_part .user_info2 tr:nth-child(5) td:first-child {
    color: #1d7f34;
}

.back_part .user_info2 tr:nth-child(4) td:nth-child(2) {
    color: #8c8c8c;
}

.back_part .user_info2 tr:nth-child(5) td:nth-child(2) {
    color: #8c8c8c;
}

.back_part .closing_txt {
    position: absolute;
    bottom: 10px;
    z-index: 9999;
    right: 30px;
    display: inline-block;
    font-size: 13px;
}

.back_part .closing_txt::after {
    content: "";
    height: 2px;
    background: #000;
    left: -5px;
    right: -5px;
    position: absolute;
}

.printBtn {
    padding: 10px 30px;
    font-size: 20px;
    background: #a4c735;
    color: #fff;
    margin: 10px;
    border: none;
    border-radius: 10px;
}
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
  signature.{
    font-size:13px;
  }
  </style>
<?php
// Sample dummy data - future use: fetch from DB
$dummyData = [
    'name_en' => 'Md Litan Sarkar',
    'father_name_en' => 'Mr. Karim',
    'father_mobile_no' => '017XXXXXXXX',
    'mother_name_en' => 'Mrs. Rahima',
    'mobile_no' => '018XXXXXXXX',
    'designation' => 'Deputy Director',
    'present_address_en' => 'Dhaka, Bangladesh',
    'permanent_address_en' => 'Dhaka, Bangladesh',
    'department' => 'Science',
    'class' => '10',
    'class_roll' => '23',
    'sessions' => '2024-25',
    'date_of_birth' => '1996-11-14',
    'blood_group' => 'A+',
    'id_number' => '1028272',
    'expiry_date' => '13-09-2027',
    'terms_&_conditions' => 'This card must be carried at all times.If found, please return to Institution '
    
];
?>
<?php
$terms_conditions_name = "ID Card ব্যবহারের নিয়মাবলী";
$terms_conditions = "This card must be carried at all times If found, please return to Institution";
$signature_name = "Md. Litan Sarkar";
?>
<?php

function clean_label($fieldKey) {
    $label = str_replace("_", " ", $fieldKey);

    $label = preg_replace('/\s(en|bn)$/i', '', $label);
    return ucwords($label);
}
?>
<body id="bodyPart">
            
	<div class="main_container" id="data">
		<div id="">


			<div class="front_part card-design-break">
					<section class="header_part">
						<span class="header_shape1">
						</span>
						<span class="green_shape"></span>
						<span class="white_line"></span>
						<span class="orange_shape"></span>
					</section>
					<section class="body_part">
						<!-- <img src="<?php echo base_url()."public/static/images/organization/".$pdt->picture; ?>" alt="" class="brand_logo"> -->
						<h4 class="tagline" style="font-size: 10px;">Debidwar Sujat Ali Govt. College</h4>
						<span class="user_logo">
							<img src="<?php echo base_url()."public/static/assets/images/profile_design.png"; ?>" alt="" class="user_img">
						</span>
						<h3 class="title">	Md. Litan Sarkar</h3>
						<div class="employee-info">

          
						

                         	<table class="user_info">

                            <?php if (!empty($fields)) : ?>
                <?php foreach (array_slice($fields, 0, 4) as $fieldKey): ?>
                    <h4 class="designation">
                        <?php echo clean_label($fieldKey); ?>:
                        <?php echo isset($dummyData[$fieldKey]) ? $dummyData[$fieldKey] : '[No Data]'; ?>
                    </h4>
                <?php endforeach; ?>
                <?php else: ?>
                    <em>⚠️ কোনো ফিল্ড সিলেক্ট করা হয়নি।</em>
                <?php endif; ?>
         
						
                       
					</table>
						</div>
						
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
						<img src="<?php echo base_url()."public/static/images/organization/".$pdt->org_picture; ?>" alt="" class="brand_logo">
						<h4 class="tagline"><?php echo $pdt->org_name; ?></h4>
						 <!--- Start Father's Name -->
                           <?php if (!empty($fields)) : ?>
                <?php foreach (array_slice($fields, 4, 9) as $fieldKey): ?>


                    <?php
                if($fieldKey == "terms_&_conditions"){
                    echo '<h3 class="bac_title">'.$terms_conditions_name.'</h3>';
                    echo '<p class="terms_3">'.$terms_conditions.'</p>';
                  } else if($fieldKey == "signature_name"){
                    echo '<h3 class="signature">'.$signature_name.'</h3>';
                    ?>
                    	<span class="closing_txt"><?php echo $signature_name; ?></span>
                    <?php
                  
                  } else{
                ?>
                    <h4 class="designation">
                        <?php echo clean_label($fieldKey); ?>:
                        <?php echo  $dummyData[$fieldKey]; ?>

                        
                    </h4>
                    <?php
                  }
                    ?>
                <?php endforeach; ?>
                <?php else: ?>
                    <em>⚠️ কোনো ফিল্ড সিলেক্ট করা হয়নি।</em>
                <?php endif; ?>

            <!-- <h4 class="designation" style="margin-top:10px;">Expiry Date : <?php echo date("d-m-Y"); ?></h4> -->
                            <!--- End Expiry Date -->

					        <?php
                            if($qr->signature_name != NULL){
                            ?>
						<p class="signature"><?php echo $qr->signature_name; ?></p>
						<span class="closing_txt"><?php echo base_url()."public/static/images/users/".$qr->signature_picture; ?></span>
                        <?php
                            }else{

                                if($permanent_address_en != NULL){
                                
                                if($permanent_address_en == 1){ 
                        ?>
                             <p class="address"><?php echo $qr->permanent_address_en; ?></p>
						
                        <?php
                                }
                            }else{
                                ?>
                                <?php
                                 if($village_en == 1){ 
                                    ?>
                                <p class="address">Village :<?php echo $qr->village_en; ?> , Post Office :<?php echo $qr->post_office_en; ?> , Upazila :<?php echo $qr->upazila_en; ?> , Zilla :<?php echo $qr->zilla_en; ?></p>
                                <?php
                                 }else if($village_bn == 1){ 
                                 ?>
                                 <p class="address">গ্রাম : <?php echo $qr->village_bn; ?> , পোস্ট অফিস :<?php echo $qr->post_office_en; ?> , উপজেলা :<?php echo $qr->upazila_en; ?> , জেলা :<?php echo $qr->zilla_en; ?></p>

                                 <?php
                                 }
                                 ?>

                                <?php
                            }
                            }
                        ?>
						
					
							
					




                            <!--- End Mother Name -->
			
					

					
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
		
		
		</div>
	
	</div>
	
</body>

</html>