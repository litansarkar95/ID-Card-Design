<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ID Card design 001</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public2/assets/card/001/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

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
    font-family: 'Noto Sans Bengali', 'Roboto', sans-serif;
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
    top: -283px;
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
    top: -281px;
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
    text-transform: uppercase;
    font-family: "Roboto", sans-serif;
    font-weight:bold;
}

.front_part .body_part .designation {
  margin-left:15px;
    text-align: justify;
    color: #000;
    font-size: 12px;
    line-height:1.2rem;
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
	  line-height: 1.2rem;
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
    font-size: 15px;
    margin-top: 15px;
}

.back_part .terms_3 {
    margin-top: 10px;
    font-size: 9px;
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
    margin-top: 20px;
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
function clean_label($fieldKey) {
    $label = str_replace("_", " ", $fieldKey);
    $label = preg_replace('/\s(en|bn)$/i', '', $label);
    return ucwords($label);
}
?>
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
			foreach($allPdt  as $pdt){

       
            if (($i - 1) % 4 == 0) {
                echo '<div class="page">';
            }
        ?>
			<div class="front_part card-design-break">
					<section class="header_part">
						<div class="branding_part">
							
							<div class="tagline_part">
							<h4 class="tagline fit-text" style="font-size: <?php echo $header_title; ?>px;"><?php echo $pdt->org_name; ?></h4>
							<?php
							if($pdt->website != NULL){
								?>
								<!-- <p class="fit-text"><?php echo $pdt->website; ?></p> -->

								<?php
							}
							?>
							
							</div>
						</div>
						<span class="user_logo">
							<img src="<?php echo base_url()."public/static/images/users/".$pdt->photo; ?>" alt="" class="user_img">
						</span>

 
						<span class="shape_1"></span>
					</section>
					<section class="body_part">
						<span class="shape_2"></span>
						<div class="user_title">
							
							<h3 class="title">
								
							<?php 	 echo $pdt->name_en;		?>
						
						</h3> 
    



  


        <div class="record-box">
            <?php foreach (array_slice($fields, 0, 4) as $fieldKey): ?>
                <h4 class="designation">
                <?php echo clean_label($fieldKey); ?>:
                    <?php echo $pdt->$fieldKey; ?>
                </h4>
            <?php endforeach; ?>
        </div>
      


  

                
                        
						
					
						</div> 
					</section> 
					<section class="footer_part"> 

						<img src="<?php echo $pdt->qr_code_url; ?>" alt="" class="bar_code">  
						<span class="ftr_shape"></span>
					</section> 
				</div>

				<div class="back_part card-design-break">
					<section class="header_part3">
						<span class="header_shape3"></span>
					</section>
					<section class="body_part">
                           

                           <div class="record-box">
            <?php foreach (array_slice($fields, 4,6) as $fieldKey): ?>
                <h4 class="designation">
                <?php echo clean_label($fieldKey); ?> :
                <!-- date --> 
                 <?php
                  if($fieldKey == "expiry_date"){
                    echo $valid_date;
                  }
                 ?>
                    <?php echo $pdt->$fieldKey; ?>
                </h4>
            <?php endforeach; ?>
        </div>
      
					</section>
					<section class="footer_part">

						<div class="ftr_content">
							<div class="footer_left3">
								<table align="center">
                   <?php
                                        if($pdt->org_name != NULL){
                                        ?>
									<tr>
                                       
										<td>
											<span class=""><strong><?php echo $pdt->org_name; ?></strong></span>
										</td>
									
									</tr>
                                    <?php
                                        }
                                    ?>
                   <?php
                                        if($pdt->org_address != NULL){
                                        ?>
									<tr>
                                       
										<td>
											<span class="social_part"><img src="<?php echo base_url(); ?>public/assets/card/001/img/img_3_8.png" alt=""></span> <span class="ftr_txt"><?php echo $pdt->org_address; ?></span>
										</td>
									
									</tr>
                                    <?php
                                        }
                                    ?>
                   <?php
                                        if($pdt->org_mobile_no != NULL){
                                        ?>
									<tr>
                                       
										<td>
											<span class="social_part"><img src="<?php echo base_url(); ?>public/assets/card/001/img/img_3_7.png" alt=""></span> <span class="ftr_txt"><?php echo $pdt->org_mobile_no; ?></span>
										</td>
									
									</tr>
                                    <?php
                                        }
                                    ?>
                                     <?php
                                        if($pdt->org_email != NULL){
                                        ?>
									<!-- <tr>
                                       
										<td>
											<span class="social_part"><img src="<?php echo base_url(); ?>public/assets/card/001/img/img_3_6.png" alt=""></span> <span class="ftr_txt"><?php echo $pdt->org_email; ?></span>
										</td>
									
									</tr> -->
                                    <?php
                                        }
                                    ?>
                                    <?php
                                        if($pdt->website != NULL){
                                        ?>
                                        <tr>
                                        
                                          <td>
                                            <span class="social_part"><img src="<?php echo base_url(); ?>public/assets/card/001/img/img_3_9.png" alt=""></span> <span class="ftr_txt"><?php echo $pdt->website; ?></span>
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