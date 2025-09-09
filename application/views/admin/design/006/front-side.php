<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Smart ID Card Design </title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/card/006/css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
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

       
            if (($i - 1) % 9 == 0) {
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
						<!-- <img src="<?php echo base_url()."public/static/images/organization/".$qr->picture; ?>" alt="" class="brand_logo"> -->
						<h4 class="tagline"><?php echo $qr->org_name; ?></h4>
						<span class="user_logo">
							<img src="<?php echo base_url()."public/static/images/users/".$qr->photo; ?>" alt="" class="user_img">
						</span>
						<h3 class="title">
						<?php 	if($name_en == 1){ echo $qr->name_en; }else if($name_bn == 1){
                                    echo $qr->name_bn;
							} ?>	
						</h3>
						<div class="employee-info">
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

							 <!--- Start Blood Group -->
                           <?php if($mobile_no == 1){ 
                                   
							 ?>
							<h4 class="designation">Mobile No: <?php echo $qr->mobile_no; ?></h4> 
                            <?php
                              }
                            ?>
                            <!--- End Blood Group -->
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
	
</body>

</html>