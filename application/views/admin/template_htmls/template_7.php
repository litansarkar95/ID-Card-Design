<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Smart ID Card</title>
	    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/card/007/css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
</head>
<style>
*{
	margin: 0;
	padding: 0;
	overflow: 0;
}
body{
	background: transparent;
	font-family: arial;
}
.main_container{
  width: 8.27in;
    max-height: 11.69in;
    display: flex;
    flex-wrap: wrap;
}
#wrapper{
   width: 8.27in;
    max-height: 11.69in;
    display: flex;
    flex-wrap: wrap;
}

.front_part{
	background: transparent;
	width: 2.125in;
	height: 3.375in;
	
	border-radius: 15px;
	display: flex;
	flex-direction: column;
	overflow: hidden;
}
.front_part .header_part{
	background: #1e2736;
	border-radius: 15px;
	text-align: center;
	height: 204px;
	max-height: 204px;
	position: relative;
	width: 100%;
}

.front_part .header_shape1{
	position: absolute;
	background: #1e2736;
	left: 50%;
	right: 0;
	z-index: 1;
	height: 113px;
	width: 375px;
	border-radius: 50%;
	transform: translate(-50%, 94%);
	overflow: hidden;
	top: -81px;
}
.front_part .left_leaf {
	background: #a4c735;
	position: absolute;
	height: 59px;
	width: 163px;
	border-radius: 50%;
	transform: rotate(16deg);
	left: 21px;
	bottom: -26px;
}
.front_part .left_leaf::after {
	content: "";
	position: absolute;
	height: 59px;
	width: 186px;
	border-top: 4px solid #1e2736;
	left: -42px;
	border-radius: 50%;
	bottom: -10px;
	transform: rotate(-10deg);
}
.front_part .right_leaf {
	background: #a4c735;
	position: absolute;
	height: 59px;
	width: 163px;
	border-radius: 50%;
	transform: rotate(-16deg);
	right: 21px;
	bottom: -26px;
}
.front_part .right_leaf::after {
	content: "";
	position: absolute;
	height: 59px;
	width: 186px;
	border-top: 4px solid #1e2736;
	right: -42px;
	border-radius: 50%;
	bottom: -10px;
	transform: rotate(10deg);
}
.front_part .header_content{
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	z-index: 99;
	right: 0;
}
.front_part .header_content h2{
	color: #fff;
	text-align: center;
	font-size: 13px;
	text-transform: uppercase;
	margin-top: 15px;
}
.front_part .header_content .slogan{
	color: #a4c735;
	text-align: center;
	font-size: 9px;
	font-weight: bold;
}

.front_part .header_content .user_logo {
	display: inline-block;
	width: 75px;
	height: 75px;
	background: #fff;
	border-radius: 50%;
	border: 5px solid #a4c735;
	margin-top: 10px;
	overflow: hidden;

}
.front_part .header_content .user_logo img{
	width: 100%;
}

.front_part .body_part {
	
	background: transparent;
	
	box-sizing: border-box;
}
.front_part .body_part .title {
  
	color: #000;
	font-size: 1rem;
}
.front_part .body_part .designation {
	text-align: center;
	color: #a4c735;
	font-size: 11px;
}
.front_part .body_part .user_info {
	border: none;
	font-size: 11px;
	margin: 0 auto;
	width: auto!important;
	
}
.pt10{

}

.front_part .body_part .left_col{
	width: auto!important;
}

.front_part .body_part  .right_col{
	width: auto!important;
}


.front_part .footer_part{
	height: 30px;
	position: relative;
}

.front_part .footer_shape1{
	position: absolute;
	background: #1e2736;
	left: 50%;
	right: 0;
	z-index: 1;
	height: 113px;
	width: 375px;
	border-radius: 50%;
	transform: translate(-50%, 94%);
	overflow: hidden;
	bottom: 20px;
}

/* Style the print button */



.front_part .right_leaf_ftr {
	background: #a4c735;
	position: absolute;
	height: 59px;
	width: 163px;
	border-radius: 50%;
	transform: rotate(-170deg);
	right: 21px;
	top: -32px;
}
.front_part .right_leaf_ftr::after {
	content: "";
	position: absolute;
	height: 59px;
	width: 186px;
	border-top: 4px solid #1e2736;
	left: -42px;
	border-radius: 50%;
	bottom: -10px;
	transform: rotate(-10deg);
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
}
.front_part .left_leaf_ftr {
	background: #a4c735;
	position: absolute;
	height: 59px;
	width: 163px;
	border-radius: 50%;
	transform: rotate(170deg);
	left: 21px;
	top: -32px;
}
.front_part .left_leaf_ftr::after {
	content: "";
	position: absolute;
	height: 59px;
	width: 186px;
	border-top: 4px solid #1e2736;
	right: -42px;
	border-radius: 50%;
	bottom: -10px;
	transform: rotate(10deg);
}




.back_part{
	background: transparent;
	width: 2.125in;
	height: 3.375in;
	margin: 10px;
	border-radius: 15px;
	display: flex;
	flex-direction: column;
	overflow: hidden;
}
.back_part .header_part{
	background: #1e2736;
	border-radius: 15px;
	text-align: center;
	height: 204px;
	max-height: 204px;
	position: relative;
	width: 100%;
}

.back_part .header_shape1{
	position: absolute;
	background: #1e2736;
	left: 50%;
	right: 0;
	z-index: 1;
	height: 113px;
	width: 375px;
	border-radius: 50%;
	transform: translate(-50%, 94%);
	overflow: hidden;
	top: -81px;
}
.back_part .left_leaf {
	background: #a4c735;
	position: absolute;
	height: 59px;
	width: 163px;
	border-radius: 50%;
	transform: rotate(16deg);
	left: 21px;
	bottom: -26px;
}
.back_part .left_leaf::after {
	content: "";
	position: absolute;
	height: 59px;
	width: 186px;
	border-top: 4px solid #1e2736;
	left: -42px;
	border-radius: 50%;
	bottom: -10px;
	transform: rotate(-10deg);
}
.back_part .right_leaf {
	background: #a4c735;
	position: absolute;
	height: 59px;
	width: 163px;
	border-radius: 50%;
	transform: rotate(-16deg);
	right: 21px;
	bottom: -26px;
}
.back_part .right_leaf::after {
	content: "";
	position: absolute;
	height: 59px;
	width: 186px;
	border-top: 4px solid #1e2736;
	right: -42px;
	border-radius: 50%;
	bottom: -10px;
	transform: rotate(10deg);
}

.back_part .header_content{
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	z-index: 99;
	right: 0;
	display: flex;
	flex-direction: column;
}
.back_part .header_content h2 {
	color: #fff;
	text-align: center;
	font-size: 13px;
	text-transform: uppercase;
	margin-top: 15px;
}
.back_part .header_content .terms_txt {
	color: #fff;
	font-size: 8px;
	
}
.back_part .header_content .user_info {
	border: none;
	font-size: 10px;
	margin: 0 auto;
	width: auto!important;
	color: #fff;
}
.back_part .body_part {
	text-align: center;
}
.back_part .body_part {
	height: 246px;
	background: transparent;
	box-sizing: border-box;
}
.back_part .signatire {
	font-family: "Allura", cursive;
	font-size: 14px;
	text-align: center;
	position: relative;
}
.back_part .signatire::after {
	content: "";
	position: absolute;
	background: #a4c735;
	height: 2px;
	left: 26%;
	right: 26%;
	bottom: 0px;
}
.back_part .signatire_name {
	font-size: 11px;
	margin-top: 5px;
	font-weight: bold;
}
.back_part .signatire_name_desig {
	font-size: 12px;
	margin-bottom: 10px;
}
.back_part .barcode {
	width: 70px;
}
.back_part .company_name {
	font-size: 10px;
	text-transform: uppercase;
}
.back_part .slogan {
	color: #a4c735;
	text-align: center;
	font-size: 8px;
	font-weight: bold;
}


.back_part .footer_part{
	height: 30px;
	position: relative;
}

.back_part .footer_shape1{
	position: absolute;
	background: #1e2736;
	left: 50%;
	right: 0;
	z-index: 1;
	height: 113px;
	width: 375px;
	border-radius: 50%;
	transform: translate(-50%, 94%);
	overflow: hidden;
	bottom: 20px;
}
.back_part .right_leaf_ftr {
	background: #a4c735;
	position: absolute;
	height: 59px;
	width: 163px;
	border-radius: 50%;
	transform: rotate(-170deg);
	right: 21px;
	top: -32px;
}
.back_part .right_leaf_ftr::after {
	content: "";
	position: absolute;
	height: 59px;
	width: 186px;
	border-top: 4px solid #1e2736;
	left: -42px;
	border-radius: 50%;
	bottom: -10px;
	transform: rotate(-10deg);
}

.back_part .left_leaf_ftr {
	background: #a4c735;
	position: absolute;
	height: 59px;
	width: 163px;
	border-radius: 50%;
	transform: rotate(170deg);
	left: 21px;
	top: -32px;
}
.back_part .left_leaf_ftr::after {
	content: "";
	position: absolute;
	height: 59px;
	width: 186px;
	border-top: 4px solid #1e2736;
	right: -42px;
	border-radius: 50%;
	bottom: -10px;
	transform: rotate(10deg);
}

	</style>

<body id="bodyPart">
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
function clean_label($fieldKey) {
    $label = str_replace("_", " ", $fieldKey);
    $label = preg_replace('/\s(en|bn)$/i', '', $label);
    return ucwords($label);
}
?>
<?php
$terms_conditions_name = "ID Card ব্যবহারের নিয়মাবলী";
$terms_conditions = "This card must be carried at all times If found, please return to Institution";
$signature_name = "Md. Litan Sarkar";
?>

	<div class="main_container" id="data">
		<div id="">
	
		
			<div class="front_part card-design-break">
				<section class="header_part">
					<div class="header_content">
						<h2 style="font-size: <?php echo $header_title; ?>px;">Debidwar Sujat Ali Govt. College</h2>
						<!-- <p class="slogan">SLOGAN HERE</p> -->
						<span class="user_logo">
							<img src="<?php echo base_url()."public/static/assets/images/profile_design.png"; ?>" alt="" class="user_img">
						</span>
					</div>
					<span class="header_shape1">
						<span class="left_leaf"></span>
						<span class="right_leaf"></span>
					</span>
				</section>
				<section class="body_part">
					<h3 class="title">Md Litan Sarkar</h3>
					 <!--- Start Index No-->
                           <?php if($designation == 1){ 
                                   
							 ?>
							<h4 class="designation">Designation : <?php echo $qr->designation; ?></h4> 
                            <?php
                              }
                            ?>
                            <!--- End  Index No-->

							
					<table class="user_info">
						  <?php foreach (array_slice($fields, 0, 5) as $fieldKey): ?>
							<tr>
							<td class="left_col">
								<?php echo clean_label($fieldKey); ?>
							</td>
							<td class="right_col">
						  <?php echo isset($dummyData[$fieldKey]) ? $dummyData[$fieldKey] : '[No Data]'; ?>
							</td>
						</tr>
          
         
                    
            
            <?php endforeach; ?>
						
                       
					</table>
				</section>
				<section class="footer_part">
					<span class="footer_shape1">
						<span class="right_leaf_ftr"></span>
						<span class="left_leaf_ftr"></span>
					</span>
				</section>
			</div>




			<div class="back_part card-design-break">
				<section class="header_part">
					<div class="header_content">
						  <?php foreach (array_slice($fields, 5,3) as $fieldKey): ?>
							 <?php
							if($fieldKey == "terms_&_conditions"){
								echo '<h2>'.$terms_conditions_name.'</h2>';
								echo '<p class="terms_txt">'.$terms_conditions.'</p>';
							}else if($fieldKey == "signature_name"){
								echo '<h3 class="signature">'.$name_en.'</h3>';
								echo '<p class="closing_txt">'.$name_en.'</p>';
							}else{
							?>
						

							   
					
						<table class="user_info">
							 <!--- Start Father's Name -->
                         
							<tr>
								<td class="left_col">
									<?php echo clean_label($fieldKey); ?> 
								</td>
								<td class="right_col">
									:   <?php
                  if($fieldKey == "expiry_date"){
                    echo $valid_date;
                  }
                 ?>
                     <?php echo isset($dummyData[$fieldKey]) ? $dummyData[$fieldKey] : '[No Data]'; ?>
								</td>
							</tr>
							

						
						</table>
							<?php
							}
							?>
						<?php endforeach; ?>
					</div>
					<span class="header_shape1">
						<span class="left_leaf"></span>
						<span class="right_leaf"></span>
					</span>
				</section>
				<section class="body_part">
					<?php foreach (array_slice($fields, 8,1) as $fieldKey): ?>
						<?php
                  if($fieldKey == "signature_name"){
                 
                  
                 ?>
				 <?php
				 if($signature_picture != NULL){
				 ?>
					<p class="signatire"><?php echo base_url()."public/static/images/signature1.png"; ?></p>
					<?php
				 }else{
					?>
           <p class="signatire">Md. Litan Sarkar</p>
				 <?php
				 }
				?>
					<span class="line"></span>
					<p class="signatire_name">Md. Litan Sarkar</p>

							<?php
				  }
							?>
							<?php endforeach; ?>
					<!-- <p class="signatire_name_desig">Manager</p> -->
					<img src="<?php echo base_url() ?>qrcodes/hasan_mia_0_qr.png" alt="" class="barcode">
					<h2 class="company_name">Debidwar Sujat Ali Govt. College</h2>
					<p class="slogan">www.eductaion.bd.com</p>
				</section>
				<section class="footer_part">
					<span class="footer_shape1">
						<span class="right_leaf_ftr"></span>
						<span class="left_leaf_ftr"></span>
					</span>
				</section>
			</div>

			
		</div>

	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/FitText.js/1.2.0/jquery.fittext.min.js"></script>
<script>
  $(".fit-text").fitText(1.2, {
    minFontSize: '14px',
    maxFontSize: '32px'
  });
</script>
</body>

</html>