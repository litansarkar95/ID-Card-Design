<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>ID Six</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
	</head>
    <style>

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
	display: flex;
	flex-direction: column;
	overflow: hidden;
	background: #fff;
	border-radius: 15px;
}
.front_part .header_part {
	background: transparent;
	text-align: center;
	height: 130px;
	max-height: 130px;
	position: relative;
	width: 100%;
	display: flex;
	flex-direction: column;
	justify-content: center;
	box-sizing: border-box;
	background: linear-gradient(121deg, #c520ab, #373cb4);
	border-bottom: 8px solid #c6eae6;
}
.frnt_header_shape {
	position: absolute;
	left: 20px;
	right: 20px;
	bottom: -22px;
	top: 0;
	background: linear-gradient(121deg, #c520ab, #373cb4);
	border-bottom: 10px solid #c6eae6;
	border-radius: 15px;
	height: 130px;
}
.frnt_header_shape::after {
	content: "";
	position: absolute;
	/* left: 20px; */
	right: -129px;
	bottom: -142px;
	background: transparent;
	border-top: 10px solid #c6eae6;
	border-radius: 30px;
	height: 124px;
	width: 159px;
	border-left: 10px transparent;
	transform: rotate(21deg);
}
.frnt_header_shape::before {
	content: "";
	position: absolute;
	/* left: 20px; */
	left: -131px;
	bottom: -141px;
	background: transparent;
	border-top: 10px solid #c6eae6;
	border-radius: 30px;
	height: 124px;
	width: 159px;
	border-left: 10px transparent;
	transform: rotate(-20deg);
}
.frnt_header_shape_2{
	position: absolute;
	left: 0;
	right: 0;
}
.frnt_header_shape_2::after{
	position: absolute;
	content: "";
	border-radius: 20px;
	border-top: 10px solid #c6eae6;
	height: 80px;
	width: 100px;
	bottom: -149.65px;
	right: -57px;
}

.frnt_header_shape_2::before {
	position: absolute;
	content: "";
	border-radius: 20px;
	border-top: 10px solid #c6eae6;
	height: 80px;
	width: 100px;
	bottom: -149.65px;
	left: -57px;
	/* transform: rotate(-6deg); */
}
.frnt_header_shape_3 {
	position: absolute;
	border-bottom: 10px solid #c6eae6;
	height: 80px;
	width: 164px;
	border-radius: 14px;
	bottom: -17px;
	left: 15px;
}
.header_title{
	position: absolute;
	left: 0;
	right: 0;
	padding: 15px;
	top: 0;

}
.header_title h2{
	color: #fff;
	font-size: 15px;
	text-transform: uppercase;

}
.user_img_container{

}
.user_img_container img {
	height: 70px;
	width: 70px;
	border-radius: 50%;
	border: 5px solid #fff;
	background: #fff;
}
.user_img_container {
	position: absolute;
	display: flex;
	justify-content: center;
	align-items: center;
	left: 0;
	right: 0;
	bottom: -40px;
}
/* header content end*/


.front_part .body_part {
	height: 176px;
	background: transparent;
	padding: 45px 20px 10px;
	box-sizing: border-box;
	position: relative;
}
.front_title {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	padding: 15px;
}
.front_title h2 {
	color: #fff;
	font-size: 15px;
	text-transform: uppercase;
}
.front_part .body_part .title {
	text-align: center;
	color: #c42583;
	font-size: 16px;
	text-transform: uppercase;
	/*margin-top: 10px;*/
}
.name_degn{
	text-align: center;
	font-size: 15px;
	font-weight: bold;
    padding:3px;
	color: #25c457ff;
}
.front_part .body_part .title span{
	text-align: center;
	color: #000;
	font-size: 16px;
	text-transform: uppercase;
	
}
.front_part .body_part .user_info {
	border: none;
	font-size: 9px;
	margin: 0 auto;
	width: auto!important;
	
}

.back_part .user_info {
	border: none;
	font-size: 9px;
	
	width: auto!important;

}


.front_part .body_part .left_col{
	width: fit-content!important;
}

.front_part .body_part  .right_col{
	width: auto!important;
}
.frnt_ftr_part{
	
	background: linear-gradient(121deg, #c520ab, #373cb4);
	overflow: hidden;
	border-top: 4px solid #c6eae6;
}

.back_part{
	background: transparent;
	width: 2.125in;
	height: 3.375in;
	margin: 10px;
	position: relative;
	display: flex;
	flex-direction: column;
	overflow: hidden;
	background: #fff;
	border-radius: 15px;
	
}

.back_part .ftr_part {
	background: transparent;
	text-align: center;
	height: 130px;
	max-height: 130px;
	position: relative;
	width: 100%;
	display: flex;
	flex-direction: column;
	justify-content: center;
	box-sizing: border-box;
	background: linear-gradient(121deg, #c520ab, #373cb4);
	border-bottom: 8px solid #c6eae6;
	transform: rotate(180deg);
	position: absolute;
	bottom: 0;
}
.bck_ftr_title {
	position: absolute;
	left: 0;
	right: 0;
	padding: 15px;
	top: 0;
	transform: rotate(180deg);
}
.bck_ftr_title h2{
	color: #fff;
	font-size: 12px;
	text-transform: uppercase;
}
.bck_body_part{
	height: 164px;
	background: transparent;
	padding: 10px 20px 10px;
	box-sizing: border-box;
	position: relative;
}
.bck_qr_img_container {
	transform: rotate(180deg);
	position: absolute;
	left: 0;
	right: 0;
}
.bck_qr_img_container img {
    width: 70px;
    height:70px;
}
.user_img_logo {
	position: absolute;
	left: 20px;
	/* right: 10px; */
	justify-content: start;
	display: flex;
	top: 15px;
}
.user_img_logo img{
	width: 70px;
}

.bck_qr {
	position: absolute;
	top: 78px;
	left: 0;
	right: 0;

}
.bck_qr img{
	width: 80px;
	height: 80px;
	border: 2px solid #c42583;
}
.bck_info_container {
	position: absolute;
	z-index: 9999;
	left: 0;
	right: 0;
	padding: 0 2px;

}
.back_user_info {
	border: none;
	font-size: 10px;
	margin: 0 auto;
	width: auto!important;
	padding-top: 30px;
}

.back_user_info .left_col{
	width: fit-content!important;
	vertical-align: middle;
	padding-right: 7px;
}

.back_user_info .right_col{
	width: auto!important;
	vertical-align: top;
}
.circle{
	height: 9px;
	width: 9px;
	/*border-radius: 50%;*/
	background: #c42583;
	display: inline-block;
}
.bck_ftr_txt {
	position: absolute;
	bottom: 24px;
	text-align: center;
	left: 0;
	right: 0;
	bottom: 0;
}
.bck_ftr_txt p{
	font-size: 11px;
	font-weight: bold;

}
.bck_ftr_txt p span {
	display: inline-block;
	border-top: 1px solid #000;
}
/*===================*/



.printBtn{
	padding: 10px 30px;
	font-size: 20px;
	background: #a4c735;
	color: #fff;
	margin: 10px;
	border: none;
	border-radius: 10px;
    cursor: pointer;
}

@media print {
  .printBtn {
    display: none;
  }

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
	
			<div id="wrapper">
                
				<div class="front_part">
					<section class="header_part">
						<div class="frnt_header_shape"></div>
						<div class="frnt_header_shape_2"></div>
						<div class="frnt_header_shape_3">
							<div class="user_img_container">
								<img src="<?php echo base_url()."public/static/assets/images/litansarkar.jpg"; ?>" alt="">
							</div>
						</div>
						<div class="header_title">
							<h2 >Debidwar Sujat Ali Govt. College</h2>
                            <h6 style="color:#fff;">www.example.com</h6>
						</div>
					</section>
					<section class="body_part">
						<!-- <div class="user_img">
							<img src="imgs/img_1_2.png" alt="">
						</div> -->
						<h3 class="title"><span>Md. Litan Sarkar</span> </h3>
						<h2 class="name_degn">Student</h2>
						<table class="user_info">
                             <?php if (!empty($fields)) : ?>
                <?php foreach (array_slice($fields, 0, 4) as $fieldKey): ?>
                    <tr>
               <td class="left_col"> <p><?php echo clean_label($fieldKey); ?> : </p></td>
                   <td class="right_col"> <p><?php echo $pdt->$fieldKey; ?></p></td>
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                    <em>⚠️ কোনো ফিল্ড সিলেক্ট করা হয়নি।</em>
                <?php endif; ?>

                            
						</table>
						
					</section>
					<div class="frnt_ftr_part"></div>
					
				</div>




				<div class="back_part">
					<section class="ftr_part">
						<div class="frnt_header_shape"></div>
						<div class="frnt_header_shape_2"></div>
						<div class="frnt_header_shape_3">
							<div class="bck_qr_img_container">
								<img src="<?php echo base_url() ?>qrcodes/hasan_mia_0_qr.png" alt="">
							</div>
						</div>
						<div class="bck_ftr_title">
							<h2><?php echo $pdt->org_name; ?></h2>
                              <h6 style="color:#fff;"><?php echo $pdt->website; ?></h6>
						</div>
					</section>
					<section class="bck_body_part">
						<!-- <div class="user_img">
							<img src="imgs/img_1_2.png" alt="">
						</div> -->
						<div class="bck_info_container">
							<table class="user_info">
                                <?php if (!empty($fields)) : ?>
                <?php foreach (array_slice($fields, 4, 9) as $fieldKey): ?>
                	<tr>
               <td class="left_col"> <p><?php echo clean_label($fieldKey); ?> : </p></td>
                   <td class="right_col"> <p>
                   <!-- date --> 
                 <?php
                  if($fieldKey == "expiry_date"){
                    echo $valid_date;
                  }
                 ?> 
                   <?php echo  $dummyData[$fieldKey]; ?></p></td>
                </tr>

            <?php endforeach; ?>
                <?php else: ?>
                    <em>⚠️ কোনো ফিল্ড সিলেক্ট করা হয়নি।</em>
                <?php endif; ?>
							
						</table>
							
						</div>
						<!-- <div class="bck_ftr_txt">
								<p><span>Your Sincerely</span></p>
							</div> -->
						<div class="ftr_shape_1"></div>
						<div class="ftr_shape_2"></div>
					</section>
				</div>

              
			</div>
			
		</div>
		
		<script type="text/javascript">
			

			function printPage(){
				var body = document.getElementById("bodyPart").innerHTML;
				var data = document.getElementById("data").innerHTML;
				document.getElementById("bodyPart").innerHTML = data;
				window.print();
				document.getElementById("bodyPart").innerHTML = body;
				// alert(data);
			}
		</script>
	</body>
	
</html>