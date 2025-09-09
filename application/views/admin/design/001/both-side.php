<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ID Card design 001</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/card/001/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>
  
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
							
							<div class="tagline_part">
							<h4 class="tagline fit-text"><?php echo $qr->org_name; ?></h4>
							<?php
							if($qr->website != NULL){
								?>
								<p class="fit-text"><?php echo $qr->website; ?></p>

								<?php
							}
							?>
							
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
							
							<h3 class="title">
								
							<?php 	if($name_en == 1){ echo $qr->name_en; }else if($name_bn == 1){
                                    echo $qr->name_bn;
							} ?>
						
						</h3> 
                        <!--- Start ID CARD -->
                           <?php if($employee_id == 1){ 
                                   
							 ?>
							<h4 class="designation">Employee ID: <?php echo $qr->employee_id; ?></h4> 
                            <?php
                              }
                            ?>
                            <!--- End ID CARD -->

                             <!--- Start Index No-->
                           <?php if($index_no == 1){ 
                                   
							 ?>
							<h4 class="designation">Index No : <?php echo $qr->index_no; ?></h4> 
                            <?php
                              }
                            ?>
                            <!--- End  Index No-->

                            <!--- Start Index No-->
                           <?php if($designation == 1){ 
                                   
							 ?>
							<h4 class="designation">Designation : <?php echo $qr->designation; ?></h4> 
                            <?php
                              }
                            ?>
                            <!--- End  Index No-->

                            <!--- Start Class Roll -->
                           <?php if($class_roll == 1){ 
                                   
							 ?>
							<h4 class="designation">Class Roll: <?php echo $qr->class_roll; ?></h4> 
                            <?php
                              }
                            ?>
                            <!--- End Class Roll -->
                             <!--- Start Class  -->
                           <?php if($class == 1){ 
                                   
							 ?>
							<h4 class="designation">Class : <?php echo $qr->class; ?></h4> 
                            <?php
                              }
                            ?>
                            <!--- End Class  -->

                             <!--- Start Section -->
                           <?php if($sections == 1){ 
                                   
							 ?>
							<h4 class="designation">Section: <?php echo $qr->sections; ?></h4> 
                            <?php
                              }
                            ?>
                            <!--- End Section -->

                             <!--- Start sessions  -->
                           <?php if($sessions == 1){ 
                                   
							 ?>
							<h4 class="designation">Session: <?php echo $qr->sessions; ?></h4> 
                            <?php
                              }
                            ?>
                            <!--- End sessions  -->

                             <!--- Start Blood Group -->
                           <?php if($blood_group == 1){ 
                                   
							 ?>
							<h4 class="designation">Blood Group: <?php echo $qr->blood_group; ?></h4> 
                            <?php
                              }
                            ?>
                            <!--- End Blood Group -->

                             <!--- Start Class Roll -->
                           <!-- <?php if($class_roll == 1){ 
                                   
							 ?>
							<h4 class="designation">Class Roll: <?php echo $qr->class_roll; ?></h4> 
                            <?php
                              }
                            ?> -->
                            <!--- End Class Roll -->
						
					
						</div> 
					</section> 
					<section class="footer_part"> 

						<img src="<?php echo $qr->qr_code_url; ?>" alt="" class="bar_code">  
						<span class="ftr_shape"></span>
					</section> 
				</div>

				<div class="back_part card-design-break">
					<section class="header_part3">
						<span class="header_shape3"></span>
					</section>
					<section class="body_part">
                            <!--- Start Father's Name -->
                           <?php if($father_name_en == 1){ 
                                   
							 ?>
							<h4 class="designation">Father's Name : <?php echo $qr->father_name_en; ?></h4> 
                            <?php
                              }
                            ?>
                            <!--- End Father's Name -->
                             <!--- Start Father Mobile No -->
                           <?php if($father_mobile_no == 1){ 
                                   
							 ?>
							<h4 class="designation">Father Mobile No : <?php echo $qr->father_mobile_no; ?></h4> 
                            <?php
                              }
                            ?>
                            <!--- End Father Mobile No -->

                             <!--- Start Mother Name -->
                           <?php if($mother_name_en == 1){ 
                                   
							 ?>
							<h4 class="designation">Mother Name : <?php echo $qr->mother_name_en; ?></h4> 
                            <?php
                              }
                            ?>
                            <!--- End Mother Name -->

                            <?php
                            if($qr->terms_conditions_name != NULL ){
                            ?>
                            
						<h3 class="bac_title"><?php echo $qr->terms_conditions_name; ?></h3>
						<p class="terms_3"><?php echo $qr->terms_conditions; ?></p>
                        <?php
                            }
                        ?>


                          <!--- Start Expiry Date -->
                           <?php if($is_valid == 1){ 
                                   
							 ?>
							<h4 class="designation" style="margin-top:10px;">Expiry Date : <?php echo $valid_date; ?></h4> 
                            <?php
                              }
                            ?>
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