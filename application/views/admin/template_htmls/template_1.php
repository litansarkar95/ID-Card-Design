<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ID Card design 001</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>3public/assets/card/001/css/style.css">
    	<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>

<style>


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
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
    height: 169px;
    max-height: 169px;
    display: flex;
    /* padding: 20px; */
    box-sizing: border-box;
    position: relative;
}

.front_part .shape_1 {
    position: absolute;
    background: #0d1361;
    width: 420px;
    height: 212px;
    left: 50%;
    border-radius: 50%;
    transform: translate(-50%);
    top: -95px;
    border: 12px solid #fff;
    z-index: 9;
}

.front_part .shape_1::after {
   	content: "";
	position: absolute;
	background: #0469c2;
	width: 480px;
	height: 480px;
	left: 18%;
	border-radius: 50%;
	transform: translate(-50%);
	top: -295px;
	transform: rotate(2deg);
}

.front_part .shape_1::before {
 content: "";
	position: absolute;
	background: #007dfd;
	width: 480px;
	height: 480px;
	right: 18%;
	border-radius: 50%;
	transform: translate(-50%);
	top: -295px;
	transform: rotate(2deg);
	z-index: 99;
	opacity: 0.5;
	box-shadow: 0 0 34px #000;
}

.front_part .branding_part {
    display: flex;
    flex-direction: row;
    position: absolute;
    top: 20px;
    left: 20px;
    z-index: 9999999999999999;
}


.front_part .tagline_part {
 
    margin-top: -10px;
}

.front_part .tagline_part p {
	 margin-top: 5px;
    font-size: 10px;
    color: #fff;
}

.front_part .tagline {
    text-transform: capitalize;
    
    color: #fff;
}

.front_part .user_logo {
    display: inline-block;
    width: 85px;
    height: 85px;
    background: #fff;
    border-radius: 50%;
    border: 1px solid #fff;
    overflow: hidden;
    position: absolute;
    bottom: -16px;
    left: 50%;
    right: 25%;
    box-shadow: 0px 0px 8px #000;
    transform: translate(-50%, -50%);
    z-index: 9999;
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

.front_part .body_part {
    background: transparent;
    padding: 0px 30px;
    height: 125px;
    box-sizing: border-box;
    text-align: center;
    position: relative;
}

.front_part .shape_2 {
    position: absolute;
    width: 501px;
    height: 247px;
    background: #0472d1;
    left: 50%;
    transform: translate(-50%);
    border-radius: 50%;
    top: -195px;
}

.front_part .shape_2::after {
    content: "";
    position: absolute;
    width: 501px;
    height: 247px;
    background: #fff;
    left: 50%;
    transform: translate(-50%);
    border-radius: 50%;
    top: 171px;
}

.front_part .user_title {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    text-align: center;
    font-family: "Roboto", sans-serif;
}

.front_part .body_part .title {
    text-align: center;
    color: #000;
    font-size: 16px;
    line-height:1.4rem;
    margin-top:-12px;
    margin-bottom:5px;
    text-transform: uppercase;
    font-family: "Roboto", sans-serif;
    font-weight:bold;
}

.front_part .body_part .designation {
    margin-left:15px;
    text-align: justify;
    font-size: 12px;
    text-transform: capitalize;
    font-family: "Roboto", sans-serif;
}

.front_part .body_part h5 {
    text-align: center;
    font-size: 14px;
    font-family: "Roboto", sans-serif;
    margin-top: 20px;
    letter-spacing: 2px;
}

.front_part .footer_part {
    height: 30px;
    position: relative;
}

.front_part .footer_shape {
    display: block;
    width: 100%;
    height: 30px;
}

.front_part .bar_code {
    position: absolute;
    transform: translate(-50%, -50%);
    left: 50%;
    top: 12px;
    z-index: 9;
    width: 50px;
}

.front_part .ftr_shape {
    background: linear-gradient(to right, #0173df, #012d8f, #0173df);
    width: 441px;
    position: absolute;
    height: 200px;
    border-radius: 50%;
    left: 50%;
    transform: translate(-50%);
    top: 6px;
}

.front_part .ftr_shape::after {
    background: #fff;
    content: "";
    width: 330px;
    position: absolute;
    height: 202px;
    border-radius: 50%;
    left: 50%;
    transform: translate(-50%);
    bottom: -6px;
}

.back_part {
    background: #fff;
    width: 2.125in;
    height: 3.375in;
    margin: 10px;
    display: flex;
    flex-direction: column;
    overflow: hidden;

}

.header_part3 {
    background: #fff;
    text-align: center;
    height: 50px;
    max-height: 50px;
    position: relative;
    overflow: hidden;
}

.back_part .header_shape3 {
    background: linear-gradient(to right, #0173df, #012d8f, #0173df);
    width: 396px;
    position: absolute;
    height: 200px;
    border-radius: 50%;
    left: 50%;
    transform: translate(-50%);
    bottom: 3px;
}
.body_part .designation {
    text-align: justify;
    font-size: 11px;
    padding:1px;
    text-transform: capitalize;
    font-family: "Noto Sans Bengali";
}
.back_part .header_shape3::after {
    background: #fff;
    content: "";
    width: 346px;
    position: absolute;
    height: 202px;
    border-radius: 50%;
    left: 50%;
    transform: translate(-50%);
    top: -10px;
}

.back_part .bac_title {
    text-align: center;
    font-size: 12px;
    margin-top: 5px;
}

.back_part .terms_3 {
    margin-top: 2px;
    font-size: 9px;
	margin-bottom: 10px;
    text-align: center;
    color: #727272;
}

.back_part .body_part h5 {
    text-align: center;
    font-size: 14px;
    font-family: "Roboto", sans-serif;
    margin-top: 15px;
    letter-spacing: 2px;
}

.back_part .body_part {
    height: 311px;
    text-align: center;
}

.back_part .valid_till {
    font-size: 10px;
    text-align: center;
    margin-top: 5px;
    margin-bottom: 10px;
}



.back_part .signature {
    font-family: "Allura", cursive;
    margin-bottom: 10px;
    margin-top: 10px;
        font-size:12px;
}

.back_part .address {
    font-family: "Allura", cursive;
    margin: 10px;
    padding:10px;
    font-size:9px;
}

.back_part .closing_txt {
    text-align: center;
    color: #a1a1a1;
    position: relative;
     font-size:12px;
}

.back_part .closing_txt::after {
    content: "";
    height: 1px;
    background: #a1a1a1;
    left: -5px;
    right: -5px;
    top: -5px;
    position: absolute;
}

.back_part .footer_part {
    height: 105px;
    display: flex;
    flex-direction: row;
    padding: 20px 10px;
    box-sizing: border-box;
    position: relative;
    overflow: hidden;
}

.ftr_content {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    flex-direction: row;
    padding: 10px;
    box-sizing: border-box;
    z-index: 9;
}

/*.footer_left3{
	width: 50%;
}
.footer_right3{
	width: 50%;
}*/
/*.footer_left3 ul, .footer_right3 ul{
	list-style-type: none;
	margin: 0;
}
.footer_left3 ul li, .footer_right3 ul li{
	float: left;
	color: #fff;
	font-size: 8px;
	text-align: left;
	margin-bottom: 10px;
}*/
.footer_left3 {
    width: 100%;
  
}

.footer_left3 table {
    color: #fff;
    font-size: 8px;
    text-align: left;
    margin: 0 auto;
    margin-top: 1px;
}

.footer_left3 table td {
    padding-bottom: 1px;

}

.social_part {
    display: inline-block;
    height: 12px;
    width: 12px;
    background: #fff;
    border-radius: 50%;
    text-align: center;
    box-sizing: border-box;
    padding: 2px;
    margin-right: 1px;
}

.social_part img {
    width: 7px;
}

.ftr_txt {
    display: inline-block;
}

.ftr_shape3 {
    position: absolute;
    background: #0246ab;
    width: 400px;
    height: 200px;
    left: 50%;
    transform: translate(-50%);
    border-radius: 50%;
    top: 0;
    overflow: hidden;
}

.ftr_shape3::after {
    content: "";
    position: absolute;
    background: linear-gradient(to bottom, #0460bd, #033d9e, #0361bf);
    width: 400px;
    height: 400px;
    border-radius: 50%;
    top: 10px;
    left: 106px;
    opacity: 0.5;
    box-shadow: 0 0 20px #000;
}

.ftr_shape3::before {
    content: "";
    position: absolute;
    background: linear-gradient(#0560bb, #0460be);
    width: 400px;
    height: 400px;
    border-radius: 50%;
    top: 10px;
    right: 106px;
    opacity: 0.5;
    box-shadow: 0 0 20px #000;
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

.tagline_part {
    text-align: center;
    width: 100%;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
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
    'permanent_address_en' => 'Dhaka, Bangladesh',
    'department' => 'Science',
    'class' => '10',
    'class_roll' => '23',
    'sessions' => '2024-25',
    'blood_group' => 'A+',
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
						<div class="branding_part">
							
							<div class="tagline_part">
							<h4 class="tagline fit-text">Debidwar Sujat Ali Govt. College</h4>
							
							
							</div>
						</div>
						<span class="user_logo">
							<img src="<?php echo base_url()."public/static/assets/images/profile_design.png"; ?>" alt="" class="user_img">
						</span>


						<span class="shape_1"></span>
					</section>
					<section class="body_part">
						<span class="shape_2"></span>
						<div class="user_title">
							
							<h3 class="title">Md. Litan Sarkar</h3> 

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
                            
						
					
						</div> 
					</section> 
					<section class="footer_part"> 

						<img src="<?php echo base_url() ?>qrcodes/hasan_mia_0_qr.png" alt="" class="bar_code">  
						<span class="ftr_shape"></span>
					</section> 
				</div>

				<div class="back_part card-design-break">
					<section class="header_part3">
						<span class="header_shape3"></span>
					</section>
					<section class="body_part">

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
					</section>
					<section class="footer_part">

						<div class="ftr_content">
							<div class="footer_left3">
									<table align="center">
                
									<tr>
                                       
										<td>
											<span class=""><strong>Debidwar Sujat Ali Govt. College</strong></span>
										</td>
									
									</tr>
									<tr>
                                       
										<td>
											<span class="social_part"><img src="<?php echo base_url(); ?>public/assets/card/001/img/img_3_8.png" alt=""></span> <span class="ftr_txt">12/A Dhaka Kaligong</span>
										</td>
									
									</tr>
									<tr>
                                       
										<td>
											<span class="social_part"><img src="<?php echo base_url(); ?>public/assets/card/001/img/img_3_7.png" alt=""></span> <span class="ftr_txt">01829107469</span>
										</td>
									
									</tr>
                                    
									<!-- <tr>
                                       
										<td>
											<span class="social_part"><img src="<?php echo base_url(); ?>public/assets/card/001/img/img_3_6.png" alt=""></span> <span class="ftr_txt"><?php echo $pdt->org_email; ?></span>
										</td>
									
									</tr> -->
                                    
                                        <tr>
                                        
                                          <td>
                                            <span class="social_part"><img src="<?php echo base_url(); ?>public/assets/card/001/img/img_3_9.png" alt=""></span> <span class="ftr_txt">www.demoedu.bd.com</span>
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