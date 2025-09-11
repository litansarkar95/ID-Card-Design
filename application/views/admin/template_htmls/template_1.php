<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ID Card design 001</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/card/001/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>
<?php
// Sample dummy data - future use: fetch from DB
$dummyData = [
    'father_name_en' => 'Mr. Karim',
    'father_mobile_no' => '017XXXXXXXX',
    'mother_name_en' => 'Mrs. Rahima',
    'mobile_no' => '018XXXXXXXX',
    'permanent_address_en' => 'Dhaka, Bangladesh',
    'department' => 'Science',
    'class' => '10',
    'class_roll' => '23',
    'sessions' => '2024-25',
    'vblood_group' => 'A+',
    'photo' => '<img src="https://via.placeholder.com/80" alt="Photo">'
];
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
                <?php foreach (array_slice($fields, 4, 6) as $fieldKey): ?>
                    <h4 class="designation">
                        <?php echo clean_label($fieldKey); ?>:
                        <?php echo isset($dummyData[$fieldKey]) ? $dummyData[$fieldKey] : '[No Data]'; ?>
                    </h4>
                <?php endforeach; ?>
                <?php else: ?>
                    <em>⚠️ কোনো ফিল্ড সিলেক্ট করা হয়নি।</em>
                <?php endif; ?>

            <h4 class="designation" style="margin-top:10px;">Expiry Date : <?php echo date("d-m-Y"); ?></h4>
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
                                     <?php
                                        if($qr->org_email != NULL){
                                        ?>
									<tr>
                                       
										<td>
											<span class="social_part"><img src="<?php echo base_url(); ?>public/assets/card/001/img/img_3_6.png" alt=""></span> <span class="ftr_txt"><?php echo $qr->org_email; ?></span>
										</td>
									
									</tr>
                                    <?php
                                        }
                                    ?>
                                    <?php
                                        if($qr->website != NULL){
                                        ?>
									<tr>
									
										<td>
											<span class="social_part"><img src="<?php echo base_url(); ?>public/assets/card/001/img/img_3_9.png" alt=""></span> <span class="ftr_txt"><?php echo $qr->website; ?></span>
										</td>
									</tr>

                                    <?php
                                        }
                                    ?>
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