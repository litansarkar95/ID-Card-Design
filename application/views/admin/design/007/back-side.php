<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Smart ID Card</title>
	    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/card/007/css/style.css">
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
	margin: 10px;
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
	width: 65px;
	height: 65px;
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
	height: 246px;
	background: transparent;
	padding: 20px;
	box-sizing: border-box;
}
.front_part .body_part .title {
	text-align: center;
	color: #000;
	font-size: 20px;
}
.front_part .body_part .designation {
	text-align: center;
	color: #a4c735;
	font-size: 11px;
}
.front_part .body_part .user_info {
	border: none;
	font-size: 10px;
	margin: 0 auto;
	width: auto!important;
	padding-top: 10px;
}
.pt10{
	padding-top: 5px;
}

.front_part .body_part .left_col{
	width: 35px!important;
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
	padding: 10px;
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
	padding: 20px;
	box-sizing: border-box;
}
.back_part .signatire {
	font-family: "Allura", cursive;
	font-size: 24px;
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
	font-size: 17px;
	margin-top: 5px;
	font-weight: bold;
}
.back_part .signatire_name_desig {
	font-size: 12px;
	margin-bottom: 10px;
}
.back_part .barcode {
	width: 30px;
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
.printBtn{
	padding: 10px 30px;
	font-size: 20px;
	background: #a4c735;
	color: #fff;
	margin: 10px;
	border: none;
	border-radius: 10px;
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

       
            if (($i - 1) % 9 == 0) {
                echo '<div class="page">';
            }
        ?>
		
		



			<div class="back_part card-design-break">
				<section class="header_part">
					<div class="header_content">
						<?php
                            if($qr->terms_conditions_name != NULL ){
                            ?>
						<h2><?php echo $qr->terms_conditions_name; ?></h2>
						<p class="terms_txt"><?php echo $qr->terms_conditions; ?></p>
							 <?php
                            }
                        ?>
						<table class="user_info">
							 <!--- Start Father's Name -->
                           <?php if($father_name_en == 1){ 
                                   
							 ?>
							<tr>
								<td class="left_col">
									<p >Father Name</p>
								</td>
								<td class="right_col">
									<p>: <?php echo $qr->father_name_en; ?></p>
								</td>
							</tr>
							 <?php
                            }
                        ?>

						<!--- Start Father's Name -->
                           <?php if($father_mobile_no == 1){ 
                                   
							 ?>
							<tr>
								<td class="left_col">
									<p >Father Mobile No </p>
								</td>
								<td class="right_col">
									<p>: <?php echo $qr->father_mobile_no; ?></p>
								</td>
							</tr>
							 <?php
                            }
                        ?>
						<!--- Start Expiry Date -->
                           <?php if($is_valid == 1){ 
                                   
							 ?>
							<tr>
								<td>
									<p>Expire</p>
								</td>
								<td>
									<p>: <?php echo $valid_date; ?></p>
								</td>
							</tr>
								 <?php
                            }
                        ?>
						</table>
					</div>
					<span class="header_shape1">
						<span class="left_leaf"></span>
						<span class="right_leaf"></span>
					</span>
				</section>
				<section class="body_part">
					 <?php
                            if($qr->signature_name != NULL){
                            ?>
					<p class="signatire"><?php echo base_url()."public/static/images/users/".$qr->signature_picture; ?></p>
					<span class="line"></span>
					<p class="signatire_name"><?php 	if($name_en == 1){ echo $qr->name_en; }else if($name_bn == 1){
                                    echo $qr->name_bn;
							} ?></p>
						 <?php
                            }
                        ?>
					<!-- <p class="signatire_name_desig">Manager</p> -->
					<img src="<?php echo $qr->qr_code_url; ?>" alt="" class="barcode">
					<h2 class="company_name"><?php echo $qr->org_name; ?></h2>
					<p class="slogan"><?php echo $qr->website; ?></p>
				</section>
				<section class="footer_part">
					<span class="footer_shape1">
						<span class="right_leaf_ftr"></span>
						<span class="left_leaf_ftr"></span>
					</span>
				</section>
			</div>

			          <?php
 if ($i % 9 == 0 || $i == 18) {
                echo '</div>'; // close .page
            }
            $i++;
        }

    }
    ?>
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