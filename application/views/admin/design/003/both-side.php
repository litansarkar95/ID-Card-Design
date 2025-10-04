<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart ID Card Design -003</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playwrite+NL+Guides&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
         <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/card/003/css/style.css">
</head>

     <?php
function clean_label($fieldKey) {
    $label = str_replace("_", " ", $fieldKey);
    $label = preg_replace('/\s(en|bn)$/i', '', $label);
    return ucwords($label);
}
?>
<body>
        <div class="agency-bottom-content d-print-none" id="agency_bottom">
				<!--Print-download content start here -->
				<div class="invo-buttons-wrap">
					<div class="invo-print-btn invo-btns">
						<a href="javascript:window.print()" class="print-btn">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<g clip-path="url(#clip0_10_61)">
									<path d="M17 17H19C19.5304 17 20.0391 16.7893 20.4142 16.4142C20.7893 16.0391 21 15.5304 21 15V11C21 10.4696 20.7893 9.96086 20.4142 9.58579C20.0391 9.21071 19.5304 9 19 9H5C4.46957 9 3.96086 9.21071 3.58579 9.58579C3.21071 9.96086 3 10.4696 3 11V15C3 15.5304 3.21071 16.0391 3.58579 16.4142C3.96086 16.7893 4.46957 17 5 17H7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M17 9V5C17 4.46957 16.7893 3.96086 16.4142 3.58579C16.0391 3.21071 15.5304 3 15 3H9C8.46957 3 7.96086 3.21071 7.58579 3.58579C7.21071 3.96086 7 4.46957 7 5V9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M7 15C7 14.4696 7.21071 13.9609 7.58579 13.5858C7.96086 13.2107 8.46957 13 9 13H15C15.5304 13 16.0391 13.2107 16.4142 13.5858C16.7893 13.9609 17 14.4696 17 15V19C17 19.5304 16.7893 20.0391 16.4142 20.4142C16.0391 20.7893 15.5304 21 15 21H9C8.46957 21 7.96086 20.7893 7.58579 20.4142C7.21071 20.0391 7 19.5304 7 19V15Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</g>
								<defs>
									<clipPath id="clip0_10_61">
										<rect width="24" height="24" fill="white"/>
									</clipPath>
								</defs>
							</svg>
							<span class="inter-700 medium-font">Print</span>
						</a>
					</div>
					<div class="invo-down-btn invo-btns">
						<a class="download-btn" id="generatePDF">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_5_246)">
								<path d="M4 17V19C4 19.5304 4.21071 20.0391 4.58579 20.4142C4.96086 20.7893 5.46957 21 6 21H18C18.5304 21 19.0391 20.7893 19.4142 20.4142C19.7893 20.0391 20 19.5304 20 19V17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 11L12 16L17 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 4V16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_5_246"><rect width="24" height="24" fill="white"/></clipPath></defs>
							</svg>
							<span class="inter-700 medium-font">Download</span>
						</a>
					</div>
				</div>
</div>
            
				<!--Print-download content end here -->
                <div class="print-section invoice-content-wrap" >
              
			
		<div class="main_container" id="data">	
           
           <?php
$i=1;
if(isset($allPdt)){
    foreach($allPdt  as $pdt){

       
            if (($i - 1) % 4 == 0) {
                echo '<div class="page">';
            }
        ?>
    
        



    <!--- fontend start-->
    <div class="id-card-holder card-design-break">
        <div class="id-card">
            <h2 style="font-size: <?php echo $header_title; ?>px;"><?php echo $pdt->org_name; ?></h2>
            <!-- <h2><?php echo $qr->website; ?></h2> -->
            <div class="photo">
                <img src="<?php echo base_url()."public/static/images/users/".$pdt->photo; ?>">
            </div>
            <h3><?php 	echo $pdt->name_en; ?>	</h3>
            <?php
            if( $this->input->post('staff_or_student') != ''){
            ?>
            <div class="box">
                <h5>  <?php
            echo $this->input->post('staff_or_student');
            ?></h5>
            </div>
            <?php
       }
            ?>

            <div class="content-test">
              <!--- Start ID CARD -->
                           <div class="record-box">
            <?php foreach (array_slice($fields, 0, 4) as $fieldKey): ?>
                <h4 class="designation">
                <?php echo clean_label($fieldKey); ?> : 
                    <?php echo $pdt->$fieldKey; ?>
                </h4>
            <?php endforeach; ?>
        </div>
                            <!--- End ID CARD -->

            </div>
            <!-- <div class="bottom-color">
                <p>www.labibait.com</p>
            </div> -->

        </div>

    </div>
    <!-- fontend end-->

    <!-- backend start-->
  
    <div class="id-card-holder-back card-design-break">
    <div id="download_section" >
        <div class="id-card">
       
            <div class="header-back">
                <h2>তথ্যাবলি </h2>
                <table>
                 

              
                <?php foreach (array_slice($fields, 4,9) as $fieldKey): ?>

                      <?php
                if($fieldKey == "terms_&_conditions"){
                    // echo '<h3 class="bac_title">'.$pdt->terms_conditions_name.'</h3>';
                    // echo '<p class="terms_3">'.$pdt->terms_conditions.'</p>';
                  }else if($fieldKey == "signature_name"){?>
                 <!-- <img src="<?php echo base_url()."public/static/images/organization/$pdt->signature_picture"?>" style="width:auto;height:50px;"> -->
                  <?php
                   
                    echo '<p class="closing_txt">'.$pdt->signature_name.'</p>';
                  }else if($fieldKey == "signature"){
                    ?>
                      <!-- <img src="<?php echo base_url()."public/static/images/users/$pdt->signature"?>" style="width:auto;height:50px;"> -->
                    <?php
                    echo '<p class="closing_txt">'.$pdt->name_en.'</p>';
                  }else{
                ?>
               <tr>
                        <td><?php echo clean_label($fieldKey); ?> : </td>
                        <td> <?php
                  if($fieldKey == "expiry_date"){
                    echo $valid_date;
                  }
                 ?>  <?php echo $pdt->$fieldKey; ?></td>
                    </tr>

                    <?php
                  }
                    ?>
           
            <?php endforeach; ?>
     
                  
                </table>
              
                <!-- <h2><?php echo $qr->org_name; ?></h2> -->
                <p class="address"><?php echo $qr->org_address ?> </p>
                <div class="">
                <p class="address">বিস্তারিত জানতে  QR Code স্ক্যান করুন</p>
                <img src="<?php echo $pdt->qr_code_url; ?>" alt="QR Code" class="bar_code">
                </div>
            </div>


        </div>
    </div>

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


	<!--Invoice Wrap End here -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jspdf.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/html2canvas.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</body>

</html>
<script>
  function capitalizeWords(text) {
    return text
      .toLowerCase() // সব ছোট অক্ষর করো
      .replace(/\b\w/g, function(char) {
        return char.toUpperCase(); // প্রতিটি শব্দের প্রথম অক্ষর বড়
      });
  }

  const elements = document.querySelectorAll('.title');
  elements.forEach(function(el) {
    el.textContent = capitalizeWords(el.textContent);
  });
</script>
